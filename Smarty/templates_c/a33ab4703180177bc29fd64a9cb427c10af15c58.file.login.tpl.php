<?php /* Smarty version Smarty-3.1.11, created on 2012-09-06 14:50:02
         compiled from "F:\htdocs\ss\templates\login.tpl" */ ?>
<?php /*%%SmartyHeaderCode:248325048b81a777121-48858764%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a33ab4703180177bc29fd64a9cb427c10af15c58' => 
    array (
      0 => 'F:\\htdocs\\ss\\templates\\login.tpl',
      1 => 1346916930,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '248325048b81a777121-48858764',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_5048b81a7d57a5_56238659',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5048b81a7d57a5_56238659')) {function content_5048b81a7d57a5_56238659($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('nav'=>"reglogin"), 0);?>

	
    <style>
		#navbar1 {
			margin-bottom: 15px;
		}
	</style>
    
    <script>
		$(document).bind('pageinit', function(){
			// form reg
			var $form = $('form#login');
			$form.data('success', function(data){
				data = eval('data='+ data);	// enable json
				showMessage(data.msg);
			}).data('oneoff', true);
		});
	</script>
    
	<div data-role="content">
    
        <div id="navbar1" data-role="navbar" data-iconpos="left">
            <ul>
                <li>
                    <a href="reg.php" data-theme="" data-icon="star">
                        角色注册
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
                                登录后
                            </legend>
                            <input name="checkbox1" id="checkbox1" type="checkbox">
                            <label for="checkbox1">
                                记住密码
                            </label>
                        </fieldset>
                    </div>
                    <input name="_module" value="reg" type="hidden">
                    <input name="_submit" type="submit" value="谁也阻挡不了我！" data-icon="check">
                </form>
            </div>
        </div>
	</div><!-- /content --> 

<?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>