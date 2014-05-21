<?php /* Smarty version Smarty-3.1.11, created on 2012-11-21 16:45:27
         compiled from "F:\htdocs\xydd\templates\library.tpl" */ ?>
<?php /*%%SmartyHeaderCode:120950ac94a7c94112-93783999%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9abd47077a76a5f71f966bb7dc5bbb2716548488' => 
    array (
      0 => 'F:\\htdocs\\xydd\\templates\\library.tpl',
      1 => 1353408512,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '120950ac94a7c94112-93783999',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'test' => 0,
    'question' => 0,
    'problemid' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_50ac94a7d0ea30_00137267',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_50ac94a7d0ea30_00137267')) {function content_50ac94a7d0ea30_00137267($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('title'=>"图书馆"), 0);?>

	
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
    
    <?php if ($_smarty_tpl->tpl_vars['test']->value){?>
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
    <?php }?>
    
	<div data-role="content" data-theme="d">
        
        <?php if ($_smarty_tpl->tpl_vars['test']->value){?>
        <p>
            题目： <span class="problem" id="txt_que"><?php echo $_smarty_tpl->tpl_vars['question']->value;?>
</span>
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
            <input type="hidden" name="problemid" value="<?php echo $_smarty_tpl->tpl_vars['problemid']->value;?>
" id="ipt_pid">
            <input type="hidden" name="_module" value="answer">
        </form></p>
        <img src="images/dj.png" class="left">
        <a data-role="button" data-inline="true" data-icon="check" href="javascript:answer()" id="btn_answer">回答问题</a>
        <a data-role="button" data-icon="arrow-d" data-inline="true" href="javascript:display()">下一题</a>
        <a data-role="button" data-rel="back" data-icon="back" data-inline="true">返回</a>
        <?php }else{ ?>
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
        <?php }?>
        
	</div><!-- /content -->
    
<?php echo $_smarty_tpl->getSubTemplate ("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>