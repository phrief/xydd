<?php /* Smarty version Smarty-3.1.11, created on 2012-11-20 19:05:52
         compiled from "F:\htdocs\xydd\templates\profile.tpl" */ ?>
<?php /*%%SmartyHeaderCode:3163550ab641013b253-89201984%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f8e4a6d136da91a97bba3f0fe6a8fa932ad91055' => 
    array (
      0 => 'F:\\htdocs\\xydd\\templates\\profile.tpl',
      1 => 1353390697,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3163550ab641013b253-89201984',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'user' => 0,
    'assets' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_50ab64101d9446_84627979',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_50ab64101d9446_84627979')) {function content_50ab64101d9446_84627979($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('title'=>"用户档案"), 0);?>

	
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
        
        <?php if ($_smarty_tpl->tpl_vars['user']->value){?>
        <h3>
            <img id="img_avatar" class="avatar" src="images/avatars/avatar_<?php echo $_smarty_tpl->tpl_vars['user']->value['avatar'];?>
.png" />
            <span class="uname"><?php echo $_smarty_tpl->tpl_vars['user']->value['username'];?>
</span> 的用户档案
        </h3>
        <div data-role="fieldcontain">
            <div data-role="collapsible-set" data-theme="b">
                <div data-role="collapsible" data-collapsed="false">
                    <h3>
                        TA的属性值
                    </h3>
                    <ul id="ul_attrs" data-role="listview" data-theme="c">
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
                    <ul id="ul_reginfo" data-role="listview" data-theme="c">
                        <li><h3>用户ID</h3><span class="ui-li-count"><?php echo $_smarty_tpl->tpl_vars['user']->value['userid'];?>
</span></li>
                        <li><h3>性别</h3><span class="ui-li-count"><?php echo $_smarty_tpl->tpl_vars['user']->value['sex'];?>
</span></li>
                        <li><h3>学院</h3><span class="ui-li-count"><?php echo $_smarty_tpl->tpl_vars['user']->value['college'];?>
</span></li>
                        <li><h3>注册时间</h3><span class="ui-li-count"><?php echo $_smarty_tpl->tpl_vars['user']->value['regtime'];?>
</span></li>
                    </ul>
                </div>
            </div>
        </div>
        <a data-role="button" data-icon="plus" data-inline="true" href="javascript:requestFriend(<?php echo $_smarty_tpl->tpl_vars['user']->value['userid'];?>
)" id="btn_add">请求加为好友</a>
        <a data-role="button" data-icon="forward" data-inline="true" data-rel="dialog" href="message.php?tarid=<?php echo $_smarty_tpl->tpl_vars['user']->value['userid'];?>
">发送讯息</a>
        <a data-role="button" data-icon="back" data-rel="back" data-inline="true">返回</a>
        <?php }else{ ?>
            <div data-role="fieldcontain">
                <p><img src="images/fishbone.png">不存在该用户。</p>
            </div>
            <a data-role="button" data-icon="back" data-rel="back" data-inline="true">返回</a>
        <?php }?>
        
	</div><!-- /content -->

<?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>