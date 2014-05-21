<?php /* Smarty version Smarty-3.1.11, created on 2012-11-21 16:45:08
         compiled from "F:\htdocs\xydd\templates\stadium.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2735750ac9494ebc160-70460336%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ce2e28867830f90bdebb7ea14359010650f5351e' => 
    array (
      0 => 'F:\\htdocs\\xydd\\templates\\stadium.tpl',
      1 => 1353408404,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2735750ac9494ebc160-70460336',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'horses' => 0,
    'k' => 0,
    'v' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_50ac9495006150_03616075',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_50ac9495006150_03616075')) {function content_50ac9495006150_03616075($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('title'=>"体育场"), 0);?>

	
    <style>
		span.attr {
			text-decoration: underline;
		}
		#div_tracks {
			width: 90%;
			max-width: 500px;
		}
		#div_tracks>div {
			border: #C0C0C0 solid thin;
			border-top: none;
		}
		#div_tracks>div:first-child {
			border-top: #C0C0C0 solid thin;
		}
		#div_tracks img.horse {
			width: 9%;
			max-width: 50px;
		}
		img.right {
			
		}
	</style>
    
    <script>
		var isPlaying = false;
		var $fm_play, $tracks, $horses;
		
		$(document).one('pageinit', function(){
			$tracks = $('#div_tracks');
			$horses = $('img', $tracks);
			$fm_play = $('#fm_play');
			$fm_play.data('callback', function(r){
				var msg = r.msg, res = r.res;
				runHorses(res, function(){
					showMessage(msg);
					isPlaying = false;
				});
				return false;
			});
		});
		
		function runHorses(res, callback) {
			var $h2win = $horses.eq(res);
			var $h2lose = $($horses.filter(function(i, t){
				return i !== res;
			}));
			var times = 0;
			
			run();
			
			function run() {
				times++;
				var w = $h2win.width(), len = $tracks.width();
				var speed = w;
				var m = parseInt($h2win.css('margin-left'));
				if (m+w > len) {
					callback && callback();
					return;
				} 
				$h2win.animate({
					'margin-left': m + speed
				}, 1000, 'linear', run);
				var offs = Math.round(w*0.1*times/3);
				$h2lose.each(function(i, t){
					$(t).animate({
						'margin-left': m + speed - offs*rand(1, 3)
					}, 1000);
				});
			}
		}
		function play() {
			if (isPlaying) return; 
			isPlaying = true;
			$horses.css('margin-left', 0);
			$fm_play.submit();
		}
	</script>
    
	<div data-role="content" data-theme="d">
    	
        <div id="div_tracks" class="clear">
            <?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['horses']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['v']->index=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value){
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['v']->key;
 $_smarty_tpl->tpl_vars['v']->index++;
?>
            <div><img class="horse" src="images/horses/<?php echo $_smarty_tpl->tpl_vars['k']->value;?>
.gif"></div>
            <?php } ?>
        </div>
        <form method="POST" action="stadium.php" id="fm_play">
            <div data-role="fieldcontain">
                <fieldset data-role="controlgroup" data-type="horizontal"  id="fs_play">
                    <legend>你猜谁赢</legend>
                    <?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['horses']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['v']->index=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value){
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['v']->key;
 $_smarty_tpl->tpl_vars['v']->index++;
?>
                    <input type="radio" data-mini="true" name="bet" id="rd_bet_<?php echo $_smarty_tpl->tpl_vars['k']->value;?>
" value="<?php echo $_smarty_tpl->tpl_vars['k']->value;?>
" <?php if ($_smarty_tpl->tpl_vars['v']->index==0){?>checked<?php }?>>
                    <label for="rd_bet_<?php echo $_smarty_tpl->tpl_vars['k']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['v']->value;?>
</label>
                    <?php } ?>
                </fieldset>
            </div>
            <input type="hidden" name="_module" value="play">
        </form>
        <p class="space">
            奖励：每竞猜竞猜获得<span class="attr">1点活力</span>，猜对额外获得<span class="attr">1点魅力</span>。
        </p>
        <a data-role="button" data-icon="check" data-inline="true" href="javascript:play()">开始比赛</a>
        <a data-role="button" data-icon="back" data-inline="true" href="map.php">返回</a>
        
	</div><!-- /content -->
    
<?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>