<?php /* Smarty version Smarty-3.1.11, created on 2012-09-04 02:16:20
         compiled from "F:\htdocs\eAl\templates\login.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2561450456474aacd27-14091182%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ef269b2b3d06fd5637e5c5dcb08e5b4765d99cf5' => 
    array (
      0 => 'F:\\htdocs\\eAl\\templates\\login.tpl',
      1 => 1346594076,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2561450456474aacd27-14091182',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'CSS_PATH' => 0,
    'SELF_NAME' => 0,
    'ck_username' => 0,
    'ck_userpswd' => 0,
    'JS_PATH' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_50456474b90bd1_56962236',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_50456474b90bd1_56962236')) {function content_50456474b90bd1_56962236($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('title'=>"用户登录"), 0);?>

<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['CSS_PATH']->value;?>
<?php echo $_smarty_tpl->tpl_vars['SELF_NAME']->value;?>
.css" />

<div id="div_login">
    <h4 class="title">用户登录</h4>
    <form id="form_login">
        <table>
            <tr>
                <td class="first_td"><label for="txt_username">用户名</label></td>
                <td><input id="txt_username" name="username" type="text" value="<?php echo $_smarty_tpl->tpl_vars['ck_username']->value;?>
" /></td>
            </tr>
            <tr>
                <td><label for="txt_userpswd">密码</label></td>
                <td><input id="txt_userpswd" name="userpswd" type="password" value="<?php echo $_smarty_tpl->tpl_vars['ck_userpswd']->value;?>
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
<?php echo $_smarty_tpl->tpl_vars['SELF_NAME']->value;?>
.js"></script>
<?php echo $_smarty_tpl->getSubTemplate ("nav.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>