<?php /* Smarty version Smarty-3.1.11, created on 2012-10-06 11:21:49
         compiled from "F:\htdocs\xydd-1.0\templates\header.tpl" */ ?>
<?php /*%%SmartyHeaderCode:140855070144dd4d547-92094385%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5411322105baf8fde3d7090705c8cc0e75315800' => 
    array (
      0 => 'F:\\htdocs\\xydd-1.0\\templates\\header.tpl',
      1 => 1349519984,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '140855070144dd4d547-92094385',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_5070144dd76d57_14058554',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5070144dd76d57_14058554')) {function content_5070144dd76d57_14058554($_smarty_tpl) {?><!DOCTYPE html>
<html>
<head> 
	<meta charset="utf-8"> 
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<meta name="format-detection" content="telephone=no" />
    
	<title>校园地带</title>
    
    <link rel="stylesheet" href="plugins/jquery/jquery.mobile-1.1.1.min.css">
    <link rel="stylesheet" href="plugins/jquery/jquery.mobile-1.1.1.structure.min.css">
    <link rel="stylesheet" href="plugins/jquery/jquery.mobile-1.1.1.theme.min.css"> 
	<script src="plugins/jquery/jquery-1.8.1.min.js"></script> 
	<script src="plugins/jquery/jquery.mobile-1.1.1.min.js"></script>
    
    <style>
	    div.right {
			float: right;
		}
	    span.uname {
			text-decoration: underline;
		}
	</style>
    
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
		
		function mAjax(url, data, type, next, fn) {
			$.ajax({
				url: url,
				data: data,
				type: type || 'GET',
				dataType: 'text',
				success: function(result){
					eval('result='+ result);	// enable json
					fn && fn(result);
					ajaxHandler(result, next);
				}
			});
			function ajaxHandler(result, next) {
				var msg = result.msg;
				if (next) {
					jumpto(next, msg);
				} else {
					msg && showMessage(msg);
				}
			}
		}
		function mPost(url, data, next, fn) {
			mAjax(url, data, 'POST', next, fn);
		}
		function mGet(url, data, next, fn) {
			mAjax(url, data, 'GET', next, fn);
		}
		
		function myAjax(url, data, fn, type) {
			showLoader();
			$.ajax({
				url: url,
				data: data,
				type: type || 'GET',
				dataType: 'text',
				success: function(data){
					eval('data='+ data);	// enable json
					fn && fn(data);
					ajaxHandler(data);
				}
			});
			function ajaxHandler(data) {
				hideLoader();
				var code = data.code,
					url = data.url,
					msg = data.msg;
				if (url) {
					jumpto(url===1? window.location.href: url, msg);
				} else {
					msg && showMessage(msg);
				}
			}
		}
		
		function showLoader() {
			showMessage();
		}
		function hideLoader() {
			hideMessage();
		}
		var msgTimer;
		function showMessage(text, callback, duration) {
			if (!text) return;
			hideMessage();
			$.mobile.showPageLoadingMsg(null, text, text? true: false);
			msgTimer = setTimeout(function(){
				hideMessage();
				callback && callback();
			}, duration || 8000);
		}
		function hideMessage() {
			clearTimeout(msgTimer);
			msgTimer = null;
			$.mobile.hidePageLoadingMsg();
		}
		
		function jumpto(url, msg) {
			msg && setCookie('premsg', msg);
			if (url === 1) {
				window.location.reload();
			} else {
				window.location = url;
			}
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
		
		function openDialog(url) {
			$('<a data-rel="dialog"></a>').attr('href', url).css('display', 'none').appendTo('div[data-role=content]').click();
		}
	</script>
</head>
<body>

<div data-role="page">

	<div data-role="header"> 
		<h3>校园地带</h3> 
	</div><!-- /header --><?php }} ?>