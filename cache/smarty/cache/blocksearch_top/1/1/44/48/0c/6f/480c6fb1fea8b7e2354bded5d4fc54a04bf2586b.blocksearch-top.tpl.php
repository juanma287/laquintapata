<?php /*%%SmartyHeaderCode:2840959de88f27dbdc4-56986912%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '480c6fb1fea8b7e2354bded5d4fc54a04bf2586b' => 
    array (
      0 => 'C:\\xampp\\htdocs\\laquintapatita\\themes\\agnezit\\modules\\blocksearch\\blocksearch-top.tpl',
      1 => 1507755989,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2840959de88f27dbdc4-56986912',
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_59dfe917420b27_53211049',
  'has_nocache_code' => false,
  'cache_lifetime' => 31536000,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59dfe917420b27_53211049')) {function content_59dfe917420b27_53211049($_smarty_tpl) {?><!-- Block search module TOP -->
<div id="search_block_top" class="hide_content">
	<form id="searchbox" method="get" action="//localhost/laquintapatita/buscar" >
		<input type="hidden" name="controller" value="search" />
		<input type="hidden" name="orderby" value="position" />
		<input type="hidden" name="orderway" value="desc" />
		<input class="search_query" type="text" id="search_query_top" name="search_query" placeholder="Buscar" value="" />
		<button type="submit" name="submit_search" class="btn btn-default button-search">
			Buscar
		</button>
	</form>
</div>
<!-- /Block search module TOP --><?php }} ?>
