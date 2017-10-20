<?php /* Smarty version Smarty-3.1.19, created on 2017-10-19 21:05:02
         compiled from "C:\xampp\htdocs\laquintapatita\modules\productcomments\views\templates\admin\list_action_approve.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1865059e93dae7cbcd6-07431863%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '504124a906b382b3f85de3d169fab17497f4ddad' => 
    array (
      0 => 'C:\\xampp\\htdocs\\laquintapatita\\modules\\productcomments\\views\\templates\\admin\\list_action_approve.tpl',
      1 => 1508457109,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1865059e93dae7cbcd6-07431863',
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
  'unifunc' => 'content_59e93dae819ee7_98688111',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59e93dae819ee7_98688111')) {function content_59e93dae819ee7_98688111($_smarty_tpl) {?>
<a href="<?php echo $_smarty_tpl->tpl_vars['href']->value;?>
" class="btn btn-success" title="<?php echo $_smarty_tpl->tpl_vars['action']->value;?>
" >
	<i class="icon-check"></i> <?php echo $_smarty_tpl->tpl_vars['action']->value;?>

</a><?php }} ?>
