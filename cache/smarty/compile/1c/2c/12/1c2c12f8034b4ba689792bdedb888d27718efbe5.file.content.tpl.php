<?php /* Smarty version Smarty-3.1.19, created on 2017-11-07 18:15:41
         compiled from "C:\xampp\htdocs\laquintapatita\admin_patita\themes\default\template\content.tpl" */ ?>
<?php /*%%SmartyHeaderCode:5235a02227dea4658-13612245%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
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
  'nocache_hash' => '5235a02227dea4658-13612245',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'content' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5a02227deb01d1_38481241',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a02227deb01d1_38481241')) {function content_5a02227deb01d1_38481241($_smarty_tpl) {?>
<div id="ajax_confirmation" class="alert alert-success hide"></div>

<div id="ajaxBox" style="display:none"></div>


<div class="row">
	<div class="col-lg-12">
		<?php if (isset($_smarty_tpl->tpl_vars['content']->value)) {?>
			<?php echo $_smarty_tpl->tpl_vars['content']->value;?>

		<?php }?>
	</div>
</div><?php }} ?>
