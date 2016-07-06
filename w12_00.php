<?php
$result = array(
	"英語"=>85, 
	"数学ｦ"=>70, 
	"理科"=>55, 
	"国語"=>80,
	"社会"=>95
);

$sum = 0; //合計用

foreach($result as $kamoku => $score){
	if($kamoku == "数学"  ||  $kamoku == "理科" ){
		$sum = $sum + $score;	
	}
}
print "理系科目の合計は"  . $sum . "点です<br />";


