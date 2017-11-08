<?php /* Smarty version Smarty-3.1.19, created on 2017-11-07 18:15:47
         compiled from "C:\xampp\htdocs\laquintapatita\admin_patita\themes\default\template\helpers\modules_list\modal.tpl" */ ?>
<?php /*%%SmartyHeaderCode:228285a022283971a16-56157220%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '259da214a43824544ec27b8a7dbfa037c8a6dc90' => 
    array (
      0 => 'C:\\xampp\\htdocs\\laquintapatita\\admin_patita\\themes\\default\\template\\helpers\\modules_list\\modal.tpl',
      1 => 1480102384,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '228285a022283971a16-56157220',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5a022283979714_93913835',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a022283979714_93913835')) {function content_5a022283979714_93913835($_smarty_tpl) {?><div class="modal fade" id="modules_list_container">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				<h3 class="modal-title"><?php echo smartyTranslate(array('s'=>'Recommended Modules and Services'),$_smarty_tpl);?>
</h3>
			</div>
			<div class="modal-body">
				<div id="modules_list_container_tab_modal" style="display:none;"></div>
				<div id="modules_list_loader"><i class="icon-refresh icon-spin"></i></div>
			</div>
		</div>
	</div>
</div>
<?php }} ?>
