<?php /* Smarty version Smarty-3.1.19, created on 2017-10-11 18:09:41
         compiled from "C:\xampp\htdocs\laquintapatita\modules\anscrolltop\views\templates\front\front.css.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2134459de8895ca9261-10449619%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '38a1b2cc241e7dc6de9cac4a01906d6b7cc59e80' => 
    array (
      0 => 'C:\\xampp\\htdocs\\laquintapatita\\modules\\anscrolltop\\views\\templates\\front\\front.css.tpl',
      1 => 1507756000,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2134459de8895ca9261-10449619',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'BORDER_WIDTH' => 0,
    'BORDER_COLOR' => 0,
    'BORDER_RADIUS' => 0,
    'TOP' => 0,
    'BOTTOM' => 0,
    'LEFT' => 0,
    'RIGHT' => 0,
    'OPACITY' => 0,
    'BUTTON_BG' => 0,
    'BUTTON_WIDTH' => 0,
    'BUTTON_HEIGHT' => 0,
    'FONT_SIZE' => 0,
    'FONT_COLOR' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_59de8895cfb308_09947021',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_59de8895cfb308_09947021')) {function content_59de8895cfb308_09947021($_smarty_tpl) {?>
#scrolltopbtn {
	border: <?php echo intval($_smarty_tpl->tpl_vars['BORDER_WIDTH']->value);?>
px solid <?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['BORDER_COLOR']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
;
	border-radius: <?php echo intval($_smarty_tpl->tpl_vars['BORDER_RADIUS']->value);?>
px;
	position: fixed;
	top: <?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['TOP']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
;
	bottom: <?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['BOTTOM']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
;
	left: <?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['LEFT']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
;
	right: <?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['RIGHT']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
;
	opacity: <?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['OPACITY']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
;
	background-color: <?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['BUTTON_BG']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
;
	width: <?php echo intval($_smarty_tpl->tpl_vars['BUTTON_WIDTH']->value);?>
px;
	height: <?php echo intval($_smarty_tpl->tpl_vars['BUTTON_HEIGHT']->value);?>
px;
	line-height: <?php echo intval($_smarty_tpl->tpl_vars['BUTTON_HEIGHT']->value);?>
px;
	font-size: <?php echo intval($_smarty_tpl->tpl_vars['FONT_SIZE']->value);?>
px;
	color: <?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['FONT_COLOR']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
;
	text-align: center;
	font-size: 32px;
	font-family: "Ionicons";
	cursor: pointer;
	z-index: 9999;

	display: none;

	-webkit-transition: opacity 0.5s linear;
	-moz-transition: opacity 0.5s linear;
	-o-transition: opacity 0.5s linear;
	transition: opacity 0.5s linear;
}

#scrolltopbtn:hover { opacity: 1 }<?php }} ?>
