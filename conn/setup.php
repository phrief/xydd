<?php
require_once('../configs/config.php');
require_once('../configs/config_c.php');
require_once('mysql.php');

// create database
if ($mysql->selectDb(DATABASE)) {
	die('db been exsists!');
}
$mysql->createDb(DATABASE);
$mysql->selectDb(DATABASE);

// create tables
$mysql->createTb(TABLE_USERS, array(
	"userid int auto_increment primary key",
	"username varchar(32)",
	"userpass varchar(32)",
	"sex tinyint",
	"college tinyint",
	"avatar tinyint",
	"regtime datetime"
));
$mysql->createTb(TABLE_ASSETS, array(
	"userid int auto_increment primary key",
	"energy smallint unsigned",	// (0，65 535)
	"charm smallint unsigned",
	"wit smallint unsigned"
));
$mysql->createTb(TABLE_SOCIAL, array(
	"userid int auto_increment primary key",
	"notices text",	// (0，65 535)
	"friends text",
	"messages text"
));
$mysql->createTb(TABLE_STATUS, array(
	"userid int auto_increment primary key",
	"lasttime datetime not null"
));
$mysql->createTb(TABLE_PROBLEMS, array(
	"problemid int auto_increment primary key",
	"question varchar(64)",
	"answer varchar(32)"
));
$mysql->createTb(TABLE_ADVICES, array(
	"adviceid int auto_increment primary key",
	"advice varchar(1024)"
));

// insert admins
$admins = readAdmins('../configs/admins.xml');
foreach ($admins as $admin) {
	$mysql->insertUser($admin);
}

// insert problems
$problems = readProblems('../configs/problems.xml');
foreach ($problems as $problem) {
	$mysql->insert($problem, TABLE_PROBLEMS);
}

require_once('setup_c.php');
echo "db setup complete.<br>";

class Problem {
	var $question;
	var $answer;
	function __construct($arr) {
		foreach ($arr as $k=>$v) {
			$this->$k = $v;
		}
	}
}
function readProblems($xmlfile) {
    // 读取 aminoacids 的 XML 数据
    $data = implode("",file($xmlfile));
    $parser = xml_parser_create();
    xml_parser_set_option($parser, XML_OPTION_CASE_FOLDING, 0);
    xml_parser_set_option($parser, XML_OPTION_SKIP_WHITE, 1);
    xml_parse_into_struct($parser, $data, $values, $tags);
    xml_parser_free($parser);

    // 遍历 XML 结构
    foreach ($tags as $k=>$v) {
        if ($k == 'problem') {
            $probranges = $v;
            // each contiguous pair of array entries are the
            // lower and upper range for each problem definition
            for ($i=0; $i < count($probranges); $i+=2) {
                $offset = $probranges[$i] + 1;
                $len = $probranges[$i + 1] - $offset;
                $tdb[] = parseProblem(array_slice($values, $offset, $len));
            }
        } else {
            continue;
        }
    }
    return $tdb;
}
function parseProblem($problemvalues) {
    for ($i=0; $i < count($problemvalues); $i++) {
        $prob[$problemvalues[$i]['tag']] = $problemvalues[$i]['value'];
    }
    return new Problem($prob);
}

class Admin {
	var $username;
	var $userpass;
	var $sex;
	var $college;
	var $regtime;
	function __construct($arr) {
		foreach ($arr as $k=>$v) {
			$this->$k = $v;
		}
	}
}
function readAdmins($xmlfile) {
    // 读取 aminoacids 的 XML 数据
    $data = implode("",file($xmlfile));
    $parser = xml_parser_create();
    xml_parser_set_option($parser, XML_OPTION_CASE_FOLDING, 0);
    xml_parser_set_option($parser, XML_OPTION_SKIP_WHITE, 1);
    xml_parse_into_struct($parser, $data, $values, $tags);
    xml_parser_free($parser);

    // 遍历 XML 结构
    foreach ($tags as $k=>$v) {
        if ($k == 'admin') {
            $adminranges = $v;
            // each contiguous pair of array entries are the
            // lower and upper range for each problem definition
            for ($i=0; $i < count($adminranges); $i+=2) {
                $offset = $adminranges[$i] + 1;
                $len = $adminranges[$i + 1] - $offset;
                $tdb[] = parseAdmin(array_slice($values, $offset, $len));
            }
        } else {
            continue;
        }
    }
    return $tdb;
}
function parseAdmin($adminvalues) {
    for ($i=0; $i < count($adminvalues); $i++) {
        $admin[$adminvalues[$i]['tag']] = $adminvalues[$i]['value'];
    }
    return new Admin($admin);
}
?>