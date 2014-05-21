<?php /* Smarty version Smarty-3.1.11, created on 2012-08-04 03:52:26
         compiled from "..\templates\test\index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:9050501c9c7ac1b921-66542637%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'bc9a981bb11512ee2fc9a81443f6fd7dc97f1823' => 
    array (
      0 => '..\\templates\\test\\index.tpl',
      1 => 1344050937,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '9050501c9c7ac1b921-66542637',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'CSS_PATH' => 0,
    'SELF_NAME' => 0,
    'JS_PATH' => 0,
    'username' => 0,
    'msgset' => 0,
    'msg' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_501c9c7acae399_13928346',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_501c9c7acae399_13928346')) {function content_501c9c7acae399_13928346($_smarty_tpl) {?>﻿<?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('title'=>"我的留言本"), 0);?>


<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['CSS_PATH']->value;?>
<?php echo $_smarty_tpl->tpl_vars['SELF_NAME']->value;?>
.css" />
<script src="<?php echo $_smarty_tpl->tpl_vars['JS_PATH']->value;?>
plugins/form_submit.js"></script>
<script src="<?php echo $_smarty_tpl->tpl_vars['JS_PATH']->value;?>
<?php echo $_smarty_tpl->tpl_vars['SELF_NAME']->value;?>
.js"></script>

<section id="welc_block">你好，
<?php if ($_smarty_tpl->tpl_vars['username']->value!=''){?>
	<span><?php echo $_smarty_tpl->tpl_vars['username']->value;?>
</span>！---- 
	<button id="btn_logout">注销</button>
<?php }else{ ?>
	<span>过客朋友</span>！ -------- 
    <button id="btn_login">登录</button>
	<button id="btn_reg">注册</button>
<?php }?>
</section>

<section id="msg_list">
	<?php  $_smarty_tpl->tpl_vars['msg'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['msg']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['msgset']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['msg']->key => $_smarty_tpl->tpl_vars['msg']->value){
$_smarty_tpl->tpl_vars['msg']->_loop = true;
?>
	<article id="msg_block">
    	<div id="msg_info">
			<div>留言ID: <?php echo $_smarty_tpl->tpl_vars['msg']->value['msgid'];?>
</div>
			<div>用户名: <?php echo $_smarty_tpl->tpl_vars['msg']->value['username'];?>
</div>
			<div>时间: <?php echo $_smarty_tpl->tpl_vars['msg']->value['createtime'];?>
</div>
		</div>
		<div id="msg_content">
			<pre><?php echo $_smarty_tpl->tpl_vars['msg']->value['msgcontent'];?>
</pre>
		</div>
	</article>
	<?php } ?>
</setion>

<section id="msg_write">
    <form id="form_msg">
    	<textarea name="msgcontent"></textarea>
    	<input type="submit" value="留言" />
    </form>
</section>

<?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>