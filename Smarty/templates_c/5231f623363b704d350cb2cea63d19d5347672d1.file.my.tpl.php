<?php /* Smarty version Smarty-3.1.11, created on 2012-09-16 03:55:33
         compiled from "F:\htdocs\glife-1.4\templates\my.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1063950554db556f648-51257257%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5231f623363b704d350cb2cea63d19d5347672d1' => 
    array (
      0 => 'F:\\htdocs\\glife-1.4\\templates\\my.tpl',
      1 => 1347767383,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1063950554db556f648-51257257',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'energy' => 0,
    'charm' => 0,
    'wit' => 0,
    'num_messages' => 0,
    'MAX_NUM_MESSAGES' => 0,
    'num_friends' => 0,
    'MAX_NUM_FRIENDS' => 0,
    'username' => 0,
    'sex' => 0,
    'college' => 0,
    'regtime' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_50554db5601339_69512225',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_50554db5601339_69512225')) {function content_50554db5601339_69512225($_smarty_tpl) {?>﻿<?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('nav'=>"reglogin"), 0);?>

	
    <style>
		#navbar1 {
			margin-bottom: 15px;
		}
		
		#ul_attrs {
			margin: 0;
			margin-bottom: 12px;
		}
		#ul_attrs>li {
			width: 40%;
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
		#ul_messages>li {
			width: 55%;
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
		#ul_friends>li {
			width: 55%;
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
		#ul_reginfo>li {
			width: 70%;
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
                好友与讯息
            </h3>
            <ul id="ul_messages" data-role="listview">
              <li><img src="images/message.png" class="ui-li-icon"><h3>讯息</h3><span class="ui-li-count"><?php echo $_smarty_tpl->tpl_vars['num_messages']->value;?>
 / <?php echo $_smarty_tpl->tpl_vars['MAX_NUM_MESSAGES']->value;?>
</span></li>
            </ul>
            <ul id="ul_friends" data-role="listview">
              <li><img src="images/friends.png" class="ui-li-icon"><h3>好友</h3><span class="ui-li-count"><?php echo $_smarty_tpl->tpl_vars['num_friends']->value;?>
 / <?php echo $_smarty_tpl->tpl_vars['MAX_NUM_FRIENDS']->value;?>
</span></li>
            </ul>
        </div>
        
        <div data-role="collapsible" data-collapsed="true">
            <h3>
                角色信息
            </h3>
            <ul id="ul_reginfo" data-role="listview" data-count-theme="c">
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