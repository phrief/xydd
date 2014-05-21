<?php /* Smarty version Smarty-3.1.11, created on 2012-09-04 02:22:01
         compiled from "F:\htdocs\eAl\templates\manage.tpl" */ ?>
<?php /*%%SmartyHeaderCode:25898504565c966cc42-37207170%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'df0096e7fb9e05b231f0bd0fa0c593e4b746e964' => 
    array (
      0 => 'F:\\htdocs\\eAl\\templates\\manage.tpl',
      1 => 1346594064,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '25898504565c966cc42-37207170',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'albumtitle' => 0,
    'CSS_PATH' => 0,
    'SELF_NAME' => 0,
    'photonum' => 0,
    'MAX_PHOTO_NUM' => 0,
    'IMG_PATH' => 0,
    'albumkey' => 0,
    'albumstyle' => 0,
    'JS_PATH' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_504565c9720b58_58575445',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_504565c9720b58_58575445')) {function content_504565c9720b58_58575445($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('title'=>"相册管理 - ".((string)$_smarty_tpl->tpl_vars['albumtitle']->value)), 0);?>

<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['CSS_PATH']->value;?>
<?php echo $_smarty_tpl->tpl_vars['SELF_NAME']->value;?>
.css" />

<div id="div_sequence">
	<h4 class="title">相片序列 -- <?php echo $_smarty_tpl->tpl_vars['photonum']->value;?>
 / <?php echo $_smarty_tpl->tpl_vars['MAX_PHOTO_NUM']->value;?>
</h4>
	<div id="div_frame">
    	<img id="btn_left" src="<?php echo $_smarty_tpl->tpl_vars['IMG_PATH']->value;?>
left.png" />
    	<img id="btn_right" src="<?php echo $_smarty_tpl->tpl_vars['IMG_PATH']->value;?>
right.png" />
        <img id="btn_remove" src="<?php echo $_smarty_tpl->tpl_vars['IMG_PATH']->value;?>
off.png" />
		<ol id="ol_sequence"></ol>
	</div>
</div>

<div id="div_demo">
	<h4 class="title">相册预览</h4>
	<div id="div_demoload"></div>
</div>

<div id="div_settings">
	<h4 class="title">相册设置</h4>
	<form id="form_settings">
         <table>
            <tr>
                <td class="first_td"><label for="txt_albumtitle">相册标题</label></td>
                <td><input id="txt_albumtitle" name="albumtitle" type="text" /></td>
            </tr>
            <tr>
                <td><label>相册样式</label></td>
                <td><div>
                    	<input id="rd_style_00" name="albumstyle" value="0" type="radio" />
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
                	<input name="albumkey" value="<?php echo $_smarty_tpl->tpl_vars['albumkey']->value;?>
" type="hidden" />
                    <button type="submit">保存</button>
                </td>
            </tr>
        </table>
    </form>
</div>

<div id="div_upload">
    <h4 class="title">相片上传</h4>
    <form id="form_upload">
        <table>
            <tr>
                <td class="first_td"><label for="fl_photos_00">选择照片</label></td>
                <td><input id="fl_photos_00" name="photos[]" type="file" /></td>
            </tr>
            <tr>
                <td><label for="fl_photos_01">选择照片</label></td>
                <td><input id="fl_photos_01" name="photos[]" type="file" /></td>
            </tr>
            <tr>
                <td><label for="fl_photos_02">选择照片</label></td>
                <td><input id="fl_photos_02" name="photos[]" type="file" /></td>
            </tr>
            <tr>
                <td><label for="fl_photos_03">选择照片</label></td>
                <td><input id="fl_photos_03" name="photos[]" type="file" /></td>
            </tr>
            <tr>
                <td><label for="fl_photos_04">选择照片</label></td>
                <td><input id="fl_photos_04" name="photos[]" type="file" /></td>
            </tr>
            <tr>
                <td colspan="2">
                    <input name="albumkey" value="<?php echo $_smarty_tpl->tpl_vars['albumkey']->value;?>
" type="hidden" />
                    <button type="submit">上传</button>
                </td>
            </tr>
        </table>
    </form>
</div>

<script>
var KEY = '<?php echo $_smarty_tpl->tpl_vars['albumkey']->value;?>
',
	TITLE = '<?php echo $_smarty_tpl->tpl_vars['albumtitle']->value;?>
',
	STYLE = '<?php echo $_smarty_tpl->tpl_vars['albumstyle']->value;?>
',
	PHO_NUM = '<?php echo $_smarty_tpl->tpl_vars['photonum']->value;?>
';
STYLE = Number(STYLE);
PHO_NUM = Number(PHO_NUM);
</script>
<script src="<?php echo $_smarty_tpl->tpl_vars['JS_PATH']->value;?>
plugins/jquery-ui-x.js"></script>
<script src="<?php echo $_smarty_tpl->tpl_vars['JS_PATH']->value;?>
plugins/ajaxfileupload-x.js"></script>
<script src="<?php echo $_smarty_tpl->tpl_vars['JS_PATH']->value;?>
plugins/form_submit.js"></script>
<script src="<?php echo $_smarty_tpl->tpl_vars['JS_PATH']->value;?>
<?php echo $_smarty_tpl->tpl_vars['SELF_NAME']->value;?>
.js"></script>
<?php echo $_smarty_tpl->getSubTemplate ("nav.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>