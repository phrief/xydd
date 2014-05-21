<?php
session_start();
require('configs/config.php');
require('conn/mysql.php');
$userid = $_SESSION['userid'];
$user = array(
	'userid' => $userid
);

$module = $_REQUEST['_module'];

$out = array();
if ($module === 'push') {	// 推送通知
	$notext = $_POST['notext'];
	$out = push_notice($user, notext);
} else if ($module === 'sign') {	// 签收通知
	$out = sign_notice($user);
}
feed_json($out);

function push_notice($user, $notext) {
	$thesocial = get_social($user);
	$oldnotices = $thesocial['notices'];
	$arr = explode(SEP_MEDIUM, $oldnotices);
	if (count($arr) < MAX_NUM_NOTICES) {
		$newnotices = add_seg($oldnotices, SEP_MEDIUM,
							   $user['userid'] .SEP_SMALL. $notext);
		update_social(array(
			'notices' => $newnotices
		), $user);
		return array(
					'code' => 0,
					'msg' => "通知推送成功！"
				);
	} else {
		return array(
					'code' => 1,
					'msg' => "通知推送失败，对方的通知栏已满。"
				);
	}
}
function sign_notice($user) {
	remove_notice($user);
	return array(
				'code' => 0,
				'msg' => "通知已成功签收！"
			);
}
?>