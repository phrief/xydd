{{include file="header.tpl"}}
	
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
		var NUM_AVATARS = '{{$NUM_AVATARS}}',
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
                        {{foreach $sex_list as $key => $val}}
                        <input name="sex" id="sex_radio_{{$key}}" value="{{$key}}" type="radio" {{if $val@index==0}}checked{{/if}}>
                        <label for="sex_radio_{{$key}}">
                            {{$val}}
                        </label>
                        {{/foreach}}
                    </fieldset>
                </div>
                <div data-role="fieldcontain">
                    <label for="sel_college">
                        学院
                    </label>
                    <select name="college" id="sel_college">
                        {{foreach $college_list as $k => $v}}
                        <option value="{{$k}}" {{if $k==0}}checked{{/if}}>{{$v}}</option>
                        {{/foreach}}
                    </select>
                </div>
                <div data-role="fieldcontain">
                    <label for="sel_avatar">
                        头像
                    </label>
                    <select name="avatar" id="sel_avatar">
                        {{section name=sec_avatar loop=$NUM_AVATARS}}
                        <option value="{{$smarty.section.sec_avatar.index}}" {{if $smarty.section.sec_avatar.index==0}}checked{{/if}}>头像 - {{$smarty.section.sec_avatar.index+1}}</option>
                        {{/section}}
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

{{include file="footer.tpl"}}