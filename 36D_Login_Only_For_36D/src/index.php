<?php

error_reporting(0);

//mysql conn
function connect($config) {
    $link = mysqli_connect ( $config ['host'], $config ['user'], $config ['password'] ) or die ( '数据库连接失败<br/>ERROR ' . mysqli_connect_errno () . ':' . mysqli_connect_error () );
    mysqli_set_charset ( $link, $config ['charset'] );
    mysqli_select_db ( $link, $config ['dbName'] ) or die ( '指定数据库打开失败<br/>ERROR ' . mysqli_errno ( $link ) . ':' . mysqli_error ( $link ) );
    return $link;
}
$config = array(
    'host'=>'127.0.0.1',
    'user'=>'root',
    'password'=>'root',
    'charset'=>'utf8',
    'dbName'=>'36d_CTF'
);
$con = connect($config);


//func
function alertMes($mes,$url){
  echo "<script>
      alert('{$mes}');
      location.href='{$url}';
  </script>";
  die;
}

function checkSql($s) {
  if(preg_match("/select|=|>|<|\'|union|and|\||ascii|mid|update|floor|info|\ |substr|&|;|-/i",$s)){
    alertMes('hacker', 'index.php');
  }
}

//start here
$ret = 0;
if (isset($_POST['username']) && $_POST['username'] != '' && isset($_POST['password']) && $_POST['password'] != '') {
    $username=$_POST['username'];
    $password=$_POST['password'];

    if (!preg_match('/admin/', $username)) {
        alertMes('you are not admin', 'index.php');
    }
    checkSql($username);
    if ($_POST['password']==="ILoVeThlrtySixD"){
        setcookie('login', 'yes', time()+3600);
        alertMes('login successfully!', '36d_is_here.php');
    }
    checkSql($password);
    $sql="SELECT * FROM user WHERE username='$username' and password='$password';";
    $user_result=mysqli_query($con,$sql);
    $row = mysqli_fetch_array($user_result);
    $ret = 1;
}

if ( ( $_POST['username']!='' && $_POST['password']=='') || ($_POST['username'] == '' &&  $_POST['password']) != '' ) {
    alertMes('不能为空，你登录你🐎呢', 'index.php');
}

?>


<!DOCTYPE html>
<!-- if (!preg_match('/admin/', $uname)) die; -->
<!-- select * from 36d_user where username='$uname' and password='$passwd'; -->
<html lang="en" class="no-js" data-blockbyte-bs-uid="23607">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>36D Login</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">  
    <meta name="MobileOptimized" content="320">
    <link rel="stylesheet" type="text/css" media="screen" href="./stATic/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" media="screen" href="./stATic/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" media="screen" href="./stATic/uniform.default.css">
    <link rel="stylesheet" type="text/css" media="screen" href="./stATic/style-conquer.css">
    <link rel="stylesheet" type="text/css" media="screen" href="./stATic/style.css">
    <link rel="stylesheet" type="text/css" media="screen" href="./stATic/style-responsive.css">
    <link rel="stylesheet" type="text/css" media="screen" href="./stATic/plugins.css">
<!--    <link rel="stylesheet" type="text/css" media="screen" href="./stATic/default.css" id="style_color">-->
    <link rel="stylesheet" type="text/css" media="screen" href="./stATic/login.css">
    <link rel="stylesheet" type="text/css" media="screen" href="./stATic/app.css">
    <link rel="stylesheet" type="text/css" media="screen" href="./stATic/default(1).css">
    <script type="text/javascript" src="./stATic/jquery-1.10.2.min.js"></script>
    <link rel="shortcut icon" href="https://wfpm.fireshellsecurity.team/favicon.ico">
    <link rel="apple-touch-icon" href="https://wfpm.fireshellsecurity.team/favicon.png">
    <style class="blockbyte-bs-style" data-name="content">
        body>div#blockbyte-bs-indicator>div{opacity:0;pointer-events:none}body>iframe#blockbyte-bs-sidebar.blockbyte-bs-visible,body>iframe#blockbyte-bs-overlay.blockbyte-bs-visible{opacity:1;pointer-events:auto}body.blockbyte-bs-noscroll{overflow:hidden !important}body>div#blockbyte-bs-indicator>div{position:absolute;transform:translate3d(-40px, 0, 0);top:0;left:0;width:40px !important;height:100%;background:rgba(0,0,0,0.5);border-radius:0 10px 10px 0;transition:opacity 0.3s, transform 0.3s;z-index:2}body>div#blockbyte-bs-indicator>div>span{-webkit-mask:no-repeat center/32px;-webkit-mask-image:url(chrome-extension://jdbnofccmhefkmjbkkdkfiicjkgofkdh/img/icon-bookmark.svg);background-color:#ffffff;position:absolute;display:block;top:0;left:0;width:100%;height:100%}body>div#blockbyte-bs-indicator[data-pos='right']{left:auto;right:0}body>div#blockbyte-bs-indicator[data-pos='right']>div{transform:translate3d(40px, 0, 0);left:auto;right:0;border-radius:10px 0 0 10px}body>div#blockbyte-bs-indicator.blockbyte-bs-fullHeight>div{border-radius:0}body>div#blockbyte-bs-indicator.blockbyte-bs-hover>div{transform:translate3d(0, 0, 0);opacity:1}body>div#blockbyte-bs-indicator[data-pos='left'].blockbyte-bs-has-lsb{height:100% !important;top:0 !important}body>div#blockbyte-bs-indicator[data-pos='left'].blockbyte-bs-has-lsb>div{background:transparent}body>div#blockbyte-bs-indicator[data-pos='left'].blockbyte-bs-has-lsb>div>span{-webkit-mask-position-y:20px}body>iframe#blockbyte-bs-sidebar{width:350px;max-width:none;height:0;z-index:2147483646;background-color:rgba(191,156,156,0.6) !important;border:none;display:block !important;transform:translate3d(-350px, 0, 0);will-change:width, height, opacity, transform;transition:width 0s 0.3s, height 0s 0.3s, opacity 0.3s, transform 0.3s}body>iframe#blockbyte-bs-sidebar[data-pos='right']{left:auto;right:0;transform:translate3d(350px, 0, 0)}body>iframe#blockbyte-bs-sidebar.blockbyte-bs-visible{width:calc(100% + 350px);height:100%;transform:translate3d(0, 0, 0);transition:opacity 0.3s, transform 0.3s}body>iframe#blockbyte-bs-sidebar.blockbyte-bs-hideMask{background:none !important}body>iframe#blockbyte-bs-sidebar.blockbyte-bs-hideMask:not(.blockbyte-bs-hover){width:calc(350px + 50px)}body>iframe#blockbyte-bs-overlay{width:100%;max-width:none;height:100%;z-index:2147483647;border:none;background:rgba(0,0,0,0.5) !important;transition:opacity 0.3s}
    body {
        background-image: url("stATic/bg.jpg");
        /*background-size: cover;*/
    }
    </style>

