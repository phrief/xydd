<?php /* Smarty version Smarty-3.1.11, created on 2012-08-29 08:59:21
         compiled from "F:\htdocs\eAl\templates\upload.tpl" */ ?>
<?php /*%%SmartyHeaderCode:17523503dd9e9d1d016-57619370%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'aba47ff17d695ec0f0edf5dc69d6fc7d24e7b17a' => 
    array (
      0 => 'F:\\htdocs\\eAl\\templates\\upload.tpl',
      1 => 1346230026,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '17523503dd9e9d1d016-57619370',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'CSS_PATH' => 0,
    'albumkey' => 0,
    'JS_PATH' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_503dd9e9d32346_43474765',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_503dd9e9d32346_43474765')) {function content_503dd9e9d32346_43474765($_smarty_tpl) {?>﻿<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['CSS_PATH']->value;?>
upload.css" />

<div id="div_upload">
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
<script src="<?php echo $_smarty_tpl->tpl_vars['JS_PATH']->value;?>
plugins/ajaxfileupload.js"></script>
<script src="<?php echo $_smarty_tpl->tpl_vars['JS_PATH']->value;?>
plugins/form_submit.js"></script>
<script src="<?php echo $_smarty_tpl->tpl_vars['JS_PATH']->value;?>
upload.js"></script><?php }} ?>