<?php
session_start();
require_once('configs/config.php');
require_once('conn/mysql.php');
require_once('Smarty/smarty.php');

class Login extends DisplayPage {
	protected $tplName = 'login';
	public function __construct() {
		parent::__construct();
	}
	public function start() {
		$this->validate();
		$module = $_REQUEST['_module'];
		if ($module === 'login') {	// 进行登录
			$logintype = intval($_POST['logintype']);
			$user = array();
			if ($logintype === 0) {	// 以 用户名 登录
				$user['username'] = addslashes($_POST['username']);
			} else {	// 以 用户ID 登录
				$user['userid'] = addslashes($_POST['userid']);
			}
			$user['userpass'] = addslashes($_POST['userpass']);
			$user['userpass'] = prelock($user['userpass']);
			if ($r = $this->loginMatch($user)) {
				$this->loginSuccess($r);
				$case = 0;
			} else {
				$case = 1;
			}
			$out = $this->getFeed($case);
			$this->feedJson($out);
		} else {	// 显示页面
			$this->display();
		}
		
	}
	protected function validate() {
		if ($this->hasSession) {
			$this->jump('map.php');
		}
	}
	protected function getFeed($case) {
		$out = array();
		if ($case === 0) {
			$out['title'] = "pass";
			$out['msg'] = "已进入校园！";
			$out['url'] = 'map.php';
		} else if ($case === 1) {
			$out['title'] = "fail";
			$out['msg'] = "登录信息不正确。";
		}
		return $out;
	}
	protected function loginMatch($user) {
		return get_user($user);
	}
	protected function loginSuccess($user) {
		//$_SESSION['userid'] = $user['userid'];
		//$_SESSION['username'] = $user['username'];
		login_success($user);
	}
}

$pLogin = new Login();
$pLogin->start();
?>