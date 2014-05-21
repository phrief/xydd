<?php
session_start();
require_once('configs/config.php');
require_once('conn/mysql.php');
require_once('Smarty/smarty.php');

$module = $_REQUEST['_module'];

if ($module === 'send') {	// 发送意见
	$out = array();
	$advice = $_POST['advice'];
	$advice = substr($advice, 0, MAX_LEN_ADVICE);
	$out = send_advice($advice);
	feed_json($out);
} else {
	$smarty->display('feedback.tpl');
}

function send_advice($advice) {
	global $mysql;
	$out = array();
	if ($advice == '') {
		$out['title'] = 'fail';
		$out['msg'] = "反馈意见不能为空。";
	} else {
		$mysql->insert(array(
			'advice' => $advice
		), TABLE_ADVICES);
		$out['title'] = 'pass';
		$out['msg'] = "意见发送成功！";
	}
	return $out;
}
?>