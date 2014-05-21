<?php /* Smarty version Smarty-3.1.11, created on 2012-11-21 19:17:49
         compiled from "F:\htdocs\xydd\templates\login.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1020450acb85db44407-13925226%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7531351694f32807fe9417c451ac0f711058d248' => 
    array (
      0 => 'F:\\htdocs\\xydd\\templates\\login.tpl',
      1 => 1352890672,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1020450acb85db44407-13925226',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_50acb85db98232_65808373',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_50acb85db98232_65808373')) {function content_50acb85db98232_65808373($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

	
    <style>
		#navbar1 {
			margin-bottom: 15px;
		}
		span.reg {
			color: red;
		}
	</style>
    
    <script>
		var $fm_login, $rd_logintype, $lb_login, $ipt_login;
		
		$(document).one('pageinit', function(){
			$fm_login = $('#form_login' );
			$rd_logintype = $('#fs_logintype').find('input[type=radio]');
			$lb_login = $('#lb_login');
			$ipt_login = $('#ipt_login');
			
			$rd_logintype.bind('change', function(){
				var type = Number($(this).val());
				$lb_login.text(type? '用户ID': '用户名');
				$ipt_login.attr('name', type? 'userid': 'username');
			});
		});
	</script>
    
	<div data-role="content">
    
        <div id="navbar1" data-role="navbar" data-iconpos="left">
            <ul>
                <li>
                    <a data-icon="plus" href="reg.php">
                        <span class="reg">用户注册</span>
                    </a>
                </li>
                <li>
                    <a data-icon="forward" class="ui-btn-active ui-state-persist" href="login.php">
                        进入校园
                    </a>
                </li>
            </ul>
        </div>
    
        <div data-role="collapsible" data-collapsed="false" data-theme="a">
            <h3>进入校园</h3>
            <form id="form_login" method="POST" action="login.php">
                <div data-role="fieldcontain">
                    <fieldset data-role="controlgroup" data-type="horizontal" id="fs_logintype">
                        <legend>登录方式</legend>
                        <input name="logintype" id="radio1" value="0" type="radio" checked="checked">
                        <label for="radio1">用户名</label>
                        <input name="logintype" id="radio2" value="1" type="radio">
                        <label for="radio2">用户ID</label>
                    </fieldset>
                </div>
            
                <div data-role="fieldcontain">
                    <label for="ipt_login" id="lb_login">用户名</label>
                    <input name="username" id="ipt_login" value="" type="text">
                </div>
                <div data-role="fieldcontain">
                    <label for="textinput2">密码</label>
                    <input name="userpass" id="textinput2" value="" type="password">
                </div>
                <input name="_module" value="login" type="hidden">
                <input type="submit" value="进入" data-icon="check">
            </form>
        </div>
        
	</div><!-- /content --> 

<?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>