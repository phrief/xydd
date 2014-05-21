<?php /* Smarty version Smarty-3.1.11, created on 2012-08-27 10:01:13
         compiled from ".\templates\welcome.tpl" */ ?>
<?php /*%%SmartyHeaderCode:23276503b456953a845-01728816%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '87c71847c08f15f0777b556bcaec079d8db5d91b' => 
    array (
      0 => '.\\templates\\welcome.tpl',
      1 => 1345948379,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '23276503b456953a845-01728816',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'CSS_PATH' => 0,
    'username' => 0,
    'JS_PATH' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_503b45695558c9_65919640',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_503b45695558c9_65919640')) {function content_503b45695558c9_65919640($_smarty_tpl) {?>﻿<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['CSS_PATH']->value;?>
welcome.css" />

<section id="sec_welc">你好，
<?php if ($_smarty_tpl->tpl_vars['username']->value==''){?>
	<span>过客朋友</span>！ -------- 
    <button id="btn_login">登录</button>
	<button id="btn_reg">注册</button>
<?php }else{ ?>
    <span><?php echo $_smarty_tpl->tpl_vars['username']->value;?>
</span>！---- 
	<button id="btn_logout">注销</button>
<?php }?>
</section>

<script src="<?php echo $_smarty_tpl->tpl_vars['JS_PATH']->value;?>
welcome.js"></script><?php }} ?>