<?php /* Smarty version Smarty-3.1.11, created on 2012-11-21 19:24:03
         compiled from "F:\htdocs\xydd\templates\cafe.tpl" */ ?>
<?php /*%%SmartyHeaderCode:3242650acb9d31c45f3-52786702%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6bcbc6e6c31b567b227c5618c27c462d67140c2d' => 
    array (
      0 => 'F:\\htdocs\\xydd\\templates\\cafe.tpl',
      1 => 1353407234,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3242650acb9d31c45f3-52786702',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'NUM_TABLE' => 0,
    'count_users' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_50acb9d324be24_30254378',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_50acb9d324be24_30254378')) {function content_50acb9d324be24_30254378($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


<style>
	#navbar1 {
		margin-bottom: 15px;
	}
	#ul_tables {
		margin: 0;
		margin-bottom: 12px;
	}
	#ul_tables>li h3 {
		margin-left: 15px;
		font-size: 16px;
	}
	#ul_tables>li span.ui-li-count {
		font-size: 12px;
	}
</style>

<script>
	var $imgs;
	
	$(document).one('pageinit', function(){
		$imgs = $('img', '#ul_tables').css({
			'max-width': 30,
			'max-height': 30
		});
	});
	
	function enterTable(table) {
		var url = 'chatroom.php?table='+ table;
		mGet(url, {
			 _module: 'apply'
		}, null, function(r){
			if (r.title === 'pass') {
				jumpto(url, r.msg);
				return false;
			}
		});
	}
</script>

<div data-role="content" data-theme="a">
    
    <div id="navbar1" data-role="navbar" data-iconpos="left"><ul>
        <li>
            <a href="map.php" data-icon="grid">
                校园地图
            </a>
        </li>
        <li>
            <a href="#" data-icon="star" class="ui-btn-active ui-state-persist">
                咖啡厅
            </a>
        </li>
    </ul></div>
    
    <h3>欢迎来到咖啡厅</h3>
    <ul id="ul_tables" data-role="listview">
        <?php if (isset($_smarty_tpl->tpl_vars['smarty']->value['section']["table"])) unset($_smarty_tpl->tpl_vars['smarty']->value['section']["table"]);
$_smarty_tpl->tpl_vars['smarty']->value['section']["table"]['name'] = "table";
$_smarty_tpl->tpl_vars['smarty']->value['section']["table"]['loop'] = is_array($_loop=$_smarty_tpl->tpl_vars['NUM_TABLE']->value) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']["table"]['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']["table"]['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']["table"]['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']["table"]['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']["table"]['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']["table"]['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']["table"]['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']["table"]['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']["table"]['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']["table"]['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']["table"]['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']["table"]['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']["table"]['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']["table"]['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']["table"]['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']["table"]['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']["table"]['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']["table"]['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']["table"]['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']["table"]['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']["table"]['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']["table"]['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']["table"]['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']["table"]['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']["table"]['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']["table"]['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']["table"]['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']["table"]['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']["table"]['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']["table"]['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']["table"]['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']["table"]['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']["table"]['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']["table"]['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']["table"]['total']);
?>
        <li><a href="javascript:enterTable(<?php echo $_smarty_tpl->getVariable('smarty')->value['section']['table']['index']+1;?>
)"><img src="images/chat.png" class="ui-li-icon"><h3><?php echo $_smarty_tpl->getVariable('smarty')->value['section']['table']['index']+1;?>
号桌</h3><span class="ui-li-count">已有 <?php echo $_smarty_tpl->tpl_vars['count_users']->value[$_smarty_tpl->getVariable('smarty')->value['section']['table']['index']+1];?>
 人</span></a></li>
        <?php endfor; endif; ?>
    </ul>
    
</div>

<?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>