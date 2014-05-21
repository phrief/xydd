<?php
session_start();
require_once('configs/config.php');

session_destroy();
feed_json(array(
	'msg' => "注销成功！",
	'url' => 'login.php'
));
?>