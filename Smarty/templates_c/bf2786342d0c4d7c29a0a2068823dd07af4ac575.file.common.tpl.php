<?php /* Smarty version Smarty-3.1.11, created on 2012-11-12 15:21:31
         compiled from "F:\htdocs\xydd\templates\common.tpl" */ ?>
<?php /*%%SmartyHeaderCode:572750a0a37b696222-16130865%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'bf2786342d0c4d7c29a0a2068823dd07af4ac575' => 
    array (
      0 => 'F:\\htdocs\\xydd\\templates\\common.tpl',
      1 => 1352704450,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '572750a0a37b696222-16130865',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_50a0a37b69bba2_52531955',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_50a0a37b69bba2_52531955')) {function content_50a0a37b69bba2_52531955($_smarty_tpl) {?>    <meta charset="utf-8"> 
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="format-detection" content="telephone=no" />
    
    <link rel="stylesheet" href="plugins/jquery/jquery.mobile-1.1.1.min.css">
    <link rel="stylesheet" href="plugins/jquery/jquery.mobile.structure-1.1.1.min.css">
    <link rel="stylesheet" href="plugins/jquery/jquery.mobile.theme-1.1.1.min.css">
    
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
	    span.uname, span.attr {
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
	</style>
    
    <script src="plugins/jquery/jquery-1.8.2.min.js"></script>
	<script src="plugins/jquery/jquery.mobile-1.1.1.min.js"></script>
    <script src="plugins/sina/wbshare.js"></script>
    <script>
		$(function(){
			(function(){	// never put into pageinit
				var regDialog = new RegExp($.mobile.dialogHashKey);
				var h = location.href;
				if (/^[^\?]*#[^\?]*\./.test(h)) {	// for ie hash bug
					jumpto(resetHash(h));
				} else if (regDialog.test(h)) {	// for jqm dialog
					jumpto(resetHash(h));
				}
			})();
		}).bind('pageinit', function(){
			(function(){
				// sina weibo share
				$('img.sinaWb').css('cursor', 'pointer').attr('title', '分享到微博').unbind('click', sinaWbShare).click(sinaWbShare);
				
				var $div_field = $('div.ui-field-contain');
				var $div_controls = $div_field.find('div.ui-controlgroup-controls').css({
					'width': '100%'
				});
				// input[type=radio], input[type=checkbox]
				$div_controls.has('div.ui-radio, div.ui-checkbox').css({
					'width': '100%',
					'max-width': '560px'
				});
				// input[type=search]
				$div_field.find('div.ui-input-search').css({
					'width': '70%',
					'max-width': '490px'
				});
				// input[type=text]
				$div_field.find('input.ui-input-text').css({
					'width': '70%',
					'max-width': '490px'
				});
				// textarea
				$div_field.find('textarea.ui-input-text').css({
					'width': '90%',
					'max-width': '630px'
				});
				// label
				$div_field.find('div.ui-controlgroup-label, label.ui-input-text').css({
					'width': '100%',
					'max-width': '300px'
				});
				// placeholder
				$div_field.find('input, textarea').attr('placeholder', '......');
			})();
			(function(){
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
				$forms.filter('[target!=_blank]').bind('submit', function(e){
					e.preventDefault();
					var $form = $(this);
					var url = $form.attr('action') || '#',
						type = $form.attr('method') || 'GET',
						tar = $form.attr('target'),
						data = $form.serialize(),
						next = $form.data('next'),
						fn = $form.data('fn');
					
					mAjax(url, data, type, next, fn);
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
		function mAjax(url, data, type, next, fn) {
			showLoader();
			$.ajax({
				url: url,
				data: data,
				type: type || 'GET',
				success: function(data){
					hideLoader();
					eval('data='+ data);	// enable json
					if (!fn || fn(data)!==false) {
						mAjaxHandler(data, next);
					}
				}
			});
			
			function mAjaxHandler(data, next) {
				var msg = data.msg,
					url = data.url;
				if (url) {
					jumpto(url, msg);
				} else if (next) {
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
		var msgTimer;
		function showLoader() {
			showMessage(null);
		}
		function hideLoader() {
			hideMessage(null);
		}
		function showMessage(text, callback, duration) {
			hideMessage();
			if (text === null) {	// loader
				$.mobile.showPageLoadingMsg(null, null, false);
			} else  {	// not loader
				$.mobile.showPageLoadingMsg(null, text, true);
				msgTimer = setTimeout(function(){
					hideMessage();
					callback && callback();
				}, duration || 3000);
			}
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
		function popDialog(url) {
			$('<a data-rel="dialog"></a>').attr('href', url).css('display', 'none').appendTo('div[data-role=content]').click().detach();
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
	</script><?php }} ?>