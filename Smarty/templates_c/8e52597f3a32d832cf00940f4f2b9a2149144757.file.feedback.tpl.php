<?php /* Smarty version Smarty-3.1.11, created on 2012-11-21 16:37:27
         compiled from "F:\htdocs\xydd\templates\feedback.tpl" */ ?>
<?php /*%%SmartyHeaderCode:997350ac92c77ba530-55991201%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8e52597f3a32d832cf00940f4f2b9a2149144757' => 
    array (
      0 => 'F:\\htdocs\\xydd\\templates\\feedback.tpl',
      1 => 1353390752,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '997350ac92c77ba530-55991201',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_50ac92c780aff4_69913973',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_50ac92c780aff4_69913973')) {function content_50ac92c780aff4_69913973($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('title'=>"意见反馈"), 0);?>

	
    <style>
	    #img_logo {
			float: left;
			margin: 5px;
			width: 40%;
		}
	</style>
    
    <script>
		var $ta_advice, $btn_feed, $img_logo;
		$(document).one('pageinit', function(){
			$ta_advice = $('#ta_advice');
			$btn_feed = $('#btn_feed');
			$img_logo = $('#img_logo');
		});
		function sendAdvice(tarid) {
			mPost('feedback.php', {
				_module: 'send',
				advice: $ta_advice.val()
			}, null, function(r){
				if (r.title === 'pass') {
					$btn_feed.addClass('ui-disabled');
				}
			});
		}
	</script>
    
    <div data-role="content" data-theme="d">
    
        <img src="images/phrief_min.png" id="img_logo" />
        <h3>
            <p class="space">我们是 <span class="tname">五邑大学 - 锐斧小组</span> ，感谢你对我们网站的支持！我们还有许多不足之处，欢迎向我们提意见：</p>
        </h3>
        <div data-role="fieldcontain">
            <fieldset data-role="controlgroup">
                <textarea id="ta_advice"></textarea>
            </fieldset>
        </div>
        <a data-role="button" data-icon="check" data-inline="true" href="javascript:sendAdvice()" id="btn_feed">发送意见</a>
        <a data-role="button" data-inline="true" data-icon="back" data-rel="back">返回</a>
        
    
	</div><!-- /content -->

<?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>