<?php /* Smarty version Smarty-3.1.19, created on 2017-10-25 19:16:11
         compiled from "C:\xampp\htdocs\laquintapatita\admin_patita\themes\default\template\footer.tpl" */ ?>
<?php /*%%SmartyHeaderCode:319959f10d2b28a707-60796577%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7878ef62f33da69983b155f4be5c996eb106a855' => 
    array (
      0 => 'C:\\xampp\\htdocs\\laquintapatita\\admin_patita\\themes\\default\\template\\footer.tpl',
      1 => 1508537205,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '319959f10d2b28a707-60796577',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'display_footer' => 0,
    'php_errors' => 0,
    'modals' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_59f10d2b2c7607_78415432',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59f10d2b2c7607_78415432')) {function content_59f10d2b2c7607_78415432($_smarty_tpl) {?>

	</div>
</div>
<?php if ($_smarty_tpl->tpl_vars['display_footer']->value) {?>

<?php }?>
<?php if (isset($_smarty_tpl->tpl_vars['php_errors']->value)) {?>
	<?php echo $_smarty_tpl->getSubTemplate ("error.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<?php }?>

<?php if (isset($_smarty_tpl->tpl_vars['modals']->value)) {?>
<div class="bootstrap">
	<?php echo $_smarty_tpl->tpl_vars['modals']->value;?>

</div>
<?php }?>

</body>
</html>
<?php }} ?>
