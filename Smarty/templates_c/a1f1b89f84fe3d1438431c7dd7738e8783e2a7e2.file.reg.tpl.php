<?php /* Smarty version Smarty-3.1.11, created on 2012-10-04 14:10:00
         compiled from "F:\htdocs\glife-1.7\templates\reg.tpl" */ ?>
<?php /*%%SmartyHeaderCode:18802506d98b8a96013-30659738%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a1f1b89f84fe3d1438431c7dd7738e8783e2a7e2' => 
    array (
      0 => 'F:\\htdocs\\glife-1.7\\templates\\reg.tpl',
      1 => 1349359795,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '18802506d98b8a96013-30659738',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'sex_list' => 0,
    'key' => 0,
    'val' => 0,
    'college_list' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_506d98b8b3aa80_71136453',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_506d98b8b3aa80_71136453')) {function content_506d98b8b3aa80_71136453($_smarty_tpl) {?>﻿<?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

	
    <style>
		#navbar1 {
			margin-bottom: 15px;
		}
	</style>
    
    <script>
		$(document).bind('pageinit', function(){
			
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
                <form id="reg" method="POST" action="#">
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
                            <?php  $_smarty_tpl->tpl_vars['val'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['val']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['sex_list']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['val']->key => $_smarty_tpl->tpl_vars['val']->value){
$_smarty_tpl->tpl_vars['val']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['val']->key;
?>
                            <input name="sex" id="sex_radio_<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
" value="<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
" type="radio">
                            <label for="sex_radio_<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
">
                                <?php echo $_smarty_tpl->tpl_vars['val']->value;?>

                            </label>
                            <?php } ?>
                        </fieldset>
                    </div>
                    <div data-role="fieldcontain">
                        <fieldset data-role="controlgroup" data-type="vertical">
                            <legend>
                                学院
                            </legend>
                            <?php  $_smarty_tpl->tpl_vars['val'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['val']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['college_list']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['val']->key => $_smarty_tpl->tpl_vars['val']->value){
$_smarty_tpl->tpl_vars['val']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['val']->key;
?>
                            <input name="college" id="coll_radio_<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
" value="<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
" type="radio">
                            <label for="coll_radio_<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
">
                                <?php echo $_smarty_tpl->tpl_vars['val']->value;?>

                            </label>
                            <?php } ?>
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
                    <input type="submit" value="创建" data-icon="check">
                </form>
            </div>
        </div>
	</div><!-- /content --> 

<?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>