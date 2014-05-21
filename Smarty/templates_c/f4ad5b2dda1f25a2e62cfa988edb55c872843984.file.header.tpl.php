<?php /* Smarty version Smarty-3.1.11, created on 2012-09-09 08:11:23
         compiled from "F:\htdocs\glife-0.2\templates\header.tpl" */ ?>
<?php /*%%SmartyHeaderCode:10127504c4f2b7fe9e2-21592143%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f4ad5b2dda1f25a2e62cfa988edb55c872843984' => 
    array (
      0 => 'F:\\htdocs\\glife-0.2\\templates\\header.tpl',
      1 => 1347177594,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '10127504c4f2b7fe9e2-21592143',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_504c4f2b80cd45_46958832',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_504c4f2b80cd45_46958832')) {function content_504c4f2b80cd45_46958832($_smarty_tpl) {?><!DOCTYPE html>
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
					url: $form.attr('action') || '#',
					type: $form.attr('method') || 'GET',
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
			
			// fieldsets default behavior
			var $fsets = $forms.find('fieldset');
			$fsets.each(function(){
				$first = $(this).find('input[type=radio]').first();
				$first.attr('checked', 'checked');
			});
		});
		
		function showLoader() {
			showMessage();
		}
		function hideLoader() {
			hideMessage();
		}
		function showMessage(text, callback, duration) {
			$.mobile.showPageLoadingMsg(null, text, text? true: false);
			setTimeout(function(){
				hideMessage();
				callback && callback();
			}, duration || 5000);
		}
		function hideMessage() {
			$.mobile.hidePageLoadingMsg();
		}
		
		function jumpto(url) {
			window.location = url;
		}
	</script>
</head>
<body>

<div data-role="page">

	<div data-role="header"> 
		<h3>校园G生活</h3> 
	</div><!-- /header --><?php }} ?>