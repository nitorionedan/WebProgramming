<?php
$name = "annmth";
$height = 1.6;
$weight = 62.1;

$form = "私の名前は%sです。身長は%sm、体重は%skgです。<br/>";
printf($form, $name, $height, $weight);

print "BMIは" . CalBMI($height, $weight) . "です。<br/>";

function CalBMI($height_, $weight_)
{
	return round( $weight_ / ($height_ * $height_), 1 );
}
?>
