<?php /* Smarty version Smarty-3.1.19, created on 2017-10-19 22:55:59
         compiled from "C:\xampp\htdocs\laquintapatita\admin_patita\themes\default\template\controllers\carrier_wizard\helpers\view\view.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2160559e957af7e0291-65505394%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3a6c9542d65a56eabbd5f87f808b21636f0b5453' => 
    array (
      0 => 'C:\\xampp\\htdocs\\laquintapatita\\admin_patita\\themes\\default\\template\\controllers\\carrier_wizard\\helpers\\view\\view.tpl',
      1 => 1480102384,
      2 => 'file',
    ),
    'ae0d2e2587bc7e7597903ce9ed1d83584cbb4044' => 
    array (
      0 => 'C:\\xampp\\htdocs\\laquintapatita\\admin_patita\\themes\\default\\template\\helpers\\view\\view.tpl',
      1 => 1480102384,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2160559e957af7e0291-65505394',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'name_controller' => 0,
    'hookName' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_59e957af93fbe1_66508051',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59e957af93fbe1_66508051')) {function content_59e957af93fbe1_66508051($_smarty_tpl) {?>

<div class="leadin"></div>


<script>
	var labelNext = '<?php echo addslashes($_smarty_tpl->tpl_vars['labels']->value['next']);?>
';
	var labelPrevious = '<?php echo addslashes($_smarty_tpl->tpl_vars['labels']->value['previous']);?>
';
	var	labelFinish = '<?php echo addslashes($_smarty_tpl->tpl_vars['labels']->value['finish']);?>
';
	var	labelDelete = '<?php echo smartyTranslate(array('s'=>'Delete','js'=>1),$_smarty_tpl);?>
';
	var	labelValidate = '<?php echo smartyTranslate(array('s'=>'Validate','js'=>1),$_smarty_tpl);?>
';
	var validate_url = '<?php echo addslashes($_smarty_tpl->tpl_vars['validate_url']->value);?>
';
	var carrierlist_url = '<?php echo addslashes($_smarty_tpl->tpl_vars['carrierlist_url']->value);?>
';
	var nbr_steps = <?php echo count($_smarty_tpl->tpl_vars['wizard_steps']->value['steps']);?>
;
	var enableAllSteps = <?php if (intval($_smarty_tpl->tpl_vars['enableAllSteps']->value)==1) {?>true<?php } else { ?>false<?php }?>;
	var need_to_validate = '<?php echo smartyTranslate(array('s'=>'Please validate the last range before create a new one.','js'=>1),$_smarty_tpl);?>
';
	var delete_range_confirm = '<?php echo smartyTranslate(array('s'=>'Are you sure to delete this range ?','js'=>1),$_smarty_tpl);?>
';
	var currency_sign = '<?php echo $_smarty_tpl->tpl_vars['currency_sign']->value;?>
';
	var PS_WEIGHT_UNIT = '<?php echo $_smarty_tpl->tpl_vars['PS_WEIGHT_UNIT']->value;?>
';
	var invalid_range = '<?php echo smartyTranslate(array('s'=>'This range is not valid','js'=>1),$_smarty_tpl);?>
';
	var overlapping_range = '<?php echo smartyTranslate(array('s'=>'Ranges are overlapping','js'=>1),$_smarty_tpl);?>
';
	var range_is_overlapping = '<?php echo smartyTranslate(array('s'=>'Ranges are overlapping','js'=>1),$_smarty_tpl);?>
';
	var select_at_least_one_zone = '<?php echo smartyTranslate(array('s'=>'Please select at least one zone','js'=>1),$_smarty_tpl);?>
';
	var multistore_enable = '<?php echo $_smarty_tpl->tpl_vars['multistore_enable']->value;?>
';
</script>

<div class="row">
	<div class="col-sm-2">
		<?php echo $_smarty_tpl->tpl_vars['logo_content']->value;?>

	</div>
	<div class="col-sm-10">
		<div id="carrier_wizard" class="panel swMain">
			<ul class="steps nbr_steps_<?php echo count($_smarty_tpl->tpl_vars['wizard_steps']->value['steps']);?>
">
			<?php  $_smarty_tpl->tpl_vars['step'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['step']->_loop = false;
 $_smarty_tpl->tpl_vars['step_nbr'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['wizard_steps']->value['steps']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['step']->key => $_smarty_tpl->tpl_vars['step']->value) {
$_smarty_tpl->tpl_vars['step']->_loop = true;
 $_smarty_tpl->tpl_vars['step_nbr']->value = $_smarty_tpl->tpl_vars['step']->key;
?>
				<li>
					<a href="#step-<?php echo $_smarty_tpl->tpl_vars['step_nbr']->value+1;?>
">
						<span class="stepNumber"><?php echo $_smarty_tpl->tpl_vars['step_nbr']->value+1;?>
</span>
						<span class="stepDesc">
							<?php echo $_smarty_tpl->tpl_vars['step']->value['title'];?>
<br />
							<?php if (isset($_smarty_tpl->tpl_vars['step']->value['desc'])) {?><small><?php echo $_smarty_tpl->tpl_vars['step']->value['desc'];?>
</small><?php }?>
						</span>
						<span class="chevron"></span>
					</a>
				</li>
			<?php } ?>
			</ul>
			<?php  $_smarty_tpl->tpl_vars['content'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['content']->_loop = false;
 $_smarty_tpl->tpl_vars['step_nbr'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['wizard_contents']->value['contents']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['content']->key => $_smarty_tpl->tpl_vars['content']->value) {
$_smarty_tpl->tpl_vars['content']->_loop = true;
 $_smarty_tpl->tpl_vars['step_nbr']->value = $_smarty_tpl->tpl_vars['content']->key;
?>
				<div id="step-<?php echo $_smarty_tpl->tpl_vars['step_nbr']->value+1;?>
" class="step_container"> 	
					<?php echo $_smarty_tpl->tpl_vars['content']->value;?>

				</div>
			<?php } ?>
		</div>
	</div>
</div>


<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->smartyHook(array('h'=>'displayAdminView'),$_smarty_tpl);?>

<?php if (isset($_smarty_tpl->tpl_vars['name_controller']->value)) {?>
	<?php $_smarty_tpl->_capture_stack[0][] = array('hookName', 'hookName', null); ob_start(); ?>display<?php echo ucfirst($_smarty_tpl->tpl_vars['name_controller']->value);?>
View<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
	<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->smartyHook(array('h'=>$_smarty_tpl->tpl_vars['hookName']->value),$_smarty_tpl);?>

<?php } elseif (isset($_GET['controller'])) {?>
	<?php $_smarty_tpl->_capture_stack[0][] = array('hookName', 'hookName', null); ob_start(); ?>display<?php echo htmlentities(ucfirst($_GET['controller']));?>
View<?php list($_capture_buffer, $_capture_assign, $_capture_append) = array_pop($_smarty_tpl->_capture_stack[0]);
if (!empty($_capture_buffer)) {
 if (isset($_capture_assign)) $_smarty_tpl->assign($_capture_assign, ob_get_contents());
 if (isset( $_capture_append)) $_smarty_tpl->append( $_capture_append, ob_get_contents());
 Smarty::$_smarty_vars['capture'][$_capture_buffer]=ob_get_clean();
} else $_smarty_tpl->capture_error();?>
	<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0][0]->smartyHook(array('h'=>$_smarty_tpl->tpl_vars['hookName']->value),$_smarty_tpl);?>

<?php }?>
<?php }} ?>