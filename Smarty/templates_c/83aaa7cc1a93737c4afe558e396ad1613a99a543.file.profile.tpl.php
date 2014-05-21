<?php /* Smarty version Smarty-3.1.11, created on 2012-10-06 11:21:49
         compiled from "F:\htdocs\xydd-1.0\templates\profile.tpl" */ ?>
<?php /*%%SmartyHeaderCode:293085070144dc8c123-82839022%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '83aaa7cc1a93737c4afe558e396ad1613a99a543' => 
    array (
      0 => 'F:\\htdocs\\xydd-1.0\\templates\\profile.tpl',
      1 => 1349521401,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '293085070144dc8c123-82839022',
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
  'unifunc' => 'content_5070144dd33285_23159077',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5070144dd33285_23159077')) {function content_5070144dd33285_23159077($_smarty_tpl) {?>﻿<?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

	
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
		function requestFriend(tarid) {
			mPost('friend.php', {
				_module: 'request',
				tarid: tarid
			});
		}
	</script>
    
    <div data-role="content" data-theme="d">
    
        <?php if ($_smarty_tpl->tpl_vars['user']->value){?>
		<p>
            <h3>
                <span class="uname"><?php echo $_smarty_tpl->tpl_vars['user']->value['username'];?>
</span> 的用户档案
            </h3>
            <div data-role="collapsible-set">
                <div data-role="collapsible" data-collapsed="false">
                    <h3>
                        TA的资值
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
                        <li><h3>角色ID</h3><span class="ui-li-count"><?php echo $_smarty_tpl->tpl_vars['user']->value['userid'];?>
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
        </p>
		<p>
            <a href="javascript:requestFriend(<?php echo $_smarty_tpl->tpl_vars['user']->value['userid'];?>
)" data-role="button" data-inline="true" data-icon="plus">请求加为好友</a>
            <a href="message.php?tarid=<?php echo $_smarty_tpl->tpl_vars['user']->value['userid'];?>
" data-rel="dialog" data-role="button" data-inline="true" data-icon="forward">发送讯息</a>
            <a data-rel="back" data-role="button" data-inline="true" data-icon="back">返回</a>
        </p>
        <?php }else{ ?>
            <p><img src="images/fishbone.png">并不存在与输入条件相匹配的用户。</p>
            <a data-rel="back" data-role="button" data-inline="true" data-icon="back">返回</a>
        <?php }?>
        
	</div><!-- /content -->

<?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>