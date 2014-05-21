<?php /* Smarty version Smarty-3.1.11, created on 2012-10-06 05:13:41
         compiled from "F:\htdocs\glife-2.0\templates\profile.tpl" */ ?>
<?php /*%%SmartyHeaderCode:20762506fbe05712b06-75644377%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f989fee426f182eb898f05c98c8ba0b2e688827b' => 
    array (
      0 => 'F:\\htdocs\\glife-2.0\\templates\\profile.tpl',
      1 => 1349500415,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '20762506fbe05712b06-75644377',
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
  'unifunc' => 'content_506fbe0579b594_88102509',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_506fbe0579b594_88102509')) {function content_506fbe0579b594_88102509($_smarty_tpl) {?>﻿<?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

	
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
		<p>
            <h3>
                <span class="uname"><?php echo $_smarty_tpl->tpl_vars['user']->value['username'];?>
</span> 的角色档案
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
)" data-role="button" data-inline="true" data-icon="plus">请求为好友</a>
            <a data-rel="back" data-role="button" data-inline="true" data-icon="back">返回</a>
        </p>	
	</div><!-- /content -->

<?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>