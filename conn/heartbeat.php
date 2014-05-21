<?php
session_start();
require_once('../configs/config.php');
require_once('mysql.php');

class HeartBeat extends ProcessPage {
	public function __construct() {
		parent::__construct();
	}
	public function start() {
		$this->validate();
		$this->update();
	}
	protected function validate() {
		$this->hasSession or exit();
	}
	protected function update() {
		global $mysql;
		$mysql->update(array(
			'lasttime' => timestr()
		), array(
			'userid' => $_SESSION['userid']
		), TABLE_STATUS);
	}
}

$pHeartBeat = new HeartBeat();
$pHeartBeat->start();
?>