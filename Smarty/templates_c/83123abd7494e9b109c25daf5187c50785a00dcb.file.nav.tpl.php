<?php /* Smarty version Smarty-3.1.11, created on 2012-09-04 02:22:01
         compiled from "F:\htdocs\eAl\templates\nav.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1681504565c97cf712-68551789%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '83123abd7494e9b109c25daf5187c50785a00dcb' => 
    array (
      0 => 'F:\\htdocs\\eAl\\templates\\nav.tpl',
      1 => 1346594106,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1681504565c97cf712-68551789',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'CSS_PATH' => 0,
    'JS_PATH' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_504565c97d98b5_02623396',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_504565c97d98b5_02623396')) {function content_504565c97d98b5_02623396($_smarty_tpl) {?><link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['CSS_PATH']->value;?>
nav.css" />
<div id="div_nav">
	<button id="btn_back">返回首页</button>
</div>
<script src="<?php echo $_smarty_tpl->tpl_vars['JS_PATH']->value;?>
nav.js"></script><?php }} ?>