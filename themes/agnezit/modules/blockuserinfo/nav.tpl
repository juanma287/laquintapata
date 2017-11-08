<!-- Block user information module NAV  -->
{if $is_logged}
	<div class="sign-block languages-block header_user_info" style="margin-top: 30px;" >
		<div class="current click_elem"></div>
		<ul class="languages-block_ul hide_content">
			<li class="login__item"><a class="logout login__link" href="{$link->getPageLink('index', true, NULL, "mylogout")|escape:'html':'UTF-8'}" rel="nofollow" title="{l s='Log me out' mod='blockuserinfo'}">
			{l s='Sign out' mod='blockuserinfo'}
			</a></li>
			<li class="login__item"><span>{$cookie->customer_firstname} {$cookie->customer_lastname}</span></li>
			<li class="login__item"><a href="{$link->getPageLink('my-account', true)|escape:'html':'UTF-8'}" class="login__link">{l s='My account' mod='blockuserinfo'}</a></li>
			<li class="login__item"><a href="{$link->getPageLink('history', true)|escape:'html':'UTF-8'}" class="login__link">{l s='My orders' mod='blockuserinfo'}</a></li>
			<li class="login__item"><a href="{$link->getPageLink('order-follow', true)|escape:'html':'UTF-8'}" class="login__link">{l s='My credit slips' mod='blockuserinfo'}</a></li>
			<li class="login__item"><a href="{$link->getPageLink('addresses', true)|escape:'html':'UTF-8'}" class="login__link">{l s='My addresses' mod='blockuserinfo'}</a></li>
			<li class="login__item"><a href="{$link->getPageLink('identity', true)|escape:'html':'UTF-8'}" class="login__link">{l s='My info' mod='blockuserinfo'}</a></li>
			<li class="login__item"><a href="{$link->getPageLink('products-comparison')|escape:'html':'UTF-8'}" class="login__link">{l s='Product comparison' mod='blockuserinfo'}</a></li>
			<li class="login__item"><a href="{$link->getModuleLink('blockwishlist', 'mywishlist')|escape:'html':'UTF-8'}" class="login__link">{l s='My wishlists' mod='blockuserinfo'}</a></li>
		</ul>
	</div>
	{else}
		<div class="header_user_info sign-block" style="margin-top: 30px;" >
			<div class="current click_elem"></div>
		
			<ul class="languages-block_ul hide_content">
				<li class="login__item"><a class="login login__link" href="{$link->getPageLink('my-account', true)|escape:'html':'UTF-8'}" rel="nofollow" title="{l s='Log in to your customer account' mod='blocktopmenu'}">{l s='Sign in' mod='blockuserinfo'}</a></li>
				<li class="login__item"><a href="{$link->getPageLink('my-account', true)|escape:'html':'UTF-8'}" class="login__link">{l s='My account' mod='blockuserinfo'}</a></li>
				<li class="login__item"><a href="{$link->getPageLink('history', true)|escape:'html':'UTF-8'}" class="login__link">{l s='My orders' mod='blockuserinfo'}</a></li>
				<li class="login__item"><a href="{$link->getPageLink('order-follow', true)|escape:'html':'UTF-8'}" class="login__link">{l s='My credit slips' mod='blockuserinfo'}</a></li>
				<li class="login__item"><a href="{$link->getPageLink('addresses', true)|escape:'html':'UTF-8'}" class="login__link">{l s='My addresses' mod='blockuserinfo'}</a></li>
				<li class="login__item"><a href="{$link->getPageLink('identity', true)|escape:'html':'UTF-8'}" class="login__link">{l s='My info' mod='blockuserinfo'}</a></li>
				<li class="login__item"><a href="{$link->getPageLink('products-comparison')|escape:'html':'UTF-8'}" class="login__link">{l s='Product comparison' mod='blockuserinfo'}</a></li>
				<li class="login__item"><a href="{$link->getModuleLink('blockwishlist', 'mywishlist')|escape:'html':'UTF-8'}" class="login__link">{l s='My wishlists' mod='blockuserinfo'}</a></li>
			</ul>
		</div>
	{/if}

<!-- /Block usmodule NAV -->
