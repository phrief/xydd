<?php /* Smarty version Smarty-3.1.11, created on 2012-11-21 18:35:40
         compiled from "F:\htdocs\xydd\templates\message.tpl" */ ?>
<?php /*%%SmartyHeaderCode:126050acae7cba69f9-21048056%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '51b46417a36872024b0b4b1d93c6ac133c1fbebc' => 
    array (
      0 => 'F:\\htdocs\\xydd\\templates\\message.tpl',
      1 => 1353390795,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '126050acae7cba69f9-21048056',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'taruser' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_50acae7cc269d1_52239453',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_50acae7cc269d1_52239453')) {function content_50acae7cc269d1_52239453($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('title'=>"发送讯息"), 0);?>

	
    <style>
	    #ul_reginfo {
			margin: 0;
		}
		#ul_reginfo>li>img.ui-li-icon {
			max-width: 30px;
			max-height: 30px;
		}
		#ul_reginfo>li>h3 {
			font-size: 14px;
		}
		#ul_reginfo>li>span.ui-li-count {
			font-size: 14px;
		}
	    
		#ul_attrs {
			margin: 0;
			margin-bottom: 12px;
		}
		#ul_attrs>li>img.ui-li-icon {
			max-width: 30px;
			max-height: 30px;
		}
		#ul_attrs>li>h3 {
			margin-left: 15px;
			font-size: 16px;
		}
		#ul_attrs>li>span.ui-li-count {
			font-size: 16px;
		}
	</style>
    
    <script>
		var $ta_msg, $btn_send;
		$(document).one('pageinit', function(){
			$ta_msg = $('#ta_msg');
			$btn_send = $('#btn_send');
		});
		function sendMsg(tarid) {
			mPost('message.php', {
				_module: 'send',
				tarid: tarid,
				message: $ta_msg.val()
			}, null, function(result){
				if (result.title == 'pass') {
					$btn_send.addClass('ui-disabled');
				}
			});
		}
	</script>
    
    <div data-role="content" data-theme="d">
        
        <h3>
            给 <a data-rel="dialog" href="profile.php?tarid=<?php echo $_smarty_tpl->tpl_vars['taruser']->value['userid'];?>
"><span class="uname"><?php echo $_smarty_tpl->tpl_vars['taruser']->value['username'];?>
</span></a> 发送讯息：
        </h3>
        <div data-role="fieldcontain">
            <fieldset data-role="controlgroup">
                <textarea id="ta_msg"></textarea>
            </fieldset>
        </div>
        <a id="btn_send" href="javascript:sendMsg(<?php echo $_smarty_tpl->tpl_vars['taruser']->value['userid'];?>
)" data-role="button" data-inline="true" data-icon="check">发送讯息</a>
        <a data-role="button" data-inline="true" data-icon="back" data-rel="back">返回</a>
    
	</div><!-- /content -->

<?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>