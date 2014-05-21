<?php /* Smarty version Smarty-3.1.11, created on 2012-11-21 18:48:35
         compiled from "F:\htdocs\xydd\templates\reg.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2957850acb183232627-79867279%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1d1686544ddaf2dc772698bf2ae7f398b98f4bad' => 
    array (
      0 => 'F:\\htdocs\\xydd\\templates\\reg.tpl',
      1 => 1353494914,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2957850acb183232627-79867279',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'NUM_AVATARS' => 0,
    'sex_list' => 0,
    'key' => 0,
    'val' => 0,
    'college_list' => 0,
    'k' => 0,
    'v' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_50acb1832f52f4_75506864',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_50acb1832f52f4_75506864')) {function content_50acb1832f52f4_75506864($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

	
    <style>
		#navbar1 {
			margin-bottom: 15px;
		}
		
		#div_avatar {
			display: inline-block;
			width: 60px;
			height: 60px;
			margin-left: 30px;
		}
		#div_avatar img {
			width: 100%;
		}
	</style>
    
    <script>
		var NUM_AVATARS = '<?php echo $_smarty_tpl->tpl_vars['NUM_AVATARS']->value;?>
',
			$avatars = [];
		
		var $fm_reg, $btn_reg, $sel_avatar, $div_avatar;
		
		$(document).one('pageinit', function(){
			$fm_reg = $('#fm_reg');
			$btn_reg = $('#btn_reg');
			$sel_avatar = $('#sel_avatar');
			$div_avatar = $('#div_avatar');
			
			$fm_reg.data('callback', function(r){
				if (r.title === 'pass') {
					$btn_reg.button('disable').button('refresh');
				}
			});
			$('div.ui-select').has('#sel_avatar').css({
				'width': '50%',
				'max-width': 150,
				'display': 'inline-block'
			});
			
			// init avatars
			var h = 'images/avatars/avatar_',
				t = '.png', $img;
			for (var i = 0; i < NUM_AVATARS; i ++) {
				$img = $('<img>').attr('src', h + i + t);
				$avatars.push($img);
			}
			showAvatar(0);
			$sel_avatar.bind('change', function(){
				showAvatar(this.value);
			});
		});
		
		function showAvatar(index) {
			/*var h = 'images/avatars/avatar_',
				t = '.png';
			$('#img_avatar').attr('src', h + index + t);*/
			$div_avatar.empty().append($avatars[index]);
		}
	</script>
    
	<div data-role="content">
    
        <div id="navbar1" data-role="navbar" data-iconpos="left">
            <ul>
                <li>
                    <a href="reg.php" data-theme="" data-icon="plus" class="ui-btn-active ui-state-persist">
                        用户注册
                    </a>
                </li>
                <li>
                    <a href="login.php" data-theme="" data-icon="forward">
                        进入校园
                    </a>
                </li>
            </ul>
        </div>
		
        <div data-role="collapsible" data-collapsed="false" data-theme="e">
            <h3>用户注册</h3>
            <form id="fm_reg" method="POST" action="reg.php">
                <div data-role="fieldcontain">
                    <label for="textinput1">
                        用户名
                    </label>
                    <input name="username" id="textinput1" value="" type="text">
                </div>
                <div data-role="fieldcontain">
                    <label for="textinput2">
                        密码
                    </label>
                    <input name="userpass" id="textinput2" value="" type="password">
                </div>
                <div data-role="fieldcontain">
                    <fieldset data-role="controlgroup" data-type="horizontal">
                        <legend>
                            性别
                        </legend>
                        <?php  $_smarty_tpl->tpl_vars['val'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['val']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['sex_list']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['val']->index=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['val']->key => $_smarty_tpl->tpl_vars['val']->value){
$_smarty_tpl->tpl_vars['val']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['val']->key;
 $_smarty_tpl->tpl_vars['val']->index++;
?>
                        <input name="sex" id="sex_radio_<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
" value="<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
" type="radio" <?php if ($_smarty_tpl->tpl_vars['val']->index==0){?>checked<?php }?>>
                        <label for="sex_radio_<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
">
                            <?php echo $_smarty_tpl->tpl_vars['val']->value;?>

                        </label>
                        <?php } ?>
                    </fieldset>
                </div>
                <div data-role="fieldcontain">
                    <label for="sel_college">
                        学院
                    </label>
                    <select name="college" id="sel_college">
                        <?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['college_list']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value){
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['v']->key;
?>
                        <option value="<?php echo $_smarty_tpl->tpl_vars['k']->value;?>
" <?php if ($_smarty_tpl->tpl_vars['k']->value==0){?>checked<?php }?>><?php echo $_smarty_tpl->tpl_vars['v']->value;?>
</option>
                        <?php } ?>
                    </select>
                </div>
                <div data-role="fieldcontain">
                    <label for="sel_avatar">
                        头像
                    </label>
                    <select name="avatar" id="sel_avatar">
                        <?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']['sec_avatar'])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']['sec_avatar']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['sec_avatar']['name'] = 'sec_avatar';
$_smarty_tpl->tpl_vars['smarty']->value['section']['sec_avatar']['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['NUM_AVATARS']->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['sec_avatar']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['sec_avatar']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['sec_avatar']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['sec_avatar']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['sec_avatar']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['sec_avatar']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['sec_avatar']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['sec_avatar']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['sec_avatar']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['sec_avatar']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['sec_avatar']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['sec_avatar']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['sec_avatar']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['sec_avatar']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['sec_avatar']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['sec_avatar']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['sec_avatar']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['sec_avatar']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['sec_avatar']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['sec_avatar']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['sec_avatar']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['sec_avatar']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['sec_avatar']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['sec_avatar']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['sec_avatar']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['sec_avatar']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['sec_avatar']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['sec_avatar']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['sec_avatar']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['sec_avatar']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['sec_avatar']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['sec_avatar']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['sec_avatar']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['sec_avatar']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['sec_avatar']['total']);
?>
                        <option value="<?php echo $_smarty_tpl->getVariable('smarty')->value['section']['sec_avatar']['index'];?>
" <?php if ($_smarty_tpl->getVariable('smarty')->value['section']['sec_avatar']['index']==0){?>checked<?php }?>>头像 - <?php echo $_smarty_tpl->getVariable('smarty')->value['section']['sec_avatar']['index']+1;?>
</option>
                        <?php endfor; endif; ?>
                    </select>
                    <div id="div_avatar">
                        <!--<img class="avatar" id="img_avatar" />-->
                    </div>
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
                <input type="submit" data-icon="check" value="注册" id="btn_reg">
            </form>
        </div>
        
	</div><!-- /content --> 

<?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>