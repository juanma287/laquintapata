<?php /* Smarty version Smarty-3.1.19, created on 2017-11-07 18:15:15
         compiled from "C:\xampp\htdocs\laquintapatita\themes\agnezit\footer.tpl" */ ?>
<?php /*%%SmartyHeaderCode:259185a022263524aa1-64899749%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'cbe0fd6176a521fa742598aa8dfdd10cd14d7b2e' => 
    array (
      0 => 'C:\\xampp\\htdocs\\laquintapatita\\themes\\agnezit\\footer.tpl',
      1 => 1507755979,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '259185a022263524aa1-64899749',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'content_only' => 0,
    'right_column_size' => 0,
    'HOOK_RIGHT_COLUMN' => 0,
    'HOOK_FOOTER' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5a02226356ee33_28539147',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5a02226356ee33_28539147')) {function content_5a02226356ee33_28539147($_smarty_tpl) {?>
<?php if (!isset($_smarty_tpl->tpl_vars['content_only']->value)||!$_smarty_tpl->tpl_vars['content_only']->value) {?>
					
					<?php if (isset($_smarty_tpl->tpl_vars['right_column_size']->value)&&!empty($_smarty_tpl->tpl_vars['right_column_size']->value)) {?>
						<div id="right_column" class="col-xs-12 col-sm-<?php echo intval($_smarty_tpl->tpl_vars['right_column_size']->value);?>
 column"><?php echo $_smarty_tpl->tpl_vars['HOOK_RIGHT_COLUMN']->value;?>
</div>
					<?php }?>
					</div><!-- .row -->
				</div><!-- #columns -->
			</div><!-- .columns-container -->
			<?php if (isset($_smarty_tpl->tpl_vars['HOOK_FOOTER']->value)) {?>
				<!-- Footer -->
				<div class="footer-container">
					<footer id="footer"  class="container">
						<ul class="custom_footer"><?php echo $_smarty_tpl->tpl_vars['HOOK_FOOTER']->value;?>
</ul>
						<?php if (Module::isEnabled('blocksocial')) {?>
							<?php echo Module::getInstanceByName('blocksocial')->hookDisplayFooter(array());?>

						<?php }?>
					</footer>
					<div class="copyright">
						<div class="container">
							<?php if (Module::isInstalled('blockcms')) {?>
								<?php if (Configuration::get('FOOTER_POWEREDBY')) {?>
								<a class="_blank" href="http://www.prestashop.com"> 			
								&copy; <?php echo date('Y');?>
 <?php echo smartyTranslate(array('s'=>'Ecommerce software by %s','mod'=>'blockcontactinfos','sprintf'=>array('PrestaShop')),$_smarty_tpl);?>

								</a>     
								<?php }?>
							<?php }?>
						</div>
					</div>
				</div><!-- #footer -->
			<?php }?>
		</div><!-- #page -->
<?php }?>
<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['tpl_dir']->value)."./global.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

	</body>
</html><?php }} ?>
