<?php
error_reporting(0);
session_start();


//there are some secret waf that you will never know, fuzz me if you can
require "hidden_filter.php";


if (!$_SESSION['login'])
    die('<script>location.href=\'./index.php\'</script>');


if (!isset($_GET['code'])) {
    show_source(__FILE__);
    exit();
} else {
    $code = $_GET['code'];
    if (!preg_match($secret_waf, $code)) {
        //清空session 从头再来
        eval("\$_SESSION[" . $code . "]=false;"); //you know, here is your webshell, an eval() without any disabled_function. However, eval() for $_SESSION only XDDD you noob hacker
    } else die('hacker');
}


/*
 * When you feel that you are lost, do not give up, fight and move on.
 * Being a hacker is not easy, it requires effort and sacrifice.
 * But remember … we are legion!
 *  ————Deep CTF 2020
*/