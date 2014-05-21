<?php /* Smarty version Smarty-3.1.11, created on 2012-09-20 06:30:47
         compiled from "F:\htdocs\glife-1.5\templates\cafe.tpl" */ ?>
<?php /*%%SmartyHeaderCode:20156505ab8178bc8a2-87271175%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0cb2851159d6ebc7d296fc6ec9c8d388f911fc11' => 
    array (
      0 => 'F:\\htdocs\\glife-1.5\\templates\\cafe.tpl',
      1 => 1348023741,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '20156505ab8178bc8a2-87271175',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'NUM_TABLE' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_505ab8183feb87_81747580',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_505ab8183feb87_81747580')) {function content_505ab8183feb87_81747580($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


<div data-role="collapsible" data-collapsed="false">
            <h3>
                欢迎来到咖啡厅
            </h3>
            <ul id="ulist1" data-role="listview">
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
                <li><a data-ajax="false" href="chatroom.php?notable=<?php echo $_smarty_tpl->getVariable('smarty')->value['section']['table']['index']+1;?>
"><img src="images/chat.png" class="ui-li-icon"
><h3><?php echo $_smarty_tpl->getVariable('smarty')->value['section']['table']['index']+1;?>
号桌</h3><span class="ui-li-count">5</span></a></li>
				<?php endfor; endif; ?>
            </ul>
        </div><?php }} ?>