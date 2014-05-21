{{include file="header.tpl" title="发送讯息"}}
	
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
            给 <a data-rel="dialog" href="profile.php?tarid={{$taruser['userid']}}"><span class="uname">{{$taruser['username']}}</span></a> 发送讯息：
        </h3>
        <div data-role="fieldcontain">
            <fieldset data-role="controlgroup">
                <textarea id="ta_msg"></textarea>
            </fieldset>
        </div>
        <a id="btn_send" href="javascript:sendMsg({{$taruser['userid']}})" data-role="button" data-inline="true" data-icon="check">发送讯息</a>
        <a data-role="button" data-inline="true" data-icon="back" data-rel="back">返回</a>
    
	</div><!-- /content -->

{{include file="footer.tpl"}}