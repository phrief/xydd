{{include file="header.tpl"}}

<script>
	var $rd_setpass, $fm_setpass, $txt_setpass,
		$btn_setpass, $btn_leave;
	
	$(document).one('pageinit', function(){
		$fm_setpass = $('#fm_setpass');
		$rd_setpass = $('#fs_setpass').find('input[type=radio]');
		$txt_setpass = $('#txt_setpass');
		$btn_setpass = $('#btn_setpass');
		$btn_leave = $('#btn_leave');
		
		$rd_setpass.bind('change', function(){
			var val = this.value;         
			if(val === 'yes'){ 
				$txt_setpass.textinput("enable");
			} else {
				$txt_setpass.textinput("disable");
			}
		});
		$btn_setpass.click(function(){
			$fm_setpass.submit();
		});
		$btn_leave.click(function(){
			mGet('remove.php');
		});
	});
</script>
    
<div data-role="content">
    
    <h3>你已经是{{$tableid}}号桌的主人了</h3>
    <form method="post" action="set_pass.php" id="fm_setpass">
        <div data-role="fieldcontain">
            <fieldset data-role="controlgroup" data-type="horizontal" id="fs_setpass">
                <legend>是否设置密码?</legend>
                <input type="radio" name="set" id="radio-choice-1" value="yes" checked="checked" />
                <label for="radio-choice-1">YES</label>
                <input type="radio" name="set" id="radio-choice-2" value="no"  />
                <label for="radio-choice-2">NO </label>
            </fieldset>
        </div>
        <div data-role="fieldcontain">
            <label for="txt_setpass">密码:</label>
            <input type="text" name="pass" id="txt_setpass" value="{{$rnd}}" />
        </div>
        <input type="hidden" name="_module" value="setpass" />
    </form>
    <a data-role="button" data-icon="check" data-inline="true" id="btn_setpass">进入该桌</a>
    <a data-role="button" data-icon="back" data-inline="true" id="btn_leave">离开</a>
    
</div>

{{include file="footer.tpl"}}
