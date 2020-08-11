<?php 
defined("lab2") or die('Access denied');
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
<script language="javascript" src="<?=TEMPLATE?>js/j1.js"></script>
<script language="javascript" src="<?=TEMPLATE?>js/j2.js"></script>
<script>
//function sound() {
//  var audio = new Audio(); 
//  audio.src = 'audio.mp3.bak'; 
// audio.autoplay = true; 
//}
</script>
    <script src="http://code.jquery.com/jquery-latest.js"> </script>
    <script>                 
          $(document).ready(function () {        
     //    $(".buttoncheck").click(function () {   
                $("#contentwrapper").hide(); 
                    $("#contentwrapper").fadeIn(2000);        
     //          });    
           }); 
</script>


</head>
<body onLoad="getSecs(); sound();">
<div id="wrapper">
<header id="header">

<link rel="stylesheet" href="<?=TEMPLATE?>css/style.css">
<nav>
<ul class="menu">
    <li><a href="?view=main">Новости </a></li>
    <li><a href="?view=oplata">Оплата</a></li>
    <li><a href="?view=education">Обучение</a></li>
    <li><a href="?view=record">Запись</a></li>
    <li><a href="?view=recall">Отзывы</a></li>
</ul>
</nav>
<a href="/"><img class="logo" src="<?=TEMPLATE?>images/logo.jpg" alt="Лого" /></a>
<div class="head-contact"> 
<p><strong>Телефон:</strong><br/>
<span id="t" onmouseover="colorchange()" >5896546883</span>
</p>
<p id="i" onmouseover="setunderline()" onmouseout="removeunderline()"><strong>Режим работы:</strong><br />
Будние дни: с 9:00 до 18:00 <br/>
Суббота, Воскресенье - выходные
</p>
</div>
<img class="slogan" src="<?=TEMPLATE?>images/slogan.jpg" alt="" />
<form method="get" action="">
</form>
</header>