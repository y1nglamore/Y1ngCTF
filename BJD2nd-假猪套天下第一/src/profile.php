<?php
session_start();
if (!isset($_SESSION['user'])){
	echo "<script>alert('403 forbidden!');</script>";
	header("Location: index.php");
	exit;
}
?>

<!DOCTYPE html>

<html lang="en" class="js"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Login Successfully!</title>

<script>document.documentElement.className="js";var supportsCssVars=function(){var e,t=document.createElement("style");return t.innerHTML="root: { --tmp-var: bold; }",document.head.appendChild(t),e=!!(window.CSS&&window.CSS.supports&&window.CSS.supports("font-weight","var(--tmp-var)")),t.parentNode.removeChild(t),e};supportsCssVars()||alert("Please view this demo in a modern browser that supports CSS Variables.");</script>

<link href="./cdn/vendors.css" rel="stylesheet">
<link href="./cdn/demo.css" rel="stylesheet">
</head>
<body>
<div class="overlay" style="visibility: hidden; opacity: 0;"></div>

<main>
	<div class="frame">
		<div class="frame__demos">
		
			<a href="https://gem-love.com/" target="_blank" class="frame__demo">Hello, <?php echo $_SESSION['user']; ?></a>
		
			
		</div>
	</div>
</main>

<script type="text/javascript" src="./cdn/vendors.js"></script>
<script type="text/javascript" src="./cdn/demo.js"></script><canvas width="2688" height="1464" style="position: absolute; top: 0px; left: 0px; z-index: -1; width: 1680px; height: 915px;"></canvas>
<canvas width="1920" height="947" style="position: absolute; top: 0px; left: 0px; z-index: -1; width: 1920px; height: 947px;"></canvas>




</body></html>