<?php /* Smarty version Smarty-3.1.11, created on 2012-11-21 19:24:08
         compiled from "F:\htdocs\xydd\templates\asset.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2219950acb9d80e98f2-90945864%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a9dad5e52ec4701d9ecb08e4d2662f698ca0a0a6' => 
    array (
      0 => 'F:\\htdocs\\xydd\\templates\\asset.tpl',
      1 => 1353494121,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2219950acb9d80e98f2-90945864',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_50acb9d80f14c4_32194476',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_50acb9d80f14c4_32194476')) {function content_50acb9d80f14c4_32194476($_smarty_tpl) {?>    <meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="format-detection" content="telephone=no" />
    
    <link rel="stylesheet" href="plugins/jquery/jquery.mobile-1.2.0.min.css">
    <link rel="stylesheet" href="plugins/jquery/jquery.mobile.structure-1.2.0.min.css">
    <link rel="stylesheet" href="plugins/jquery/jquery.mobile.theme-1.2.0.min.css">
    
    <script src="plugins/jquery/jquery-1.8.2.min.js"></script>
    <script src="plugins/jquery/jquery.mobile-1.2.0.min.js"></script>
    
    <style>
	    div.right, img.right {
			float: right;
		}
		div.left, img.left {
			float: left;
		}
		div.clear, img.clear {
			clear: both;
		}
	    span.uname, span.tname, span.attr {
			text-decoration: underline;
		}
		span.quote {
			font-weight: bold;
		}
		textarea {
			resize: none;
		}
		img.sinaWb {
			position: absolute;
		}
		p.space:before {
			content: '　　';
		}
		img.avatar {
			border: solid thin #999;
		}
		
		#div_logo {
			display: none;
			position: fixed;
			z-index: 10000;
			width: 320px;
			height: 175px;
			top: 50%;
			left: 50%;
			margin: auto;
			margin-left: -160px;
			margin-top: -90px;
			background-color: rgba(255, 255, 255, .3);
			-webkit-border-radius: 8em;
			-moz-border-radius: 8em;
			border-radius: 8em;
		}
		#div_logo>img {
			widht; 100%;
		}
		
		/* overwrite the style enhanced by JQM */
		div.ui-select {
			width: 100% !important;
			max-width: 560px;
		}
		div.ui-controlgroup-controls {
			width: 100% !important;
			max-width: 560px;
		}
		div.ui-input-search {
			width: 70% !important;
			max-width: 490px;
		}
		input.ui-input-text {
			width: 70% !important;
			max-width: 490px;
		}
		textarea.ui-input-text {
			width: 100% !important;
			max-width: 560px;
			height: 100px;
			resize: none;
		}
		div.ui-controlgroup-label,
			label.ui-input-text, label.ui-select {
			width: 100% !important;
			max-width: 300px;
			margin-bottom: 5px !important;
		}
		
		div.ui-dialog div.ui-controlgroup-label,
			div.ui-dialog label.ui-select {
			width: 100% !important;
			max-width: 150px;
			margin-bottom: 5px !important;
		}
		div.ui-dialog div.ui-select {
			width: 100% !important;
			max-width: 300px;
		}
		div.ui-dialog textarea.ui-input-text {
			width: 90% !important;
		}
	</style>
    
    <script src="plugins/sina/wbshare.js"></script>
    <script>
		(function(){	// never put into pageinit
			var regDialog = new RegExp($.mobile.dialogHashKey);
			var h = location.href;
			if (/^[^\?]*#[^\?]*\./.test(h)) {	// for ie hash bug
				jumpto(resetHash(h));
			} else if (regDialog.test(h)) {	// for jqm dialog
				jumpto(resetHash(h));
			}
		})();
		$(document).bind('pageinit', function(){
			(function(){
				// sina weibo share
				$('img.sinaWb').css('cursor', 'pointer').attr('title', '分享到微博').unbind('click', sinaWbShare).click(sinaWbShare);
				
				// overwrite the style enhanced by JQM
				$('div.ui-controlgroup-controls').has('textarea.ui-input-text').css({
					'width': '100% !important',
					'max-width': 1024
				});
				$('div.ui-dialog div.ui-controlgroup-controls').has('div.ui-radio').css({
					'width': '100% !important',								
					'max-width': 300
				});
					
				// placeholder
				$('input, textarea').attr('placeholder', '......');
			})();
			(function(){
				// pre proccessing
				hideMessage();
				var cmd = getCookie('precmd');
				if (cmd) {
					if (cmd === 'logo') {
						showLogo();
					} else if (cmd === 'table_master') {
						//
					}
					delCookie('precmd');
				}
				var msg = getCookie('premsg');
				if (msg) {
					$(function(){
						showMessage(msg);
					});
					delCookie('premsg');
				}
				// forms default behavior
				var $forms = $('form').filter(function(i, j){
					var isAjax = $(j).data('ajax');
					return isAjax!=='false';
				});
				$forms.filter('[target!=_blank]').bind('submit', function(e){
					e.preventDefault();
					var $form = $(this);
					var url = $form.attr('action') || '#',
						type = $form.attr('method') || 'GET',
						tar = $form.attr('target'),
						data = $form.serialize(),
						next = $form.data('next'),
						validate = $form.data('validate'),
						callback = $form.data('callback');
					
					if (!validate || validate() !== false) {
						mAjax(url, data, type, next, callback);
					}
					return false;	// prevent changing page
				});
				heartbeat();
			})();
		}).keydown(function(e){
			if (e.keyCode === 8) {
				var o = e.target || e.srcElement;
				var n = o.nodeName,
					t = o.type || o.getAttribute('type');
				if (n=='TEXTAREA' || t=='text' || t=='password') {
					if (!o.disabled && !o.readOnly) return true;
				}
				return false;
			}
		});
		function mAjax(url, data, type, next, callback, loader) {
			loader = loader===undefined? true: loader;
			loader && showLoader();
			$.ajax({
				url: url,
				data: data,
				type: type || 'GET',
				success: function(data){
					hideLoader();
					
					try {
						eval('data='+ data);	// enable json
					} catch (e) {
						data = {};
					}
					
					if (!callback || callback(data)!==false) {
						mAjaxDefaultHandler(data, next);
					}
				}
			});
			
			function mAjaxDefaultHandler(data, next) {
				var msg = data.msg,
					url = data.url,
					dialog = data.dialog;
				if (url) {
					if (dialog) {
						popDialog(url, msg);
					} else {
						jumpto(url, msg);
					}
				} else if (next) {
					jumpto(next, msg);
				} else {
					msg && showMessage(msg);
				}
			}
		}
		function mPost(url, data, next, callback, loader) {
			mAjax(url, data, 'POST', next, callback, loader);
		}
		function mGet(url, data, next, callback, loader) {
			mAjax(url, data, 'GET', next, callback, loader);
		}
		var msgThread;
		function showLoader() {
			showMessage(null);
		}
		function hideLoader() {
			hideMessage();
		}
		function showMessage(text, callback, duration) {
			hideMessage();
			if (text === null) {	// loader
				$.mobile.showPageLoadingMsg(null, null, false);
			} else  {	// not loader
				$.mobile.showPageLoadingMsg(null, text, true);
				clearTimeout(msgThread);
				msgThread = setTimeout(function(){
					hideMessage();
					callback && callback();
				}, duration || 3000);
			}
		}
		function hideMessage() {
			var has = $('div.ui-loader').length > 0;
			has && $.mobile.hidePageLoadingMsg();
		}
		
		function jumpto(url, msg) {
			msg && setCookie('premsg', msg);
			if (url === 1) {
				window.location.reload();
			} else {
				/*$('<a>').attr('href', url).css('display', 'none').appendTo('div[data-role=content]').click().detach();*/
				window.location.href = url;
			}
		}
		function popDialog(url, msg) {
			msg && setCookie('premsg', msg);
			$('<a data-rel="dialog"></a>').attr('href', url).css('display', 'none').appendTo('div[data-role=content]').click().detach();
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
		function rand(min, max) {
			if (max === undefined) {
				max = min; min = 0;
			}
			return Math.round(min+Math.random()*(max-min));
		}
		function rtrim(str) {
			return str.replace(/(\s*$)/g, '');
		}
		function scrollDown($obj) {
			var t = $obj[0].scrollHeight;  
			$obj.scrollTop(t);
		}
		function tohtml(txt) {
			txt = txt.replace(/&/g, '&amp;');
			txt = txt.replace(/</g, '&lt;');
			txt = txt.replace(/>/g, '&gt;');
			txt = txt.replace(/"/g, '&quot;');
			txt = txt.replace(/ /g, '&nbsp;');
			txt = txt.replace(/\n/g, '<br>');
			return txt;
		}
		
		function heartbeat() {
			$.get('conn/heartbeat.php');
			setTimeout(heartbeat, 5000);
		}
		function resetHash(url) {
			return url.replace(/#(\S)*$/, '');
		}
		function isActive($el) {
			return $el.attr('id') === document.activeElement.id;
		}
		
		function toBits(strNum, bits) {
			strNum = '' + strNum;
			while (strNum.length < bits) {
				strNum = '0' + strNum;
			}
			return strNum;
		}
		function showLogo() {
			var $div_logo = $('#div_logo');
			$div_logo.fadeIn(function(){
				setTimeout(function(){
					$div_logo.fadeOut();
				}, 4000);
			});
		}
	</script><?php }} ?>