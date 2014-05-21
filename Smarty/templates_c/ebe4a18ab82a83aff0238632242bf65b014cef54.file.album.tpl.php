<?php /* Smarty version Smarty-3.1.11, created on 2012-09-04 02:22:02
         compiled from "F:\htdocs\eAl\templates\album.tpl" */ ?>
<?php /*%%SmartyHeaderCode:13081504565ca7de681-36711277%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ebe4a18ab82a83aff0238632242bf65b014cef54' => 
    array (
      0 => 'F:\\htdocs\\eAl\\templates\\album.tpl',
      1 => 1346725168,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '13081504565ca7de681-36711277',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'the_base_path' => 0,
    'the_key_path' => 0,
    'albumtitle' => 0,
    'photonum' => 0,
    'demo' => 0,
    'size' => 0,
    'segstyle' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_504565ca85aa29_02124402',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_504565ca85aa29_02124402')) {function content_504565ca85aa29_02124402($_smarty_tpl) {?><!DOCTYPE html>
<html><head>
<meta charset="utf-8" />
<title id="ti_title"></title>
<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['the_base_path']->value;?>
css/common.css" />
<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['the_base_path']->value;?>
css/album.css" />
<script src="<?php echo $_smarty_tpl->tpl_vars['the_base_path']->value;?>
js/plugins/jquery-x.js"></script>
<script src="<?php echo $_smarty_tpl->tpl_vars['the_base_path']->value;?>
js/plugins/jquery-ui-x.js"></script>
<script src="<?php echo $_smarty_tpl->tpl_vars['the_base_path']->value;?>
js/plugins/ocanvas.js"></script>
<script src="<?php echo $_smarty_tpl->tpl_vars['the_base_path']->value;?>
js/plugins/ey-lib.js"></script>
<script src="<?php echo $_smarty_tpl->tpl_vars['the_base_path']->value;?>
js/plugins/eAl-ocanvas.js"></script>

<script>
// constants
var PHO_DIR = '<?php echo $_smarty_tpl->tpl_vars['the_key_path']->value;?>
photos/',
	THM_DIR = '<?php echo $_smarty_tpl->tpl_vars['the_key_path']->value;?>
thumbs/',
	ICO_DIR = '<?php echo $_smarty_tpl->tpl_vars['the_base_path']->value;?>
images/';

var TITLE = '<?php echo $_smarty_tpl->tpl_vars['albumtitle']->value;?>
',
	PHO_NUM = '<?php echo $_smarty_tpl->tpl_vars['photonum']->value;?>
',
	DEMO = '<?php echo $_smarty_tpl->tpl_vars['demo']->value;?>
',
	SIZE = '<?php echo $_smarty_tpl->tpl_vars['size']->value;?>
';

PHO_NUM = Number(PHO_NUM);
DEMO = !!DEMO;
SIZE = Number(SIZE);

(function(){
	$(function(){
		$('#cvs_main').bind('mousedown touchstart', function(e){
			e.preventDefault();
		});
		if (DEMO) {
			$('#ti_title').remove();
			$('#he_title').remove();
		} else {
			$('#ti_title').html(TITLE);
			$('#he_title').text(TITLE);
		}
	});
})();
</script>
<script src="<?php echo $_smarty_tpl->tpl_vars['the_base_path']->value;?>
js/album/style_<?php echo $_smarty_tpl->tpl_vars['segstyle']->value;?>
.js"></script>
</head><body>
<h2 id="he_title" class="title"></h2>
<div id="div_main">
    <canvas id="cvs_main"></canvas>
</div>
</body>
</html><?php }} ?>