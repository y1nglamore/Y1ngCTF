<?php
header('Content-type:text/html;charset=utf-8');
error_reporting(0);
highlight_file(__file__);

function isPalindrome($str){
    $len=strlen($str);
    $l=1;
    $k=intval($len/2)+1;
    for($j=0;$j<$k;$j++)
        if (substr($str,$j,1)!=substr($str,$len-$j-1,1)) {
            $l=0;
            break;
        }
    if ($l==1) return true;
    else return false;
}

//level 1
if (isset($_GET['num'])){
    $num = $_GET['num'];
    $numPositve = intval($num);
    $numReverse = intval(strrev($num));
    if (preg_match('/[^0-9.]/', $num)) {
        die("非洲欢迎你1");
    } else {
        if ( (preg_match_all("/\./", $num) > 1) || (preg_match_all("/\-/", $num) > 1) || (preg_match_all("/\-/", $num)==1 && !preg_match('/^[-]/', $num))) {
            die("没有这样的数");
        }
    }
    if ($num != $numPositve) {
        die('最开始上题时候忘写了这个，导致这level 1变成了弱智，怪不得这么多人solve');
    }

    if ($numPositve <= -999999999999999999 || $numPositve >= 999999999999999999) { //在64位系统中 intval()的上限不是2147483647 省省吧
        die("非洲欢迎你2");
    }
    if( $numPositve === $numReverse && !isPalindrome($num) ){
        echo "我不经意间看了看我的劳力士, 不是想看时间, 只是想不经意间, 让你知道我过得比你好.</br>";
    }else{
        die("金钱解决不了穷人的本质问题");
    }
}else{
    die("去非洲吧");
}

//level 2
if (isset($_GET['md5'])){
    $md5=$_GET['md5'];
    if ($md5==md5(md5($md5)))
        echo "想到这个CTFer拿到flag后, 感激涕零, 跑去东澜岸, 找一家餐厅, 把厨师轰出去, 自己炒两个拿手小菜, 倒一杯散装白酒, 致富有道, 别学小暴.</br>";
    else
        die("我赶紧喊来我的酒肉朋友, 他打了个电话, 把他一家安排到了非洲");
}else{
    die("去非洲吧");
}

//get flag
if (isset($_GET['get_flag'])){
    $get_flag = $_GET['get_flag'];
    if(!strstr($get_flag," ")){
        $get_flag = str_ireplace("cat", "36dCTFShow", $get_flag);
        $get_flag = str_ireplace("more", "36dCTFShow", $get_flag);
        $get_flag = str_ireplace("tail", "36dCTFShow", $get_flag);
        $get_flag = str_ireplace("less", "36dCTFShow", $get_flag);
        $get_flag = str_ireplace("head", "36dCTFShow", $get_flag);
        $get_flag = str_ireplace("tac", "36dCTFShow", $get_flag);
        $get_flag = str_ireplace("sort", "36dCTFShow", $get_flag);
        $get_flag = str_ireplace("nl", "36dCTFShow", $get_flag);
        $get_flag = str_ireplace("$", "36dCTFShow", $get_flag);
        $get_flag = str_ireplace("curl", "36dCTFShow", $get_flag);
        $get_flag = str_ireplace("bash", "36dCTFShow", $get_flag);
        $get_flag = str_ireplace("nc", "36dCTFShow", $get_flag);
        $get_flag = str_ireplace("php", "36dCTFShow", $get_flag);
        if (preg_match("/['\*\"[?]/", $get_flag)) {
            die('非预期修复*2');
        }
        echo "想到这里, 我充实而欣慰, 有钱人的快乐往往就是这么的朴实无华, 且枯燥.</br>";
        system($get_flag);
    }else{
        die("快到非洲了");
    }
}else{
    die("去非洲吧");
}
?>

