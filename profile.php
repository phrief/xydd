<?php
session_start();
require_once('configs/config.php');
require_once('conn/mysql.php');
require_once('Smarty/smarty.php');
$_SESSION['userid'] or header("location: login.php");	// 未登录

$tarid = intval($_REQUEST['tarid']);
$taruname = $_REQUEST['taruname'];
$cnd = array();
$user = array();
if ($tarid) {
	$cnd['userid'] = $tarid;
	$user = get_user($cnd);
} else {
	$cnd['username'] = $taruname;
	$user = get_user($cnd);
	$cnd = array(
				'userid' => $user['userid']
			);
}
$user or $smarty->display('profile.tpl');

$assets = get_assets($cnd);
$social = get_social($cnd);

$sex = $SEX_LIST[$user['sex']];
$user['sex'] = $sex;
$college = $COLLEGE_LIST[$user['college']];
$user['college'] = $college;

$smarty->assign('user', $user);
$smarty->assign('assets', $assets);
$smarty->assign('social', $social);
$smarty->display('profile.tpl');
?>