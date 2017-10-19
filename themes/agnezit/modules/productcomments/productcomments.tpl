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
* Do not edit or add to this file if you wish to upgrade PrestaShop to newersend_friend_form_content
* versions in the future. If you wish to customize PrestaShop for your
* needs please refer to http://www.prestashop.com for more information.
*
*  @author PrestaShop SA <contact@prestashop.com>
*  @copyright  2007-2015 PrestaShop SA
*  @license    http://opensource.org/licenses/afl-3.0.php  Academic Free License (AFL 3.0)
*  International Registered Trademark & Property of PrestaShop SA
*}
<div id="idTab5">
	<div id="product_comments_block_tab">
		{if $comments}
			{foreach from=$comments item=comment}
				{if $comment.content}
				<div class="comment row" itemprop="review" itemscope itemtype="https://schema.org/Review">
					<div class="comment_author col-sm-2">
						
						<div class="comment_author_infos">
							<strong itemprop="author">{$comment.customer_name|escape:'html':'UTF-8'}</strong>
							
						</div>
					</div> <!-- .comment_author -->

					<div class="comment_details col-sm-10">
						<p itemprop="name" class="title_block">
							<strong>{$comment.title}</strong>
						</p>

						<meta itemprop="datePublished" content="{$comment.date_add|escape:'html':'UTF-8'|substr:0:10}" />
							<em>{dateFormat date=$comment.date_add|escape:'html':'UTF-8' full=0}</em>


						<div class="star_content clearfix"  itemprop="reviewRating" itemscope itemtype="https://schema.org/Rating">
							{section name="i" start=0 loop=5 step=1}
								{if $comment.grade le $smarty.section.i.index}
									<div class="star"></div>
								{else}
									<div class="star star_on"></div>
								{/if}
							{/section}
            				<meta itemprop="worstRating" content = "0" />
							<meta itemprop="ratingValue" content = "{$comment.grade|escape:'html':'UTF-8'}" />
            				<meta itemprop="bestRating" content = "5" />
						</div>


						<p class="review_body" itemprop="reviewBody">{$comment.content|escape:'html':'UTF-8'|nl2br}</p>
						<ul>
							{if $comment.total_advice > 0}
								<li>
									{l s='%1$d out of %2$d people found this review useful.' sprintf=[$comment.total_useful,$comment.total_advice] mod='productcomments'}
								</li>
							{/if}
							{if $is_logged}
								{if !$comment.customer_advice}
								<li>
									{l s='Was this comment useful to you?' mod='productcomments'}
									<button class="usefulness_btn btn btn-default button button-small" data-is-usefull="1" data-id-product-comment="{$comment.id_product_comment}">
										<span>{l s='Yes' mod='productcomments'}</span>
									</button>
									<button class="usefulness_btn btn btn-default button button-small" data-is-usefull="0" data-id-product-comment="{$comment.id_product_comment}">
										<span>{l s='No' mod='productcomments'}</span>
									</button>
								</li>
								{/if}
								{if !$comment.customer_report}
								<li>
									<span class="report_btn" data-id-product-comment="{$comment.id_product_comment}">
										{l s='Report abuse' mod='productcomments'}
									</span>
								</li>
								{/if}
							{/if}
						</ul>
					</div><!-- .comment_details -->

				</div> <!-- .comment -->
				{/if}
			{/foreach}
			{if (!$too_early AND ($is_logged OR $allow_guests))}
			<p class="align_center">
				<!-- Fancybox -->
				<div class="new_comment_form_wr" style="display: block;">
					<div id="new_comment_form">
						<form id="id_new_comment_form" action="#">
							
							<div class="row">
								
								<div class="new_comment_form_content col-xs-12 col-sm-6">
									<div id="new_comment_form_error" class="error" style="display: none; padding: 15px 25px">
										<ul></ul>
									</div>

									<label for="comment_title">
										{l s='Title' mod='productcomments'}
									</label>
									<input id="comment_title" name="title" type="text" value=""/>

									{if $criterions|@count > 0}
										<ul id="criterions_list">
										{foreach from=$criterions item='criterion'}
											<li>
												<label>{$criterion.name|escape:'html':'UTF-8'}</label>
												<div class="star_content">
													<input class="star not_uniform" type="radio" name="criterion[{$criterion.id_product_comment_criterion|round}]" value="1" />
													<input class="star not_uniform" type="radio" name="criterion[{$criterion.id_product_comment_criterion|round}]" value="2" />
													<input class="star not_uniform" type="radio" name="criterion[{$criterion.id_product_comment_criterion|round}]" value="3" />
													<input class="star not_uniform" type="radio" name="criterion[{$criterion.id_product_comment_criterion|round}]" value="4" checked="checked" />
													<input class="star not_uniform" type="radio" name="criterion[{$criterion.id_product_comment_criterion|round}]" value="5" />
												</div>
												<div class="clearfix"></div>
											</li>
										{/foreach}
										</ul>
									{/if}
									
								</div>
								<div class="col-sm-6 col-xs-12">
									<label for="content">
										{l s='Review' mod='productcomments'}
									</label>
									<textarea id="content" name="content"></textarea>
									{if $allow_guests == true && !$is_logged}
										<label>
											{l s='Your name:' mod='productcomments'} <sup class="required">*</sup>
										</label>
										<input id="commentCustomerName" name="customer_name" type="text" value=""/>
									{/if}
								</div>
									<div id="new_comment_form_footer">
										<input id="id_product_comment_send" name="id_product" type="hidden" value='{$id_product_comment_form}' />
										<p class="fr">
											<button id="submitNewMessage" name="submitMessage" type="submit" class="product_button">
												{l s='Submit' mod='productcomments'}
											</button>&nbsp;
											{l s='or' mod='productcomments'}&nbsp;
											<a class="closefb product_button" href="#">
												{l s='Cancel' mod='productcomments'}
											</a>
										</p>
										<div class="clearfix"></div>
									</div> <!-- #new_comment_form_footer -->
								
							</div>
						</form><!-- /end new_comment_form_content -->
					</div>
				</div>
				<!-- End fancybox -->
			</p>
			{/if}
			{if !($is_logged OR $allow_guests)}
			<p class="outorize">
				{l s='You must be ' mod='productcomments'} 
					<a class="login__link" href="{$link->getPageLink('my-account', true)|escape:'html':'UTF-8'}" rel="nofollow" title="{l s='Log in to your customer account'}">{l s='logged' mod='productcomments'}</a> 
				{l s=' for write a review!' mod='productcomments'}
			</p>
			{/if}
			{if $too_early }
				<p class="outorize">{l s='Please wait a bit to write a comment.' mod='productcomments'} </p>
			{/if}
		{else}
			{if (!$too_early AND ($is_logged OR $allow_guests))}
			
				<!-- Fancybox -->
				<div class="new_comment_form_wr" style="display: block;">
					<div id="new_comment_form">
						<form id="id_new_comment_form" action="#">
							
							<div class="row">
								
								<div class="new_comment_form_content col-xs-12 col-sm-6">
									<div id="new_comment_form_error" class="error" style="display: none; padding: 15px 25px">
										<ul></ul>
									</div>

									<label for="comment_title">
										{l s='Title' mod='productcomments'}
									</label>
									<input id="comment_title" name="title" type="text" value=""/>

									{if $criterions|@count > 0}
										<ul id="criterions_list">
										{foreach from=$criterions item='criterion'}
											<li>
												<label>{$criterion.name|escape:'html':'UTF-8'}</label>
												<div class="star_content">
													<input class="star not_uniform" type="radio" name="criterion[{$criterion.id_product_comment_criterion|round}]" value="1" />
													<input class="star not_uniform" type="radio" name="criterion[{$criterion.id_product_comment_criterion|round}]" value="2" />
													<input class="star not_uniform" type="radio" name="criterion[{$criterion.id_product_comment_criterion|round}]" value="3" />
													<input class="star not_uniform" type="radio" name="criterion[{$criterion.id_product_comment_criterion|round}]" value="4" checked="checked" />
													<input class="star not_uniform" type="radio" name="criterion[{$criterion.id_product_comment_criterion|round}]" value="5" />
												</div>
												<div class="clearfix"></div>
											</li>
										{/foreach}
										</ul>
									{/if}
									
								</div>
								<div class="col-sm-6 col-xs-12">
									<label for="content">
										{l s='Review' mod='productcomments'}
									</label>
									<textarea id="content" name="content"></textarea>
									{if $allow_guests == true && !$is_logged}
										<label>
											{l s='Your name:' mod='productcomments'} <sup class="required">*</sup>
										</label>
										<input id="commentCustomerName" name="customer_name" type="text" value=""/>
									{/if}
								</div>
									<div id="new_comment_form_footer">
										<input id="id_product_comment_send" name="id_product" type="hidden" value='{$id_product_comment_form}' />
										<p class="fr">
											<button id="submitNewMessage" name="submitMessage" type="submit" class="product_button">
												{l s='Submit' mod='productcomments'}
											</button>&nbsp;
											{l s='or' mod='productcomments'}&nbsp;
											<a class="closefb product_button" href="#">
												{l s='Cancel' mod='productcomments'}
											</a>
										</p>
										<div class="clearfix"></div>
									</div> <!-- #new_comment_form_footer -->
								
							</div>
						</form><!-- /end new_comment_form_content -->
					</div>
				</div>
				<!-- End fancybox -->
			
			{else}
			<p class="align_center no_review">{l s='No customer reviews for the moment.' mod='productcomments'}</p>
			{if !($is_logged OR $allow_guests)}
			<p class="outorize">
				{l s='You must be ' mod='productcomments'} 
					<a class="login__link" href="{$link->getPageLink('my-account', true)|escape:'html':'UTF-8'}" rel="nofollow" title="{l s='Log in to your customer account'}">{l s='logged' mod='productcomments'}</a> 
				{l s=' for write a review!' mod='productcomments'}
			</p>
			{/if}
			{/if}
		{/if}
	</div> <!-- #product_comments_block_tab -->
</div>

{strip}
{addJsDef productcomments_controller_url=$productcomments_controller_url|@addcslashes:'\''}
{addJsDef moderation_active=$moderation_active|boolval}
{addJsDef productcomments_url_rewrite=$productcomments_url_rewriting_activated|boolval}
{addJsDef secure_key=$secure_key}

{addJsDefL name=confirm_report_message}{l s='Are you sure that you want to report this comment?' mod='productcomments' js=1}{/addJsDefL}
{addJsDefL name=productcomment_added}{l s='Your comment has been added!' mod='productcomments' js=1}{/addJsDefL}
{addJsDefL name=productcomment_added_moderation}{l s='Your comment has been added and will be available once approved by a moderator.' mod='productcomments' js=1}{/addJsDefL}
{addJsDefL name=productcomment_title}{l s='New comment' mod='productcomments' js=1}{/addJsDefL}
{addJsDefL name=productcomment_ok}{l s='OK' mod='productcomments' js=1}{/addJsDefL}
{/strip}
