<?php /* Smarty version Smarty-3.1.11, created on 2012-09-11 14:06:12
         compiled from "F:\htdocs\glife-0.7\templates\my.tpl" */ ?>
<?php /*%%SmartyHeaderCode:27191504f4554321142-57776612%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '608a4e1f169f7b9b6b9fcb8e0eaf17a8ad3c5e07' => 
    array (
      0 => 'F:\\htdocs\\glife-0.7\\templates\\my.tpl',
      1 => 1347372371,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '27191504f4554321142-57776612',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'energy' => 0,
    'charm' => 0,
    'wit' => 0,
    'money' => 0,
    'num_items' => 0,
    'MAX_NUM_ITEMS' => 0,
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
  'unifunc' => 'content_504f45543cbd77_43543105',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_504f45543cbd77_43543105')) {function content_504f45543cbd77_43543105($_smarty_tpl) {?>﻿<?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('nav'=>"reglogin"), 0);?>

	
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
		
		#ul_money {
			margin: 0;
			margin-bottom: 12px;
		}
		#ul_money>li {
			width: 55%;
		}
		#ul_money>li>img.ui-li-icon {
			max-width: 30px;
			max-height: 30px;
		}
		#ul_money>li>h3 {
			margin-left: 15px;
			font-size: 16px;
		}
		#ul_money>li>span.ui-li-count {
			font-size: 16px;
		}
		
		#ul_items {
			margin: 0;
			min-width: 230px;
			max-width: 700px;
		}
		#ul_items>li {
			height: 240px;
		}
		#ul_items>li>img.ui-li-icon {
			max-width: 30px;
			max-height: 30px;
		}
		#ul_items>li>h3 {
			margin-left: 15px;
			font-size: 16px;
		}
		#ul_items>li>span.ui-li-count {
			font-size: 16px;
			top: 30px;
		}
		#div_items {
			margin: auto;
			max-width: 180px;
			margin-top: 15px;
		}
		#div_items>div {
			border: 1px solid #BFBFBF;
			max-width: 45px;
			height: 45px;
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
                状态与物品
            </h3>
            <ul id="ul_attrs" data-role="listview">
                <li><img src="images/energy.png" class="ui-li-icon"><h3>活力</h3><span class="ui-li-count"><?php echo $_smarty_tpl->tpl_vars['energy']->value;?>
</span></li>
                <li><img src="images/charm.png" class="ui-li-icon"><h3>魅力</h3><span class="ui-li-count"><?php echo $_smarty_tpl->tpl_vars['charm']->value;?>
</span></li>
                <li><img src="images/wit.png" class="ui-li-icon"><h3>智商</h3><span class="ui-li-count"><?php echo $_smarty_tpl->tpl_vars['wit']->value;?>
</span></li>
            </ul>
            <ul id="ul_money" data-role="listview">
                <li><img src="images/money.png" class="ui-li-icon"><h3>金钱</h3><span class="ui-li-count"><?php echo $_smarty_tpl->tpl_vars['money']->value;?>
</span></li>
            </ul>
            
            <ul id="ul_items" data-role="listview">
            	<li>
                	<img src="images/items.png" class="ui-li-icon">
                    <h3>物品</h3>
                    <span class="ui-li-count"><?php echo $_smarty_tpl->tpl_vars['num_items']->value;?>
 / <?php echo $_smarty_tpl->tpl_vars['MAX_NUM_ITEMS']->value;?>
</span>
                	
                    <div id="div_items" class="ui-grid-c">
                      <div class="ui-block-a">
                      </div>
                      <div class="ui-block-b">
                      </div>
                      <div class="ui-block-c">
                      </div>
                      <div class="ui-block-d">
                      </div>
                      <div class="ui-block-a">
                      </div>
                      <div class="ui-block-b">
                      </div>
                      <div class="ui-block-c">
                      </div>
                      <div class="ui-block-d">
                      </div>
                      <div class="ui-block-a">
                      </div>
                      <div class="ui-block-b">
                      </div>
                      <div class="ui-block-c">
                      </div>
                      <div class="ui-block-d">
                      </div>
                      <div class="ui-block-a">
                      </div>
                      <div class="ui-block-b">
                      </div>
                      <div class="ui-block-c">
                      </div>
                      <div class="ui-block-d">
                      </div>
                  </div>
                </li>
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