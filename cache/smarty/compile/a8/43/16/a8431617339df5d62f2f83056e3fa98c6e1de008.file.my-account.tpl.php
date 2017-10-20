<?php /* Smarty version Smarty-3.1.19, created on 2017-10-19 20:45:32
         compiled from "C:\xampp\htdocs\laquintapatita\themes\agnezit\modules\blockwishlist\my-account.tpl" */ ?>
<?php /*%%SmartyHeaderCode:3114459e9391cec6f78-93414828%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a8431617339df5d62f2f83056e3fa98c6e1de008' => 
    array (
      0 => 'C:\\xampp\\htdocs\\laquintapatita\\themes\\agnezit\\modules\\blockwishlist\\my-account.tpl',
      1 => 1507755990,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3114459e9391cec6f78-93414828',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'link' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_59e9391d0386a7_38908108',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59e9391d0386a7_38908108')) {function content_59e9391d0386a7_38908108($_smarty_tpl) {?>

<!-- MODULE WishList -->
<li class="lnk_wishlist">
	<a 	href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getModuleLink('blockwishlist','mywishlist',array(),true), ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo smartyTranslate(array('s'=>'My wishlists','mod'=>'blockwishlist'),$_smarty_tpl);?>
">
		<i class="icon-heart"></i>
		<span><?php echo smartyTranslate(array('s'=>'My wishlists','mod'=>'blockwishlist'),$_smarty_tpl);?>
</span>
	</a>
</li>
<!-- END : MODULE WishList --><?php }} ?>
