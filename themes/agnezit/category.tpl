{*
* 2007-2015 PrestaShop
*
* NOTICE OF LICENSE
*
* This source file is subject to the Academic Free License (AFL 3.0)
* that is bundled with this package in the file LICENSE.txt.
* It is also available through the world-wide-web at this URL:
* http://opensource.org/licenses/afl-3.0.php
* If you did not receive a copy of the license and are unable to
* obtain it through the world-wide-web, please send an email
* to license@prestashop.com so we can send you a copy immediately.
*
* DISCLAIMER
*
* Do not edit or add to this file if you wish to upgrade PrestaShop to newer
* versions in the future. If you wish to customize PrestaShop for your
* needs please refer to http://www.prestashop.com for more information.
*
*  @author PrestaShop SA <contact@prestashop.com>
*  @copyright  2007-2015 PrestaShop SA
*  @license    http://opensource.org/licenses/afl-3.0.php  Academic Free License (AFL 3.0)
*  International Registered Trademark & Property of PrestaShop SA
*}
{include file="$tpl_dir./errors.tpl"}
{if isset($category)}
	{if $category->id AND $category->active}
    	{if $scenes || $category->description || $category->id_image}
			<div class="content_scene_cat">
            	{if $scenes}
                 	<div class="content_scene">
                        <!-- Scenes -->
                        {include file="$tpl_dir./scenes.tpl" scenes=$scenes}
                        {if $category->description}
                            <div class="cat_desc rte">
                                <div>{$category->description}</div>
                            </div>
                        {/if}
                    </div>
				{else}
                    <!-- Category image -->
                    <div class="content_scene_cat_bg">
                        {if $category->description}
                            <div class="cat_desc">
                                <h3 class="category-name">
                                    {strip}
                                        {$category->name|escape:'html':'UTF-8'}
                                        {if isset($categoryNameComplement)}
                                            {$categoryNameComplement|escape:'html':'UTF-8'}
                                        {/if}
                                    {/strip}
                                </h3>
                                <div class="category_description">{$category->description}</div>
                            </div>
                        {/if}
                    </div>
                {/if}
            </div>
		{/if}
		
		{if isset($subcategories)}
            {if (isset($display_subcategories) && $display_subcategories eq 1) || !isset($display_subcategories) }
    		<!-- Subcategories -->
    		<div id="subcategories">
    			<ul class="subcategories">
    			{foreach from=$subcategories item=subcategory}
    				<li>
                    	
    					<a class="subcategory-name" href="{$link->getCategoryLink($subcategory.id_category, $subcategory.link_rewrite)|escape:'html':'UTF-8'}">{$subcategory.name|truncate:25:'...'|escape:'html':'UTF-8'}</a>
    					
    				</li>
    			{/foreach}
    			</ul>
    		</div>
            {/if}
		{/if}

		{if $products}
            <div class="filters">
                <span class="click_elem1">{l s='Filters'}</span>
               
            </div>
			<div class="content_sortPagiBar content_sortPagiBarTop clearfix">
                <div class="product-count">
					{if isset($no_follow) AND $no_follow}
                            {assign var='no_follow_text' value=' rel="nofollow"'}
                        {else}
                            {assign var='no_follow_text' value=''}
                        {/if}

                        {if isset($p) AND $p}
                            {if isset($smarty.get.id_category) && $smarty.get.id_category && isset($category)}
                                {if !isset($current_url)}
                                    {assign var='requestPage' value=$link->getPaginationLink('category', $category, false, false, true, false)}
                                {else}
                                    {assign var='requestPage' value=$current_url}
                                {/if}
                                {assign var='requestNb' value=$link->getPaginationLink('category', $category, true, false, false, true)}
                            {elseif isset($smarty.get.id_manufacturer) && $smarty.get.id_manufacturer && isset($manufacturer)}
                                {assign var='requestPage' value=$link->getPaginationLink('manufacturer', $manufacturer, false, false, true, false)}
                                {assign var='requestNb' value=$link->getPaginationLink('manufacturer', $manufacturer, true, false, false, true)}
                            {elseif isset($smarty.get.id_supplier) && $smarty.get.id_supplier && isset($supplier)}
                                {assign var='requestPage' value=$link->getPaginationLink('supplier', $supplier, false, false, true, false)}
                                {assign var='requestNb' value=$link->getPaginationLink('supplier', $supplier, true, false, false, true)}
                            {else}
                                {if !isset($current_url)}
                                    {assign var='requestPage' value=$link->getPaginationLink(false, false, false, false, true, false)}
                                {else}
                                    {assign var='requestPage' value=$current_url}
                                {/if}
                                {assign var='requestNb' value=$link->getPaginationLink(false, false, true, false, false, true)}
                            {/if}

                        <span>
                            {if ($n*$p) < $nb_products }
                                {assign var='productShowing' value=$n*$p}
                            {else}
                                {assign var='productShowing' value=($n*$p-$nb_products-$n*$p)*-1}
                            {/if}
                            {if $p==1}
                                {assign var='productShowingStart' value=1}
                            {else}
                                {assign var='productShowingStart' value=$n*$p-$n+1}
                            {/if}
                            {if $nb_products > 1}
                                {l s='Showing %1$d - %2$d of %3$d items' sprintf=[$productShowingStart, $productShowing, $nb_products]}
                            {else}
                                {l s='Showing %1$d - %2$d of 1 item' sprintf=[$productShowingStart, $productShowing]}
                            {/if}
                        </span>
                    {/if}
                </div>
                <div class="sortPagiBar">
                    {include file="./product-sort.tpl"}
                </div>
			</div>
            <div id="filters1" class="filters">
                <div id="left_column" class="hide_content1">{$HOOK_LEFT_COLUMN}</div>
            </div>
			{include file="./product-list.tpl" products=$products}
			<div class="content_sortPagiBar">
				<div class="bottom-pagination-content clearfix">
                    {include file="./pagination.tpl" paginationId='bottom'}
				</div>
			</div>
		{/if}
	{elseif $category->id}
		<p class="alert alert-warning">{l s='This category is currently unavailable.'}</p>
	{/if}
{/if}
