<?php /* Smarty version Smarty-3.1.11, created on 2012-11-21 19:24:02
         compiled from "F:\htdocs\xydd\templates\set_pass.tpl" */ ?>
<?php /*%%SmartyHeaderCode:104950acb9d2211144-19761096%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3f4f2f85c2c2ade108af3d822f84c12a67ac91d3' => 
    array (
      0 => 'F:\\htdocs\\xydd\\templates\\set_pass.tpl',
      1 => 1353390659,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '104950acb9d2211144-19761096',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'tableid' => 0,
    'rnd' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_50acb9d2270046_82015773',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_50acb9d2270046_82015773')) {function content_50acb9d2270046_82015773($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


<script>
	var $rd_setpass, $fm_setpass, $txt_setpass,
		$btn_setpass, $btn_leave;
	
	$(document).one('pageinit', function(){
		$fm_setpass = $('#fm_setpass');
		$rd_setpass = $('#fs_setpass').find('input[type=radio]');
		$txt_setpass = $('#txt_setpass');
		$btn_setpass = $('#btn_setpass');
		$btn_leave = $('#btn_leave');
		
		$rd_setpass.bind('change', function(){
			var val = this.value;         
			if(val === 'yes'){ 
				$txt_setpass.textinput("enable");
			} else {
				$txt_setpass.textinput("disable");
			}
		});
		$btn_setpass.click(function(){
			$fm_setpass.submit();
		});
		$btn_leave.click(function(){
			mGet('remove.php');
		});
	});
</script>
    
<div data-role="content">
    
    <h3>你已经是<?php echo $_smarty_tpl->tpl_vars['tableid']->value;?>
号桌的主人了</h3>
    <form method="post" action="set_pass.php" id="fm_setpass">
        <div data-role="fieldcontain">
            <fieldset data-role="controlgroup" data-type="horizontal" id="fs_setpass">
                <legend>是否设置密码?</legend>
                <input type="radio" name="set" id="radio-choice-1" value="yes" checked="checked" />
                <label for="radio-choice-1">YES</label>
                <input type="radio" name="set" id="radio-choice-2" value="no"  />
                <label for="radio-choice-2">NO </label>
            </fieldset>
        </div>
        <div data-role="fieldcontain">
            <label for="txt_setpass">密码:</label>
            <input type="text" name="pass" id="txt_setpass" value="<?php echo $_smarty_tpl->tpl_vars['rnd']->value;?>
" />
        </div>
        <input type="hidden" name="_module" value="setpass" />
    </form>
    <a data-role="button" data-icon="check" data-inline="true" id="btn_setpass">进入该桌</a>
    <a data-role="button" data-icon="back" data-inline="true" id="btn_leave">离开</a>
    
</div>

<?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php }} ?>