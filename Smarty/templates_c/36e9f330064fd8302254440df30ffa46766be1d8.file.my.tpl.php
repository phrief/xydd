<?php /* Smarty version Smarty-3.1.11, created on 2012-09-10 07:12:14
         compiled from "F:\htdocs\glife-0.4\templates\my.tpl" */ ?>
<?php /*%%SmartyHeaderCode:22778504d92ceee1a71-97898454%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '36e9f330064fd8302254440df30ffa46766be1d8' => 
    array (
      0 => 'F:\\htdocs\\glife-0.4\\templates\\my.tpl',
      1 => 1347261127,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '22778504d92ceee1a71-97898454',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'energy' => 0,
    'charm' => 0,
    'wit' => 0,
    'money' => 0,
    'username' => 0,
    'sex' => 0,
    'college' => 0,
    'regtime' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_504d92cf020ee3_41380435',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_504d92cf020ee3_41380435')) {function content_504d92cf020ee3_41380435($_smarty_tpl) {?>﻿<?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('nav'=>"reglogin"), 0);?>

	
    <style>
		#navbar1 {
			margin-bottom: 15px;
		}
		
		#ulist1 {
			margin: 0;
			margin-bottom: 12px;
		}
		#ulist1>li {
			width: 40%;
		}
		#ulist1>li>img.ui-li-icon {
			max-width: 30px;
			max-height: 30px;
		}
		#ulist1>li>h3 {
			margin-left: 15px;
			font-size: 16px;
		}
		#ulist1>li>span.ui-li-count {
			font-size: 16px;
		}
		
		#ulist2 {
			margin: 0;
			margin-bottom: 12px;
		}
		#ulist2>li {
			width: 55%;
		}
		#ulist2>li>img.ui-li-icon {
			max-width: 30px;
			max-height: 30px;
		}
		#ulist2>li>h3 {
			margin-left: 15px;
			font-size: 16px;
		}
		#ulist2>li>span.ui-li-count {
			font-size: 16px;
		}
		
		#ulist3 {
			margin: 0;
		}
		#ulist3>li {
			width: 65%;
			
			height: 260px;
		}
		#ulist3>li>img.ui-li-icon {
			max-width: 30px;
			max-height: 30px;
		}
		#ulist3>li>h3 {
			margin-left: 15px;
			font-size: 16px;
		}
		#ulist3>li>span.ui-li-count {
			font-size: 16px;
			top: 30px;
		}
		
		#ulist4 {
			margin: 0;
		}
		#ulist4>li {
			width: 70%;
		}
		#ulist4>li>img.ui-li-icon {
			max-width: 30px;
			max-height: 30px;
		}
		#ulist4>li>h3 {
			font-size: 14px;
		}
		#ulist4>li>span.ui-li-count {
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
            <ul id="ulist1" data-role="listview">
                <li><img src="images/energy.png" class="ui-li-icon"><h3>活力</h3><span class="ui-li-count"><?php echo $_smarty_tpl->tpl_vars['energy']->value;?>
</span></li>
                <li><img src="images/charm.png" class="ui-li-icon"><h3>魅力</h3><span class="ui-li-count"><?php echo $_smarty_tpl->tpl_vars['charm']->value;?>
</span></li>
                <li><img src="images/wit.png" class="ui-li-icon"><h3>智商</h3><span class="ui-li-count"><?php echo $_smarty_tpl->tpl_vars['wit']->value;?>
</span></li>
            </ul>
            <ul id="ulist2" data-role="listview">
                <li><img src="images/money.png" class="ui-li-icon"><h3>金钱</h3><span class="ui-li-count"><?php echo $_smarty_tpl->tpl_vars['money']->value;?>
</span></li>
            </ul>
            <ul id="ulist3" data-role="listview">
            	<li><img src="images/items.png" class="ui-li-icon"><h3>物品</h3><span class="ui-li-count">5 / 16</span></li>
            </ul>
        </div>
        <div data-role="collapsible" data-collapsed="true">
            <h3>
                角色信息
            </h3>
            <ul id="ulist4" data-role="listview" data-count-theme="c">
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