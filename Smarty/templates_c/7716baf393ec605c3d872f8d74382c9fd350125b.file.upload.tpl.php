<?php /* Smarty version Smarty-3.1.11, created on 2012-08-26 02:57:23
         compiled from ".\templates\upload.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2216950399093153e78-46216292%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7716baf393ec605c3d872f8d74382c9fd350125b' => 
    array (
      0 => '.\\templates\\upload.tpl',
      1 => 1345949794,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2216950399093153e78-46216292',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'CSS_PATH' => 0,
    'SELF_NAME' => 0,
    'JS_PATH' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_503990931c4d89_50482724',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_503990931c4d89_50482724')) {function content_503990931c4d89_50482724($_smarty_tpl) {?>﻿<?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('title'=>"图片上传"), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ("welcome.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['CSS_PATH']->value;?>
<?php echo $_smarty_tpl->tpl_vars['SELF_NAME']->value;?>
.css" />

<div id="div_upload">
<form id="form_upload" enctype="multipart/form-data">
    <table>
    	<tr>
    		<td class="first_td"><label for="file_photo[]">选择照片</label></td>
   			<td><input id="file_photo[]" name="file_photo[]" type="file" /></td>
    	</tr>
    	<tr>
        	<td colspan="2">
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
<?php echo $_smarty_tpl->tpl_vars['SELF_NAME']->value;?>
.js"></script>
<?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>