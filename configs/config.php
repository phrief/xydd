<?php
require('360_safe3.php');	// 360安全过滤
require('my_safe.php');

define('SEP_SMALL', '<,>');
define('SEP_MEDIUM', '<;>');
define('SEP_BIG', '<|>');

define('HTTP_HOST', $_SERVER['HTTP_HOST']);
define('IS_LOCAL', HTTP_HOST==='localhost');
if (IS_LOCAL) {	// 本地主机 数据库配置
	define('DB_HOST', 'localhost');
	define('MYSQL_USER', 'root');
	define('MYSQL_PASS', 'root');
	define('DATABASE', 'db_xydd');
} else {	// 远程主机 数据库配置
	define('DB_HOST', 'hdm-062.hichina.com');
	define('MYSQL_USER', 'hdm0620358');
	define('MYSQL_PASS', 'linliang');
	define('DATABASE', 'hdm0620358_db');
}

define('TABLE_USERS', 'tb_users');
define('TABLE_ASSETS', 'tb_assets');
define('TABLE_SOCIAL', 'tb_social');
define('TABLE_STATUS', 'tb_status');
define('TABLE_PROBLEMS', 'tb_problems');
define('TABLE_ADVICES', 'tb_advices');

// tb_users
define('REG_USER', '/^[A-Za-z0-9\一-\龥]{4,16}$/');
define('REG_PASS', '/^[A-Za-z0-9]{4,24}$/');
$SEX_LIST = array(
	'保密', 'GG', 'MM'
);
$COLLEGE_LIST = array(
	'经济管理学院', '政法学院', '文学院', '外国语学院', '数学与计算科学学院',
	'应用物理与材料学院', '信息工程学院', '计算机学院', '机电工程学院',
	'土木建筑学院', '化学与环境工程学院', '纺织服装学院', '艺术设计学院',
	'体育学院'
);
define('NUM_AVATARS', 12);

// tb_assets
define('DEF_ENERGY', 50);
define('DEF_CHARM', 50);
define('DEF_WIT', 50);
define('MAX_ATTR', 65535);	// 小整型
define('MIN_ATTR', 0);

// tb_social
define('DEF_NOTICES', '');
define('DEF_FRIENDS', '');
define('DEF_MESSAGES', '');
define('MAX_NUM_NOTICES', 20);
define('MAX_NUM_FRIENDS', 20);
define('MAX_NUM_MESSAGES', 50);

define('MAX_LEN_MESSAGE', 1024);
define('MAX_LEN_ADVICE', 1024);

define('NO_REQUEST', 0);
define('NO_REFUSE', 1);
define('NO_ADD_SUCCESS', 2);
define('NO_ADD_FAIL', 3);

define('NUM_TABLE', 9);
date_default_timezone_set('HongKong');

function is_online($userid) {
	$sql = "select lasttime from "
		.TABLE_STATUS. " where userid=". $userid;
	$res = mysql_query($sql);
	$row = mysql_fetch_row($res);
	$last = $row[0];
	return time() - strtotime($last) < 30;
}

function feed_text($txt) {
	echo $txt;
	exit();
}
function feed_json($arr) {
	echo json_encode($arr);
	exit();
}

function kv_implode($sep, $jon, $arr, $k_quot='', $v_quot='') {
	$str = '';
	foreach ($arr as $key => $val) {
		$key = $k_quot. $key .$k_quot;
		$val = $v_quot. $val .$v_quot;
		$str .= $key. $jon .$val. $sep;
	}
	return rtrim($str, $sep);
}
function k_implode($sep, $arr, $quot='') {
	$str = '';
	foreach ($arr as $key => $val) {
		$key = $quot. $key .$quot;
		$str .= $key. $sep;
	}
	return rtrim($str, $sep);
}
function v_implode($sep, $arr, $quot='') {
	$str = '';
	foreach ($arr as $val) {
		$val = $quot. $val .$quot;
		$str .= $val. $sep;
	}
	return rtrim($str, $sep);
}

function prelock($str) {	// 站内加密算法
	return md5($str);
}
function timestr($tstamp = NULL) {
	return $tstamp===NULL? date("Y-m-d H:i:s"):
		date("Y-m-d H:i:s", $tstamp);
}

function tran_sex($num) {
	global $SEX_LIST;
	return $SEX_LIST[$num];
}
function tran_college($num) {
	global $COLLEGE_LIST;
	return $COLLEGE_LIST[$num];
}

function get_segs($sep, $str) {
	return $str? explode($sep, $str): array();
}
function check_seg($str, $sep, $val) {
	$arr = get_segs($sep, $str);
	return in_array($val, $arr);
}
function add_seg($str, $sep, $val) {
	$arr = get_segs($sep, $str);
	$arr[] = $val;
	return v_implode($sep, $arr);
}
function remove_seg($str, $sep, $val) {
	$arr = get_segs($sep, $str);
	$count = count($arr);
	for ($i = 0; $i < $count; $i++) {
		if ($arr[$i] === $val) {
			array_splice($arr, $i, 1);
			$count--;
			$i--;
		}
	}
	return v_implode($sep, $arr);
}

function o($msg) {
	die(''. $msg);
}
function safehtml($v) {
	return $v;	//
}

function login_success($user) {
	$_SESSION['userid'] = $user['userid'];
	$_SESSION['username'] = $user['username'];
	setcookie('precmd', "logo");
}
function between($num, $min, $max) {
	return $num < $min? $min: ($num > $max? $max: $num);
}

class Page {
	protected $hasSession;
	public function __construct() {
		$this->hasSession = !!$_SESSION['userid'];
	}
	public function start() {}
	protected function feedJson($arr) {
		die(''. json_encode($arr));
	}
	protected function jump($url) {
		header("location: ". $url);
	}
	protected function validate() {}
}
class ProcessPage extends Page {
	public function __construct() {
		parent::__construct();
	}
}
class DisplayPage extends Page {
	protected $tplName;
	public function __construct() {
		parent::__construct();
	}
	protected function assign($key, $value) {
		global $smarty;
		$smarty->assign($key, $value);
	}
	protected function display() {
		global $smarty;
		$smarty->display($this->tplName. '.tpl');
	}
}
?>