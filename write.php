<?php 
session_start();
require('configs/config.php');
require('configs/config_c.php');
require('Smarty/smarty_c.php');
mysql_connect(DB_HOST, MYSQL_USER, MYSQL_PASS);
mysql_select_db(DATABASE);


if($message = $_REQUEST["message"]){
	$userid = $_SESSION['userid'];
	$tableid = in_table($userid);
	if ($tableid === -1) exit();	// 已离开该桌
	$path = record_path($tableid);
	write_c($path, addslashes($message));
}

if($wish = $_REQUEST["wish"]){
	$wish = safehtml($wish);
	$userid = $_SESSION['userid'];
	$time = timestr();
	mysql_query("set names utf8");
	mysql_query("insert into ".TABLE_WISH."(userid,content, time) values('".$userid."','". addslashes($wish) ."','". $time."')");
	//直接写入数据库
}
?>
