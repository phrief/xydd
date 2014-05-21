<?php /* Smarty version Smarty-3.1.11, created on 2012-10-06 11:21:43
         compiled from "F:\htdocs\xydd-1.0\templates\map.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1541550701447c4a5c3-86610843%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3a4516e94ed219900da7fec36012d387017f64b3' => 
    array (
      0 => 'F:\\htdocs\\xydd-1.0\\templates\\map.tpl',
      1 => 1349521771,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1541550701447c4a5c3-86610843',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_50701447ca9b14_52778292',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_50701447ca9b14_52778292')) {function content_50701447ca9b14_52778292($_smarty_tpl) {?>﻿<?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

	
    <style>
		#navbar1 {
			margin-bottom: 15px;
		}
	</style>
    
    <script>
		var $txt_search;
		$(document).bind('pageinit', function(){
			$txt_search = $('#txt_search');
			
			var $type = $('fieldset#searchtype'),
				$radios = $type.find('input[type=radio]');
				$label = $('label#searchtype');
			
			$radios.bind('change', function(){
				var type = Number($(this).val());
				$label.text(type? '角色名': '角色ID');
				$txt_search.attr('name', type? 'taruname': 'tarid');
			});
		});
		
		function logout() {
			mPost('logout.php', null, 1);
		}
		function search() {
			var type = $txt_search.attr('name'),
				txt = $txt_search.val();
			if (txt == '') {
				showMessage('条件不能为空。');
			} else {
				openDialog(['profile.php?', type, '=', txt].join(''));
			}
		}
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
            <div data-role="collapsible">
                <h3>用户搜索</h3>
                <div>
                    <div data-role="fieldcontain">
                        <fieldset id="searchtype" data-role="controlgroup" data-type="horizontal">
                            <legend>搜索方式</legend>
                            <input name="searchtype" id="radio1" type="radio" checked="checked" value="0">
                            <label for="radio1">角色ID</label>
                            <input name="searchtype" id="radio2" type="radio" value="1">
                            <label for="radio2">角色名</label>
                        </fieldset>
                    </div>
                    <div data-role="fieldcontain" data-inline="true">
                        <fieldset data-role="controlgroup">
                            <label id="searchtype" for="txt_search">角色ID</label>
                            <input name="tarid" id="txt_search" placeholder="" value="" type="search" data-theme="d">
                        </fieldset>
                    </div>
                    <a href="javascript:search()" data-rel="dialog" data-role="button" data-icon="delete">进入档案</a>
                </div>
            </div>
            
            <div data-role="collapsible" data-collapsed="false">
                <h3>校园地图</h3>
                <div>
                    <a href="javascript:logout()" data-role="button" data-icon="delete">注销登录</a>
                </div>
            </div>
        </div>
	</div><!-- /content --> 

<?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>