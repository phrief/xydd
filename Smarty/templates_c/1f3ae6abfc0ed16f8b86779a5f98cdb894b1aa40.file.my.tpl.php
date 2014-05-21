<?php /* Smarty version Smarty-3.1.11, created on 2012-11-21 18:53:55
         compiled from "F:\htdocs\xydd\templates\my.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1595850acb2c3c51741-00483125%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1f3ae6abfc0ed16f8b86779a5f98cdb894b1aa40' => 
    array (
      0 => 'F:\\htdocs\\xydd\\templates\\my.tpl',
      1 => 1353493822,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1595850acb2c3c51741-00483125',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'user' => 0,
    'num_notices' => 0,
    'MAX_NUM_NOTICES' => 0,
    'notice' => 0,
    'assets' => 0,
    'num_messages' => 0,
    'MAX_NUM_MESSAGES' => 0,
    'messages' => 0,
    'm' => 0,
    'num_friends' => 0,
    'MAX_NUM_FRIENDS' => 0,
    'friends' => 0,
    'f' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_50acb2c3e61c62_09507906',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_50acb2c3e61c62_09507906')) {function content_50acb2c3e61c62_09507906($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

	
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
                <img class="ui-li-icon avatar" src="images/avatars/avatar_<?php echo $_smarty_tpl->tpl_vars['user']->value['avatar'];?>
.png">
                <h3>登录用户： <a data-rel="dialog" href="profile.php?tarid=<?php echo $_smarty_tpl->tpl_vars['user']->value['userid'];?>
"><span class="uname"><?php echo $_smarty_tpl->tpl_vars['user']->value['username'];?>
</span></a></h3>
            </li>
        </ul>
        
        <ul id="ul_notices" data-role="listview">
          <li><img src="images/notice.png" class="ui-li-icon"><h3>通知</h3><span class="ui-li-count"><?php echo $_smarty_tpl->tpl_vars['num_notices']->value;?>
 / <?php echo $_smarty_tpl->tpl_vars['MAX_NUM_NOTICES']->value;?>
</span></li>
          <?php if ($_smarty_tpl->tpl_vars['num_notices']->value>0){?>
          <li><img src="images/notice.png" class="ui-li-icon">
              <?php if ($_smarty_tpl->tpl_vars['notice']->value['noid']===0){?>
              <h3> <a data-rel="dialog" href="profile.php?tarid=<?php echo $_smarty_tpl->tpl_vars['notice']->value['userid'];?>
"><span class="uname"><?php echo $_smarty_tpl->tpl_vars['notice']->value['username'];?>
</span></a> 请求你为好友。</h3>
              <div><a href="javascript:confirmFriend(<?php echo $_smarty_tpl->tpl_vars['notice']->value['userid'];?>
, true)" data-role="button" data-inline="true" data-icon="check">接受</a><a href="javascript:confirmFriend(<?php echo $_smarty_tpl->tpl_vars['notice']->value['userid'];?>
, false)" data-role="button" data-inline="true" data-icon="delete">拒绝</a></div>
              <?php }elseif($_smarty_tpl->tpl_vars['notice']->value['noid']===1){?>
              <h3> <a data-rel="dialog" href="profile.php?tarid=<?php echo $_smarty_tpl->tpl_vars['notice']->value['userid'];?>
"><span class="uname"><?php echo $_smarty_tpl->tpl_vars['notice']->value['username'];?>
</span></a> 拒绝了你的好友请求。</h3>
              <div><a href="javascript:requestFriend(<?php echo $_smarty_tpl->tpl_vars['notice']->value['userid'];?>
)" data-role="button" data-inline="true" data-icon="plus">再次请求</a><a href="javascript:signNotice(true)" data-role="button" data-inline="true" data-icon="check">确定</a></div>
              <?php }elseif($_smarty_tpl->tpl_vars['notice']->value['noid']===2){?>
              <h3>添加好友 <a data-rel="dialog" href="profile.php?tarid=<?php echo $_smarty_tpl->tpl_vars['notice']->value['userid'];?>
"><span class="uname"><?php echo $_smarty_tpl->tpl_vars['notice']->value['username'];?>
</span></a> 成功！</h3>
              <div><a data-rel="dialog" href="message.php?tarid=<?php echo $_smarty_tpl->tpl_vars['notice']->value['userid'];?>
" data-role="button" data-inline="true" data-icon="forward">发送讯息</a><a href="javascript:signNotice(true)" data-role="button" data-inline="true" data-icon="check">确定</a></div>
              <?php }elseif($_smarty_tpl->tpl_vars['notice']->value['noid']===3){?>
              <h3>添加好友 <a data-rel="dialog" href="profile.php?tarid=<?php echo $_smarty_tpl->tpl_vars['notice']->value['userid'];?>
"><span class="uname"><?php echo $_smarty_tpl->tpl_vars['notice']->value['username'];?>
</span></a> 失败，其中一方的好友已满。</h3>
              <div><a href="javascript:requestFriend(<?php echo $_smarty_tpl->tpl_vars['notice']->value['userid'];?>
)" data-role="button" data-inline="true" data-icon="plus">再次请求</a><a href="javascript:signNotice(true)" data-role="button" data-inline="true" data-icon="check">确定</a></div>
              <?php }?>
          </li>
          <?php }?>
        </ul>
        
        <div data-role="collapsible-set" data-theme="b">
            <div data-role="collapsible" data-collapsed="false">
                <h3>
                    我的属性值
                </h3>
                <ul id="ul_attrs" data-role="listview">
                    <li><img src="images/energy.png" class="ui-li-icon"><h3>活力</h3><span class="ui-li-count"><?php echo $_smarty_tpl->tpl_vars['assets']->value['energy'];?>
</span></li>
                    <li><img src="images/charm.png" class="ui-li-icon"><h3>魅力</h3><span class="ui-li-count"><?php echo $_smarty_tpl->tpl_vars['assets']->value['charm'];?>
</span></li>
                    <li><img src="images/wit.png" class="ui-li-icon"><h3>智商</h3><span class="ui-li-count"><?php echo $_smarty_tpl->tpl_vars['assets']->value['wit'];?>
</span></li>
                </ul>
            </div>
            <div data-role="collapsible">
                <h3>
                    注册信息
                </h3>
                <ul id="ul_reginfo" data-role="listview" data-count-theme="c">
                    <li><h3>用户ID</h3><span class="ui-li-count"><?php echo $_smarty_tpl->tpl_vars['user']->value['userid'];?>
</span></li>
                    <li><h3>性别</h3><span class="ui-li-count"><?php echo $_smarty_tpl->tpl_vars['user']->value['_sex'];?>
</span></li>
                    <li><h3>学院</h3><span class="ui-li-count"><?php echo $_smarty_tpl->tpl_vars['user']->value['_college'];?>
</span></li>
                    <li><h3>注册时间</h3><span class="ui-li-count"><?php echo $_smarty_tpl->tpl_vars['user']->value['regtime'];?>
</span></li>
                </ul>
            </div>
        </div>
        
        <div data-role="collapsible-set" data-theme="e">
            <div data-role="collapsible" data-collapsed="false">
                <h3>
                    我的讯息
                </h3>
                <ul id="ul_messages" data-role="listview">
                  <li><img src="images/message.png" class="ui-li-icon"><h3>讯息</h3><span class="ui-li-count"><?php echo $_smarty_tpl->tpl_vars['num_messages']->value;?>
 / <?php echo $_smarty_tpl->tpl_vars['MAX_NUM_MESSAGES']->value;?>
</span></li>
                  <?php if ($_smarty_tpl->tpl_vars['num_messages']->value>0){?>
                      <?php  $_smarty_tpl->tpl_vars['m'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['m']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['messages']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['m']->index=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['m']->key => $_smarty_tpl->tpl_vars['m']->value){
$_smarty_tpl->tpl_vars['m']->_loop = true;
 $_smarty_tpl->tpl_vars['m']->index++;
?>
                      <li><img src="images/message.png" class="ui-li-icon">
                          <div data-role="controlgroup" data-type="horizontal" class="right" data-mini="true">
                              <a title="回复讯息" data-rel="dialog" href="message.php?tarid=<?php echo $_smarty_tpl->tpl_vars['m']->value['userid'];?>
" data-role="button" data-icon="back" data-iconpos="notext"></a> 
                              <a title="删除讯息" href="javascript:deleteMsg(<?php echo $_smarty_tpl->tpl_vars['m']->key;?>
)" data-role="button" data-icon="delete" data-iconpos="notext"></a> 
                          </div>
                          <h3><?php echo $_smarty_tpl->tpl_vars['m']->value['username'];?>
：</h3>
                          <p id="p_msgtext_<?php echo $_smarty_tpl->tpl_vars['m']->index;?>
"><a href="javascript:showMsgText(<?php echo $_smarty_tpl->tpl_vars['m']->index;?>
)"><?php echo $_smarty_tpl->tpl_vars['m']->value['msgtext'];?>
</a></p>
                      </li>
                      <?php } ?>
                  <?php }?>
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
                        <span class="ui-li-count"><?php echo $_smarty_tpl->tpl_vars['num_friends']->value;?>
 / <?php echo $_smarty_tpl->tpl_vars['MAX_NUM_FRIENDS']->value;?>
</span>
                    </li>
                    <?php if ($_smarty_tpl->tpl_vars['num_friends']->value>0){?>
                        <?php  $_smarty_tpl->tpl_vars['f'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['f']->_loop = false;
 $_from = array_reverse($_smarty_tpl->tpl_vars['friends']->value); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['f']->key => $_smarty_tpl->tpl_vars['f']->value){
$_smarty_tpl->tpl_vars['f']->_loop = true;
?>
                        <li>
                            <div data-role="controlgroup" data-type="horizontal" data-mini="true" class="right">
                                <a title="发送讯息" data-rel="dialog" href="message.php?tarid=<?php echo $_smarty_tpl->tpl_vars['f']->value['userid'];?>
" data-role="button" data-icon="forward" data-iconpos="notext"></a>
                                <a title="移除好友" href="javascript:removeFriend(<?php echo $_smarty_tpl->tpl_vars['f']->value['userid'];?>
)" data-role="button" data-icon="minus" data-iconpos="notext"></a>
                            </div>
                            <img class="ui-li-icon avatar" src="images/avatars/avatar_<?php echo $_smarty_tpl->tpl_vars['f']->value['avatar'];?>
.png">
                            <h3><a data-rel="dialog" href="profile.php?tarid=<?php echo $_smarty_tpl->tpl_vars['f']->value['userid'];?>
"><?php echo $_smarty_tpl->tpl_vars['f']->value['username'];?>
</a></h3>
                        </li>
                        <?php } ?>
                    <?php }?>
                </ul>
            </div>
        </div>
        
	</div><!-- /content -->
    
<?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>