</head>
  <body class="login">
  <div class="login-fade-in"></div>
  <div class="login-page-logo">
   <?php
   if ($ret === 0) echo "Do you love 36D";
   if ($ret === 1) echo "wrong password"; ?>
  </div>
  <div class="content">

<form class="login-form" name="loginForm" id="loginForm" action="" method="POST">
<h3 class="form-title">Welcome to 36D System</h3>
<div></div>


<div class="form-group">
  <!--ie8, ie9 does not support html5 placeholder, so we just show field title for that-->
  <label class="control-label visible-ie8 visible-ie9">Username</label>
  <div class="input-icon">
  	<i class="fa fa-envelope"></i>
  	<input class="form-control placeholder-no-fix required email" type="text" autocomplete="off" placeholder="Username" name="username">
  </div>
</div>

<div class="form-group">
	<label class="control-label visible-ie8 visible-ie9">Password</label>
	<div class="input-icon">
		<i class="fa fa-lock"></i>
		<input class="form-control placeholder-no-fix required" type="password" autocomplete="off" placeholder="Password" name="password">
	</div>
</div>

<div class="form-actions">			
      
     <label class="checkbox"> <input type="checkbox" name="remember_me" value="1" id="remember_me">Remember Me</label>
      
			<button type="submit" class="btn btn-info pull-right">Login </button>
</div>

<div class="forget-password">	
	<p><a href="#" >Password forgotten?</a></p>
</div>

</form>

<script type="text/javascript">
$(document).ready(function(){  
  $.extend($.validator.messages, {required: 'This field is required!',email: 'Please enter a valid email address.'});
  
  $("#loginForm").validate({ignore:''});
}); 		
</script>

  </div>
  
  <div class="copyright">
      <a href="https://gem-love.com/" target="_blank">颖奇L'Amore</a> <br> <font color="white">Copyright © 2020 </font><a href="#" target="_blank">36D_CTF</a>
  </div>

<!-- BEGIN JAVASCRIPTS(Load javascripts at bottom, this will reduce page load time) -->
<!-- BEGIN CORE PLUGINS -->
<!--[if lt IE 9]>
<script type="text/javascript" src="/template/plugins/respond.min.js"></script>
<script type="text/javascript" src="/template/plugins/excanvas.min.js"></script>
<![endif]-->

<script type="text/javascript" src="./stATic/jquery-migrate-1.2.1.min.js"></script>
<script type="text/javascript" src="./stATic/bootstrap.min.js"></script>
<script type="text/javascript" src="./stATic/twitter-bootstrap-hover-dropdown.min.js"></script>
<script type="text/javascript" src="./stATic/jquery.slimscroll.min.js"></script>
<script type="text/javascript" src="./stATic/jquery.blockui.min.js"></script>
<script type="text/javascript" src="./stATic/jquery.cokie.min.js"></script>
<script type="text/javascript" src="./stATic/jquery.uniform.min.js"></script>
<!-- END CORE PLUGINS -->

<script type="text/javascript" src="./stATic/jquery.validate.min.js"></script>
<script type="text/javascript" src="./stATic/additional-methods.min.js"></script>

<script type="text/javascript" src="./stATic/app.js"></script>

<script type="text/javascript">
jQuery(document).ready(function() {    
   App.init();
});
</script>
<script type="text/javascript" src="./stATic/app(1).js"></script>
<!-- END JAVASCRIPTS -->
<iframe id="blockbyte-bs-sidebar" class="notranslate" data-pos="left" src="./stATic/saved_resource.html"></iframe><div id="adsbox">&nbsp;</div><div id="blockbyte-bs-indicator" class="blockbyte-bs-fullHeight" style="width: 2px; height: 100%; top: 0%;"></div></body></html>