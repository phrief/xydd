<?php 
session_start();
require('configs/config.php');
require('configs/config_c.php');
$userid = $_SESSION['userid'];
mysql_connect(DB_HOST, MYSQL_USER, MYSQL_PASS);
mysql_select_db(DATABASE);

$tableid = in_table($userid);
@ remove_tableuser($userid, $tableid);

$out = array();
$out['url'] = 'cafe.php';
$out['msg'] = "已离开". $tableid ."号桌。";
feed_json($out);
?>