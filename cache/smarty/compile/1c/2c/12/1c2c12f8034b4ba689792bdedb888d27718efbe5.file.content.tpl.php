<?php /* Smarty version Smarty-3.1.19, created on 2017-10-25 19:16:10
         compiled from "C:\xampp\htdocs\laquintapatita\admin_patita\themes\default\template\content.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1319159f10d2a7cd4f3-84305325%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1c2c12f8034b4ba689792bdedb888d27718efbe5' => 
    array (
      0 => 'C:\\xampp\\htdocs\\laquintapatita\\admin_patita\\themes\\default\\template\\content.tpl',
      1 => 1480102384,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1319159f10d2a7cd4f3-84305325',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'content' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_59f10d2a7cd4f9_24781689',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59f10d2a7cd4f9_24781689')) {function content_59f10d2a7cd4f9_24781689($_smarty_tpl) {?>
<div id="ajax_confirmation" class="alert alert-success hide"></div>

<div id="ajaxBox" style="display:none"></div>


<div class="row">
	<div class="col-lg-12">
		<?php if (isset($_smarty_tpl->tpl_vars['content']->value)) {?>
			<?php echo $_smarty_tpl->tpl_vars['content']->value;?>

		<?php }?>
	</div>
</div><?php }} ?>
