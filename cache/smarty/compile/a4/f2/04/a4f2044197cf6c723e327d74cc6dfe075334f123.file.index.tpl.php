<?php /* Smarty version Smarty-3.1.19, created on 2017-10-25 19:16:10
         compiled from "C:\xampp\htdocs\laquintapatita\themes\agnezit\index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:3179959f10d2a7cd4f9-33105552%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a4f2044197cf6c723e327d74cc6dfe075334f123' => 
    array (
      0 => 'C:\\xampp\\htdocs\\laquintapatita\\themes\\agnezit\\index.tpl',
      1 => 1507755982,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3179959f10d2a7cd4f9-33105552',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'HOOK_HOME_TAB_CONTENT' => 0,
    'HOOK_HOME_TAB' => 0,
    'HOOK_HOME' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_59f10d2a8fdff1_74670911',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59f10d2a8fdff1_74670911')) {function content_59f10d2a8fdff1_74670911($_smarty_tpl) {?>


<?php if (Module::isEnabled('an_staticblocks')&&(Module::getInstanceByName('an_staticblocks')->isEnabledBlock('advantage1')||Module::getInstanceByName('an_staticblocks')->isEnabledBlock('advantage2')||Module::getInstanceByName('an_staticblocks')->isEnabledBlock('advantage3'))) {?>
	<div class="advantage_wr clearfix">
		<?php if (Module::isEnabled('an_staticblocks')&&Module::getInstanceByName('an_staticblocks')->isEnabledBlock('advantage1')) {?>
			<div class="advantage <?php if (Module::getInstanceByName('an_staticblocks')->isEnabledBlock('advantage2')&&Module::getInstanceByName('an_staticblocks')->isEnabledBlock('advantage3')) {?> 
					col-sm-4
				<?php } elseif (Module::getInstanceByName('an_staticblocks')->isEnabledBlock('advantage2')||Module::getInstanceByName('an_staticblocks')->isEnabledBlock('advantage3')) {?> 
					col-sm-6
				<?php } else { ?>
					col-sm-12
				<?php }?>">
				<?php echo Module::getInstanceByName('an_staticblocks')->getBlock('advantage1','advantage.tpl');?>

			</div>
		<?php }?>

		<?php if (Module::isEnabled('an_staticblocks')&&Module::getInstanceByName('an_staticblocks')->isEnabledBlock('advantage2')) {?>
			<div class="advantage <?php if (Module::getInstanceByName('an_staticblocks')->isEnabledBlock('advantage1')&&Module::getInstanceByName('an_staticblocks')->isEnabledBlock('advantage3')) {?> 
					col-sm-4 
					advantage_border
				<?php } elseif (Module::getInstanceByName('an_staticblocks')->isEnabledBlock('advantage1')||Module::getInstanceByName('an_staticblocks')->isEnabledBlock('advantage3')) {?> 
					col-sm-6
				<?php } else { ?>
					col-sm-12
				<?php }?>">
				<?php echo Module::getInstanceByName('an_staticblocks')->getBlock('advantage2','advantage.tpl');?>

			</div>
		<?php }?>

		<?php if (Module::isEnabled('an_staticblocks')&&Module::getInstanceByName('an_staticblocks')->isEnabledBlock('advantage3')) {?>
			<div class="advantage <?php if (Module::getInstanceByName('an_staticblocks')->isEnabledBlock('advantage1')&&Module::getInstanceByName('an_staticblocks')->isEnabledBlock('advantage2')) {?> 
					col-sm-4
				<?php } elseif (Module::getInstanceByName('an_staticblocks')->isEnabledBlock('advantage1')||Module::getInstanceByName('an_staticblocks')->isEnabledBlock('advantage2')) {?> 
					col-sm-6
				<?php } else { ?>
					col-sm-12
				<?php }?>">
				<?php echo Module::getInstanceByName('an_staticblocks')->getBlock('advantage3','advantage.tpl');?>

			</div>
		<?php }?>
	</div>
<?php }?>




<?php if (isset($_smarty_tpl->tpl_vars['HOOK_HOME_TAB_CONTENT']->value)&&trim($_smarty_tpl->tpl_vars['HOOK_HOME_TAB_CONTENT']->value)) {?>
    <?php if (isset($_smarty_tpl->tpl_vars['HOOK_HOME_TAB']->value)&&trim($_smarty_tpl->tpl_vars['HOOK_HOME_TAB']->value)) {?>
        <ul id="home-page-tabs" class="nav nav-tabs clearfix">
			<?php echo $_smarty_tpl->tpl_vars['HOOK_HOME_TAB']->value;?>

		</ul>
	<?php }?>
	<div class="tab-content"><?php echo $_smarty_tpl->tpl_vars['HOOK_HOME_TAB_CONTENT']->value;?>
</div>
<?php }?>



<?php if (isset($_smarty_tpl->tpl_vars['HOOK_HOME']->value)&&trim($_smarty_tpl->tpl_vars['HOOK_HOME']->value)) {?>
	<div class="clearfix"><?php echo $_smarty_tpl->tpl_vars['HOOK_HOME']->value;?>
</div>
<?php }?>



<?php if (Module::isEnabled('an_staticblocks')&&(Module::getInstanceByName('an_staticblocks')->isEnabledBlock('top_static1')||Module::getInstanceByName('an_staticblocks')->isEnabledBlock('top_static2')||Module::getInstanceByName('an_staticblocks')->isEnabledBlock('top_static3'))) {?>
	<div class="top_static_wr clearfix">
		<?php if (Module::getInstanceByName('an_staticblocks')->isEnabledBlock('top_static1')) {?>
			<div class="top_static <?php if (Module::getInstanceByName('an_staticblocks')->isEnabledBlock('top_static2')&&Module::getInstanceByName('an_staticblocks')->isEnabledBlock('top_static3')) {?> 
					col-sm-4
				<?php } elseif (Module::getInstanceByName('an_staticblocks')->isEnabledBlock('top_static2')||Module::getInstanceByName('an_staticblocks')->isEnabledBlock('top_static3')) {?> 
					col-sm-12 col-md-6
				<?php } else { ?>
					col-sm-12
				<?php }?>">
				<?php echo Module::getInstanceByName('an_staticblocks')->getBlock('top_static1','top_static.tpl');?>

			</div>
		<?php }?>

		<?php if (Module::getInstanceByName('an_staticblocks')->isEnabledBlock('top_static2')) {?>
			<div class="top_static <?php if (Module::getInstanceByName('an_staticblocks')->isEnabledBlock('top_static1')&&Module::getInstanceByName('an_staticblocks')->isEnabledBlock('top_static3')) {?> 
					col-sm-4 
					bordered_top_static
				<?php } elseif (Module::getInstanceByName('an_staticblocks')->isEnabledBlock('top_static1')||Module::getInstanceByName('an_staticblocks')->isEnabledBlock('top_static3')) {?> 
					col-sm-12 col-md-6
				<?php } else { ?>
					col-sm-12
				<?php }?>">
				<?php echo Module::getInstanceByName('an_staticblocks')->getBlock('top_static2','top_static.tpl');?>

			</div>
		<?php }?>

		<?php if (Module::getInstanceByName('an_staticblocks')->isEnabledBlock('top_static3')) {?>
			<div class="top_static <?php if (Module::getInstanceByName('an_staticblocks')->isEnabledBlock('top_static1')&&Module::getInstanceByName('an_staticblocks')->isEnabledBlock('top_static2')) {?> 
					col-sm-4
				<?php } elseif (Module::getInstanceByName('an_staticblocks')->isEnabledBlock('top_static1')||Module::getInstanceByName('an_staticblocks')->isEnabledBlock('top_static2')) {?> 
					col-sm-12 col-md-6
				<?php } else { ?>
					col-sm-12
				<?php }?>">
				<?php echo Module::getInstanceByName('an_staticblocks')->getBlock('top_static3','top_static.tpl');?>

			</div>
		<?php }?>
	</div>
<?php }?>


<?php if (Module::isEnabled('blocknewsletter')) {?>
<?php echo Module::getInstanceByName('blocknewsletter')->hookFooter(array());?>

<?php }?>

<?php }} ?>
