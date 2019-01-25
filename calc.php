<?php
$datej=$_POST['datej'];
$sum=$_POST['sum'];
$god=$_POST['god'];
$arr=explode(".",$datej);
$pop=$_POST['pop'];
$pops=$_POST['pops'];
$summa="";

if ($pop == 'Да'){
	if ($arr [2] == 2020 || $arr [2] == 2024 || $arr [2] == 2028 || $arr [2] == 2032){
		$summa = $sum + ($sum + $pops)*(date("t", mktime(0, 0, 0, $arr [1], $arr [0], $arr [2])) - $arr [0] + 1)*(0.1 / 366);
		echo "Результат: $summa";
		
	}
	else {
		$summa = $sum + ($sum + $pops)*(date("t", mktime(0, 0, 0, $arr [1], $arr [0], $arr [2])) - $arr [0] + 1)*(0.1 / 365);
		echo "Результат: $summa";
		};
}
else {
	if ($arr [2] == 2020 || $arr [2] == 2024 || $arr [2] == 2028 || $arr [2] == 2032){
		$summa = $sum + ($sum)*(date("t", mktime(0, 0, 0, $arr [1], $arr [0], $arr [2])) - $arr [0] + 1)*(0.1 / 366);
		echo "Результат: $summa";
		
	}
	else {
		$summa = $sum + ($sum)*(date("t", mktime(0, 0, 0, $arr [1], $arr [0], $arr [2])) - $arr [0] + 1)*(0.1 / 365);
		echo "Результат: $summa";
		};
};
?>

