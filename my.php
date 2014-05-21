<?php
session_start();
require_once('configs/config.php');
require('conn/mysql.php');

$userid = $_SESSION['userid'];
$userid or header("location: login.php");

$cnd = array(
	'userid' => $userid
);
$user = get_user($cnd);
$assets = get_assets($cnd);
$social = get_social($cnd);
require_once('Smarty/smarty.php');

// reginfo
$user['_sex'] = tran_sex($user['sex']);
$user['_college'] = tran_college($user['college']);
$smarty->assign('user', $user);

// attrs
$smarty->assign('assets', $assets);

// notices
$notices = array();
if ($social['notices'] != '') {
	$notices = explode(SEP_MEDIUM, $social['notices']);
}
$smarty->assign('num_notices', count($notices));
$smarty->assign('MAX_NUM_NOTICES', MAX_NUM_NOTICES);
$notice = get_notice(array(
						'userid' => $userid
					));
$thenoid = $notice[0];
$theuserid = $notice[1];
$theuser = get_user(array(
							'userid' => $theuserid
					));
$theusername =  $theuser['username'];
$thenotice = array(
				'noid' => $thenoid,
				'userid' => $theuserid,
				'username' => $theusername
			);
$smarty->assign('notice', $thenotice);

// messages
$messages = array();
if ($social['messages'] != '') {
	$messages = explode(SEP_MEDIUM, $social['messages']);
}
$smarty->assign('num_messages', count($messages));
$smarty->assign('MAX_NUM_MESSAGES', MAX_NUM_MESSAGES);
$themessages = array();
foreach ($messages as $m) {
	$mm = explode(SEP_SMALL, $m);
	$theuserid = $mm[0];
	$theuser = get_user(array(
								'userid' => $theuserid
						));
	$theusername = $theuser['username'];
	$msgtext = $mm[1];
	$themessages[] = array(
						'userid' => $theuserid,
						'username' => $theusername,
						'msgtext' => $msgtext
					);
}
$smarty->assign('messages', array_reverse($themessages, true));

// friends
$friends = array();
if ($social['friends'] != '') {
	$friends = explode(SEP_SMALL, $social['friends']);
}
$smarty->assign('num_friends', count($friends));
$smarty->assign('MAX_NUM_FRIENDS', MAX_NUM_FRIENDS);
$thefriends = array();
foreach ($friends as $f) {
	$theuser = get_user(array(
								'userid' => $f
							));
	$thefriends[] = array(
						'userid' => $theuser['userid'],
						'username' => $theuser['username'],
						'sex' => $SEX_LIST[$theuser['sex']],
						'college' => $COLLEGE_LIST[$theuser['college']],
						'avatar' => $theuser['avatar']
					);
}
$smarty->assign('friends', $thefriends);

$smarty->display('my.tpl');
?>