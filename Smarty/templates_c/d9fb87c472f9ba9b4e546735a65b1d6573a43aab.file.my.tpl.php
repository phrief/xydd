<?php /* Smarty version Smarty-3.1.11, created on 2012-09-22 07:41:05
         compiled from "F:\htdocs\glife-1.5\templates\my.tpl" */ ?>
<?php /*%%SmartyHeaderCode:14212505d6b919701a8-20097075%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd9fb87c472f9ba9b4e546735a65b1d6573a43aab' => 
    array (
      0 => 'F:\\htdocs\\glife-1.5\\templates\\my.tpl',
      1 => 1348299633,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '14212505d6b919701a8-20097075',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'energy' => 0,
    'charm' => 0,
    'wit' => 0,
    'num_notices' => 0,
    'MAX_NUM_NOTICES' => 0,
    'notice' => 0,
    'num_messages' => 0,
    'MAX_NUM_MESSAGES' => 0,
    'messages' => 0,
    'm' => 0,
    'num_friends' => 0,
    'MAX_NUM_FRIENDS' => 0,
    'friends' => 0,
    'f' => 0,
    'userid' => 0,
    'username' => 0,
    'sex' => 0,
    'college' => 0,
    'regtime' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_505d6b91a82fd4_35711726',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_505d6b91a82fd4_35711726')) {function content_505d6b91a82fd4_35711726($_smarty_tpl) {?>﻿<?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('nav'=>"reglogin"), 0);?>

	
    <style>
		div.right {
			float: right;
		}
		
		#navbar1 {
			margin-bottom: 15px;
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
		$(document).bind('pageinit', function(){
			
		});
		function showMsgText(msgid) {
			var text = $('#p_msgtext_'+ msgid).text();
			showMessage(text);
		}
		function showFriend(fid) {
			alert(fid);
		}
	</script>
    
	<div data-role="content">
    
        <div id="navbar1" data-role="navbar" data-iconpos="left">
            <ul>
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
            </ul>
        </div>
        
        <div data-role="collapsible" data-collapsed="false">
            <h3>
                我的状态
            </h3>
            <ul id="ul_attrs" data-role="listview">
                <li><img src="images/energy.png" class="ui-li-icon"><h3>活力</h3><span class="ui-li-count"><?php echo $_smarty_tpl->tpl_vars['energy']->value;?>
</span></li>
                <li><img src="images/charm.png" class="ui-li-icon"><h3>魅力</h3><span class="ui-li-count"><?php echo $_smarty_tpl->tpl_vars['charm']->value;?>
</span></li>
                <li><img src="images/wit.png" class="ui-li-icon"><h3>智商</h3><span class="ui-li-count"><?php echo $_smarty_tpl->tpl_vars['wit']->value;?>
</span></li>
            </ul>
        </div>
        
        <div data-role="collapsible" data-collapsed="false">
            <h3>
                我的通知
            </h3>
            <ul id="ul_notices" data-role="listview">
              <li><img src="images/notice.png" class="ui-li-icon"><h3>通知</h3><span class="ui-li-count"><?php echo $_smarty_tpl->tpl_vars['num_notices']->value;?>
 / <?php echo $_smarty_tpl->tpl_vars['MAX_NUM_NOTICES']->value;?>
</span></li>
              <?php if ($_smarty_tpl->tpl_vars['num_notices']->value>0){?>
              <li><img src="images/notice.png" class="ui-li-icon">
                  <?php if ($_smarty_tpl->tpl_vars['notice']->value['noid']===0){?>
                  <h3><?php echo $_smarty_tpl->tpl_vars['notice']->value['username'];?>
 请求你为好友。</h3>
                  <div><a href="index.html" data-role="button" data-inline="true" data-icon="check">接受</a><a href="index.html" data-role="button" data-inline="true" data-icon="delete">拒绝</a></div>
                  <?php }elseif($_smarty_tpl->tpl_vars['notice']->value['noid']===1){?>
                  <h3><?php echo $_smarty_tpl->tpl_vars['notice']->value['username'];?>
</h3>
                  <div><a href="index.html" data-role="button" data-inline="true" data-icon="check">接受</a><a href="index.html" data-role="button" data-inline="true" data-icon="delete">拒绝</a></div>
                  <?php }elseif($_smarty_tpl->tpl_vars['notice']->value['noid']===2){?>
                  <h3><?php echo $_smarty_tpl->tpl_vars['notice']->value['username'];?>
</h3>
                  <div><a href="index.html" data-role="button" data-inline="true" data-icon="check">接受</a><a href="index.html" data-role="button" data-inline="true" data-icon="delete">拒绝</a></div>
                  <?php }elseif($_smarty_tpl->tpl_vars['notice']->value['noid']===3){?>
                  <h3><?php echo $_smarty_tpl->tpl_vars['notice']->value['username'];?>
</h3>
                  <div><a href="index.html" data-role="button" data-inline="true" data-icon="check">接受</a><a href="index.html" data-role="button" data-inline="true" data-icon="delete">拒绝</a></div>
                  <?php }elseif($_smarty_tpl->tpl_vars['notice']->value['noid']===4){?>
                  <h3><?php echo $_smarty_tpl->tpl_vars['notice']->value['username'];?>
</h3>
                  <div><a href="index.html" data-role="button" data-inline="true" data-icon="check">接受</a><a href="index.html" data-role="button" data-inline="true" data-icon="delete">拒绝</a></div>
                  <?php }?>
              </li>
              <?php }?>
            </ul>
        </div>
        
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
                      <div data-role="controlgroup" data-type="horizontal" class="right">
                          <a href="javascript:alert(1)" data-role="button" data-icon="back" data-iconpos="notext"></a> 
                          <a href="javascript:alert(1)" data-role="button" data-icon="delete" data-iconpos="notext"></a> 
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
        
        <div data-role="collapsible" data-collapsed="true">
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
 $_from = $_smarty_tpl->tpl_vars['friends']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['f']->key => $_smarty_tpl->tpl_vars['f']->value){
$_smarty_tpl->tpl_vars['f']->_loop = true;
?>
                  <li>
                      <div data-role="controlgroup" data-type="horizontal" class="right">
                          <a href="javascript:alert(1)" data-role="button" data-icon="forward" data-iconpos="notext"></a>
                          <a href="javascript:alert(1)" data-role="button" data-icon="minus" data-iconpos="notext"></a> 
                      </div>
                      <img src="images/friends.png" class="ui-li-icon">
                      <h3><a href="javascript:showFriend(<?php echo $_smarty_tpl->tpl_vars['f']->value['userid'];?>
)"><?php echo $_smarty_tpl->tpl_vars['f']->value['username'];?>
</a></h3>
                  </li>
                  <?php } ?>
              <?php }?>
            </ul>
        </div>
        
        <div data-role="collapsible" data-collapsed="true">
            <h3>
                角色信息
            </h3>
            <ul id="ul_reginfo" data-role="listview" data-count-theme="c">
                <li><h3>角色ID</h3><span class="ui-li-count"><?php echo $_smarty_tpl->tpl_vars['userid']->value;?>
</span></li>
                <li><h3>角色名</h3><span class="ui-li-count"><?php echo $_smarty_tpl->tpl_vars['username']->value;?>
</span></li>
                <li><h3>性别</h3><span class="ui-li-count"><?php echo $_smarty_tpl->tpl_vars['sex']->value;?>
</span></li>
                <li><h3>学院</h3><span class="ui-li-count"><?php echo $_smarty_tpl->tpl_vars['college']->value;?>
</span></li>
                <li><h3>注册时间</h3><span class="ui-li-count"><?php echo $_smarty_tpl->tpl_vars['regtime']->value;?>
</span></li>
            </ul>
        </div>
	</div><!-- /content --> 

<?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>