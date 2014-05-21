<?php /* Smarty version Smarty-3.1.11, created on 2012-11-21 16:45:24
         compiled from "F:\htdocs\xydd\templates\wishingwell.tpl" */ ?>
<?php /*%%SmartyHeaderCode:249350ac94a498efd9-51806389%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b8cd616bf04ac38a3457897fa6de76989336168c' => 
    array (
      0 => 'F:\\htdocs\\xydd\\templates\\wishingwell.tpl',
      1 => 1353410605,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '249350ac94a498efd9-51806389',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_50ac94a49dfad6_75676849',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_50ac94a49dfad6_75676849')) {function content_50ac94a49dfad6_75676849($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


<style>
	#navbar1 {
		margin-bottom: 15px;
	}
	
	#div_wishes {
		margin: 0;
		padding: 5px;
		width: 90%;
	}
	#ul_wishes {
		color: #36F;
		list-style: none;
		min-height: 100px;
	}
	#ul_wishes>li {
		margin-top: 15px;
		width: 95%;
	}
	#ul_wishes>li:first-child {
		margin-top: 0;
	}
	#ul_wishes>li>img {
		max-width: 28px;
		max-height: 28px;
		margin-left: -20px;
		margin-right: 10px;
	}
</style>

<script>
	var $ul_wishes, $ipt_wish, $btn_wish;
	
	$(document).one('pageinit', function(){
		$ul_wishes = $("#ul_wishes");
		$ipt_wish = $('#ipt_wish');
		$btn_wish = $('#btn_wish');
		
		getWishes();
	}).keydown(function(e){
		if (e.keyCode === 13 && isActive($ipt_wish)) {
			wish();
		}
	});
	
	function getWishes() {
		var $img = $('<img>').attr('src', 'images/toy.png');
		$.get("show.php", {
			show_wish: 1
		}, function(r){
			eval('r='+ r);	// enable array
			$ul_wishes.hide().empty();
			$(r).each(function(i, t){
				var $txt = $('<span>').html(t);
				$('<li>').append($img.clone()).append($txt).appendTo($ul_wishes);
			});
			$ul_wishes.show();
			setTimeout(getWishes, 500);
		});
	}
	function wish() {
		var str = $ipt_wish.val();
		$ipt_wish.val('');
		str && mGet("write.php", {
			wish: str
		}, null, function(){
			$btn_wish.addClass('ui-disabled');
			showMessage("感谢你的祈愿，祝你美梦成真！");
			return false;
		});
	}
</script>

<div data-role="content" data-theme="e">
    
    <div id="navbar1" data-role="navbar" data-iconpos="left"><ul>
        <li>
            <a href="map.php" data-icon="grid">
                校园地图
            </a>
        </li>
        <li>
            <a href="#" data-icon="star" class="ui-btn-active ui-state-persist">
                许愿池
            </a>
        </li>
    </ul></div>
    
    <h3>留下你的祈愿吧 ^_^</h3>
    <div id="div_wishes" class="ui-body-e ui-corner-all ui-shadow-inset">
        <ul id="ul_wishes"></ul>
    </div>
    <div data-role="fieldcontain">
        <label for="ipt_wish">请输入：</label>
        <input type="text" id="ipt_wish">
    </div>
    <a data-role="button" data-icon="check" id="btn_wish" href="javascript:wish()">许下愿望</a>
    
</div>

<?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>