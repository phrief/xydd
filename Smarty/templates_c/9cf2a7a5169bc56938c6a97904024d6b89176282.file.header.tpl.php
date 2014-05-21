<?php /* Smarty version Smarty-3.1.11, created on 2012-09-05 01:02:09
         compiled from "F:\htdocs\eAl\templates\header.tpl" */ ?>
<?php /*%%SmartyHeaderCode:168525046a491181281-31905709%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9cf2a7a5169bc56938c6a97904024d6b89176282' => 
    array (
      0 => 'F:\\htdocs\\eAl\\templates\\header.tpl',
      1 => 1346593681,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '168525046a491181281-31905709',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'title' => 0,
    'CSS_PATH' => 0,
    'JS_PATH' => 0,
    'SELF_NAME' => 0,
    'CURR_DEEP' => 0,
    'CURR_PATH' => 0,
    'BASE_PATH' => 0,
    'IMG_PATH' => 0,
    'ALB_PATH' => 0,
    'CHK_PATH' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_5046a491244801_33205268',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5046a491244801_33205268')) {function content_5046a491244801_33205268($_smarty_tpl) {?><!DOCTYPE html>
<html lang="zh-cn"><head>
<meta charset="utf-8" />
<title><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</title>
<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['CSS_PATH']->value;?>
common.css" />
<!--[if IE]>
<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['CSS_PATH']->value;?>
ie_style.css" />
<![endif]-->
<!--[if lt IE 9]>
<script src="<?php echo $_smarty_tpl->tpl_vars['JS_PATH']->value;?>
plugins/html5shiv.js"></script>
<![endif]-->
<script src="<?php echo $_smarty_tpl->tpl_vars['JS_PATH']->value;?>
plugins/jquery-x.js"></script>
<script src="<?php echo $_smarty_tpl->tpl_vars['JS_PATH']->value;?>
plugins/ey-lib.js"></script>
<script src="<?php echo $_smarty_tpl->tpl_vars['JS_PATH']->value;?>
plugins/go_top.js"></script>
<script src="<?php echo $_smarty_tpl->tpl_vars['JS_PATH']->value;?>
common.js"></script>
<script>
// global
var SELF_NAME = '<?php echo $_smarty_tpl->tpl_vars['SELF_NAME']->value;?>
',
	CURR_DEEP = '<?php echo $_smarty_tpl->tpl_vars['CURR_DEEP']->value;?>
',
	CURR_PATH = '<?php echo $_smarty_tpl->tpl_vars['CURR_PATH']->value;?>
',
	BASE_PATH = '<?php echo $_smarty_tpl->tpl_vars['BASE_PATH']->value;?>
',
	CSS_PATH =  '<?php echo $_smarty_tpl->tpl_vars['CSS_PATH']->value;?>
',
	JS_PATH = '<?php echo $_smarty_tpl->tpl_vars['JS_PATH']->value;?>
',
	IMG_PATH = '<?php echo $_smarty_tpl->tpl_vars['IMG_PATH']->value;?>
',
	ALB_PATH = '<?php echo $_smarty_tpl->tpl_vars['ALB_PATH']->value;?>
',
	CHK_PATH = '<?php echo $_smarty_tpl->tpl_vars['CHK_PATH']->value;?>
';
CURR_DEEP = Number(CURR_DEEP);
</script>
</head><body>
<div id="div_container">
<?php echo $_smarty_tpl->getSubTemplate ("welcome.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>