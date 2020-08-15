<?php

setcookie("y1ng", sha1(md5('y1ng')), time() + 3600);
setcookie('your_ip_address', md5($_SERVER['REMOTE_ADDR']), time()+3600);

if(isset($_GET['file'])){
    if (preg_match("/\^|\~|&|\|/", $_GET['file'])) {
        die("forbidden");
    }

    if(preg_match("/.?f.?l.?a.?g.?/i", $_GET['file'])){
        die("not now!");
    }

    if(preg_match("/.?a.?d.?m.?i.?n.?/i", $_GET['file'])){
        die("You! are! not! my! admin!");
    }

    if(preg_match("/^home$/i", $_GET['file'])){
        die("禁止套娃");
    }

    else{
        if(preg_match("/home$/i", $_GET['file']) or preg_match("/system$/i", $_GET['file'])){
            $file = $_GET['file'].".php";
        }
        else{
            $file = $_GET['file'].".fxxkyou!";
        }
        echo "现在访问的是 ".$file . "<br>";
        require $file;
    }
} else {
    echo "<script>location.href='./home.php?file=system'</script>";
}