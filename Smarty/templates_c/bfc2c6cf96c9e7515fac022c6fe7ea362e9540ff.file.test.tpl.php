<?php /* Smarty version Smarty-3.1.11, created on 2012-08-27 10:52:37
         compiled from "F:\htdocs\eAl\templates\test.tpl" */ ?>
<?php /*%%SmartyHeaderCode:15895503b51754c2872-91045187%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'bfc2c6cf96c9e7515fac022c6fe7ea362e9540ff' => 
    array (
      0 => 'F:\\htdocs\\eAl\\templates\\test.tpl',
      1 => 1346064752,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '15895503b51754c2872-91045187',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'albumstyle' => 0,
    'photonum' => 0,
    'albumtitle' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_503b5175518f51_62669511',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_503b5175518f51_62669511')) {function content_503b5175518f51_62669511($_smarty_tpl) {?>﻿<!DOCTYPE html>
<html lang="zh-cn">
<head>
<meta charset="utf-8" />
<script src="./js/plugins/jquery.js"></script>
<script src="./js/plugins/ocanvas.js"></script>
<script src="./js/plugins/ey-lib.js"></script>
<script src="./js/plugins/eAl-ocanvas.js"></script>
<script>alert($);alert(oCanvas);</script>
</head>
<body>
<input id="ipt_albumstyle" type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['albumstyle']->value;?>
" />
<input id="ipt_photonum" type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['photonum']->value;?>
" />
<h3><?php echo $_smarty_tpl->tpl_vars['albumtitle']->value;?>
</h3>
<div id="div_main">
    <canvas id="cvs_main"></canvas>
</div>
</body>
</html><?php }} ?>