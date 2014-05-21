<?php /* Smarty version Smarty-3.1.11, created on 2012-09-05 01:02:09
         compiled from "F:\htdocs\eAl\templates\welcome.tpl" */ ?>
<?php /*%%SmartyHeaderCode:203495046a49130b219-02457740%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '36141d5a633a33796ed92c6890e3a5a3a7c15b80' => 
    array (
      0 => 'F:\\htdocs\\eAl\\templates\\welcome.tpl',
      1 => 1346324646,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '203495046a49130b219-02457740',
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
  'unifunc' => 'content_5046a491331ce2_40319987',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5046a491331ce2_40319987')) {function content_5046a491331ce2_40319987($_smarty_tpl) {?><link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['CSS_PATH']->value;?>
welcome.css" />

<div id="div_welc">你好，
<?php if ($_smarty_tpl->tpl_vars['username']->value==''){?>
	<span>过客朋友</span>！ -------- 
    <button id="btn_login">登录</button>
	<button id="btn_reg">注册</button>
<?php }else{ ?>
    <span><?php echo $_smarty_tpl->tpl_vars['username']->value;?>
</span>！---- 
	<button id="btn_logout">注销</button>
<?php }?>
</div>

<script src="<?php echo $_smarty_tpl->tpl_vars['JS_PATH']->value;?>
welcome.js"></script><?php }} ?>