<?php /* Smarty version Smarty-3.1.19, created on 2017-10-13 17:52:50
         compiled from "C:\xampp\htdocs\laquintapatita\themes\agnezit\404.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1905959e127a278ed62-79985737%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c8c48a4ac120699ddc2ad3510b2ff69df69fc294' => 
    array (
      0 => 'C:\\xampp\\htdocs\\laquintapatita\\themes\\agnezit\\404.tpl',
      1 => 1507755979,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1905959e127a278ed62-79985737',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'link' => 0,
    'force_ssl' => 0,
    'base_dir_ssl' => 0,
    'base_dir' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_59e127a27cbc68_80525277',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59e127a27cbc68_80525277')) {function content_59e127a27cbc68_80525277($_smarty_tpl) {?>
<div class="pagenotfound">
	<h1><?php echo smartyTranslate(array('s'=>'This page is not available'),$_smarty_tpl);?>
</h1>

	<p>
		<?php echo smartyTranslate(array('s'=>'We\'re sorry, but the Web address you\'ve entered is no longer available.'),$_smarty_tpl);?>

	</p>

	<h3><?php echo smartyTranslate(array('s'=>'To find a product, please type its name in the field below.'),$_smarty_tpl);?>
</h3>
	<form action="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getPageLink('search'), ENT_QUOTES, 'UTF-8', true);?>
" method="post" class="std">
		<fieldset>
			<div>
				<label for="search_query"><?php echo smartyTranslate(array('s'=>'Search our product catalog:'),$_smarty_tpl);?>
</label>
				<input id="search_query" name="search_query" type="text" class="form-control grey" />
                <button type="submit" name="Submit" value="OK" class="btn btn-default button button-small"><?php echo smartyTranslate(array('s'=>'Ok'),$_smarty_tpl);?>
</button>
			</div>
		</fieldset>
	</form>

	<div class="buttons"><a class="btn btn-default button button-medium" href="<?php if (isset($_smarty_tpl->tpl_vars['force_ssl']->value)&&$_smarty_tpl->tpl_vars['force_ssl']->value) {?><?php echo $_smarty_tpl->tpl_vars['base_dir_ssl']->value;?>
<?php } else { ?><?php echo $_smarty_tpl->tpl_vars['base_dir']->value;?>
<?php }?>" title="<?php echo smartyTranslate(array('s'=>'Home'),$_smarty_tpl);?>
"><i class="icon-chevron-left left"></i><?php echo smartyTranslate(array('s'=>'Home page'),$_smarty_tpl);?>
</a></div>
</div>
<?php }} ?>