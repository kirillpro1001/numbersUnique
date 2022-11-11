<!-- 

На вход дана строка с числами, разделенными пробелами.

Удалите все повторы чисел. Выведите их в любом порядке, разделив пробелами.
 -->
<?php
$arrNumbers = [412,41,21,543,654,12,654,12,21];
$newArr = [];
//-------------Способ 1------------------------
foreach (array_unique($arrNumbers) as $value) {
	echo "{$value} ";
}
echo "<br> <br>";

//-------------Способ 2-------------------------
for ($i = 0; $i < count($arrNumbers); $i++) {
	if (!isset($newArr[$arrNumbers[$i]])) {
		$newArr[$arrNumbers[$i]] = $arrNumbers[$i];  
	}
}

foreach ($newArr as $value) {
	echo "{$value} ";
}
?>