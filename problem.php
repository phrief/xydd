<?php
session_start();
require_once('configs/config.php');
require_once('conn/mysql.php');
$userid = $_SESSION['userid'];
$user = array(
	'userid' => $userid
);

$module = $_REQUEST['_module'];
$out = array();

if ($module === 'get') {	// 随机获取问题
	$out = get_question();
} else if ($module === 'answer') {	// 回答指定问题
	$out = answer_question();
}
feed_json($out);

function answer_question() {
	$list = array(
		array(
			'code' => 0,
			'msg' => "回答正确，你得到了1点智商和1点魅力。"
		),
		array(
			'code' => 1,
			'msg' => "回答错误，你得到了1点智商。"
		),
		array(
			'code' => 2,
			'msg' => "答题无效。答题超时，或你已经选了新的题目。"
		)
	);
	$a = $_POST['answer'];
	$no = check_answer($a);
	if ($no === 0) {
		award_correct();
	} else if ($no === 1) {
		award_wrong();
	}
	$_SESSION['problemid'] = '';
	return $list[$no];
}
function award_correct() {
	global $userid;
	update_assets(array(
		'wit' => 1,
		'charm' => 1
	), $userid);
}
function award_wrong() {
	global $userid;
	update_assets(array(
		'wit' => 1
	), $userid);
}
function check_answer($a) {
	$pid = intval($_POST['problemid']);
	$_pid = $_SESSION['problemid'];
	if ($pid !== $_pid) {	// 题号不匹配
		return 2;
	}
	$p = get_problem($pid);
	$_a = $p['answer'];
	if ($a === $_a) {	// 回答正确
		return 0;
	} else {	// 回答错误
		return 1;
	}
}
function get_question() {
	$pid = rand(1, count_problems());
	$_SESSION['problemid'] = $pid;
	$problem = get_problem($pid);
	$question = $problem['question'];
	return array(
		'que' => $question,
		'pid' => $pid
	);
}
function count_problems() {
	return count_rows('*', NULL, TABLE_PROBLEMS);
}
?>