<?php /* Smarty version Smarty-3.1.19, created on 2017-10-13 18:08:40
         compiled from "C:\xampp\htdocs\laquintapatita\themes\agnezit\modules\an_staticblocks\top_static.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1372559e12b585d6967-59787844%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0427566ed79a383058c88f6a2c09d6009ed6f38e' => 
    array (
      0 => 'C:\\xampp\\htdocs\\laquintapatita\\themes\\agnezit\\modules\\an_staticblocks\\top_static.tpl',
      1 => 1507755983,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1372559e12b585d6967-59787844',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'an_staticblock' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_59e12b58613864_05901166',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59e12b58613864_05901166')) {function content_59e12b58613864_05901166($_smarty_tpl) {?>


<?php if ($_smarty_tpl->tpl_vars['an_staticblock']->value->link!='') {?>
<a href="<?php echo $_smarty_tpl->tpl_vars['an_staticblock']->value->link;?>
">
<?php }?>

<?php if ($_smarty_tpl->tpl_vars['an_staticblock']->value->getImageLink()!='') {?>
	<img src="<?php echo $_smarty_tpl->tpl_vars['an_staticblock']->value->getImageLink();?>
" alt="">
<?php }?>
<?php echo $_smarty_tpl->tpl_vars['an_staticblock']->value->content;?>



<?php if ($_smarty_tpl->tpl_vars['an_staticblock']->value->link!='') {?>
</a>
<?php }?>
<?php }} ?>
