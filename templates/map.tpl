{{include file="header.tpl"}}
	
    <style>
		#navbar1 {
			margin-bottom: 15px;
		}
		
		#ul_online {
			margin: 0;
		}
		#ul_online>li>img.ui-li-icon {
			max-width: 30px;
			max-height: 30px;
		}
		#ul_online>li>h3 {
			margin-left: 15px;
			font-size: 16px;
		}
		
		#ul_scenes {
			margin: 0;
			margin-bottom: 12px;
		}
	</style>
    
    <script>
		var $ipt_search, $lb_search, $rd_searchtype;
		
		$(document).one('pageinit', function(){
			$ipt_search = $('#ipt_search');
			$lb_search = $('#lb_search');
			$rd_searchtype = $('#fs_searchtype').find('input[type=radio]');
			
			$rd_searchtype.bind('change', function(){
				var type = Number($(this).val());
				$lb_search.text(type? '用户ID': '用户名');
				$ipt_search.attr('name', type? 'tarid': 'taruname');
			});
		}).keydown(function(e){
			if (e.keyCode === 13 && isActive($ipt_search)) {
				search();
			}
		});
		
		function logout() {
			mGet('logout.php', null, 1);
		}
		function search() {
			var type = $ipt_search.attr('name'),
				txt = $ipt_search.val();
			if (txt === '') {
				showMessage('搜索条件不能为空。');
			} else {
				var url = ['profile.php?', type, '=', txt].join('');
				popDialog(url);
			}
		}
		
		function requestFriend2(tarid) {
			mPost('friend.php', {
				_module: 'request',
				tarid: tarid
			});
		}
	</script>
    
	<div data-role="content">
    
        <div id="navbar1" data-role="navbar" data-iconpos="left">
            <ul>
                <li>
                    <a href="#" data-theme="" data-icon="grid" class="ui-btn-active ui-state-persist">
                        校园地图
                    </a>
                </li>
                <li>
                    <a href="my.php" data-theme="" data-icon="home">
                        个人主页
                    </a>
                </li>
            </ul>
        </div>
        
		<div data-role="collapsible-set" data-theme="a">
            <div data-role="collapsible">
                <h3>用户搜索</h3>
                <div data-role="fieldcontain">
                    <fieldset data-role="controlgroup" data-type="horizontal" id="fs_searchtype">
                        <legend>搜索方式</legend>
                        <input name="searchtype" id="radio1" type="radio" checked="checked" value="0">
                        <label for="radio1">用户名</label>
                        <input name="searchtype" id="radio2" type="radio" value="1">
                        <label for="radio2">用户ID</label>
                    </fieldset>
                </div>
                <div data-role="fieldcontain">
                    <label for="ipt_search" id="lb_search">用户名</label>
                    <input type="search" data-theme="d" name="taruname" id="ipt_search">
                </div>
                <a data-role="button" data-icon="check" href="javascript:search()">进入档案</a>
            </div>
            
            <div data-role="collapsible">
                <h3>在线列表</h3>
                <ul data-role="listview" id="ul_online">
                    {{foreach $ol_users as $ol_user}}
                    <li>
                        <div data-role="controlgroup" data-type="horizontal" data-mini="true" class="right">
                            <a data-role="button" data-icon="plus" data-iconpos="notext" title="请求加为好友" data-rel="dialog" href="javascript:requestFriend2({{$ol_user['userid']}})"></a>
                            <a data-role="button" data-icon="forward" data-iconpos="notext" title="发送讯息" data-rel="dialog" href="message.php?tarid={{$ol_user['userid']}}"></a>
                        </div>
                        <img class="ui-li-icon avatar" src="images/avatars/avatar_{{$ol_user['avatar']}}.png">
                        <h3><a data-rel="dialog" href="profile.php?tarid={{$ol_user['userid']}}"><span class="uname">{{$ol_user['username']}}</span></a></h3>
                    </li>
                    {{/foreach}}
                </ul>
            </div>
            
            <div data-role="collapsible" data-collapsed="false">
                <h3>校园场景</h3>
                <ul id="ul_scenes" data-role="listview">
                    <li><a href="cafe.php">
                        <img src="images/cafe.png">
                        <h3>咖啡厅</h3>
                        <p>欢迎来到咖啡厅</p>
                    </a></li>
                    <li><a data-rel="dialog" href="library.php">
                        <img src="images/library.png">
                        <h3>图书馆</h3>
                        <p>回答问题、馆藏书目检索</p>
                    </a></li>
                    <li><a data-rel="dialog" href="stadium.php">
                    	<img src="images/stadium.png">
                        <h3>体育场</h3>
                        <p>赛马竞猜 - 体育场</p>
                    </a></li>
                    <li><a href="wishingwell.php">
                        <img src="images/plants.png">
                        <h3>许愿池</h3>
                        <p>留下你的祈愿吧 ^_^</p>
                    </a></li>
                </ul>
                <a data-role="button" data-icon="delete" href="javascript:logout()">注销登录</a>
            </div>
        </div>
        
        <div style="display:none" id="div_logo">
            <img src="images/phrief.png" />
        </div>
        
	</div><!-- /content --> 

{{include file="footer.tpl"}}