<?php /* Smarty version Smarty-3.1.19, created on 2017-11-06 15:28:48
         compiled from "C:\xampp\htdocs\laquintapatita\modules\blockspecials\views\templates\hook\blockspecials-home.tpl" */ ?>
<?php /*%%SmartyHeaderCode:198305a00a9e0cccdb8-45316924%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '220d0dab8dc5e9134859a51c479a8c5636c5a711' => 
    array (
      0 => 'C:\\xampp\\htdocs\\laquintapatita\\modules\\blockspecials\\views\\templates\\hook\\blockspecials-home.tpl',
      1 => 1480102390,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '198305a00a9e0cccdb8-45316924',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'specials' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5a00a9e0dfd8b0_29558829',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a00a9e0dfd8b0_29558829')) {function content_5a00a9e0dfd8b0_29558829($_smarty_tpl) {?>
<?php if (isset($_smarty_tpl->tpl_vars['specials']->value)&&$_smarty_tpl->tpl_vars['specials']->value) {?>
	<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['tpl_dir']->value)."./product-list.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array('products'=>$_smarty_tpl->tpl_vars['specials']->value,'class'=>'blockspecials tab-pane','id'=>'blockspecials'), 0);?>

<?php } else { ?>
<ul id="blockspecials" class="blockspecials tab-pane">
	<li class="alert alert-info"><?php echo smartyTranslate(array('s'=>'No special products at this time.','mod'=>'blockspecials'),$_smarty_tpl);?>
</li>
</ul>
<?php }?>
<?php }} ?>
