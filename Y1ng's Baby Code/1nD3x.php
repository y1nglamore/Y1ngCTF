<?php
highlight_file(__FILE__);

error_reporting(0); 
$file = "1nD3x.php";
$y1ng = $_GET['y1ng'];
$passwd = $_GET['passwd'];
$arg = '';
$code = '';

echo "<font color=red><B>Notice1: If you get my flag, you will get a gif!</B><br></font>";
echo "<font color=red><B>Notice2: Dangerous functions, such as shell_exec() system() and so on, are disabled in php.ini. Chopper&AntSword are also useless!</B><br></font>";
echo "<font color=red><B>Notice3: flag is Y1ng{xxxxxxxx}!</B><br></font>";
echo "<font color=red><B>Notice4: there isn't a var named \$flag or \$f14g in flag.php, name of flag's var is difficult to guess!</B><br><br></font>";

if($_SERVER) { 
    if (
        preg_match('/y1ng|zuishuai|flag|YuZhou|Wudi|system|exec|passwd|ass|eval|sort|shell|ob|start|mail|\$|sou|show|cont|high|reverse|flip|rand|scan|chr|local|sess|id|source|arra|head|light|read|inc|info|bin|hex|oct|echo|print|pi|\.|\"|\'|log/i', $_SERVER['QUERY_STRING'])
        )  
        die('fxck your key words!'); 
}
if (!preg_match('/http/i', $_GET['file'])) {
    if (preg_match('/^y1ngzuishuai$/', $_GET['zuishuai']) && $_GET['zuishuai'] !== 'y1ngzuishuai') { 
        $file = $_GET["file"]; 
        echo "Yes! You know that I zuishuai!<br>";
    } 
} else die('fxck you! no RFI!!');

if($_REQUEST) { 
    foreach($_REQUEST as $value) { 
        if(preg_match('/[a-zA-Z]/i', $value))  
            die('fxck your English letters'); 
    } 
}

if (file_get_contents($file) !== 'y1ng_YuZhou_Wudi_zuishuai')
    die(' Am not I universe wudi zuishuai?<br>');


if ( sha1($y1ng) === sha1($passwd) && $y1ng != $passwd ){
    extract($_GET["flag"]);
    echo "Very good! you know my password. But what is flag?<br>";
} else{
    die('fxck you! you dont know password! you dont know sha1! why you come here!');
}



if(preg_match('/^[a-z0-9]*$/isD', $code) || 
preg_match('/fil|cat|more|tail|tac|less|head|nl|tailf|ass|eval|sort|shell|ob|start|mail|\`|\{|\%|x|\&|\$|\*|\||\<|\"|\'|\=|\?|sou|show|cont|high|reverse|flip|rand|scan|chr|local|sess|id|source|arra|head|light|print|echo|read|inc|flag|1f|info|bin|hex|oct|pi|con|rot|input|\.|log/i', $arg)  ) { 
    die('fxck you! Read my Regular Express1on!'); 
} else { 
    include "flag.php";
    $code('', $arg); 
}
?>