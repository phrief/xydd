<?php /* Smarty version Smarty-3.1.11, created on 2012-08-07 08:57:33
         compiled from "templates\reg.tpl" */ ?>
<?php /*%%SmartyHeaderCode:114915020d87d3dd248-00425461%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd00a5f47841a234260b28b0d187c5c841a0d834c' => 
    array (
      0 => 'templates\\reg.tpl',
      1 => 1344329374,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '114915020d87d3dd248-00425461',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'CSS_PATH' => 0,
    'SELF_NAME' => 0,
    'ck_username' => 0,
    'agreement' => 0,
    'JS_PATH' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_5020d87d49aa33_06766343',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5020d87d49aa33_06766343')) {function content_5020d87d49aa33_06766343($_smarty_tpl) {?>﻿<?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('title'=>"用户注册"), 0);?>

<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['CSS_PATH']->value;?>
loginreg.css" />
<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['CSS_PATH']->value;?>
<?php echo $_smarty_tpl->tpl_vars['SELF_NAME']->value;?>
.css" />
<form id="form_reg">
	<table>
    	<tr>
    		<td><label for="txt_username">用户名</label></td>
   			<td><input id="txt_username" name="username" type="text" value="<?php echo $_smarty_tpl->tpl_vars['ck_username']->value;?>
" /></td>
    	</tr>
        <tr>
            <td><label for="txt_password">密码</label></td>
            <td><input id="txt_password" name="password" type="password" /></td>
        </tr>
        <tr>
    		<td colspan="2">
            	<textarea readonly><?php echo $_smarty_tpl->tpl_vars['agreement']->value;?>
</textarea>
            </td>
        </tr>
    	<tr>
    		<td colspan="2">
            	<label for="chk_login">注册后登录</label>
                <input id="chk_login" name="login" type="checkbox" />
            	<button type="submit">注册</button>
            </td>
        </tr>
    </table>
</form>
<script src="<?php echo $_smarty_tpl->tpl_vars['JS_PATH']->value;?>
plugins/form_submit.js"></script>
<script src="<?php echo $_smarty_tpl->tpl_vars['JS_PATH']->value;?>
loginreg.js"></script>
<script src="<?php echo $_smarty_tpl->tpl_vars['JS_PATH']->value;?>
<?php echo $_smarty_tpl->tpl_vars['SELF_NAME']->value;?>
.js"></script>
<?php echo $_smarty_tpl->getSubTemplate ("loginreg_nav.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>