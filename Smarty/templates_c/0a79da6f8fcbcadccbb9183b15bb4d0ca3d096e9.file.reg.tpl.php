<?php /* Smarty version Smarty-3.1.11, created on 2012-09-03 01:37:44
         compiled from "F:\htdocs\eAl\templates\reg.tpl" */ ?>
<?php /*%%SmartyHeaderCode:27440504409e88cad85-15910185%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0a79da6f8fcbcadccbb9183b15bb4d0ca3d096e9' => 
    array (
      0 => 'F:\\htdocs\\eAl\\templates\\reg.tpl',
      1 => 1346594070,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '27440504409e88cad85-15910185',
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
  'unifunc' => 'content_504409e89c77d8_78574254',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_504409e89c77d8_78574254')) {function content_504409e89c77d8_78574254($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('title'=>"用户注册"), 0);?>

<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['CSS_PATH']->value;?>
<?php echo $_smarty_tpl->tpl_vars['SELF_NAME']->value;?>
.css" />

<div id="div_reg">
    <h4 class="title">用户注册</h4>
    <form id="form_reg">
        <table>
            <tr>
                <td class="first_td"><label for="txt_username">用户名</label></td>
                <td><input id="txt_username" name="username" type="text" value="<?php echo $_smarty_tpl->tpl_vars['ck_username']->value;?>
" /></td>
            </tr>
            <tr>
                <td><label for="txt_userpswd">密码</label></td>
                <td><input id="txt_userpswd" name="userpswd" type="password" /></td>
            </tr>
            <tr>
                <td colspan="2">
                    <label for="txt_agreement">阅读本站相关条款</label>
                    <textarea id="txt_agreement" readonly><?php echo $_smarty_tpl->tpl_vars['agreement']->value;?>
</textarea>
                    <input id="rdo_agree" name="agree" type="radio" value="1" />
                    <label for="rdo_agree">我同意条款</label>
                    <input id="rdo_disagree" name="agree" type="radio" value="" checked />
                    <label for="rdo_disagree">我不同意条款</label>
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
</div>

<script src="<?php echo $_smarty_tpl->tpl_vars['JS_PATH']->value;?>
plugins/form_submit.js"></script>
<script src="<?php echo $_smarty_tpl->tpl_vars['JS_PATH']->value;?>
<?php echo $_smarty_tpl->tpl_vars['SELF_NAME']->value;?>
.js"></script>
<?php echo $_smarty_tpl->getSubTemplate ("nav.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>