<?php
session_start();
require_once('configs/config.php');

$module = $_REQUEST['_module'];
if ($module) {
	$out = array();
	if ($module === 'reg') {	// 处理注册数据
		$sex = intval($_POST['sex']);
		$college = intval($_POST['college']);
		$avatar = intval($_POST['avatar']);
		$user = array(
			'username' => addslashes($_POST['username']),
			'userpass' => addslashes($_POST['userpass']),
			'sex' => between($sex, 0, count($SEX_LIST)-1),
			'college' => between($college, 0, count($COLLEGE_LIST)-1),
			'avatar' => between($avatar, 0, NUM_AVATARS-1)
		);
		
		if (test_user($user)) {
			require('conn/mysql.php');
			
			$username = $user['username'];
			if (!check_user(array(
					'username' => $username
							))) {	// 注册成功
				$id = insert_user($user);
				
				$login = !!$_POST['login'];
				if ($login) {	// 立即登录
					//$_SESSION['userid'] = $id;
					//$_SESSION['username'] = $username;
					login_success(array(
						'userid' => $id,
						'username' => $username
					));
				}
				$out = array(
					'title' => "pass",
					'msg' => "欢迎加入， ". $username ." ！你的用户ID是：". $id ."。",
					'url' => $login? 'login.php': ''
				);
			} else {
				$out = array(	// 用户名已存在
					'code' => 2,
					'msg' => "用户名 < ". $username ." > 已存在。"
				);
			}
		} else {
			$out = array(
				'title' => "fail",
				'msg' => '用户名必须为4-16位字母/数字/汉字（每个汉字占用3位），'
							.'密码必须为4-24位字母/数字。'
			);
		}
	}
	feed_json($out);
} else {	// 显示注册页面
	require_once('Smarty/smarty.php');
	
	$smarty->assign('sex_list', $SEX_LIST);
	$smarty->assign('college_list', $COLLEGE_LIST);
	$smarty->assign('NUM_AVATARS', NUM_AVATARS);
	$smarty->display('reg.tpl');
}

function test_user($user) {
	$username = $user['username'];
	$userpass = $user['userpass'];
	return preg_match(REG_USER, $username)
					   && preg_match(REG_PASS, $userpass);
}
?>