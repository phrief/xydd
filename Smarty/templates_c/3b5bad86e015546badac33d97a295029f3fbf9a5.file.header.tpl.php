<?php /* Smarty version Smarty-3.1.11, created on 2012-09-06 15:51:02
         compiled from "F:\htdocs\ss\templates\header.tpl" */ ?>
<?php /*%%SmartyHeaderCode:166805048c666af3534-01498900%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3b5bad86e015546badac33d97a295029f3fbf9a5' => 
    array (
      0 => 'F:\\htdocs\\ss\\templates\\header.tpl',
      1 => 1346942503,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '166805048c666af3534-01498900',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_5048c666b1ce69_00442809',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5048c666b1ce69_00442809')) {function content_5048c666b1ce69_00442809($_smarty_tpl) {?><!DOCTYPE html>
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
						var fn = $form.data('success'),
							once = $form.data('oneoff'),
							rst = false;
						if (fn) {
							rst = fn(data);
						}
						if (once && rst) {
							var $inputs = $form.find('input, textarea');
							$inputs.attr('disabled', true);
						}
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