<?php

$city1 = "野々市市扇が丘７－１";
$city2 = "白山市八束穂キャンパス";
$pos;
$len;

print "1 :" . $city1 . "<br/>";
print "2 :" . $city2 . "<br/><br/>";

$city1 = CutCityName($city1);
$city2 = CutCityName($city2);

print "1' :" . $city1 . "<br/>";
print "2' :" . $city2 . "<br/>";


function CutCityName($name)
{
	$name2 = $name;
	$pos;
	$len = 0;
	$sumLen = 0;
	$result;
	$count = 0;

	while(1)
	{

		global $len;
		global $sumLen;
		global $count;

		$count++;

		// "市"までの長さを求める
		$pos = mb_strpos($name2, "市", 0, "utf-8");

		// "市"が見つからなかった場合抜ける
		if($pos == FALSE)	break;

		// 今のname2の長さを求める
		$len = mb_strlen($name2);

		// name2を見つけた場所以降の文字列にする
		$name2 = mb_substr($name2, $pos, $len, "utf-8");

		// 合計の文字列を足す
		$sumLen += $pos + 1;
	}

	
	print "sumLen : " . $sumLen . "<br/>";
	print "count  : " . $count . "<br/>";
	$result = mb_substr($name, 0, $sumLen, "utf-8");
	return $result;
}

?>