<?php /* Smarty version Smarty-3.1.11, created on 2012-11-21 19:17:54
         compiled from "F:\htdocs\xydd\templates\map.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2577350acb862538977-39345291%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9558cc8160543343bf35dd4ef578f0e1147cb725' => 
    array (
      0 => 'F:\\htdocs\\xydd\\templates\\map.tpl',
      1 => 1353487298,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2577350acb862538977-39345291',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'ol_users' => 0,
    'ol_user' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_50acb8625b0434_22300832',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_50acb8625b0434_22300832')) {function content_50acb8625b0434_22300832($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

	
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
                    <?php  $_smarty_tpl->tpl_vars['ol_user'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['ol_user']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['ol_users']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['ol_user']->key => $_smarty_tpl->tpl_vars['ol_user']->value){
$_smarty_tpl->tpl_vars['ol_user']->_loop = true;
?>
                    <li>
                        <div data-role="controlgroup" data-type="horizontal" data-mini="true" class="right">
                            <a data-role="button" data-icon="plus" data-iconpos="notext" title="请求加为好友" data-rel="dialog" href="javascript:requestFriend2(<?php echo $_smarty_tpl->tpl_vars['ol_user']->value['userid'];?>
)"></a>
                            <a data-role="button" data-icon="forward" data-iconpos="notext" title="发送讯息" data-rel="dialog" href="message.php?tarid=<?php echo $_smarty_tpl->tpl_vars['ol_user']->value['userid'];?>
"></a>
                        </div>
                        <img class="ui-li-icon avatar" src="images/avatars/avatar_<?php echo $_smarty_tpl->tpl_vars['ol_user']->value['avatar'];?>
.png">
                        <h3><a data-rel="dialog" href="profile.php?tarid=<?php echo $_smarty_tpl->tpl_vars['ol_user']->value['userid'];?>
"><span class="uname"><?php echo $_smarty_tpl->tpl_vars['ol_user']->value['username'];?>
</span></a></h3>
                    </li>
                    <?php } ?>
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

<?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>