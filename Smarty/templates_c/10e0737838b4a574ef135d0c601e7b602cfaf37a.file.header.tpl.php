<?php /* Smarty version Smarty-3.1.11, created on 2012-08-27 10:01:13
         compiled from ".\templates\header.tpl" */ ?>
<?php /*%%SmartyHeaderCode:10655503b45694eabb9-55321230%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '10e0737838b4a574ef135d0c601e7b602cfaf37a' => 
    array (
      0 => '.\\templates\\header.tpl',
      1 => 1345979630,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '10655503b45694eabb9-55321230',
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
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_503b4569524623_01994388',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_503b4569524623_01994388')) {function content_503b4569524623_01994388($_smarty_tpl) {?>﻿<!DOCTYPE html>
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
html5shiv.js"></script>
<![endif]-->
<script src="<?php echo $_smarty_tpl->tpl_vars['JS_PATH']->value;?>
plugins/jquery.js"></script>
<script src="<?php echo $_smarty_tpl->tpl_vars['JS_PATH']->value;?>
plugins/ey-lib.js"></script>
<script src="<?php echo $_smarty_tpl->tpl_vars['JS_PATH']->value;?>
plugins/stack.js"></script>
<script src="<?php echo $_smarty_tpl->tpl_vars['JS_PATH']->value;?>
common.js"></script>
</head><body>
<input id="ipt_define" type="hidden" value="
Stack.set('SELF_NAME', '<?php echo $_smarty_tpl->tpl_vars['SELF_NAME']->value;?>
');
Stack.set('CURR_DEEP', <?php echo $_smarty_tpl->tpl_vars['CURR_DEEP']->value;?>
);
Stack.set('CURR_PATH', '<?php echo $_smarty_tpl->tpl_vars['CURR_PATH']->value;?>
');
Stack.set('BASE_PATH', '<?php echo $_smarty_tpl->tpl_vars['BASE_PATH']->value;?>
');
Stack.set('CSS_PATH', '<?php echo $_smarty_tpl->tpl_vars['CSS_PATH']->value;?>
');
Stack.set('JS_PATH', '<?php echo $_smarty_tpl->tpl_vars['JS_PATH']->value;?>
');
Stack.set('IMG_PATH', '<?php echo $_smarty_tpl->tpl_vars['IMG_PATH']->value;?>
');
Stack.set('ALB_PATH', '<?php echo $_smarty_tpl->tpl_vars['ALB_PATH']->value;?>
');
"></input>
<div id="div_container"><?php }} ?>