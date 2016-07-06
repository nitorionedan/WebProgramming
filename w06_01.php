<?php

$cost = 200;
$num = 2;
$sumPrice;
$tax = 8;
$finalPrice;

print "単価：" . $cost . "（円）</br>";
print "数量：" . $num  . "（個）<br/>";

$sumPrice = CalFree($cost, $num);

print "料金は" . $sumPrice . "です。<br/>";

$finalPrice = CalTax($sumPrice, $tax);

print "消費税" . $tax . "％で" . $finalPrice . "円です。";

// ----------------------------------------------------------
function CalFree ($cost, $num)
{
	$result = $cost * $num;
	return $result;
}


function CalTax($sumPrice, $tax)
{
	$result = $sumPrice + $sumPrice * ($tax / 100);
	return $result;
}


?>