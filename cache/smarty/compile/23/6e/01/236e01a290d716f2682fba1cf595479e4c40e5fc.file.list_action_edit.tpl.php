<?php /* Smarty version Smarty-3.1.19, created on 2017-11-07 17:10:51
         compiled from "C:\xampp\htdocs\laquintapatita\admin_patita\themes\default\template\helpers\list\list_action_edit.tpl" */ ?>
<?php /*%%SmartyHeaderCode:71375a02134b395606-82762511%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '236e01a290d716f2682fba1cf595479e4c40e5fc' => 
    array (
      0 => 'C:\\xampp\\htdocs\\laquintapatita\\admin_patita\\themes\\default\\template\\helpers\\list\\list_action_edit.tpl',
      1 => 1480102384,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '71375a02134b395606-82762511',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'href' => 0,
    'action' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5a02134b395607_54706509',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a02134b395607_54706509')) {function content_5a02134b395607_54706509($_smarty_tpl) {?>
<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['href']->value, ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['action']->value, ENT_QUOTES, 'UTF-8', true);?>
" class="edit">
	<i class="icon-pencil"></i> <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['action']->value, ENT_QUOTES, 'UTF-8', true);?>

</a><?php }} ?>
