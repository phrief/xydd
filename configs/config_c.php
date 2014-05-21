<?php
define('NUM_WISH', 9);
define('TABLE_CAFE','tb_cafe');
define('TABLE_WISH','tb_wish');

function record_path($tableid) {
	return 'record/record'. $tableid .'.txt';
}
function write_c($filepath, $content) {  //信息写入函数
    $username = $_SESSION["username"];
	$text = $username ."      ". timestr() ."\r\n". $content."\r\n\r\n";
    $stream = fopen($filepath,'a');
	fwrite($stream, $text);
	fclose($stream);
}

function clear_txt($filepath){   //聊天记录清楚函数
	$stream = fopen($filepath, 'w');
	fwrite($stream, '');
	fclose($stream);
}

function add_tableuser($userid, $tableid) {  //添加用户函数
	$sql = "select usersid from ". TABLE_CAFE ." where tableid=". $tableid;
	$res = mysql_query($sql);
	$row = mysql_fetch_row($res);//取出usersid
	$old = $row[0];
	if (! check_seg($old, SEP_SMALL, ''. $userid)) {
		$new = add_seg($old, SEP_SMALL, $userid);
		$sql = "update ". TABLE_CAFE ." set usersid='". $new ."' where tableid=". $tableid ."";
		mysql_query($sql);
	}
}
function count_tableusers($tableid) {  //计算用户函数
	$sql = "select usersid from ". TABLE_CAFE ." where tableid=". $tableid;
	$res = mysql_query($sql);
	$row = mysql_fetch_array($res, MYSQL_ASSOC);
	$arr = get_segs(SEP_SMALL, $row['usersid']);
	return count($arr);
}
function remove_tableuser($userid, $tableid) {    //移除用户函数
	$sql = "select usersid from ". TABLE_CAFE ." where tableid=". $tableid;
	$res = mysql_query($sql);
	$row = mysql_fetch_row($res);//取出usersid
	$old = $row[0];
	$new = remove_seg($old, SEP_SMALL, ''.$userid);
	$sql = "update ". TABLE_CAFE ." set usersid='". $new ."' where tableid=".$tableid;
	mysql_query($sql);
}
function in_table($userid){  //检测桌子里内是否有同一个用户
	$sql = "select tableid, usersid from ". TABLE_CAFE;
	$res = mysql_query($sql);
	while ($row = mysql_fetch_row($res)) {
		$segs = $row[1];
		if (check_seg($segs, SEP_SMALL, ''.$userid)) {
			return intval($row[0]);
		}
	}
	return -1;
}


//new
function get_tablepass($tableid){
	$sql = "select tablepass from ". TABLE_CAFE ." where tableid = ". $tableid;
	$res = mysql_query($sql);
	$row = mysql_fetch_row($res);
	return $row[0];
}
function set_tablepass($pass, $tableid){
	$sql = "update ". TABLE_CAFE ." set tablepass = '". md5($pass) ."' where tableid = ". $tableid;
	mysql_query($sql);
}

function chk_tablepass($pass, $tableid){
	return md5($pass) === get_tablepass($tableid);
}
?>
