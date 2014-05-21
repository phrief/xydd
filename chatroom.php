<?php
session_start();
require('configs/config.php');
require('configs/config_c.php');
require('Smarty/smarty_c.php');
$userid = $_SESSION['userid'];
$m = $_REQUEST['_module'];
$tableid = intval($_REQUEST['table']);
if ($tableid < 1 || $tableid > NUM_TABLE) {	// 非法桌号
	header("location: cafe.php");
}

mysql_connect(DB_HOST, MYSQL_USER, MYSQL_PASS);
mysql_select_db(DATABASE);
$in = in_table($userid);
$count = count_tableusers($tableid);

if ($m === 'apply') {	// 尝试进入
	
	$out = array();
	if ($in !== -1) {	// 已在任何桌
		if ($in !== $tableid) {	// 已在其他桌
			$out['msg'] = "你已经在". $in ."号桌了，请先离开该桌。";
		} else {	// 已经在该桌
			$out['title'] = 'pass';
		}
	} else {	// 没在任何桌
		if ($count > 0) {	// 该桌已有人
			if (get_tablepass($tableid) !== md5('')) {	// 该桌设有密码
				$out['dialog'] = 1;
				$out['url'] = "chk_pass.php?table=". $tableid;
			} else {	// 该桌没有密码
				add_tableuser($userid, $tableid);
				$out['title'] = 'pass';
			}
		} else {	// 该桌没有人
			clear_txt(record_path($tableid));
			
			$rnd = rand(0, 9999);
			$rnd = str_pad($rnd, 4, '0', STR_PAD_LEFT);
			$_SESSION['rnd'] = $rnd;
			set_tablepass($rnd, $tableid);	// 随机密码
			
			add_tableuser($userid, $tableid);
			
			$out['dialog'] = 1;
			$out['url'] = "set_pass.php";
		}
	}
	feed_json($out);
	
} else if ($m === 'chk_pass') {	// 密码检查
	
	$pass = $_POST['pass'];
	$out = array();
	if (chk_tablepass($pass, $tableid)) {	// 密码正确
		add_tableuser($userid, $tableid);
		
		$out['url'] = "chatroom.php?table=". $tableid;
		$out['msg'] = "密码正确！";
	} else {	// 密码不正确
		$out['msg'] = "密码错误。";
	}
	feed_json($out);
	
} else {	// 正式进入
	
	if ($in !== $tableid) {	// 非法进入
		header("location: cafe.php");
	} else {	// 合法进入
		$smarty->assign('tableid', $tableid);
		$smarty->display('chatroom.tpl');
	}
}
?>