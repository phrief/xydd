<?php /* Smarty version Smarty-3.1.11, created on 2012-09-22 07:03:46
         compiled from "F:\htdocs\glife-1.5\templates\login.tpl" */ ?>
<?php /*%%SmartyHeaderCode:22497505d62d2701368-31985587%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '094f297e08986b4e4c951782f431006a1c1cea95' => 
    array (
      0 => 'F:\\htdocs\\glife-1.5\\templates\\login.tpl',
      1 => 1347547330,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '22497505d62d2701368-31985587',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_505d62d2754ca6_09089154',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_505d62d2754ca6_09089154')) {function content_505d62d2754ca6_09089154($_smarty_tpl) {?>﻿<?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('nav'=>"reglogin"), 0);?>

	
    <style>
		#navbar1 {
			margin-bottom: 15px;
		}
	</style>
    
    <script>
		$(document).bind('pageinit', function(){
			// form login
			var $form = $('form#login');
			
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