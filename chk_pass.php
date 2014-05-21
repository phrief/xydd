<?php 
require('configs/config.php');
require('configs/config_c.php');
require('Smarty/smarty_c.php');
$tableid = $_GET['table'];

$smarty->assign('tableid', $tableid);
$smarty->display('chk_pass.tpl');
?>