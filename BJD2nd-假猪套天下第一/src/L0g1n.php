<?php
error_reporting(0);
if (!isset($_COOKIE['time'])) {
    setcookie('time', time(), time()+3600);
}
session_start();

if (!isset($_SESSION['user'])){
    echo "<script>alert('403 forbidden!');</script>";
    header("Location: index.php");
    exit;
}
?>
<html>
<head>
    <meta charset="gb2312">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <title>假猪套天下第一</title>
    <style>
        *{margin:0px; padding:0px;}
        .botCenter{width:100%; height:35px; line-height:35px; background:#DDA0DD; position:fixed; bottom:0px; left:0px; font-size:14px; color:#000; text-align:center;}
    </style>
</head>

<body bgcolor="#DDA0DD">
<center>
    <a href="https://gem-love.com/" target="_blank"><div class="botCenter">@颖奇L'Amore</div></a>
    <br><br><br><br><br><br><br><br>
    <font color=black size=32px>
        <?php
        $flag = file_get_contents('/flag');
        if (isset($_COOKIE['time'])) {
            if ($_COOKIE['time'] < time()+3122064000){
                die("Sorry, this site will be available after totally 99 years!");
            }
        } else {
            die('one error occured');
        }

        if ($_SERVER['HTTP_CLIENT_IP'] != '127.0.0.1' && $_SERVER['HTTP_X_REAL_IP'] != '127.0.0.1'){
            if ($_SERVER['HTTP_X_FORWARDED_FOR'] == "127.0.0.1") {
                die("Do u think that I dont know X-Forwarded-For?<br>Too young too simple sometimes naive");
            }
            die("Sorry, this site is only optimized for those who comes from localhost");
        }

        if ($_SERVER['HTTP_REFERER'] != 'gem-love.com')
            die('Sorry, this site is only optimized for those who come from gem-love.com');

        if ( !preg_match('/Commodore 64/', $_SERVER['HTTP_USER_AGENT']) ) {
            if ($_SERVER['HTTP_USER_AGENT'] == 'Commodo 64' || $_SERVER['HTTP_USER_AGENT'] == 'Commodo' || $_SERVER['HTTP_USER_AGENT'] == 'commodo64' || $_SERVER['HTTP_USER_AGENT'] == 'Commodo 64' || $_SERVER['HTTP_USER_AGENT'] == 'Commodo64')
                die("no no no i think it is not the real commmodo 64, <br>what is the real ua for Commdo?");
            else
                die('Sorry, this site is only optimized for browsers that run on Commodo 64');
        }

        if ($_SERVER['HTTP_FROM'] != 'root@gem-love.com')
            die('Sorry, this site is only optimized for those whose email is root@gem-love.com');

        if ($_SERVER['HTTP_VIA'] != 'y1ng.vip')
            die('Sorry, this site is only optimized for those who use the http proxy of y1ng.vip<br> if you dont have the proxy, pls contact us to buy, ￥100/Month');

        echo "Sorry, even you are good at http header, you're still not my admin.<br> Althoungh u found me, u still dont know where is flag <!--" . base64_encode($flag) . "-->";
        die;
        ?>
    </font>
</center>
</body>
</html>	
