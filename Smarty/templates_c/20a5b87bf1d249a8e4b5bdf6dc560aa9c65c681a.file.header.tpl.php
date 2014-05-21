<?php /* Smarty version Smarty-3.1.11, created on 2012-08-07 09:03:18
         compiled from "templates\header.tpl" */ ?>
<?php /*%%SmartyHeaderCode:271505020d9d66e9398-56006424%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '20a5b87bf1d249a8e4b5bdf6dc560aa9c65c681a' => 
    array (
      0 => 'templates\\header.tpl',
      1 => 1344310561,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '271505020d9d66e9398-56006424',
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
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_5020d9d6726d25_83111829',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5020d9d6726d25_83111829')) {function content_5020d9d6726d25_83111829($_smarty_tpl) {?>﻿<!DOCTYPE html>
<html lang="zh-cn"><head>
<meta charset="utf-8" />
<title><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</title>
<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['CSS_PATH']->value;?>
common.css" />
<!--[if IE]>
<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['CSS_PATH']->value;?>
ie_style.css" />
<script src="<?php echo $_smarty_tpl->tpl_vars['JS_PATH']->value;?>
html5shiv.js"></script>
<![endif]-->
<script src="<?php echo $_smarty_tpl->tpl_vars['JS_PATH']->value;?>
plugins/jquery.js"></script>
<script src="<?php echo $_smarty_tpl->tpl_vars['JS_PATH']->value;?>
plugins/global.js"></script>
<script src="<?php echo $_smarty_tpl->tpl_vars['JS_PATH']->value;?>
common.js"></script>
</head><body>
<div id="div_globalConst">
    <input type="hidden" id="SELF_NAME" value="<?php echo $_smarty_tpl->tpl_vars['SELF_NAME']->value;?>
" />
    <input type="hidden" id="CURR_DEEP" value="<?php echo $_smarty_tpl->tpl_vars['CURR_DEEP']->value;?>
" />
    <input type="hidden" id="CURR_PATH" value="<?php echo $_smarty_tpl->tpl_vars['CURR_PATH']->value;?>
" />
    <input type="hidden" id="BASE_PATH" value="<?php echo $_smarty_tpl->tpl_vars['BASE_PATH']->value;?>
" />
    <input type="hidden" id="CSS_PATH" value="<?php echo $_smarty_tpl->tpl_vars['CSS_PATH']->value;?>
" />
    <input type="hidden" id="JS_PATH" value="<?php echo $_smarty_tpl->tpl_vars['JS_PATH']->value;?>
" />
</div>
<div id="div_container"><?php }} ?>