<?php
session_start(); 
require('configs/config.php');
require('configs/config_c.php');
mysql_connect(DB_HOST, MYSQL_USER, MYSQL_PASS);
mysql_select_db(DATABASE);

if($_REQUEST['show_path']){ 
	$out = array();
	$userid = $_SESSION['userid'];
	$tableid = in_table($userid);
	if ($tableid === -1) {;	// 已离开该桌
		$out['title'] = 'fail';
		$out['url'] = 'cafe.php';
		$out['msg'] = "你已不在该桌。";
	} else {	// 仍在该桌
		$path = record_path($tableid);
		$shili = fopen ( $path,"r" ) ;
		if ( $shili ) {
			while ( !feof($shili)){ //*
				$shi.= fgets($shili);
			}
			fclose ( $shili ) ;
			$out['title'] = 'pass';
			$out['rec'] = $shi;
		}
	}
	feed_json($out);
} else if($_REQUEST['show_wish']){
	mysql_query("set names utf8");
	$res = mysql_query("select content from ".TABLE_WISH."");
	
	$rows = array();
	while ($r = mysql_fetch_array($res)) {
		$rows[] = $r;
	}
	
	$out = array();
	$total = count($rows);
	$num = min(5, $total);
	for ($i=0; $i<$num; $i++) {
		$out[] = $rows[$total-$num+$i][0];
	}
	feed_json($out);
}
?>

