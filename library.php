<?php
session_start();
require_once('configs/config.php');
require_once('Smarty/smarty.php');
require_once('conn/mysql.php');

class Library extends DisplayPage {
	protected $tplName = 'library';
	public function __construct() {
		parent::__construct();
	}
	protected function validate() {
		if (! $this->hasSession) {
			$this->jump('login.php');
		}
	}
	public function start() {
		$this->validate();
		$m = $_REQUEST['_module'];
		$this->assign('test', $m == 'test');
		$this->display();
	}
}

$pLibrary = new Library();
$pLibrary->start();
?>