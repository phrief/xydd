<?php
$mysql = new XMysql();

function update_assets($offsets, $userid) {
	$cnd = array('userid' => $userid);
	$old = get_row($cnd, TABLE_ASSETS);
	$new = array();
	foreach ($offsets as $k => $v) {
		$new[$k] = $old[$k] + $v;
	}
	update_row($new, $cnd, TABLE_ASSETS);
}
function update_social($new, $cnd) {
	return update_row($new, $cnd, TABLE_SOCIAL);
}
function update_row($new, $cnd, $table) {
	global $mysql;
	$sql = "update ". $table ." set "
				.kv_implode(', ', '=', $new, '', "'")
				.($cnd == NULL? "":
			  " where ". kv_implode(' and ', '=', $cnd, '', "'"));
	$mysql->query($sql);
	return $mysql->affected_rows;
}
function count_rows($key, $cnd, $table) {
	global $mysql;
	$sql = "select count(". $key .") as num from ". $table
			.($cnd == NULL? "":
			  " where ". kv_implode(' and ', '=', $cnd, '', "'"));
	$rst = $mysql->query($sql);
	$r = $rst->fetch_array();
	return $r['num'];
}
function get_rows($cnd, $table) {
	global $mysql;
	$rows = array();
	try {
		$sql = "select * from ". $table
			.($cnd == NULL? "":
			  " where ". kv_implode(' and ', '=', $cnd, '', "'"));
		$rst = $mysql->query($sql);
		$r = $rst->fetch_array();
		if (is_array($r)) {
			do {
				$row = array();
				foreach ($r as $key => $val) {
					$row[$key] = $val;
				}
				$rows[] = $row;
				$r = $rst->fetch_array();
			} while(is_array($r));
			return $rows;
		} else {
			return NULL;
		}
	} catch (Exception $e) {
		return false;
	}
}
function get_social($cnd) {
	return get_row($cnd, TABLE_SOCIAL);
}
function get_assets($cnd) {
	return get_row($cnd, TABLE_ASSETS);
}
function get_user($cnd) {
	return get_row($cnd, TABLE_USERS);
}
function get_problem($pid) {
	return get_row(array(
		'problemid' => $pid
	), TABLE_PROBLEMS);
}
function get_row($cnd, $table) {
	global $mysql;
	$row = array();
	try {
		$sql = "select * from ". $table
			.($cnd == NULL? "":
			  " where ". kv_implode(' and ', '=', $cnd, '', "'"));
		$rst = $mysql->query($sql);
		$r = $rst->fetch_array();
		if (is_array($r)) {
			foreach ($r as $key => $val) {
				$row[$key] = $val;
			}
			return $row;
		} else {
			return NULL;
		}
	} catch (Exception $e) {
		return false;
	}
}
function check_user($user) {
	return check_row($user, TABLE_USERS);
}
function check_row($cnd, $table) {
	global $mysql;
	$sql = "select * from ". $table
			." where ". kv_implode(' and ', '=', $cnd, '', "'");
	$rst = $mysql->query($sql);
	return $rst->num_rows > 0;
}
function insert_users($users) {
	foreach ($users as $v) {
		insert_user($v);
	}
}
function insert_user($user) {
	$user = (array)$user;	// enable both classObj and array
	$user['userpass'] = prelock($user['userpass']);
	$user['regtime'] = timestr();
	insert_row($user, TABLE_USERS);
	insert_row(array(
		'energy' => DEF_ENERGY,
		'charm' => DEF_CHARM,
		'wit' => DEF_WIT
	), TABLE_ASSETS);
	insert_row(array(
		'lasttime' => date("Y-m-d H:i:s", 0)
	), TABLE_STATUS);
	return insert_row(array(
		'notices' => DEF_NOTICES,
		'friends' => DEF_FRIENDS,
		'messages' => DEF_MESSAGES
	), TABLE_SOCIAL);
}
function insert_problems($problems) {
	foreach ($problems as $v) {
		insert_row($v, TABLE_PROBLEMS);
	}
}
function insert_row($row, $table) {
	global $mysql;
	$sql = "insert into ". $table
				." (". k_implode(', ', $row) .")"
				." values (". v_implode(', ', $row, "'") .")";
	$mysql->query($sql);
	return $mysql->insert_id;
}

function add_notice($taruser, $code, $msg) {
	$thesocial = get_social($taruser);
	$oldnotices = $thesocial['notices'];
	$arr = $oldnotices? explode(SEP_MEDIUM, $oldnotices): array();
	$new = $code .SEP_SMALL. $msg;
	if (count($arr) >= MAX_NUM_NOTICES) {
		return -1;
	} else if (check_seg($oldnotices, SEP_MEDIUM, $new)) {
		return 0;
	} else {
		return update_social(array(
			'notices' => add_seg($oldnotices, SEP_MEDIUM, $new)
		), array(
			'userid' => $taruser['userid']
		));
	}
}
function remove_notice($taruser) {
	$thesocial = get_social($taruser);
	$oldnotices = $thesocial['notices'];
	if ($oldnotices) {
		$arr = explode(SEP_MEDIUM, $oldnotices);
		array_splice($arr, 0, 1);
		$newnotices = v_implode($SEP_MEDIUM, $arr);
		update_social(array(
			'notices' => $newnotices
		), $taruser);
	}
}
function get_notice($taruser) {
	$thesocial = get_social($taruser);
	$notices = $thesocial['notices'];
	if ($notices) {
		$arr = explode(SEP_MEDIUM, $notices);
		$no = explode(SEP_SMALL, $arr[0]);
		return array(intval($no[0]), intval($no[1]));
	}
	return NULL;
}

