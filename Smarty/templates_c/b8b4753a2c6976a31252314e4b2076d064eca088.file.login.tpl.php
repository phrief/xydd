<?php /* Smarty version Smarty-3.1.11, created on 2012-10-06 09:50:29
         compiled from "F:\htdocs\xydd-1.0\templates\login.tpl" */ ?>
<?php /*%%SmartyHeaderCode:8462506ffee57eb889-21095077%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b8b4753a2c6976a31252314e4b2076d064eca088' => 
    array (
      0 => 'F:\\htdocs\\xydd-1.0\\templates\\login.tpl',
      1 => 1349359851,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '8462506ffee57eb889-21095077',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_506ffee5844e62_75178201',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_506ffee5844e62_75178201')) {function content_506ffee5844e62_75178201($_smarty_tpl) {?>﻿<?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

	
    <style>
		#navbar1 {
			margin-bottom: 15px;
		}
	</style>
    
    <script>
		$(document).bind('pageinit', function(){
			var $type = $('fieldset#logintype'),
				$radios = $type.find('input[type=radio]');
				$label = $('label#logintype'),
				$txt = $('#'+ $label.attr('for'));
			
			$radios.bind('change', function(){
				var type = Number($(this).val());
				$label.text(type? '角色名': '角色ID');
				$txt.attr('name', type? 'username': 'userid');
			});
		});
	</script>
    
	<div data-role="content">
    
        <div id="navbar1" data-role="navbar" data-iconpos="left">
            <ul>
                <li>
                    <a href="reg.php" data-theme="" data-icon="plus">
                        角色创建
                    </a>
                </li>
                <li>
                    <a href="#" data-theme="" data-icon="forward" class="ui-btn-active ui-state-persist">
                        进入校园
                    </a>
                </li>
            </ul>
        </div>
    
		<div data-role="collapsible-set" data-theme="" data-content-theme="">
            <div data-role="collapsible" data-collapsed="false">
                <h3>
                    进入校园
                </h3>
                <form id="login" method="POST" action="#">
                
                    <div data-role="fieldcontain">
                        <fieldset id="logintype" data-role="controlgroup" data-type="horizontal">
                            <legend>
                                登录方式
                            </legend>
                            <input name="logintype" id="radio1" value="0" type="radio" checked="checked">
                            <label for="radio1">
                                角色ID
                            </label>
                            <input name="logintype" id="radio2" value="1" type="radio">
                            <label for="radio2">
                                角色名
                            </label>
                        </fieldset>
                    </div>
                
                    <div data-role="fieldcontain">
                        <fieldset data-role="controlgroup">
                            <label id="logintype" for="textinput1">
                                角色ID
                            </label>
                            <input name="userid" id="textinput1" placeholder="" value="" type="text">
                        </fieldset>
                    </div>
                    <div data-role="fieldcontain">
                        <fieldset data-role="controlgroup">
                            <label for="textinput2">
                                密码
                            </label>
                            <input name="userpass" id="textinput2" placeholder="" value="" type="password">
                        </fieldset>
                    </div>
                    <input name="_module" value="login" type="hidden">
                    <input type="submit" value="进入" data-icon="check">
                </form>
            </div>
        </div>
	</div><!-- /content --> 

<?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>