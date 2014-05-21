<?php
session_start();
require_once('configs/config.php');
require_once('Smarty/smarty.php');
require_once('conn/mysql.php');

class HorseGame {
	protected $horses = array(
		'烈火', '飞剑', '银刺', '地龙'
	);
	public function play($bet) {
		$num = count($this->horses);
		$res = rand(0, $num-1);
		if ($res === $bet) {	// 猜中了
			$case = 0;
		} else {	// 猜错了
			$case = 1;
		}
		$this->award($case);
		return $this->getFeed($case, $res);
	}
	protected function award($case) {
		if ($case === 0) {	// 猜中了
			$this->awardWin();
		} else if ($case === 1) {	// 猜错了
			$this->awardFail();
		}
	}
	protected function awardWin() {
		global $mysql;
		$mysql->append(array(
			'energy' => 1,
			'charm' => 1
		), array(
			'userid' => $_SESSION['userid']
		), TABLE_ASSETS);
	}
	protected function awardFail() {
		global $mysql;
		$mysql->append(array(
			'energy' => 1
		), array(
			'userid' => $_SESSION['userid']
		), TABLE_ASSETS);
	}
	protected function getFeed($case, $res) {
		$out = array();
		$out['res'] = $res;
		if ($case === 0) {	// 猜中了
			$out['title'] = "win";
			$out['msg'] = "你所看好的 ". $this->horses[$res] ." 赢得了比赛。你因此而得到1点活力和1点魅力。";
		} else if ($case === 1) {	// 猜错了
			$out['title'] = "lose";
			$out['msg'] = "你猜错了，赢得比赛的是 ". $this->horses[$res] ." 。你得到了1点活力。";
		}
		return $out;
	}
	public function getHorses() {
		return $this->horses;
	}
}
class Stadium extends DisplayPage {
	protected $tplName = 'stadium';
	protected $horseGame;
	public function __construct() {
		parent::__construct();
		$this->horseGame = new HorseGame();
	}
	public function start() {
		$this->validate();
		$module = $_REQUEST['_module'];
		if ($module === 'play') {	// 进行游戏
			$bet = intval($_POST['bet']);
			$out = $this->horseGame->play($bet);
			$this->feedJson($out);
		} else {	// 显示页面
			$horses = $this->horseGame->getHorses();
			$this->assign('horses', $horses);
			$this->display();
		}
	}
	protected function validate() {
		if (! $this->hasSession) {
			$this->jump('login.php');
		}
	}
}

$pStadium = new Stadium();
$pStadium->start();
?>