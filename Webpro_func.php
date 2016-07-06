<?php

function Sum($x, $y)
{
	$result = $x + $y;
	return $result;
}

function Hello()
{
	print "Hello<br/>";
	return;
}

print sum(3, 4) . "<br/>";
Hello();

?>