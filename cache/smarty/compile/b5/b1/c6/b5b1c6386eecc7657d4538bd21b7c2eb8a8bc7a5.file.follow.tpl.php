<?php /* Smarty version Smarty-3.1.19, created on 2017-10-20 19:08:16
         compiled from "C:\xampp\htdocs\laquintapatita\themes\agnezit\modules\an_staticblocks\follow.tpl" */ ?>
<?php /*%%SmartyHeaderCode:75359ea73d06b3d31-17342001%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b5b1c6386eecc7657d4538bd21b7c2eb8a8bc7a5' => 
    array (
      0 => 'C:\\xampp\\htdocs\\laquintapatita\\themes\\agnezit\\modules\\an_staticblocks\\follow.tpl',
      1 => 1507755983,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '75359ea73d06b3d31-17342001',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'an_staticblock' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_59ea73d06b3d35_12765609',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59ea73d06b3d35_12765609')) {function content_59ea73d06b3d35_12765609($_smarty_tpl) {?>

<?php if ($_smarty_tpl->tpl_vars['an_staticblock']->value->link!='') {?>
	<a href="<?php echo $_smarty_tpl->tpl_vars['an_staticblock']->value->link;?>
"><?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['an_staticblock']->value->title, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
</a>
<?php }?>

<?php }} ?>
