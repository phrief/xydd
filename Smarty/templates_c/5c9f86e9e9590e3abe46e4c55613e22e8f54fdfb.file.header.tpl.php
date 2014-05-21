<?php /* Smarty version Smarty-3.1.11, created on 2012-09-07 17:28:42
         compiled from "F:\htdocs\glife-0.0\templates\header.tpl" */ ?>
<?php /*%%SmartyHeaderCode:14482504a2eca2e0c78-15238529%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5c9f86e9e9590e3abe46e4c55613e22e8f54fdfb' => 
    array (
      0 => 'F:\\htdocs\\glife-0.0\\templates\\header.tpl',
      1 => 1346987794,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '14482504a2eca2e0c78-15238529',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_504a2eca2ecdc1_20344714',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_504a2eca2ecdc1_20344714')) {function content_504a2eca2ecdc1_20344714($_smarty_tpl) {?><!DOCTYPE html>
<html>
<head> 
	<meta charset="utf-8"> 
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1"> 
	<title>校园G生活</title>
	<link rel="stylesheet" href="plugins/jquery/jquery.mobile-1.1.1.min.css">
    <link rel="stylesheet" href="plugins/jquery/jquery.mobile-1.1.1.structure.min.css">
    <link rel="stylesheet" href="plugins/jquery/jquery.mobile-1.1.1.theme.min.css"> 
	<script src="plugins/jquery/jquery-1.7.1.min.js"></script> 
	<script src="plugins/jquery/jquery.mobile-1.1.1.min.js"></script>
    <script>
		$(document).bind('pageinit', function(){
			hideMessage();
			
			// forms default behavior
			var $forms = $('form');
			$forms.bind('submit', function(e){
				e.preventDefault();
				showLoader();
				var $form = $(this);
				$.ajax({
					url: $form.attr('action')||'#',
					type: $form.attr('method')||'GET',
					data: $form.serialize(),
					dataType: 'text',
					success: function(data){
						hideLoader();
						var fn = $form.data('success');
						fn && fn(data);
					},
					error: function(){
						alert('AJAX error!');
					}
				});
				return false;	// prevent changing page
			});
		});
		
		function showLoader() {
			showMessage();
		}
		function hideLoader() {
			hideMessage();
		}
		function showMessage(text, theme) {
			$.mobile.showPageLoadingMsg(theme, text, text? true: false);
			$(document).one('vmousedown', function(e){
				e.preventDefault();
				hideMessage();
			});
		}
		function hideMessage() {
			$.mobile.hidePageLoadingMsg();
		}
	</script>
</head>
<body>

<div data-role="page">

	<div data-role="header"> 
		<h3>校园G生活</h3> 
	</div><!-- /header --><?php }} ?>