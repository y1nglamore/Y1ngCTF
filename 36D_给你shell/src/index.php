<?php if (isset($_GET['view_source'])) {show_source('50urCe.txt');die;}?><!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>real easy checkin</title>
    <link  href="https://fonts.googleapis.com/css2?family=Inconsolata:wght@400;700&display=swap"  rel="stylesheet" />
    <style>
        body {
            margin: 0;
        }
        p {
            font-family: "Inconsolata", monospace;
            text-align: center;
            font-size: 64px;
            vertical-align: middle;
            user-select: none;
            margin: 0;
        }
        .flexmagic {
            display: flex;
            align-items: center;
            justify-content: center;
            height: 90%;
            position: absolute;

            margin: 0;
            width: 100%;
            flex-direction: column;
        }
         *{margin:0px; padding:0px;}
        .botCenter{width:100%; height:35px; line-height:35px; background:#ffffff; position:fixed; bottom:0px; left:0px; font-size:14px; color:#000; text-align:center;}
    </style>

</head>
<body>
<a href="https://gem-love.com/" target="_blank"><div class="botCenter">@颖奇L'Amore</div></a>
<a href='./?view_source' target="_blank"><button hidden></button></a>
<div>
    <div class="flexmagic">
        <p id="magic">I prepared a webshell for you<br>
        <?php
        include "config.php";

        if ( $ret === 1 ) {
            $_SESSION['login'] = true;
            echo "here is your webshell: w3b5HeLLlll123.php";
        }
        ?>
        </p>
    </div>
</div>


</body>
</html>

<!--flag is in /flag.txt-->
