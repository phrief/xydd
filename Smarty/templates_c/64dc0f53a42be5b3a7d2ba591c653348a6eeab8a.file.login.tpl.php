<?php /* Smarty version Smarty-3.1.11, created on 2012-08-07 08:07:13
         compiled from "templates\login.tpl" */ ?>
<?php /*%%SmartyHeaderCode:293045020ccb1bba814-10017323%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '64dc0f53a42be5b3a7d2ba591c653348a6eeab8a' => 
    array (
      0 => 'templates\\login.tpl',
      1 => 1344326120,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '293045020ccb1bba814-10017323',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'CSS_PATH' => 0,
    'SELF_NAME' => 0,
    'ck_username' => 0,
    'ck_password' => 0,
    'JS_PATH' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_5020ccb1c66f88_86260073',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5020ccb1c66f88_86260073')) {function content_5020ccb1c66f88_86260073($_smarty_tpl) {?>﻿<?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('title'=>"用户登录"), 0);?>

<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['CSS_PATH']->value;?>
loginreg.css" />
<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['CSS_PATH']->value;?>
<?php echo $_smarty_tpl->tpl_vars['SELF_NAME']->value;?>
.css" />
<div id="div_login">
<form id="form_login">
    <table>
    	<tr>
    		<td><label for="txt_username">用户名</label></td>
   			<td><input id="txt_username" name="username" type="text" value="<?php echo $_smarty_tpl->tpl_vars['ck_username']->value;?>
" /></td>
    	</tr>
        <tr>
            <td><label for="txt_password">密码</label></td>
            <td><input id="txt_password" name="password" type="password" value="<?php echo $_smarty_tpl->tpl_vars['ck_password']->value;?>
" /></td>
        </tr>
    	<tr>
        	<td colspan="2">
            	<label for="chk_remember">记住密码</label>
                <input id="chk_remember" name="remember" type="checkbox" />
                <button type="submit">登录</button>
            </td>
        </tr>
	</table>
</form>
</div>
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