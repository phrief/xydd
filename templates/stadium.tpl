{{include file="header.tpl" title="体育场"}}
	
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
            {{foreach $horses as $k => $v}}
            <div><img class="horse" src="images/horses/{{$k}}.gif"></div>
            {{/foreach}}
        </div>
        <form method="POST" action="stadium.php" id="fm_play">
            <div data-role="fieldcontain">
                <fieldset data-role="controlgroup" data-type="horizontal"  id="fs_play">
                    <legend>你猜谁赢</legend>
                    {{foreach $horses as $k => $v}}
                    <input type="radio" data-mini="true" name="bet" id="rd_bet_{{$k}}" value="{{$k}}" {{if $v@index==0}}checked{{/if}}>
                    <label for="rd_bet_{{$k}}">{{$v}}</label>
                    {{/foreach}}
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
    
{{include file="footer.tpl"}}