<?php /* Smarty version Smarty-3.1.11, created on 2012-09-13 12:52:55
         compiled from "F:\htdocs\glife-1.1\templates\map.tpl" */ ?>
<?php /*%%SmartyHeaderCode:164665051d727cf40f0-77928711%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9d6e650b8da0ad40e2bd3728f3d5221c0bfa58df' => 
    array (
      0 => 'F:\\htdocs\\glife-1.1\\templates\\map.tpl',
      1 => 1347275769,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '164665051d727cf40f0-77928711',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_5051d727d84b93_00937584',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5051d727d84b93_00937584')) {function content_5051d727d84b93_00937584($_smarty_tpl) {?>﻿<?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('nav'=>"reglogin"), 0);?>

	
    <style>
		#navbar1 {
			margin-bottom: 15px;
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
    
		<div data-role="collapsible-set" data-theme="" data-content-theme="">
            <div data-role="collapsible" data-collapsed="false">
                <h3>
                    校园地图
                </h3>
                <div><button class="my-ajax" data-my-href="logout.php">注销登录</button></div>
        </div>
	</div><!-- /content --> 

<?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>