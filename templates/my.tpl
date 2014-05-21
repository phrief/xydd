{{include file="header.tpl"}}
	
    <style>
		#navbar1 {
			margin-bottom: 15px;
		}
		
		#ul_welcome {
			margin: 0;
			margin-bottom: 12px;
		}
		#ul_welcome>li>img.ui-li-icon {
			max-width: 30px;
			max-height: 30px;
		}
		#ul_welcome>li>h3 {
			margin-left: 15px;
			font-size: 16px;
		}
		
		#ul_notices {
			margin: 0;
			margin-bottom: 12px;
		}
		#ul_notices>li>img.ui-li-icon {
			max-width: 30px;
			max-height: 30px;
		}
		#ul_notices>li>h3 {
			margin-left: 15px;
			font-size: 16px;
		}
		#ul_notices>li>span.ui-li-count {
			font-size: 16px;
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
		
		#ul_messages {
			margin: 0;
			margin-bottom: 12px;
		}
		#ul_messages>li>img.ui-li-icon {
			max-width: 30px;
			max-height: 30px;
		}
		#ul_messages>li>h3 {
			margin-left: 15px;
			font-size: 16px;
		}
		#ul_messages>li>span.ui-li-count {
			font-size: 16px;
		}
		
		#ul_friends {
			margin: 0;
			margin-bottom: 12px;
		}
		#ul_friends>li>img.ui-li-icon {
			max-width: 30px;
			max-height: 30px;
		}
		#ul_friends>li>h3 {
			margin-left: 15px;
			font-size: 16px;
		}
		#ul_friends>li>span.ui-li-count {
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
	</style>
    
    <script>
		function signNotice(reload, callback) {
			mGet('notice.php', {
				_module: 'sign'
			}, reload? 1: null, callback);
		}
		function requestFriend(tarid) {
			signNotice(false);
			mPost('friend.php', {
				_module: 'request',
				tarid: tarid
			}, 1);
		}
		function confirmFriend(tarid, accept) {
			signNotice(false);
			mPost('friend.php', {
				_module: 'confirm',
				tarid: tarid,
				accept: accept? 'on': ''
			}, 1);
		}
		function showMsgText(msgid) {
			var text = $('#p_msgtext_'+ msgid).text();
			showMessage(text);
		}
		function deleteMsg(msgIndex) {
			mPost('message.php', {
				_module: 'delete',
				msgindex: msgIndex
			}, 1);
		}
		function removeFriend(tarid) {
			mPost('friend.php', {
				_module: 'remove',
				tarid: tarid
			}, 1);
		}
	</script>
    
	<div data-role="content">
    
        <div id="navbar1" data-role="navbar" data-iconpos="left"><ul>
            <li>
                <a href="map.php" data-theme="" data-icon="grid">
                    校园地图
                </a>
            </li>
            <li>
                <a href="#" data-theme="" data-icon="home" class="ui-btn-active ui-state-persist">
                    个人主页
                </a>
            </li>
        </ul></div>
        
        <ul data-role="listview" id="ul_welcome">
            <li>
                <div data-role="controlgroup" data-type="horizontal" data-mini="true" class="right">
                    <a data-role="button" data-icon="refresh" data-iconpos="notext" title="刷新页面" href="javascript:jumpto(1)"></a>
                </div>
                <img class="ui-li-icon avatar" src="images/avatars/avatar_{{$user['avatar']}}.png">
                <h3>登录用户： <a data-rel="dialog" href="profile.php?tarid={{$user['userid']}}"><span class="uname">{{$user['username']}}</span></a></h3>
            </li>
        </ul>
        
        <ul id="ul_notices" data-role="listview">
          <li><img src="images/notice.png" class="ui-li-icon"><h3>通知</h3><span class="ui-li-count">{{$num_notices}} / {{$MAX_NUM_NOTICES}}</span></li>
          {{if $num_notices>0}}
          <li><img src="images/notice.png" class="ui-li-icon">
              {{if $notice['noid']===0}}
              <h3> <a data-rel="dialog" href="profile.php?tarid={{$notice['userid']}}"><span class="uname">{{$notice['username']}}</span></a> 请求你为好友。</h3>
              <div><a href="javascript:confirmFriend({{$notice['userid']}}, true)" data-role="button" data-inline="true" data-icon="check">接受</a><a href="javascript:confirmFriend({{$notice['userid']}}, false)" data-role="button" data-inline="true" data-icon="delete">拒绝</a></div>
              {{elseif $notice['noid']===1}}
              <h3> <a data-rel="dialog" href="profile.php?tarid={{$notice['userid']}}"><span class="uname">{{$notice['username']}}</span></a> 拒绝了你的好友请求。</h3>
              <div><a href="javascript:requestFriend({{$notice['userid']}})" data-role="button" data-inline="true" data-icon="plus">再次请求</a><a href="javascript:signNotice(true)" data-role="button" data-inline="true" data-icon="check">确定</a></div>
              {{elseif $notice['noid']===2}}
              <h3>添加好友 <a data-rel="dialog" href="profile.php?tarid={{$notice['userid']}}"><span class="uname">{{$notice['username']}}</span></a> 成功！</h3>
              <div><a data-rel="dialog" href="message.php?tarid={{$notice['userid']}}" data-role="button" data-inline="true" data-icon="forward">发送讯息</a><a href="javascript:signNotice(true)" data-role="button" data-inline="true" data-icon="check">确定</a></div>
              {{elseif $notice['noid']===3}}
              <h3>添加好友 <a data-rel="dialog" href="profile.php?tarid={{$notice['userid']}}"><span class="uname">{{$notice['username']}}</span></a> 失败，其中一方的好友已满。</h3>
              <div><a href="javascript:requestFriend({{$notice['userid']}})" data-role="button" data-inline="true" data-icon="plus">再次请求</a><a href="javascript:signNotice(true)" data-role="button" data-inline="true" data-icon="check">确定</a></div>
              {{/if}}
          </li>
          {{/if}}
        </ul>
        
        <div data-role="collapsible-set" data-theme="b">
            <div data-role="collapsible" data-collapsed="false">
                <h3>
                    我的属性值
                </h3>
                <ul id="ul_attrs" data-role="listview">
                    <li><img src="images/energy.png" class="ui-li-icon"><h3>活力</h3><span class="ui-li-count">{{$assets['energy']}}</span></li>
                    <li><img src="images/charm.png" class="ui-li-icon"><h3>魅力</h3><span class="ui-li-count">{{$assets['charm']}}</span></li>
                    <li><img src="images/wit.png" class="ui-li-icon"><h3>智商</h3><span class="ui-li-count">{{$assets['wit']}}</span></li>
                </ul>
            </div>
            <div data-role="collapsible">
                <h3>
                    注册信息
                </h3>
                <ul id="ul_reginfo" data-role="listview" data-count-theme="c">
                    <li><h3>用户ID</h3><span class="ui-li-count">{{$user['userid']}}</span></li>
                    <li><h3>性别</h3><span class="ui-li-count">{{$user['_sex']}}</span></li>
                    <li><h3>学院</h3><span class="ui-li-count">{{$user['_college']}}</span></li>
                    <li><h3>注册时间</h3><span class="ui-li-count">{{$user['regtime']}}</span></li>
                </ul>
            </div>
        </div>
        
        <div data-role="collapsible-set" data-theme="e">
            <div data-role="collapsible" data-collapsed="false">
                <h3>
                    我的讯息
                </h3>
                <ul id="ul_messages" data-role="listview">
                  <li><img src="images/message.png" class="ui-li-icon"><h3>讯息</h3><span class="ui-li-count">{{$num_messages}} / {{$MAX_NUM_MESSAGES}}</span></li>
                  {{if $num_messages>0}}
                      {{foreach $messages as $m}}
                      <li><img src="images/message.png" class="ui-li-icon">
                          <div data-role="controlgroup" data-type="horizontal" class="right" data-mini="true">
                              <a title="回复讯息" data-rel="dialog" href="message.php?tarid={{$m['userid']}}" data-role="button" data-icon="back" data-iconpos="notext"></a> 
                              <a title="删除讯息" href="javascript:deleteMsg({{$m@key}})" data-role="button" data-icon="delete" data-iconpos="notext"></a> 
                          </div>
                          <h3>{{$m['username']}}：</h3>
                          <p id="p_msgtext_{{$m@index}}"><a href="javascript:showMsgText({{$m@index}})">{{$m['msgtext']}}</a></p>
                      </li>
                      {{/foreach}}
                  {{/if}}
                </ul>
            </div>
            <div data-role="collapsible">
                <h3>
                    我的好友
                </h3>
                <ul id="ul_friends" data-role="listview">	
                    <li>
                        <img src="images/friends.png" class="ui-li-icon">
                        <h3>好友</h3>
                        <span class="ui-li-count">{{$num_friends}} / {{$MAX_NUM_FRIENDS}}</span>
                    </li>
                    {{if $num_friends>0}}
                        {{foreach array_reverse($friends) as $f}}
                        <li>
                            <div data-role="controlgroup" data-type="horizontal" data-mini="true" class="right">
                                <a title="发送讯息" data-rel="dialog" href="message.php?tarid={{$f['userid']}}" data-role="button" data-icon="forward" data-iconpos="notext"></a>
                                <a title="移除好友" href="javascript:removeFriend({{$f['userid']}})" data-role="button" data-icon="minus" data-iconpos="notext"></a>
                            </div>
                            <img class="ui-li-icon avatar" src="images/avatars/avatar_{{$f['avatar']}}.png">
                            <h3><a data-rel="dialog" href="profile.php?tarid={{$f['userid']}}">{{$f['username']}}</a></h3>
                        </li>
                        {{/foreach}}
                    {{/if}}
                </ul>
            </div>
        </div>
        
	</div><!-- /content -->
    
{{include file="footer.tpl"}}