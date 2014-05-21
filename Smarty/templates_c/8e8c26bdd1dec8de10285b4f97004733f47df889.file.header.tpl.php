<?php /* Smarty version Smarty-3.1.11, created on 2012-09-09 15:02:45
         compiled from "F:\htdocs\glife-0.3\templates\header.tpl" */ ?>
<?php /*%%SmartyHeaderCode:23529504caf95308644-54539758%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8e8c26bdd1dec8de10285b4f97004733f47df889' => 
    array (
      0 => 'F:\\htdocs\\glife-0.3\\templates\\header.tpl',
      1 => 1347195458,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '23529504caf95308644-54539758',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_504caf9532aa79_77884418',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_504caf9532aa79_77884418')) {function content_504caf9532aa79_77884418($_smarty_tpl) {?><!DOCTYPE html>
<html>
<head> 
	<meta charset="utf-8"> 
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<meta name="format-detection" content="telephone=no" />
    
	<title>校园G生活</title>
	<link rel="stylesheet" href="plugins/jquery/jquery.mobile-1.1.1.min.css">
    <link rel="stylesheet" href="plugins/jquery/jquery.mobile-1.1.1.structure.min.css">
    <link rel="stylesheet" href="plugins/jquery/jquery.mobile-1.1.1.theme.min.css"> 
	<script src="plugins/jquery/jquery-1.8.1.min.js"></script> 
	<script src="plugins/jquery/jquery.mobile-1.1.1.min.js"></script>
    <script>
		$(document).bind('pageinit', function(){
			hideMessage();
			var msg = getCookie('premsg');
			if (msg) {
				$(function(){
					showMessage(msg);
				});
				delCookie('premsg');
			}
			
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
						var fn = $form.data('success') || function(data){
							eval('data='+ data);
							if (data.url) {
								setCookie('premsg', data.msg);
								jumpto(data.url);
							} else {
								showMessage(data.msg);
							}
						};
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
			$fsets.each(function(i, t){
				$first = $(t).find('input[type=radio]').first();
				if ($first[0]) {
					$first.attr('checked', true).checkboxradio('refresh');
				}
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
		function setCookie(key, val, path) {
			var d = new Date();
			d = new Date(d.getTime() + 30*24*60*60*1000);	// 30 days
			document.cookie = [key, '=', escape(val),
						  ';expires=', d.toGMTString(),
						  ';path=', path || ''].join('');
		}
		function getCookie(key) {
			var val = false;
			var segs = document.cookie.split(';');
			$.each(segs, function(i, t){
				var p = t.split('=');
				if (p[0] === key) {
					val = unescape(p[1]);
					return false;
				}
			});
			return val;
		}
		function delCookie(key) {
			var d = new Date();
			d = new Date(d.getTime() - 1);
			document.cookie = [key, '=;expires=', d.toGMTString()].join('');
		}
	</script>
</head>
<body>

<div data-role="page">

	<div data-role="header"> 
		<h3>校园G生活</h3> 
	</div><!-- /header --><?php }} ?>