<?php
// --------------------------------------------------------------
// S:90 A:80 B:70 C:60 D:50
$score = rand(0, 100);
$result;

// --------------------------------------------------------------
print "あなたの成績は" . $score . "点なので．．．</br>";

$result = Castigate($score);

print $result . "です。</br>";

Comment($result);

// --------------------------------------------------------------
function Castigate($score_)
{
	// ↓グローバル変数の中身を弄ることができるが、非推薦
	// global $result;

	if($score_ >= 90)
	{
		return $result = "S";
	}else if($score_ >= 80){
		return $result = "A";
	}else if($score_ >= 70){
		return $result = "B";
	}else if($score_ >= 60){
		return $result = "C";
	}else{
		return $result = "D";
	}
}

// --------------------------------------------------------------
function Comment($result_)
{
	switch($result_)
	{
	case "S": print "「すばらしい！」</br>";	break;
	case "A": print "「すごい！」</br>";		break;
	case "B": print "「まあまあ」</br>";		break;
	case "C": print "「がんばれ」</br>";		break;
	case "D": print "「ざんねん」</br>";		break;
	default: print	"ERROR</br>";			break;
	}
}

// --------------------------------------------------------------
?>