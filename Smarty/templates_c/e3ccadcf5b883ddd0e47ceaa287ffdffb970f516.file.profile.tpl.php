<?php /* Smarty version Smarty-3.1.11, created on 2012-10-04 14:15:25
         compiled from "F:\htdocs\glife-1.7\templates\profile.tpl" */ ?>
<?php /*%%SmartyHeaderCode:5647506d99fd6c9f45-17458600%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e3ccadcf5b883ddd0e47ceaa287ffdffb970f516' => 
    array (
      0 => 'F:\\htdocs\\glife-1.7\\templates\\profile.tpl',
      1 => 1349358252,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '5647506d99fd6c9f45-17458600',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'assets' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_506d99fd742a70_04423190',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_506d99fd742a70_04423190')) {function content_506d99fd742a70_04423190($_smarty_tpl) {?>﻿<?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

	
    <style>
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
		$(document).bind('pageinit', function(){
			//
		});
	</script>
    
	<div data-role="content">
		<div data-role="collapsible-set" data-theme="" data-content-theme="">
            <div data-role="collapsible" data-collapsed="false">
                <h3>
                    TA的状态
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
        </div>
	</div><!-- /content --> 

<?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>