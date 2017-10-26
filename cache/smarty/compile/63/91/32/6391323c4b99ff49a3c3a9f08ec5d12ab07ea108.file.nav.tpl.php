<?php /* Smarty version Smarty-3.1.19, created on 2017-10-25 19:16:12
         compiled from "C:\xampp\htdocs\laquintapatita\themes\agnezit\modules\blockuserinfo\nav.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1362859f10d2c05fc27-84903047%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6391323c4b99ff49a3c3a9f08ec5d12ab07ea108' => 
    array (
      0 => 'C:\\xampp\\htdocs\\laquintapatita\\themes\\agnezit\\modules\\blockuserinfo\\nav.tpl',
      1 => 1507755989,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1362859f10d2c05fc27-84903047',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'is_logged' => 0,
    'link' => 0,
    'cookie' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_59f10d2c153828_67750666',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59f10d2c153828_67750666')) {function content_59f10d2c153828_67750666($_smarty_tpl) {?><!-- Block user information module NAV  -->
<?php if ($_smarty_tpl->tpl_vars['is_logged']->value) {?>
	<div class="sign-block languages-block header_user_info">
		<div class="current click_elem"></div>
		<ul class="languages-block_ul hide_content">
			<li class="login__item"><a class="logout login__link" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getPageLink('index',true,null,"mylogout"), ENT_QUOTES, 'UTF-8', true);?>
" rel="nofollow" title="<?php echo smartyTranslate(array('s'=>'Log me out','mod'=>'blockuserinfo'),$_smarty_tpl);?>
">
			<?php echo smartyTranslate(array('s'=>'Sign out','mod'=>'blockuserinfo'),$_smarty_tpl);?>

			</a></li>
			<li class="login__item"><span><?php echo $_smarty_tpl->tpl_vars['cookie']->value->customer_firstname;?>
 <?php echo $_smarty_tpl->tpl_vars['cookie']->value->customer_lastname;?>
</span></li>
			<li class="login__item"><a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getPageLink('my-account',true), ENT_QUOTES, 'UTF-8', true);?>
" class="login__link"><?php echo smartyTranslate(array('s'=>'My account','mod'=>'blockuserinfo'),$_smarty_tpl);?>
</a></li>
			<li class="login__item"><a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getPageLink('history',true), ENT_QUOTES, 'UTF-8', true);?>
" class="login__link"><?php echo smartyTranslate(array('s'=>'My orders','mod'=>'blockuserinfo'),$_smarty_tpl);?>
</a></li>
			<li class="login__item"><a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getPageLink('order-follow',true), ENT_QUOTES, 'UTF-8', true);?>
" class="login__link"><?php echo smartyTranslate(array('s'=>'My credit slips','mod'=>'blockuserinfo'),$_smarty_tpl);?>
</a></li>
			<li class="login__item"><a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getPageLink('addresses',true), ENT_QUOTES, 'UTF-8', true);?>
" class="login__link"><?php echo smartyTranslate(array('s'=>'My addresses','mod'=>'blockuserinfo'),$_smarty_tpl);?>
</a></li>
			<li class="login__item"><a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getPageLink('identity',true), ENT_QUOTES, 'UTF-8', true);?>
" class="login__link"><?php echo smartyTranslate(array('s'=>'My info','mod'=>'blockuserinfo'),$_smarty_tpl);?>
</a></li>
			<li class="login__item"><a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getPageLink('products-comparison'), ENT_QUOTES, 'UTF-8', true);?>
" class="login__link"><?php echo smartyTranslate(array('s'=>'Product comparison','mod'=>'blockuserinfo'),$_smarty_tpl);?>
</a></li>
			<li class="login__item"><a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getModuleLink('blockwishlist','mywishlist'), ENT_QUOTES, 'UTF-8', true);?>
" class="login__link"><?php echo smartyTranslate(array('s'=>'My wishlists','mod'=>'blockuserinfo'),$_smarty_tpl);?>
</a></li>
		</ul>
	</div>
	<?php } else { ?>
		<div class="header_user_info sign-block" >
			<div class="current click_elem"></div>
		
			<ul class="languages-block_ul hide_content">
				<li class="login__item"><a class="login login__link" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getPageLink('my-account',true), ENT_QUOTES, 'UTF-8', true);?>
" rel="nofollow" title="<?php echo smartyTranslate(array('s'=>'Log in to your customer account','mod'=>'blocktopmenu'),$_smarty_tpl);?>
"><?php echo smartyTranslate(array('s'=>'Sign in','mod'=>'blockuserinfo'),$_smarty_tpl);?>
</a></li>
				<li class="login__item"><a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getPageLink('my-account',true), ENT_QUOTES, 'UTF-8', true);?>
" class="login__link"><?php echo smartyTranslate(array('s'=>'My account','mod'=>'blockuserinfo'),$_smarty_tpl);?>
</a></li>
				<li class="login__item"><a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getPageLink('history',true), ENT_QUOTES, 'UTF-8', true);?>
" class="login__link"><?php echo smartyTranslate(array('s'=>'My orders','mod'=>'blockuserinfo'),$_smarty_tpl);?>
</a></li>
				<li class="login__item"><a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getPageLink('order-follow',true), ENT_QUOTES, 'UTF-8', true);?>
" class="login__link"><?php echo smartyTranslate(array('s'=>'My credit slips','mod'=>'blockuserinfo'),$_smarty_tpl);?>
</a></li>
				<li class="login__item"><a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getPageLink('addresses',true), ENT_QUOTES, 'UTF-8', true);?>
" class="login__link"><?php echo smartyTranslate(array('s'=>'My addresses','mod'=>'blockuserinfo'),$_smarty_tpl);?>
</a></li>
				<li class="login__item"><a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getPageLink('identity',true), ENT_QUOTES, 'UTF-8', true);?>
" class="login__link"><?php echo smartyTranslate(array('s'=>'My info','mod'=>'blockuserinfo'),$_smarty_tpl);?>
</a></li>
				<li class="login__item"><a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getPageLink('products-comparison'), ENT_QUOTES, 'UTF-8', true);?>
" class="login__link"><?php echo smartyTranslate(array('s'=>'Product comparison','mod'=>'blockuserinfo'),$_smarty_tpl);?>
</a></li>
				<li class="login__item"><a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getModuleLink('blockwishlist','mywishlist'), ENT_QUOTES, 'UTF-8', true);?>
" class="login__link"><?php echo smartyTranslate(array('s'=>'My wishlists','mod'=>'blockuserinfo'),$_smarty_tpl);?>
</a></li>
			</ul>
		</div>
	<?php }?>

<!-- /Block usmodule NAV -->
<?php }} ?>
