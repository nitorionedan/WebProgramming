<?php

$MAX_NAME_SIZE = 20;
$name_size = mb_strlen($_GET["name"]);
if($MAX_NAME_SIZE < $name_size)
{
	print "WARNING!!<br/>";
	print "A HUGE NAME<br/>";
	print "-- " . $_GET["name"] . " --<br/>";
	print "IS APPROCHING FAST";
}
else 
{
	Show();
}


function Show()
{
	print "名前	 ：" . $_GET["name"] . "<br/>";
	print "パスワード：" . $_GET["password"] . "<br/>";
	print "性別	 ：" . $_GET["sex"] . "<br/>";
	print "好物	 ：<br/>";

	if(isset($_GET['food']))
	{
		for($i = 0; $i < count($_GET['food']); $i++)
		{
			print $_GET['food'][$i]. "<br/>";
		}
	}
}

// EOF