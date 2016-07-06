<?php

$name = "ShoheiYaden";
$height = 1.6;
$weight = 60.0;

$profile = array($name, $height, $weight);

print "名前：$profile[0]<br/>";
print "身長：$profile[1]（ｍ）<br/>";
print "体重：$profile[2]（kg）<br/>";

$bmi = $weight / ($height * $height);

print "BMI ：$bmi<br/>";

?>
