<?php
session_start();
require_once('configs/config.php');
require_once('conn/mysql.php');
$userid = $_SESSION['userid'];
$user = array(
	'userid' => $userid
);

$module = $_REQUEST['_module'];
$tarid = intval($_REQUEST['tarid']);	// remain REQUEST

if ($module) {
	$out = array();
	if ($module === 'send') {	// 发送讯息
		$message = $_POST['message'];
		$message = substr($message, 0, MAX_LEN_MESSAGE);
		$out = send_msg($user, $tarid, $message);
	} else if ($module === 'delete') {	// 删除讯息
		$msgindex = intval($_POST['msgindex']);
		$out = delete_msg($user, $msgindex);
	}
	feed_json($out);
} else {
	$taruser = get_user(array(
							 'userid' => $tarid
						));
	
	require_once('Smarty/smarty.php');
	$smarty->assign('taruser', $taruser);
	$smarty->display('message.tpl');
}

function send_msg($user, $tarid, $message) {
	if ($message == '') {
		return array(
					'title' => 'fail',
					'msg' => "讯息内容不能为空。"
				);
	}
	if ($tarid === $user['userid']) {
		return array(
					'title' => 'fail',
					'msg' => "不能给自己发送讯息。"
				);
	}
	$thesocial = get_social($user);
	$oldfriends = $thesocial['friends'];
	if (!check_seg($oldfriends, SEP_SMALL,
				  ''. $tarid)) {
		return array(
					'title' => 'fail',
					'msg' => "讯息发送失败，对方不是你的好友。"
				);
	}
	$taruser = array(
					'userid' => $tarid
				);
	$thesocial = get_social(array(
								'userid' => $tarid
							));
	$oldmessages = $thesocial['messages'];
	$arr = explode(SEP_MEDIUM, $oldmessages);
	if (count($arr) < MAX_NUM_MESSAGES) {
		$newmessages = add_seg($oldmessages, SEP_MEDIUM,
							   $user['userid'] .SEP_SMALL. $message);
		update_social(array(
			'messages' => $newmessages
		), $taruser);
		return array(
					'title' => 'pass',
					'msg' => "讯息发送成功！"
				);
	} else {
		return array(
					'title' => 'fail',
					'msg' => "讯息发送失败，对方的讯息栏已满。"
				);
	}
}
function delete_msg($user, $msgindex) {
	$thesocial = get_social($user);
	$oldmessages = $thesocial['messages'];
	if ($oldmessages) {
		$arr = explode(SEP_MEDIUM, $oldmessages);
		array_splice($arr, $msgindex, 1);
		$newmessages = v_implode($SEP_MEDIUM, $arr);
		update_social(array(
							'messages' => $newmessages
						),$user);
	}
	return array(
				'msg' => "讯息删除成功！"
			);
}
?>