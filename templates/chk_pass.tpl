{{include file="header.tpl"}}

<script>
var $fm_chkpass, $btn_chkpass;

$(document).one('pageinit', function(){
	$fm_chkpass = $('#fm_chkpass');
	$btn_chkpass = $('#btn_chkpass');
	$btn_chkpass.click(function(){
		$fm_chkpass.submit();
	});
});
</script>

<div data-role="content">
		
    <h3>{{$tableid}}号桌设定了密码</h3>
    <form id="fm_chkpass" method="post" action="chatroom.php?table={{$tableid}}">
        <div data-role="fieldcontain">
            <label for="password">请输入密码:</label>
            <input type="text" name="pass" id="password" />
        </div>
        <input type="hidden" name="_module" value="chk_pass" />
    </form>
    <a data-role="button" data-icon="check" data-inline="true" id="btn_chkpass">进入该桌</a>
    <a data-role="button" data-icon="back" data-rel="back" data-inline="true">返回</a>
    
</div>

{{include file="footer.tpl"}}
