<?php
$datej=$_POST['datej'];
$sum=$_POST['sum'];
$god=$_POST['god'];
$arr=explode(".",$datej);
$pop=$_POST['pop'];
$pops=$_POST['pops'];
$summa="";
//$difference = intval(abs( strtotime($datej) - strtotime('1.2.2020') ));
//(date("t", mktime(0, 0, 0, $arr [1], $arr [0], $arr [2])) - $arr [0])
if ($pop == 'Да'){
	if ($arr [2] == 2020 || $arr [2] == 2024 || $arr [2] == 2028 || $arr [2] == 2032){
		
		$summa = round ($sum + ($sum + $pops)*($god*366)*(0.1 / 366));
		echo "Результат: $summa руб.";
		
	}
	else {
		$summa = round ($sum + ($sum + $pops)*($god*365)*(0.1 / 365));
		echo "Результат: $summa руб.";
		};
}
else {
	if ($arr [2] == 2020 || $arr [2] == 2024 || $arr [2] == 2028 || $arr [2] == 2032){
		$summa = round ($sum + ($sum)*($god*366)*(0.1 / 366));
		echo "Результат: $summa руб.";
	
		
	}
	else {
		$summa = round ($sum + ($sum)*($god*365)*(0.1 / 365));
		echo "Результат: $summa руб.";
	
		};
};
?>

