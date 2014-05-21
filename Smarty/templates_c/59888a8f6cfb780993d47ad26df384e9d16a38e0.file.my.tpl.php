<?php /* Smarty version Smarty-3.1.11, created on 2012-09-08 06:50:21
         compiled from "F:\htdocs\glife-0.1\templates\my.tpl" */ ?>
<?php /*%%SmartyHeaderCode:9193504aeaad914323-52072171%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '59888a8f6cfb780993d47ad26df384e9d16a38e0' => 
    array (
      0 => 'F:\\htdocs\\glife-0.1\\templates\\my.tpl',
      1 => 1347087020,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '9193504aeaad914323-52072171',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_504aeaad966ae4_87263731',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_504aeaad966ae4_87263731')) {function content_504aeaad966ae4_87263731($_smarty_tpl) {?>﻿<?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('nav'=>"reglogin"), 0);?>

	
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
                    <a href="map.php" data-theme="" data-icon="grid">
                        校园地图
                    </a>
                </li>
                <li>
                    <a href="#" data-theme="" data-icon="home" class="ui-btn-active ui-state-persist">
                        状态物品
                    </a>
                </li>
            </ul>
        </div>
    
		<div data-role="collapsible-set" data-theme="" data-content-theme="">
            <div data-role="collapsible" data-collapsed="false">
                <h3>
                    状态物品
                </h3>
                
            </div>
        </div>
	</div><!-- /content --> 

<?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>