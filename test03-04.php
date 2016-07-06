<?php
$name = "Shohei Yaden";
$height = 1.6;
$weight = 62.1;

$form = "私の名前は%sです。身長は%fm、体重は%fkgです。<br/>";
printf($form, $name, round($height, 1), $weight);

?>