<?php /* Smarty version Smarty-3.1.19, created on 2017-11-06 15:28:40
         compiled from "C:\xampp\htdocs\laquintapatita\modules\blockfacebook\blockfacebook.tpl" */ ?>
<?php /*%%SmartyHeaderCode:185905a00a9d86179c5-14886359%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'da9c00e2219c2cd77116c54d0e4b3486f478b2cd' => 
    array (
      0 => 'C:\\xampp\\htdocs\\laquintapatita\\modules\\blockfacebook\\blockfacebook.tpl',
      1 => 1480102390,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '185905a00a9d86179c5-14886359',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'facebookurl' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5a00a9d86179c7_32765357',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a00a9d86179c7_32765357')) {function content_5a00a9d86179c7_32765357($_smarty_tpl) {?>
<?php if ($_smarty_tpl->tpl_vars['facebookurl']->value!='') {?>
<div id="fb-root"></div>
<div id="facebook_block" class="col-xs-4">
	<h4 ><?php echo smartyTranslate(array('s'=>'Follow us on Facebook','mod'=>'blockfacebook'),$_smarty_tpl);?>
</h4>
	<div class="facebook-fanbox">
		<div class="fb-like-box" data-href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['facebookurl']->value, ENT_QUOTES, 'UTF-8', true);?>
" data-colorscheme="light" data-show-faces="true" data-header="false" data-stream="false" data-show-border="false">
		</div>
	</div>
</div>
<?php }?>
<?php }} ?>
