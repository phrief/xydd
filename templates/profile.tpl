{{include file="header.tpl" title="用户档案"}}
	
    <style>
		#ul_attrs {
			margin: 0;
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
		
		#img_avatar {
			max-width: 30px;
			max-height: 30px;
			margin-right: 10px;
		}
	</style>
    
    <script>
		var $btn_add;
		$(document).one('pageinit', function(){
			$btn_add = $('#btn_add');
		});
		
		function requestFriend(tarid) {
			mPost('friend.php', {
				_module: 'request',
				tarid: tarid
			}, null, function(result){
				if (result.title == 'pass') {
					$btn_add.addClass('ui-disabled');
				}
			});
		}
	</script>
    
    <div data-role="content" data-theme="d">
        
        {{if $user}}
        <h3>
            <img id="img_avatar" class="avatar" src="images/avatars/avatar_{{$user['avatar']}}.png" />
            <span class="uname">{{$user['username']}}</span> 的用户档案
        </h3>
        <div data-role="fieldcontain">
            <div data-role="collapsible-set" data-theme="b">
                <div data-role="collapsible" data-collapsed="false">
                    <h3>
                        TA的属性值
                    </h3>
                    <ul id="ul_attrs" data-role="listview" data-theme="c">
                        <li><img src="images/energy.png" class="ui-li-icon"><h3>活力</h3><span class="ui-li-count">{{$assets['energy']}}</span></li>
                        <li><img src="images/charm.png" class="ui-li-icon"><h3>魅力</h3><span class="ui-li-count">{{$assets['charm']}}</span></li>
                        <li><img src="images/wit.png" class="ui-li-icon"><h3>智商</h3><span class="ui-li-count">{{$assets['wit']}}</span></li>
                    </ul>
                </div>
                <div data-role="collapsible">
                    <h3>
                        注册信息
                    </h3>
                    <ul id="ul_reginfo" data-role="listview" data-theme="c">
                        <li><h3>用户ID</h3><span class="ui-li-count">{{$user['userid']}}</span></li>
                        <li><h3>性别</h3><span class="ui-li-count">{{$user['sex']}}</span></li>
                        <li><h3>学院</h3><span class="ui-li-count">{{$user['college']}}</span></li>
                        <li><h3>注册时间</h3><span class="ui-li-count">{{$user['regtime']}}</span></li>
                    </ul>
                </div>
            </div>
        </div>
        <a data-role="button" data-icon="plus" data-inline="true" href="javascript:requestFriend({{$user['userid']}})" id="btn_add">请求加为好友</a>
        <a data-role="button" data-icon="forward" data-inline="true" data-rel="dialog" href="message.php?tarid={{$user['userid']}}">发送讯息</a>
        <a data-role="button" data-icon="back" data-rel="back" data-inline="true">返回</a>
        {{else}}
            <div data-role="fieldcontain">
                <p><img src="images/fishbone.png">不存在该用户。</p>
            </div>
            <a data-role="button" data-icon="back" data-rel="back" data-inline="true">返回</a>
        {{/if}}
        
	</div><!-- /content -->

{{include file="footer.tpl"}}