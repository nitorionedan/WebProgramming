<?php

// S:90 A:80 B:70 C:60 D:50
$score = rand(0, 100);

print "あなたの成績は．．．</br>";

Castigate($score);

print "です。";

function Castigate($score_)
{
	if($score_ >= 90)
	{
		print "S";
	}else if($score_ >= 80){
		print "A";
	}else if($score_ >= 70){
		print "B";
	}else if($score_ >= 60){
		print "C";
	}else{
		print "D";
	}
	return;
}



?>