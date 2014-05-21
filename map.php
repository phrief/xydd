<?php
session_start();
require_once('configs/config.php');
require_once('conn/mysql.php');
require_once('Smarty/smarty.php');	// 显示

$userid = $_SESSION['userid'];
$userid or header("location: login.php");

$ol_users = array();
$ol_users[] = $mysql->getRow('*', 'userid='.$userid, TABLE_USERS);
$users = $mysql->getRows('*', 'userid<>'.$userid, TABLE_USERS);
foreach ($users as $user) {
	if (is_online($user['userid'])) {
		$ol_users[] = $user;
	}
}

$smarty->assign('ol_users', $ol_users);
$smarty->display('map.tpl');
?>