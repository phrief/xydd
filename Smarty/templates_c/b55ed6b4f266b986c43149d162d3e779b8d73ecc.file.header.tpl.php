<?php /* Smarty version Smarty-3.1.11, created on 2012-08-04 03:52:26
         compiled from "..\templates\header.tpl" */ ?>
<?php /*%%SmartyHeaderCode:10635501c9c7acc3c60-21022739%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b55ed6b4f266b986c43149d162d3e779b8d73ecc' => 
    array (
      0 => '..\\templates\\header.tpl',
      1 => 1344049842,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '10635501c9c7acc3c60-21022739',
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
  'unifunc' => 'content_501c9c7ace9a44_80824305',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_501c9c7ace9a44_80824305')) {function content_501c9c7ace9a44_80824305($_smarty_tpl) {?>﻿<!DOCTYPE html>
<html lang="zh-cn"><head>
<meta charset="utf-8" />
<title><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</title>
<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['CSS_PATH']->value;?>
common.css" />
<script src="<?php echo $_smarty_tpl->tpl_vars['JS_PATH']->value;?>
plugins/jquery.js"></script>
<script src="<?php echo $_smarty_tpl->tpl_vars['JS_PATH']->value;?>
plugins/global.js"></script>
<script src="<?php echo $_smarty_tpl->tpl_vars['JS_PATH']->value;?>
common.js"></script>
</head><body>
<section id="sec_globalConst">
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
</section>
<div id="container"><?php }} ?>