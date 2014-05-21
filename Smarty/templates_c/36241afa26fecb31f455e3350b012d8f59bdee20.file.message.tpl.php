<?php /* Smarty version Smarty-3.1.11, created on 2012-10-06 09:07:55
         compiled from "F:\htdocs\xydd-1.0\templates\message.tpl" */ ?>
<?php /*%%SmartyHeaderCode:27590506ff4eb070279-19446562%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '36241afa26fecb31f455e3350b012d8f59bdee20' => 
    array (
      0 => 'F:\\htdocs\\xydd-1.0\\templates\\message.tpl',
      1 => 1349513418,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '27590506ff4eb070279-19446562',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'taruser' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_506ff4eb0e6f40_93656493',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_506ff4eb0e6f40_93656493')) {function content_506ff4eb0e6f40_93656493($_smarty_tpl) {?>﻿<?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

	
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
		
		#txt_msg {
			resize: none;
			width: 120%;
		}
	</style>
    
    <script>
		var $txt_msg, $btn_send;
		$(document).bind('pageinit', function(){
			$txt_msg = $('#txt_msg');
			$btn_send = $('#btn_send');
		});
		function sendMsg(tarid) {
			mPost('message.php', {
				_module: 'send',
				tarid: tarid,
				message: $txt_msg.val()
			}, null, function(result){
				if (result.code === 0) {
					$btn_send.addClass('ui-disabled');
				}
			});
		}
	</script>
    
    <div data-role="content" data-theme="d">
		<p>
            <h3>
                给 <span class="uname"><?php echo $_smarty_tpl->tpl_vars['taruser']->value['username'];?>
</span> 发送讯息
            </h3>
            
            <div data-role="fieldcontain">
                <fieldset data-role="controlgroup">
                    <textarea id="txt_msg" placeholder=""></textarea>
                </fieldset>
            </div>
        </p>
		<p>
            <a id="btn_send" href="javascript:sendMsg(<?php echo $_smarty_tpl->tpl_vars['taruser']->value['userid'];?>
)" data-role="button" data-inline="true" data-icon="check">发送讯息</a>
            <a data-rel="back" data-role="button" data-inline="true" data-icon="back">返回</a>
        </p>	
	</div><!-- /content -->

<?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>