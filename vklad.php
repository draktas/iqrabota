<html>
 <head>
 <script type="text/javascript" src="https://yastatic.net/jquery/3.3.1/jquery.min.js"></script> 
 <script type="text/javascript">
 $(document).ready(function() {
 $("#input_form").submit(function(){
	var name = $("#date").val();
	var name1 = $('#sum1').val();
	var name2 = $('#god').val();
    var name3 = $('input:radio[name=pop]:checked').val();
	var name4 = $('#sum2').val();
	$.ajax({
 url: 'calc.php',
 type: "POST",
 data:'datej='+name+'&sum='+name1+'&god='+name2+'&pop='+name3+'&pops='+name4,
 success: function(data) {
 $("div#result").html(data);
 }
});
return false;
});
});
</script>
 <link rel="stylesheet" type="text/css" href="css/jquery.minical.plain.css">
    <script type="text/javascript" src="js/jquery-2.0.3.min.js"></script>
    <script type="text/javascript" src="js/jquery.minical.plain.js"></script>
 <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <title>
	WORLD BANK
  </title>
 <link type="text/css" rel="stylesheet" href="css/style.css" />
 </head>
<body>
<header>
	<img src="images/bank.jpg">
	<img align="right" src="images/nomer.jpg">
	<br>
</header>
<div id="shap">
	<a href="/rabota/index.php" class="dot" >Кредитные карты</a>
	<a href="/rabota/vklad.php" class="dot1">Вклады</a> 
	<a href="/rabota/index.php" class="dot">Дебетовая карта</a> 
	<a href="/rabota/index.php" class="dot">Страхование</a> 
	<a href="/rabota/index.php" class="dot">Друзья</a>
	<a href="/rabota/index.php" class="dot" >Интернет-банк</a>
</div>
<div id="hleb">
	<a  href="/rabota/index.php" class="hleb">Главная</a>>&nbsp;
	<a href="/rabota/vklad.php" class="hleb">Вклады</a>>&nbsp;Калькулятор
</div>
<form action="?" id="input_form">
<div id="vklad">
	<div>
    <h1>Калькулятор</h1>
	</div>
	<div>
	</div>
	<div>
		Дата оформления вклада
		<input id="date" type="text" name="datej" style="width:90px">
	</div>
	<div>
	</div>
	<div>
		Сумма вклада 
		<input id="sum1" type="number" name="sum" value="1000" min="1000" max="3000000"  oninput="onInput()" style="width:90px"><br><br>
	</div>
	<div style="text-align: center;">
		<input type="range" min="1000" max="3000000" step="1000" value="1000" oninput="CheckRange()" id="sumr">
	</div>
	<div>
		Срок вклада 
		<select id="god" style="width:90px" name="god">
			<option value='1 год'>1 Год</option>
			<option value='2 года' >2 Года</option>
			<option value='3 года'>3 Года</option>
			<option value='4 года'>4 Года</option>
			<option value='5 лет'>5 Лет</option>
		</select>
	</div>
	<div>
	</div>
	<div>
		Пополнение вклада 
		<input type="radio" name="pop" checked=true value="Нет"/> Нет <input type="radio" name="pop" value="Да"/> Да 
	</div>
	<div>
	</div>
	<div>
		Сумма пополнения вклада 
		<input id="sum2" type="number" name="pops" value="1000"  min="1000" max="3000000" oninput="onInput()" style="width:90px">
	</div>
	<div style="text-align: center;">
		<input type="range" min="1000" max="3000000" step="1000" value="1000" oninput="CheckRange()"  id="sump">
	</div>
	<div style="text-align: left; padding: 5 30 5">	
	<input class="but" type="submit" value="Расчитать">
	</div>
	<div id="result"style="text-align: left; padding: 5 30 5">
	</div>
</div>
</form>
<?php include("block/footer.php");?>
<script type="text/javascript">
	var $date_field = $('input[name="datej"]');
	$date_field.minical({
		date_format: function(date) {
			return [date.getDate(), date.getMonth() + 1, date.getFullYear()].join(".");
	}
	})
</script>
<script src="js/polz.js"></script>
</body>
</html>

