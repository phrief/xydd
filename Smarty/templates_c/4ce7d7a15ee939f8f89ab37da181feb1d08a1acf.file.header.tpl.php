<?php /* Smarty version Smarty-3.1.11, created on 2012-09-18 11:22:32
         compiled from "F:\htdocs\glife-1.4\templates\header.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2891250585978919ba6-77950829%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4ce7d7a15ee939f8f89ab37da181feb1d08a1acf' => 
    array (
      0 => 'F:\\htdocs\\glife-1.4\\templates\\header.tpl',
      1 => 1347364779,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2891250585978919ba6-77950829',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_50585978935092_38284248',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_50585978935092_38284248')) {function content_50585978935092_38284248($_smarty_tpl) {?><!DOCTYPE html>
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
				var url = $form.attr('action') || '#',
					type = $form.attr('method') || 'GET',
					data = $form.serialize(),
					fn = $form.data('success');
				myAjax(url, data, fn, type);
				return false;	// prevent changing page
			});
			
			// fieldsets default behavior
			var $fsets = $forms.find('fieldset');
			$fsets.each(function(i, t){
				var $radios = $(t).find('input[type=radio]');
				$radios.attr('checked', false).checkboxradio('refresh');
				$first = $radios.first();
				if ($first[0]) {
					$first.attr('checked', true).checkboxradio('refresh');
				}
			});
			
			var $btn_myajax = $('button.my-ajax');
			$btn_myajax.bind('vclick', function(e){
				e.preventDefault();
				var url = $(this).data('my-href');
				myAjax(url);
				return false;
			});
		});
		
		function myAjax(url, data, fn, type) {
			showLoader();
			$.ajax({
				url: url,
				data: data,
				type: type || 'GET',
				dataType: 'text',
				success: function(data){
					ajaxHandler(data);
					fn && fn(data);
				}
			});
			function ajaxHandler(data) {
				hideLoader();
				eval('data='+ data);	// enable json
				if (data.url) {
					setCookie('premsg', data.msg);
					jumpto(data.url);
				} else {
					showMessage(data.msg);
				}
			}
		}
		
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