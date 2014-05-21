<?php /* Smarty version Smarty-3.1.11, created on 2012-09-08 07:06:40
         compiled from "F:\htdocs\glife-0.1\templates\reg.tpl" */ ?>
<?php /*%%SmartyHeaderCode:27350504aee80558da6-04175326%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '84d9d9cc5707512b5b190709e86ee75005a11b57' => 
    array (
      0 => 'F:\\htdocs\\glife-0.1\\templates\\reg.tpl',
      1 => 1347084627,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '27350504aee80558da6-04175326',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_504aee805b2318_98465313',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_504aee805b2318_98465313')) {function content_504aee805b2318_98465313($_smarty_tpl) {?>﻿<?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('nav'=>"reglogin"), 0);?>

	
    <style>
		#navbar1 {
			margin-bottom: 15px;
		}
	</style>
    
    <script>
		$(document).bind('pageinit', function(){
			// form reg
			var $form = $('form#reg');
			$form.data('success', function(data){
				data = eval('data='+ data);	// enable json
				showMessage(data.msg);
			});
		});
	</script>
    
	<div data-role="content">
    
        <div id="navbar1" data-role="navbar" data-iconpos="left">
            <ul>
                <li>
                    <a href="#" data-theme="" data-icon="plus" class="ui-btn-active ui-state-persist">
                        角色创建
                    </a>
                </li>
                <li>
                    <a href="login.php" data-theme="" data-icon="forward">
                        进入校园
                    </a>
                </li>
            </ul>
        </div>
    
		<div data-role="collapsible-set" data-theme="" data-content-theme="">
            <div data-role="collapsible" data-collapsed="false">
                <h3>
                    角色创建
                </h3>
                <form id="reg" action="#" method="POST">
                    <div data-role="fieldcontain">
                        <fieldset data-role="controlgroup">
                            <label for="textinput1">
                                角色名
                            </label>
                            <input name="username" id="textinput1" placeholder="" value="" type="text">
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
                    <div data-role="fieldcontain">
                        <fieldset data-role="controlgroup" data-type="vertical">
                            <legend>
                                性别
                            </legend>
                            <input name="sex" id="radio1" value="0" type="radio" checked="checked">
                            <label for="radio1">
                                GG
                            </label>
                            <input name="sex" id="radio2" value="1" type="radio">
                            <label for="radio2">
                                MM
                            </label>
                        </fieldset>
                    </div>
                    <div data-role="fieldcontain">
                        <fieldset data-role="controlgroup" data-type="vertical">
                            <legend>
                                在习学院
                            </legend>
                            <input name="college" id="radio5" value="0" type="radio" checked="checked">
                            <label for="radio5">
                                体育学院
                            </label>
                            <input name="college" id="radio6" value="1" type="radio">
                            <label for="radio6">
                                文学院
                            </label>
                            <input name="college" id="radio7" value="2" type="radio">
                            <label for="radio7">
                                经管学院
                            </label>
                            <input name="college" id="radio8" value="3" type="radio">
                            <label for="radio8">
                                计算机学院
                            </label>
                            <input name="college" id="radio9" value="4" type="radio">
                            <label for="radio9">
                                艺术学院
                            </label>
                        </fieldset>
                    </div>
                    <div data-role="fieldcontain">
                        <fieldset data-role="controlgroup" data-type="vertical">
                            <legend>
                                创建后
                            </legend>
                            <input name="login" id="checkbox1" type="checkbox">
                            <label for="checkbox1">
                                立即进入
                            </label>
                        </fieldset>
                    </div>
                    <input name="_module" value="reg" type="hidden">
                    <input name="_submit" type="submit" value="创建" data-icon="check">
                </form>
            </div>
        </div>
	</div><!-- /content --> 

<?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>