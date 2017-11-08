<?php /* Smarty version Smarty-3.1.19, created on 2017-11-06 15:28:47
         compiled from "C:\xampp\htdocs\laquintapatita\themes\agnezit\modules\homefeatured\homefeatured.tpl" */ ?>
<?php /*%%SmartyHeaderCode:216595a00a9dfaeb999-99063595%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '43069553d42734aa6bfb76e1b90f9f2ac8e98fd3' => 
    array (
      0 => 'C:\\xampp\\htdocs\\laquintapatita\\themes\\agnezit\\modules\\homefeatured\\homefeatured.tpl',
      1 => 1507755991,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '216595a00a9dfaeb999-99063595',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'products' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5a00a9dfb28890_96457101',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a00a9dfb28890_96457101')) {function content_5a00a9dfb28890_96457101($_smarty_tpl) {?>
<?php if (isset($_smarty_tpl->tpl_vars['products']->value)&&$_smarty_tpl->tpl_vars['products']->value) {?>
	<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['tpl_dir']->value)."./product-list.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array('class'=>'homefeatured tab-pane','id'=>'homefeatured'), 0);?>

<?php } else { ?>
<ul id="homefeatured" class="homefeatured tab-pane">
	<li class="alert alert-info"><?php echo smartyTranslate(array('s'=>'No featured products at this time.','mod'=>'homefeatured'),$_smarty_tpl);?>
</li>
</ul>
<?php }?><?php }} ?>
