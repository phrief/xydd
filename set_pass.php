<?php
session_start();
require('configs/config.php');
require('configs/config_c.php');
require('Smarty/smarty_c.php');
$m = $_REQUEST['_module'];
$rnd = $_SESSION['rnd'];
$userid = $_SESSION['userid'];

mysql_connect(DB_HOST, MYSQL_USER, MYSQL_PASS);
mysql_select_db(DATABASE);
$in = in_table($userid);

if ($m === 'setpass') {	// 处理
	
	$out = array();
	$set = $_REQUEST['set'];
	if ($set === 'no') {	// 不设定密码
		set_tablepass('', $in);
		
		$out['url'] = "chatroom.php?table=". $in;
	} else {	//设定密码
		$pass = $_REQUEST['pass'];
		if (preg_match(REG_PASS, $pass)) {	// 密码合法
			set_tablepass($pass, $in);
			
			$out['url'] = "chatroom.php?table=". $in;
			$out['msg'] = "密码设定成功！";
		} else {	// 密码不合法
			$out['msg'] = "密码必须为4-24位字母/数字。";
		}
	}
	feed_json($out);
	
} else {	// 显示
	
	$smarty->assign('tableid', $in);
	$smarty->assign('rnd', $rnd);
	$smarty->display('set_pass.tpl');
	
}
?>