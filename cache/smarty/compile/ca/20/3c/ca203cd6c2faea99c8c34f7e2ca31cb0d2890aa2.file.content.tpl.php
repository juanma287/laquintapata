<?php /* Smarty version Smarty-3.1.19, created on 2017-10-11 00:29:38
         compiled from "C:\xampp\htdocs\laquintapatita\admin\themes\default\template\controllers\localization\content.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1017459dd49d2085ef1-95417282%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ca203cd6c2faea99c8c34f7e2ca31cb0d2890aa2' => 
    array (
      0 => 'C:\\xampp\\htdocs\\laquintapatita\\admin\\themes\\default\\template\\controllers\\localization\\content.tpl',
      1 => 1480102384,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1017459dd49d2085ef1-95417282',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'localization_form' => 0,
    'localization_options' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_59dd49d2099771_71222291',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59dd49d2099771_71222291')) {function content_59dd49d2099771_71222291($_smarty_tpl) {?>

<?php if (isset($_smarty_tpl->tpl_vars['localization_form']->value)) {?><?php echo $_smarty_tpl->tpl_vars['localization_form']->value;?>
<?php }?>
<?php if (isset($_smarty_tpl->tpl_vars['localization_options']->value)) {?><?php echo $_smarty_tpl->tpl_vars['localization_options']->value;?>
<?php }?>
<script type="text/javascript">
	$(document).ready(function() {
		$('#PS_CURRENCY_DEFAULT').change(function(e) {
			alert('Before changing the default currency, we strongly recommend that you enable maintenance mode because any change on default currency requires manual adjustment of the price of each product');
		});
	});
</script><?php }} ?>
