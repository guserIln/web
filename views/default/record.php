<?php 
defined("lab2") or die('Access denied');
?>

<script language="javascript">
function message()
{
   alert("Имя:"+firstname.value);
    alert("Фамилия:"+lastname.value);
     alert("Номер:"+num.value);
      alert("Время:"+time.value);
}
</script>
<script src="http://code.jquery.com/jquery-latest.js"> </script>
<script>

      $(document).ready(function () {        
	   firstname.onblur = function() {
  if (this.value=='') { // введено не число
    // показать ошибку
    this.className = "error";
//    error.innerHTML = 'Вы ввели не число. Исправьте, пожалуйста.'
  }
};
   firstname.onfocus = function() {
  if (this.className == 'error') { // сбросить состояние "ошибка", если оно есть
    this.className = "field";
  //  error.innerHTML = "";
  }
  
};
  lastname.onblur = function() {
  if (this.value=='') { // введено не число
    // показать ошибку
    this.className = "error";
//    error.innerHTML = 'Вы ввели не число. Исправьте, пожалуйста.'
  }
};
   lastname.onfocus = function() {
  if (this.className == 'error') { // сбросить состояние "ошибка", если оно есть
    this.className = "field";
  //  error.innerHTML = "";
  }
};
  num.onblur = function() {
  if (this.value=='' || isNaN(this.value)) { // введено не число
    // показать ошибку
    this.className = "error";
//    error.innerHTML = 'Вы ввели не число. Исправьте, пожалуйста.'
  }
};
   num.onfocus = function() {
  if (this.className == 'error') { // сбросить состояние "ошибка", если оно есть
    this.className = "field";
  //  error.innerHTML = "";
  }
};
	       }); 
</script>
<div id="content">
<form method="get">
	<div class="title"> Запись </div>
	<input id="firstname" class="field" type="text"  placeholder="Имя"/></input><div id="error"></div>
	<br>
	<input id="lastname" class="field" type="text"  placeholder="Фамилия"/></input><div id="error"></div>
	<br>
	<input id="num" class="field" type="tel"  placeholder="Номер телефона"/></input><div id="error"></div>
	<br> 
	<select id="time" class="field"> <div id="error"></div>
	<option> Дневной</option> 
	<option> Вечерний</option>
	</select>
	<br> <br>
	<input type="button" class="buttoncheck" name="submit" value="Записаться" 
	onclick="message();">
	<br>
	</form>
</div>