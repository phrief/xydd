<?php
require_once('Smarty/Smarty.class.php');
$smarty = new Smarty;

$smarty->force_compile = true;
//$smarty->debugging = true;
//$smarty->caching = true;
//$smarty->cache_lifetime = 1800;

$smarty->setTemplateDir(realpath('templates/'))
		->setConfigDir(realpath('configs/'))
		->setCompileDir(realpath('Smarty/templates_c/'))
		->setCacheDir(realpath('Smarty/cache/'))
		->setPluginsDir(realpath('plugins/'));
$smarty->left_delimiter = '{{';
$smarty->right_delimiter = '}}';
?>