class MysqlResult {
	protected $src;
	public $num_rows;
	public function __construct($src) {
		$this->src = $src;
		$this->num_rows = @mysql_num_rows($src);
	}
	public function fetch_array($type = MYSQL_ASSOC) {
		return mysql_fetch_array($this->src, $type);
	}
}
class Mysql {
	protected $conn;
	public $insert_id;
	public $affected_rows;
	public function __construct() {
		$this->conn = mysql_connect(DB_HOST, MYSQL_USER, MYSQL_PASS);
		@ $this->selectDb(DATABASE);
		@ $this->setNames('utf8');
	}
	public function getConn() {
		return $this->conn;
	}
	public function selectDb($db) {
		return mysql_select_db($db, $this->conn);
	}
	public function setNames($set) {
		return $this->query("set names ". $set, $this->conn);
	}
	public function query($sql) {
		$r = mysql_query($sql, $this->conn);
		$this->assign();
		return new MysqlResult($r);
	}
	protected function assign() {
		$this->insert_id = mysql_insert_id($this->conn);
		$this->affected_rows = mysql_affected_rows($this->conn);
	}
	public function createDb($db) {
		return $this->query("create database ". $db);
	}
	public function dropDb($db) {
		return $this->query("drop database ". $db);
	}
	public function createTb($tb, $segs) {
		$sql = "create table ". $tb . "("
				.implode(', ', $segs). ")";
		return $this->query($sql);
	}
	public function dropTb($tb) {
		return $this->query("drop table ". $tb);
	}
	public function insert($row, $tb) {
		$row = (array)$row;
		$sql = "insert into ". $tb
				." (". k_implode(', ', $row) .")"
				." values (". v_implode(', ', $row, "'") .")";
		$this->query($sql);
		return $this->insert_id;
	}
	public function delete($cnd, $tb) {
		$sql = "delete from ". $tb;
		if ($cnd) {
			if (is_string($cnd)) {
				$sql .= " where ". $cnd;
			} else {
				$cnd = (array)$cnd;
				$sql .= " where ". kv_implode(' and ', '=', $cnd, '', "'");
			}
		}
		$this->query($sql);
		return $this->affected_rows;
	}
	public function select($keys, $cnd, $tb) {
		$sql = "select ". $keys ." from ". $tb;
		if ($cnd) {
			if (is_string($cnd)) {
				$sql .= " where ". $cnd;
			} else {
				$cnd = (array)$cnd;
				$sql .= " where ". kv_implode(' and ', '=', $cnd, '', "'");
			}
		}
		$res = $this->query($sql);
		return $res;
	}
	public function update($row, $cnd, $tb) {
		$row = (array)$row;
		$sql = "update ". $tb ." set "
				.kv_implode(', ', '=', $row, '', "'");
		if ($cnd) {
			if (is_string($cnd)) {
				$sql .= " where ". $cnd;
			} else {
				$cnd = (array)$cnd;
				$sql .= " where ". kv_implode(' and ', '=', $cnd, '', "'");
			}
		}
		@ $this->query($sql);
		return $this->affected_rows;
	}
	public function getRows($keys, $cnd, $tb) {
		$rows = array();
		$res = $this->select($keys, $cnd, $tb);
		while ($row = $res->fetch_array()) {
			$rows[] = $row;
		}
		return $rows;
	}
	public function getRow($keys, $cnd, $tb) {
		$rows = $this->getRows($keys, $cnd, $tb);
		return $rows[0];
	}
	public function append($row, $cnd, $tb) {
		$old = $this->getRow(k_implode(', ', $row), $cnd, $tb);
		$new = array();
		foreach ($row as $k => $v) {
			if (is_string($v)) {
				$new[$k] = $old[$k]. $v;
			} else {
				$new[$k] = $old[$k] + $v;
			}
		}
		return $this->update($new, $cnd, $tb);
	}
}
class XMysql extends Mysql {
	public function __construct() {
		parent::__construct();
	}
	public function insertUser($user) {
		$user = (array)$user;
		$user['userpass'] = prelock($user['userpass']);
		$user['regtime'] = timestr();
		$this->insert($user, TABLE_USERS);
		$this->insert(array(
			'energy' => DEF_ENERGY,
			'charm' => DEF_CHARM,
			'wit' => DEF_WIT
		), TABLE_ASSETS);
		$this->insert(array(
			'notices' => DEF_NOTICES,
			'friends' => DEF_FRIENDS,
			'messages' => DEF_MESSAGES
		), TABLE_SOCIAL);
		return $this->insert(array(
			'lasttime' => timestr(0)
		), TABLE_STATUS);
	}
}
?>