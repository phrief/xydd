{{include file="header.tpl"}}

	<style>
        #div_msgs {
            overflow-y: auto;
            width: 90%;
            padding: 8px;
            color: yellow;
        }
    </style>
    
    <script>
        var $div_msgs, $ipt_speak, lBtnDown = false;
        
        $(document).one('pageinit', function(){
            $div_msgs = $('#div_msgs');
            $ipt_speak = $('#ipt_speak');
            $div_msgs.css({
                height: 280
            });
            $('label').css('font-size', 18);
			
            getChatRec();
        }).bind('mousedown', function(){
			lBtnDown = true;
		}).bind('mouseup', function(){
			lBtnDown = false;
		}).keydown(function(e){
			if (e.keyCode === 13 && isActive($ipt_speak)) {
				speak();
			}
		});
		
		function getChatRec() {
			if (! lBtnDown) {
				mGet('show.php', {
					show_path: 1
				}, null, function(r){
					if (r.title === 'pass') {
						var rec = r.rec;
						rec = rtrim(rec);
						rec = tohtml(rec);
						$div_msgs.html(rec);
						scrollDown($div_msgs);
						setTimeout(getChatRec, 500);
						
						return false;
					}
				}, false);
			} else {
				setTimeout(getChatRec, 500);
			}
		}
		function speak() {
			var str = $ipt_speak.val();
			$ipt_speak.val('');
			str && mGet("write.php", {
				message: str
			}, null, function(){
				return false;
			});
		}
		function leave() {
			mGet('remove.php');
		}
    </script>
    
    <div data-role="content" data-theme="a">
        
        <div id="navbar1" data-role="navbar" data-iconpos="left"><ul>
            <li>
                <a href="cafe.php" data-theme="" data-icon="back">
                    咖啡厅
                </a>
            </li>
            <li>
                <a href="#" data-theme="" data-icon="star" class="ui-btn-active ui-state-persist">
                    {{$tableid}}号桌
                </a>
            </li>
        </ul></div>
        
        <h3>欢迎来到咖啡厅{{$tableid}}桌</h3>
        <div id="div_msgs" class="ui-body-a ui-corner-all ui-shadow-inset"></div>
        <div data-role="fieldcontain">
            <label for="ipt_speak">畅所欲言：</label>
            <input type="text" id="ipt_speak">
        </div>
        
        <a data-role="button" data-icon="check" href="javascript:speak()">发送</a>
        <a data-role="button" data-icon="back" href="javascript:leave()">离开此桌</a>
    
    </div>

{{include file="footer.tpl"}}