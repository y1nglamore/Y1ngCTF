<?php
setcookie("hint", "s3cReT_b0x.html", time()+3600); 
?>  

<!DOCTYPE html>
<html lang=en>

<!--  
Powered By 颖奇L'Amore(Y1ng)
My Blog: www.gem-love.com
本403页面源码来源于网络，如有侵权请联系删除

Have a nice CTF!
-->
  <meta charset=utf-8>
  <meta name=viewport content="initial-scale=1, minimum-scale=1, width=device-width">
  <title>Y1ng's FOrbidden W3bs1te</title>
  <style>
    *{margin:0;padding:0}html,code{font:15px/22px arial,sans-serif}html{background:#fff;color:#222;padding:15px}body{margin:7% auto 0;max-width:390px;min-height:180px;padding:30px 0 15px}* > body{background:url(

/deny/robot.png) 100% 5px no-repeat;padding-right:205px}p{margin:11px 0 22px;overflow:hidden}ins{color:#777;text-decoration:none}a img{border:0}@media screen and (max-width:772px){body{background:none;margin-top:0;max-width:none;padding-right:0}}#logo{background:url(
/1xgooglelogo_color_150x54dp.png) no-repeat;margin-left:-5px}@media only screen and (min-resolution:192dpi){#logo{background:url(
/deny/2xgooglelogo_color_150x54dp.png) no-repeat 0% 0%/100% 100%;-moz-border-image:url(
/deny/2xgooglelogo_color_150x54dp.png) 0}}@media only screen and (-webkit-min-device-pixel-ratio:2){#logo{background:url(
/deny/2xgooglelogo_color_150x54dp.png) no-repeat;-webkit-background-size:100% 100%}}#logo{display:inline-block;height:54px;width:150px}
  </style>
  <span id=logo aria-label=Google></span>
  <p><ins>403.</ins> <ins>致中国用户:</ins>
   <p><code></code>  <ins>根据中国相关政策法规，本站点不为大陆地区用户提供服务。</ins>
  <p><ins>如需帮助: root@y1ng.net</ins><p>
   
   
   <br>
<audio id="audio" src="/app/1.mp3"  autoplay="autoplay" controls="controls" onended="func();">
Your browser does not support the audio element.
</audio>
<script type="text/javascript">
 function func(){
  console.info(1);

  var o=document.getElementById("audio");

  var f=Math.round(Math.random()*22) + 2;
  o.src="../app/"+f+".mp3";
  console.info(o.src);
  o.load();
        o.play();
}
</script><br>
<ins><span id="sitetime"></span></ins>
<script language=javascript>
function siteTime(){
window.setTimeout("siteTime()", 1000);
var seconds = 1000
var minutes = seconds * 60
var hours = minutes * 60
var days = hours * 24
var years = days * 365 


var today = new Date()
var todayYear = today.getFullYear()
var todayMonth = today.getMonth()
var todayDate = today.getDate()
var todayHour = today.getHours()
var todayMinute = today.getMinutes()
var todaySecond = today.getSeconds()
var t1 = Date.UTC(2019,9,1,0,0,00)
var t2 = Date.UTC(todayYear,todayMonth,todayDate,todayHour,todayMinute,todaySecond)
var diff = t2-t1

var diffYears = Math.floor(diff/years)
var diffDays = Math.floor((diff/days)-diffYears*365)
var diffHours = Math.floor((diff-(diffYears*365+diffDays)*days)/hours)
var diffMinutes = Math.floor((diff-(diffYears*365+diffDays)*days-diffHours*hours)/minutes)
var diffSeconds = Math.floor((diff-(diffYears*365+diffDays)*days-diffHours*hours-diffMinutes*minutes)/seconds)
document.getElementById("sitetime").innerHTML=" 已安全运行："+diffYears+" 年 "+diffDays+" 天 "+diffHours+" 小时 "+diffMinutes+" 分钟 "+diffSeconds+" 秒"
}
siteTime()
</script></div></div></div></div>
<script language="JavaScript" type="text/javascript"> 
var lang = navigator.language || navigator.userLanguage;
if(lang.substr(0, 3) == "zh-"){  
document.write("<style type=\"text/css\" media=\"screen\">.incap_page-tooltip{display:none;}</style>");  }
</script>
</html>