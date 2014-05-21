<?php /* Smarty version Smarty-3.1.11, created on 2012-11-21 19:24:03
         compiled from "F:\htdocs\xydd\templates\chk_pass.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1864550acb9d3dce716-10871421%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '188e285c6a0ffd28f402316a052de4f47a8bc03f' => 
    array (
      0 => 'F:\\htdocs\\xydd\\templates\\chk_pass.tpl',
      1 => 1353408151,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1864550acb9d3dce716-10871421',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'tableid' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_50acb9d3e28f07_62444068',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_50acb9d3e28f07_62444068')) {function content_50acb9d3e28f07_62444068($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


<script>
var $fm_chkpass, $btn_chkpass;

$(document).one('pageinit', function(){
	$fm_chkpass = $('#fm_chkpass');
	$btn_chkpass = $('#btn_chkpass');
	$btn_chkpass.click(function(){
		$fm_chkpass.submit();
	});
});
</script>

<div data-role="content">
		
    <h3><?php echo $_smarty_tpl->tpl_vars['tableid']->value;?>
号桌设定了密码</h3>
    <form id="fm_chkpass" method="post" action="chatroom.php?table=<?php echo $_smarty_tpl->tpl_vars['tableid']->value;?>
">
        <div data-role="fieldcontain">
            <label for="password">请输入密码:</label>
            <input type="text" name="pass" id="password" />
        </div>
        <input type="hidden" name="_module" value="chk_pass" />
    </form>
    <a data-role="button" data-icon="check" data-inline="true" id="btn_chkpass">进入该桌</a>
    <a data-role="button" data-icon="back" data-rel="back" data-inline="true">返回</a>
    
</div>

<?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php }} ?>