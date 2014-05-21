{{include file="header.tpl" title="图书馆"}}
	
    <style>
		span.quote, span.problem {
			font-weight: bold;
		}
		span.problem {
			font-size: 20px;
		}
		img.left {
			margin-right: 15px;
		}
	</style>
    
    {{if $test}}
    <script>
		var $fm_answer, $ipt_answer, $btn_answer,
			$txt_que, $ipt_pid;
		
		$(document).one('pageinit', function(){
			$fm_answer = $('#fm_answer');
			$ipt_answer = $('#ipt_answer');
			$btn_answer = $('#btn_answer');
			$btn_next = $('#btn_next');
			$txt_que = $('#txt_que');
			$ipt_pid = $('#ipt_pid');
			display();
			
			$fm_answer.data('validate', function(){
				if ($ipt_answer.val() === '') {
					showMessage('答案不能为空。');
					return false;
				} else {
					$btn_answer.addClass('ui-disabled');
				}
			});
		});
		
		function answer() {
			$fm_answer.submit();
		}
		function display() {
			mGet('problem.php', {
				_module: 'get'
			}, null, function(r){
				$txt_que.text(r.que);
				$ipt_pid.val(r.pid);
				$ipt_answer.val('');
				$btn_answer.removeClass('ui-disabled');
				return false;
			});
		}
	</script>
    {{/if}}
    
	<div data-role="content" data-theme="d">
        
        {{if $test}}
        <p>
            题目： <span class="problem" id="txt_que">{{$question}}</span>
        </p>
        <p><form method="POST" action="problem.php" id="fm_answer">
            <div data-role="fieldcontain">
                <fieldset data-role="controlgroup">
                    <label for="ipt_answer">
                        答案
                    </label>
                    <input name="answer" value="" type="text" id="ipt_answer">
                </fieldset>
            </div>
            <input type="hidden" name="problemid" value="{{$problemid}}" id="ipt_pid">
            <input type="hidden" name="_module" value="answer">
        </form></p>
        <img src="images/dj.png" class="left">
        <a data-role="button" data-inline="true" data-icon="check" href="javascript:answer()" id="btn_answer">回答问题</a>
        <a data-role="button" data-icon="arrow-d" data-inline="true" href="javascript:display()">下一题</a>
        <a data-role="button" data-rel="back" data-icon="back" data-inline="true">返回</a>
        {{else}}
        <div data-role="fieldcontain">
            <div data-role="collapsible-set" data-theme="e" data-content-theme="d">
                <div data-role="collapsible" data-collapsed="false">
                    <h3>回答问题</h3>
                    <p class="space">
                        <span class="quote" id="txt_question">“书中自有黄金屋，书中自有颜如玉。”</span>——快来测试一下你看了多少书吧！
                    </p>
                    <img src="images/pumpkin.png" class="right">
                    <p class="space">
                        奖励：每回答一题获得<span class="attr">1点智商</span>，回答正确额外获得<span class="attr">1点魅力</span>。
                    </p>
                    <a data-role="button" data-icon="check" data-inline="true" data-rel="dialog" href="library.php?_module=test">开始答题</a>
                </div>
                
                <div data-role="collapsible">
                    <h3>五邑大学馆藏书目检索</h3>
                    <form target="_blank" method="GET" accept-charset="gb2312" action="http://lib.wyu.edu.cn/opac/searchresult.aspx">
                        <div data-role="fieldcontain">
                            <label for="textinput1">
                                请输入检索词
                            </label>
                            <input type="text" name="anywords" id="textinput1">
                        </div>
                        <img src="images/books.png" class="left" />
                        <p class="space">
                            <span class="quote">“书籍是青年人不可分离的生命伴侣和导师。”</span> —— 高尔基
                        </p>
                        <input type="submit" data-icon="check" data-inline="true" value="开始检索" />
                    </form>
                </div>
            </div>
        </div>
        <a data-role="button" data-icon="back" data-inline="true" href="map.php">返回</a>
        {{/if}}
        
	</div><!-- /content -->
    
{{include file="footer.tpl"}}