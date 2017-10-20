<?php /* Smarty version Smarty-3.1.19, created on 2017-10-20 19:08:15
         compiled from "C:\xampp\htdocs\laquintapatita\themes\agnezit\modules\an_staticblocks\advantage.tpl" */ ?>
<?php /*%%SmartyHeaderCode:239959ea73cf8a1920-09943666%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '74f95d8109e4c19e822fe230c355463f9d4c5cc1' => 
    array (
      0 => 'C:\\xampp\\htdocs\\laquintapatita\\themes\\agnezit\\modules\\an_staticblocks\\advantage.tpl',
      1 => 1507755983,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '239959ea73cf8a1920-09943666',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'an_staticblock' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_59ea73cf8de822_79927725',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59ea73cf8de822_79927725')) {function content_59ea73cf8de822_79927725($_smarty_tpl) {?>



<?php if ($_smarty_tpl->tpl_vars['an_staticblock']->value->getImageLink()!='') {?>
	<img src="<?php echo $_smarty_tpl->tpl_vars['an_staticblock']->value->getImageLink();?>
" alt="">
<?php }?>

<?php echo $_smarty_tpl->tpl_vars['an_staticblock']->value->content;?>

<?php }} ?>
