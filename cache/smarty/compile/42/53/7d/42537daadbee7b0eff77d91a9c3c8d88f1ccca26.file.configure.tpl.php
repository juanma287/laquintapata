<?php /* Smarty version Smarty-3.1.19, created on 2017-10-11 18:39:42
         compiled from "C:\xampp\htdocs\laquintapatita\modules\anscrolltop\views\templates\admin\configure.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1969459de8f9e802a45-70723729%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '42537daadbee7b0eff77d91a9c3c8d88f1ccca26' => 
    array (
      0 => 'C:\\xampp\\htdocs\\laquintapatita\\modules\\anscrolltop\\views\\templates\\admin\\configure.tpl',
      1 => 1507756000,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1969459de8f9e802a45-70723729',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'ICON' => 0,
    'errors' => 0,
    'error' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_59de8f9e8b9745_02045802',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59de8f9e8b9745_02045802')) {function content_59de8f9e8b9745_02045802($_smarty_tpl) {?>
<div class="panel">
	<h3><i class="icon icon-credit-card"></i> <?php echo smartyTranslate(array('s'=>'Preview','mod'=>'anscrolltop'),$_smarty_tpl);?>
</h3>
	<div id="scrolltopbtn" style="position: static">&#x<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['ICON']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
;</div>
</div>
<?php  $_smarty_tpl->tpl_vars['error'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['error']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['errors']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['error']->key => $_smarty_tpl->tpl_vars['error']->value) {
$_smarty_tpl->tpl_vars['error']->_loop = true;
?>
<div class="bootstrap">
	<div class="module_error alert alert-danger">
		<button type="button" class="close" data-dismiss="alert">&times;</button>
		<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['error']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>

	</div>
</div>
<?php } ?><?php }} ?>
