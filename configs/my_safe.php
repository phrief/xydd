<?php
foreach($_GET as & $value){ 
	$value = filter_sep($value);
}
foreach($_POST as & $value){ 
	$value = filter_sep($value);
}
foreach($_COOKIE as & $value){ 
	$value = filter_sep($value);
}

function filter_sep($str) {
	$str = str_replace(SEP_SMALL, ' ', $str);
	$str = str_replace(SEP_MEDIUM, ' ', $str);
	$str = str_replace(SEP_BIG, ' ', $str);
	return $str;
}
?>