<?php
session_start();
require('configs/config.php');
require('configs/config_c.php');
require('Smarty/smarty_c.php');
$_SESSION['userid'] or header("location: login.php");

mysql_connect(DB_HOST, MYSQL_USER, MYSQL_PASS);
mysql_select_db(DATABASE);
$count_users = array();
for($i = 1; $i <= NUM_TABLE; $i++) {
	$count_users[$i] = count_tableusers($i);
}

refresh();

$smarty->assign('count_users', $count_users);
$smarty->assign('NUM_TABLE', NUM_TABLE);
$smarty->display('cafe.tpl');

function refresh() {
	global $count_users;
	$sql = "select tableid, usersid from ". TABLE_CAFE;
	$res = mysql_query($sql);
	while ($row = mysql_fetch_row($res)) {
		$userids = get_segs(SEP_SMALL, $row[1]);
		foreach ($userids as $userid) {
			if (! is_online($userid)) {
				remove_tableuser($userid, $row[0]);
				$count_users[$row[0]] -= 1;
			}
		}
	}
}
?>