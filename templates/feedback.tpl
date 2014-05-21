{{include file="header.tpl" title="意见反馈"}}
	
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

{{include file="footer.tpl"}}