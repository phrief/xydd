<?php
require_once('../configs/config.php');
require_once('mysql.php');

if (! $mysql->selectDb(DATABASE)) {
	die("db doesn't exsist!");
}
$mysql->dropDb(DATABASE);

echo "db droping complete.<br>";
?>