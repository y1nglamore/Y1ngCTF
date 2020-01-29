<?php
error_reporting(0);
$exp = $_GET['exp'];

function isPost(){
	return $_SERVER['REQUEST_METHOD'] == 'POST' ? true : false;
}

if (isPost())
	die('DO NOT P!O!S!T!');


if (isset($_GET['exp'])) {
	if ( preg_match('/system|exec|pass|shell/i', $exp) )
		die('no linux com');

	if ( preg_match('/file|highlight|read|fopen|fget/i', $exp) )
		die('file???');

	if ( preg_match('/include|require|defined|http|array|get/i', $exp) )
		die('un?');

	if ( preg_match('/base|\&|\||\~|\^|rot/i', $exp) )
		die('fxcking encoder');

	if ( preg_match('/dir/i', $exp) )
		die('secret directory');

	if ( preg_match('/filter|base|rot|string|conv|data|input|decode/i', $exp) )
		die('no php wei xie yi');

	if ( preg_match('/post|get|cookie|request|\$\_|assert/i', $exp) )
		die('my dear dalao pls do not getshell 555');

	print_r(eval($exp));

}

else {
	echo "<html><p>I wrote this website by vim!</p></html>";
}

?>