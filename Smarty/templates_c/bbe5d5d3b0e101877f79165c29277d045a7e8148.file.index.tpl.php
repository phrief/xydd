<?php /* Smarty version Smarty-3.1.11, created on 2012-09-05 01:02:08
         compiled from "F:\htdocs\eAl\templates\index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:151435046a490bf0216-53118807%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'bbe5d5d3b0e101877f79165c29277d045a7e8148' => 
    array (
      0 => 'F:\\htdocs\\eAl\\templates\\index.tpl',
      1 => 1346593714,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '151435046a490bf0216-53118807',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'CSS_PATH' => 0,
    'SELF_NAME' => 0,
    'albumset' => 0,
    'MAX_ALBUM_NUM' => 0,
    'album' => 0,
    'IMG_PATH' => 0,
    'JS_PATH' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_5046a490f229e6_83008525',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5046a490f229e6_83008525')) {function content_5046a490f229e6_83008525($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('title'=>"电子相册分享平台"), 0);?>

<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['CSS_PATH']->value;?>
<?php echo $_smarty_tpl->tpl_vars['SELF_NAME']->value;?>
.css" />

<div id="div_albums">
	<h4 class="title">我的相册 -- <?php echo count($_smarty_tpl->tpl_vars['albumset']->value);?>
 / <?php echo $_smarty_tpl->tpl_vars['MAX_ALBUM_NUM']->value;?>
</h4>
	<ul>
   		<?php  $_smarty_tpl->tpl_vars['album'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['album']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['albumset']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['album']->key => $_smarty_tpl->tpl_vars['album']->value){
$_smarty_tpl->tpl_vars['album']->_loop = true;
?>
    	<li data-key="<?php echo $_smarty_tpl->tpl_vars['album']->value['albumkey'];?>
">
        	<a class="manage"><?php echo $_smarty_tpl->tpl_vars['album']->value['albumtitle'];?>
</a>
       		<a class="abandon"><img src="<?php echo $_smarty_tpl->tpl_vars['IMG_PATH']->value;?>
off.png" /></a>
        </li>
        <?php } ?>
    </ul>
</div>

<div id="div_create">
	<h4 class="title">相册创建</h4>
    <form id="form_create">
        <table>
            <tr>
                <td class="first_td"><label for="txt_albumtitle">相册标题</label></td>
                <td><input id="txt_albumtitle" name="albumtitle" type="text" /></td>
            </tr>
            <tr>
                <td><label>相册样式</label></td>
                <td><div>
                    	<input id="rd_style_00" name="albumstyle" value="0" type="radio" checked />
                        <label for="rd_style_00">样式1</label>
                        <label for="rd_style_00"><img src="<?php echo $_smarty_tpl->tpl_vars['IMG_PATH']->value;?>
style_00.jpg" /></label>
                    </div>
                    <div>
                        <input id="rd_style_01" name="albumstyle" value="1" type="radio" />
                        <label id="lb_style_01" for="rd_style_01">样式2</label>
                       	<label id="lb_style_01" for="rd_style_01"><img src="<?php echo $_smarty_tpl->tpl_vars['IMG_PATH']->value;?>
style_01.jpg" /></label>
                    </div></td>
            </tr>
            <tr>
                <td colspan="2">
                    <button type="submit">新建</button>
                </td>
            </tr>
        </table>
    </form>
</div>

<script src="<?php echo $_smarty_tpl->tpl_vars['JS_PATH']->value;?>
plugins/form_submit.js"></script>
<script src="<?php echo $_smarty_tpl->tpl_vars['JS_PATH']->value;?>
<?php echo $_smarty_tpl->tpl_vars['SELF_NAME']->value;?>
.js"></script>
<?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>