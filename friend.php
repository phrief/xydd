<?php
session_start();
require('configs/config.php');
require('conn/mysql.php');
$userid = intval($_SESSION['userid']);	// userid必须整型化
$user = array(
			'userid' => $userid
		);

$module = $_POST['_module'];
$tarid = intval($_POST['tarid']);
$taruser = array(
				'userid' => $tarid
			);

$out = array();
if ($module === 'request') {	// 发送好友请求
	$out = request_friend($userid, $taruser);
} else if ($module === 'confirm') {	// 回应好友请求
	$r = $_POST['accept'];
	$out = $r? add_friend($user, $taruser):
				refuse_friend($user, $taruser);
} else if ($module === 'remove') {	// 移除好友
	$out = remove_friend($user, $taruser);
}
feed_json($out);

function request_friend($userid, $taruser) {
	if ($taruser['userid'] === $userid) {
		return array(
					'title' => 'fail',
					'msg' => "不能请求自己为好友。"
				);
	}
	$tarid = $taruser['userid'];
	$thesocial = get_social(array(
								'userid' => $userid
							));
	$oldfriends = $thesocial['friends'];
	if (check_seg($oldfriends, SEP_SMALL,
				  ''. $tarid)) {
		return array(
					'title' => 'fail',
					'msg' => "对方已经是你的好友了。"
				);
	}
	$r = add_notice($taruser, NO_REQUEST, $userid);
	return $r>=0? array(
					'title' => 'pass',
					'msg' => "好友请求已发出！"
				): array(
					'title' => 'fail',
					'msg' => "好友请求发送失败，对方的通知栏已满。"
				);
}
function add_friend($user, $taruser) {
	$tarid = $taruser['userid'];
	$thesocial = get_social($user);
	$oldfriends = $thesocial['friends'];
	if (check_seg($oldfriends, SEP_SMALL,
				  ''. $tarid)) {
		return array(
					'title' => 'fail',
					'msg' => "对方已经是你的好友了。"
				);
	}
	$arr = $oldfriends? explode(SEP_SMALL, $oldfriends): array();
	$count = count($arr);
	$thesocial = get_social($taruser);
	$oldfriends2 = $thesocial['friends'];
	$arr2 = $oldfriends2? explode(SEP_SMALL, $oldfriends2): array();
	$count2 = count($arr2);
	if ($count < MAX_NUM_FRIENDS && $count2 < MAX_NUM_FRIENDS) {
		$newfriends = add_seg($oldfriends, SEP_SMALL, $tarid);
		update_social(array(
						'friends' => $newfriends
					), $user);
		$newfriends2 = add_seg($oldfriends2,
							   SEP_SMALL, $user['userid']);
		update_social(array(
						'friends' => $newfriends2
					), $taruser);
		add_notice($taruser, NO_ADD_SUCCESS, $user['userid']);
		return array(
					'title' => 'pass',
					'msg' => "添加好友成功！你现在一共有 ". ++$count
								." / ". MAX_NUM_FRIENDS ." 个好友。"
				);
	} else {
		add_notice($taruser, NO_ADD_FAIL, $user['userid']);
		return array(
					'title' => 'fail',
					'msg' => "对方或你的好友栏已满，数量上限为 "
								. MAX_NUM_FRIENDS ." 个。"
				);
	}
}
function refuse_friend($user, $taruser) {
	add_notice($taruser, NO_REFUSE, $user['userid']);
	return array(
				'msg' => "已拒绝该好友请求。"
			);
}
function remove_friend($user, $taruser) {
	$thesocial = get_social($user);
	$oldfriends = $thesocial['friends'];
	$arr = $oldfriends? explode(SEP_SMALL, $oldfriends): array();
	$thesocial = get_social($taruser);
	$oldfriends2 = $thesocial['friends'];
	$arr2 = $oldfriends2? explode(SEP_SMALL, $oldfriends2): array();
	$newfriends = remove_seg($oldfriends,
							 SEP_SMALL, ''.$taruser['userid']);
	$newfriends2 = remove_seg($oldfriends2,
							 SEP_SMALL, ''.$user['userid']);
	update_social(array(
		'friends' => $newfriends
	), $user);
	update_social(array(
		'friends' => $newfriends2
	), $taruser);
	return array(
			  'msg' => "好友已移除！"
			);
}
?>