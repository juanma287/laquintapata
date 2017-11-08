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
<!DOCTYPE HTML>
<!--[if lt IE 7]> <html class="no-js lt-ie9 lt-ie8 lt-ie7"{if isset($language_code) && $language_code} lang="{$language_code|escape:'html':'UTF-8'}"{/if}><![endif]-->
<!--[if IE 7]><html class="no-js lt-ie9 lt-ie8 ie7"{if isset($language_code) && $language_code} lang="{$language_code|escape:'html':'UTF-8'}"{/if}><![endif]-->
<!--[if IE 8]><html class="no-js lt-ie9 ie8"{if isset($language_code) && $language_code} lang="{$language_code|escape:'html':'UTF-8'}"{/if}><![endif]-->
<!--[if gt IE 8]> <html class="no-js ie9"{if isset($language_code) && $language_code} lang="{$language_code|escape:'html':'UTF-8'}"{/if}><![endif]-->
<html{if isset($language_code) && $language_code} lang="{$language_code|escape:'html':'UTF-8'}"{/if}>
    <head>
        <meta charset="utf-8" />
        <title>{$meta_title|escape:'html':'UTF-8'}</title>
        {if isset($meta_description) AND $meta_description}
            <meta name="description" content="{$meta_description|escape:'html':'UTF-8'}" />
        {/if}
        {if isset($meta_keywords) AND $meta_keywords}
            <meta name="keywords" content="{$meta_keywords|escape:'html':'UTF-8'}" />
        {/if}
        <meta name="generator" content="PrestaShop" />
        <meta name="robots" content="{if isset($nobots)}no{/if}index,{if isset($nofollow) && $nofollow}no{/if}follow" />
        <meta name="viewport" content="width=device-width, minimum-scale=0.25, maximum-scale=1.6, initial-scale=1.0" />
        <meta name="apple-mobile-web-app-capable" content="yes" />
        <link rel="icon" type="image/vnd.microsoft.icon" href="{$favicon_url}?{$img_update_time}" />
        <link rel="shortcut icon" type="image/x-icon" href="{$favicon_url}?{$img_update_time}" />
        {if isset($css_files)}
            {foreach from=$css_files key=css_uri item=media}
                <link rel="stylesheet" href="{$css_uri|escape:'html':'UTF-8'}" type="text/css" media="{$media|escape:'html':'UTF-8'}" />
            {/foreach}
        {/if}
        <link rel="stylesheet" href="{$css_dir}animate.css" type="text/css" media="all" />
        <link rel="stylesheet" href="{$css_dir}theme-styles.css" type="text/css" media="all" />
        {if isset($js_defer) && !$js_defer && isset($js_files) && isset($js_def)}
            {$js_def}
            {foreach from=$js_files item=js_uri}
                <script type="text/javascript" src="{$js_uri|escape:'html':'UTF-8'}"></script>
            {/foreach}
        {/if}
        {$HOOK_HEADER}
        <link rel="stylesheet" href="http{if Tools::usingSecureMode()}s{/if}://fonts.googleapis.com/css?family=Open+Sans:300,600&amp;subset=latin,latin-ext" type="text/css" media="all" />
        <!--[if IE 8]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
        <![endif]-->
    </head>
    <body{if isset($page_name)} id="{$page_name|escape:'html':'UTF-8'}"{/if} class="{if isset($page_name)}{$page_name|escape:'html':'UTF-8'}{/if}{if isset($body_classes) && $body_classes|@count} {implode value=$body_classes separator=' '}{/if}{if $hide_left_column} hide-left-column{else} show-left-column{/if}{if $hide_right_column} hide-right-column{else} show-right-column{/if}{if isset($content_only) && $content_only} content_only{/if} lang_{$lang_iso} an_theme1_1">
        {if $page_name == 'index'}
            {addJsDef comparedProductsIds=$compared_products}
            {addJsDef comparator_max_item=$comparator_max_item}
        {/if}
        {if !isset($content_only) || !$content_only}
            {if isset($restricted_country_mode) && $restricted_country_mode}
                <div id="restricted-country">
                    <p>{l s='You cannot place a new order from your country.'}{if isset($geolocation_country) && $geolocation_country} <span class="bold">{$geolocation_country|escape:'html':'UTF-8'}</span>{/if}</p>
                </div>
            {/if}

            {if Module::isInstalled('blockcart')}
                <div class="blockcart_top">
                    <div class="cart_close"></div>
                    {Module::getInstanceByName('blockcart')->hookTop(['cart' => Context::getContext()->cart])}
                </div>
            {/if}



            {if Module::isEnabled('an_staticblocks') AND Module::getInstanceByName('an_staticblocks')->isEnabledBlock('first_display')}
                {Module::getInstanceByName('an_staticblocks')->getBlock('first_display', 'first_display.tpl') nofilter}
            {/if}

            <div id="page" class="{if $page_name !='index'} no_overflow{/if}">
                <div class="header-container">
                    <header id="header" class="{if $page_name =='index'}header_mainpage{else} header2{/if}">
                    {capture name='displayBanner'}{hook h='displayBanner'}{/capture}
                    {if $smarty.capture.displayBanner}
                        <div class="banner">
                            <div class="container">
                                <div class="row">
                                    {$smarty.capture.displayBanner}
                                </div>
                            </div>
                        </div>
                    {/if}






                    <div class="{if $page_name =='index'}header_top_wr{else} header_top_wr2{/if}">

                        {if $page_name =='index'}
                            <div id="slider_row" class=" clearfix">
                            {capture name='displayTopColumn'}{hook h='displayTopColumn'}{/capture}
                            {if $smarty.capture.displayTopColumn}
                                <div id="top_column" class="center_column">{$smarty.capture.displayTopColumn}</div>
                            {/if}
                        </div>
                    {/if}

                    {if $page_name =='index'}
                        {if 
							Module::isEnabled('an_staticblocks') AND (
							Module::getInstanceByName('an_staticblocks')->isEnabledBlock('follow1') OR 
							Module::getInstanceByName('an_staticblocks')->isEnabledBlock('follow2') OR 
							Module::getInstanceByName('an_staticblocks')->isEnabledBlock('follow3') )
                        }

                    {/if}
                {/if}




                <div class="{if $page_name =='index'}header_top{/if}">
                    <div class="row" style="top: 12px; bottom:-10px ">
                        <div class="col-md-4" style="float: right;">
                      
                        
                            <span class="shop-phone is_logged" style=" padding-right: 50px;">
                                (0341) 156 088156 
                            </span>
                        </div>

                    </div>


                    <a style="margin-top: 30px;" href="{if isset($force_ssl) && $force_ssl}{$base_dir_ssl}{else}{$base_dir}{/if}" title="{$shop_name|escape:'html':'UTF-8'}" class="logo">
                        <img class="img-responsive" src="{$logo_url}" alt="{$shop_name|escape:'html':'UTF-8'}"{if isset($logo_image_width) && $logo_image_width} width="{$logo_image_width}"{/if}{if isset($logo_image_height) && $logo_image_height} height="{$logo_image_height}"{/if}/>
                    </a>

                    <div class="settings_wr" style="margin-top: 30px;" >
                        <div class="settings click_elem" ></div>

                        <div class="settings_inner hide_content">
                            {if Module::isEnabled('blocklanguages')}
                                {Module::getInstanceByName('blocklanguages')->hookDisplayTop([])}
                            {/if}

                            {if Module::isEnabled('blockcurrencies')}
                                {Module::getInstanceByName('blockcurrencies')->hookDisplayTop([])}
                            {/if}
                        </div>

                    </div>


                    {if Module::isEnabled('blockuserinfo')}
                        {Module::getInstanceByName('blockuserinfo')->hookDisplayNav([])}
                    {/if}


                    <div class="cart_icon" style="margin-top: 30px;" ></div>

                    <div class="search_wr" style="margin-top: 30px;" >
                        <div class="search_icon click_elem"></div>
                        {if Module::isEnabled('blocksearch')}
                            {Module::getInstanceByName('blocksearch')->hookTop([])}
                        {/if}
                    </div>


                {if isset($HOOK_TOP)}{$HOOK_TOP}{/if}
            </div>

        </div>


    </header>
</div>
<div class="columns-container">
    {*
    {if $page_name !='index' && $page_name !='pagenotfound'}
    {include file="$tpl_dir./breadcrumb.tpl"}
    {/if}
    *}

    {if $page_name !='category'}
        {if isset($left_column_size) && !empty($left_column_size)}
            <div id="left_column" class="column col-xs-12 col-sm-{$left_column_size|intval}">{$HOOK_LEFT_COLUMN}</div>
        {/if}
    {/if}
{if isset($left_column_size) && isset($right_column_size)}{assign var='cols' value=(12 - $left_column_size - $right_column_size)}{else}{assign var='cols' value=12}{/if}
<div id="center_column" class="center_column {if $page_name !='index' && $page_name !='category' && $page_name !='product' && $page_name !='order' && $page_name !='new-products' && $page_name !='best-sales' && $page_name !='prices-drop'} container {/if} {*col-xs-12 col-sm-{$cols|intval}*}">
    {/if}
