<?php /* Smarty version Smarty-3.1.19, created on 2017-11-07 17:06:39
         compiled from "C:\xampp\htdocs\laquintapatita\themes\agnezit\modules\an_staticblocks\advantage.tpl" */ ?>
<?php /*%%SmartyHeaderCode:162805a02124f3f61c3-42749849%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
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
  'nocache_hash' => '162805a02124f3f61c3-42749849',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'an_staticblock' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5a02124f3f61c8_62141269',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a02124f3f61c8_62141269')) {function content_5a02124f3f61c8_62141269($_smarty_tpl) {?>



<?php if ($_smarty_tpl->tpl_vars['an_staticblock']->value->getImageLink()!='') {?>
	<img src="<?php echo $_smarty_tpl->tpl_vars['an_staticblock']->value->getImageLink();?>
" alt="">
<?php }?>

<?php echo $_smarty_tpl->tpl_vars['an_staticblock']->value->content;?>

<?php }} ?>
