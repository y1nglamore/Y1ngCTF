<!DOCTYPE html>

<html ><head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <?php
    session_start();
    $flag = 'no';
    if ( isset($_POST['username']) && isset($_POST['passwd']) ){

        $u = $_POST['username'];
        $p = $_POST['passwd'];
        if ($u ==='' || $p === '') {
            echo "<script>alert('不能为空 你登录你妈呢');</script>";
        } else {
            if ($u === 'admin' ) {
                echo "<script>alert('别骗我，你才不是admin呢');</script>";
            } else {
                $_SESSION['user'] = $u;
                echo "<script>alert('Welcome, " . $u . "');</script>";
                $flag = 'yes';
            }
        }


    }
    ?>
    <title>假猪套天下第一</title>

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="./bootstrap.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="./font-awesome.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="./icon-font.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="./animate.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="./hamburgers.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="./animsition.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="./select2.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="./daterangepicker.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="./util.css">
    <link rel="stylesheet" type="text/css" href="./main.css">
    <!--===============================================================================================-->
    <style>
        *{margin:0px; padding:0px;}
        .botCenter{width:100%; height:35px; line-height:35px;  position:fixed; bottom:0px; left:0px; font-size:14px; color:#FFFFFF; text-align:center;}
    </style>
</head>
<body>

<div class="limiter">
    <div class="container-login100">
        <div class="wrap-login100 p-b-160 p-t-50">
            <form class="login100-form validate-form" action="" method="post">
					<span class="login100-form-title p-b-43">
						BJDCTF Account Login
					</span>

                <div class="wrap-input100 rs1 validate-input" data-validate="Username is required">
                    <input class="input100" type="text" name="username">
                    <span class="label-input100">Username</span>
                </div>


                <div class="wrap-input100 rs2 validate-input" data-validate="Password is required">
                    <input class="input100" type="password" name="passwd">
                    <span class="label-input100">Password</span>
                </div>

                <div class="container-login100-form-btn">
                    <button type="submit" class="login100-form-btn">
                        Sign in
                    </button>
                </div>

            </form>
        </div>

    </div><a href="https://gem-love.com/" target="_blank"><div class="botCenter">@颖奇L'Amore</div></a>

</div>

</body>
<?php
if ($flag == 'yes'){
    echo "<!-- L0g1n.php -->";
    header("Location: profile.php");
}
?>
</html>

