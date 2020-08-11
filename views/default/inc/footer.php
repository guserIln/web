<?php defined('lab2') or die('Access denied'); ?>

<footer id="footer">
 	<br>
 2016<br>
 Вы здесь уже:
 <span id="timer-counter" onmouseover="getSecs();" style='color:red;font-size:150%;font-weight:bold;'></span>
 минут/секунд.
 <br>
 <br>

 </footer>
 </div>
</body>
<script>
      $(document).ready(function () {        
	 //    $(".buttoncheck").click(function () {   
	      //   	$(".logo").animate({width: '25%', height: '35%'}, 3000); 
	      setTimeout(1500);
	         		       	$(".logo").animate({marginLeft: '1px', marginTop: '50px'}, 2000); 
	         		//        var script = document.createElement('script');
                              script.src = "https://api-maps.yandex.ru/services/constructor/1.0/js/?sid=dXEw1ZoD0X6TR7SF_-6GmrUy26Edt08v&amp;width=200&amp;height=200&amp;lang=ru_RU&amp;sourceType=constructor&amp;scroll=true;";
                               document.getElementById('map2').appendChild(script);
	 //      	 });    
	       }); 
</script>
</html>