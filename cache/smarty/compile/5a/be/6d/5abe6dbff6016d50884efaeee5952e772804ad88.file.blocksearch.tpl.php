<?php /* Smarty version Smarty-3.1.19, created on 2017-10-11 00:29:40
         compiled from "C:\xampp\htdocs\laquintapatita\themes\default-bootstrap\modules\blocksearch\blocksearch.tpl" */ ?>
<?php /*%%SmartyHeaderCode:362259dd49d42ef9a5-37226932%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5abe6dbff6016d50884efaeee5952e772804ad88' => 
    array (
      0 => 'C:\\xampp\\htdocs\\laquintapatita\\themes\\default-bootstrap\\modules\\blocksearch\\blocksearch.tpl',
      1 => 1480102388,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '362259dd49d42ef9a5-37226932',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'link' => 0,
    'search_query' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_59dd49d430af38_53294940',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59dd49d430af38_53294940')) {function content_59dd49d430af38_53294940($_smarty_tpl) {?>

<!-- Block search module -->
<div id="search_block_left" class="block exclusive">
	<p class="title_block"><?php echo smartyTranslate(array('s'=>'Search','mod'=>'blocksearch'),$_smarty_tpl);?>
</p>
	<form method="get" action="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getPageLink('search',true,null,null,false,null,true), ENT_QUOTES, 'UTF-8', true);?>
" id="searchbox">
    	<label for="search_query_block"><?php echo smartyTranslate(array('s'=>'Search products:','mod'=>'blocksearch'),$_smarty_tpl);?>
</label>
		<p class="block_content clearfix">
			<input type="hidden" name="orderby" value="position" />
			<input type="hidden" name="controller" value="search" />
			<input type="hidden" name="orderway" value="desc" />
			<input class="search_query form-control grey" type="text" id="search_query_block" name="search_query" value="<?php echo stripslashes(mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['search_query']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8'));?>
" />
			<button type="submit" id="search_button" class="btn btn-default button button-small"><span><i class="icon-search"></i></span></button>
		</p>
	</form>
</div>
<!-- /Block search module --><?php }} ?>
