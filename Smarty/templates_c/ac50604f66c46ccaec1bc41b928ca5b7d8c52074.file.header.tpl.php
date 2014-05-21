<?php /* Smarty version Smarty-3.1.11, created on 2012-11-21 19:24:08
         compiled from "F:\htdocs\xydd\templates\header.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2296650acb9d80a6537-13801764%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ac50604f66c46ccaec1bc41b928ca5b7d8c52074' => 
    array (
      0 => 'F:\\htdocs\\xydd\\templates\\header.tpl',
      1 => 1352960223,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2296650acb9d80a6537-13801764',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'title' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_50acb9d80cb0e4_17263714',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_50acb9d80cb0e4_17263714')) {function content_50acb9d80cb0e4_17263714($_smarty_tpl) {?><!DOCTYPE html>
<html>
<head>
    <title>
    <?php if ($_smarty_tpl->tpl_vars['title']->value){?>
        <?php echo $_smarty_tpl->tpl_vars['title']->value;?>

    <?php }else{ ?>
        校园地带
    <?php }?>
    </title>
    
    <?php echo $_smarty_tpl->getSubTemplate ("asset.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

</head>
<body>

<div data-role="page">

	<div data-role="header">
    	<img src="plugins/sina/wbshare.png" class="sinaWb">
		<h3>
        <?php if ($_smarty_tpl->tpl_vars['title']->value){?>
            <?php echo $_smarty_tpl->tpl_vars['title']->value;?>

        <?php }else{ ?>
            校园地带
        <?php }?>
        </h3>
        <a data-role="button" data-icon="info" data-iconpos="notext" title="意见反馈" class="ui-btn-right" data-rel="dialog" href="feedback.php"></a>
	</div><!-- /header --><?php }} ?>