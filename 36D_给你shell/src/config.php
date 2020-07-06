<?php
error_reporting(0);
session_start();
date_default_timezone_set("PRC");

isset($_COOKIE['secret']) ? $json = $_COOKIE['secret'] : setcookie('secret', '{"secret":"' . strtoupper(md5('y1ng')) . '"}', time()+3600 );
$flag = 'Y1ngtest2ijsnkj2ialjlkjl1s33';

$ret = 0;

function checkCookie($s) {
    $arr = explode(':', $s);
    if ($arr[0] === '{"secret"' && preg_match('/^[\"0-9A-Z]*}$/', $arr[1]) && count($arr) === 2 ) {
        return true;
    } else {
        setcookie('secret', '', time()-1);
        return true;
    }
}

function haveFun($_f) {
    $_g = strlen(sha1('Y1ng'));
    $_h = strtoupper(md5($_f));
    for ($i = 0; $i < $_g; $i++) {
        $_i = substr($_h, $i, 1);
        $_j = ord($_i);
        print_r($_j & 0xC0);
    }
    die;
}

$r = 0;
isset($_COOKIE['secret']) ? $json = $_COOKIE['secret'] : $r = 1;
if ($r === 1) {
    setcookie('secret', '{"secret":"' . strtoupper(md5('y1ng')) . '"}', time()+3600 );
    die('<script>location.href=\'./index.php\'</script>');
}
checkCookie($json) ? $obj = @json_decode($json, true) : die('no');
if ($obj && isset($_GET['give_me_shell'])) {

    $flag_md5 = strtoupper(md5($flag));
    ($obj['secret'] != $flag_md5 ) ? haveFun($flag) : $ret = 1;
}
