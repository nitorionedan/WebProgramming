<?php
$result = array(
	"�p��"=>85, 
	"���w�"=>70, 
	"����"=>55, 
	"����"=>80,
	"�Љ�"=>95
);

$sum = 0; //���v�p

foreach($result as $kamoku => $score){
	if($kamoku == "���w"  ||  $kamoku == "����" ){
		$sum = $sum + $score;	
	}
}
print "���n�Ȗڂ̍��v��"  . $sum . "�_�ł�<br />";


