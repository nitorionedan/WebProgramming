<body bgcolor="#ff0000" text="#ffffff" link="#ffffff" alink="#ffffff" vlink="#ffffff">
<body background="Resources/back.png">
<font face="ＭＳ Ｐ明朝">


<?php

if ( !isset($_POST['name'] || !isset($_POST['password'] || !isset($_POST['sex'] )   return;

$MAX_NAME_SIZE = 20;

$name_size = mb_strlen($_POST['name']);
$name;
$password;
$sex;


// empty check---------------------------------
if ( $_POST['name'] != "" )
{
    $name = $_POST['name'];
}
else
{
    $name = "anonymass";
}

if ( $_POST['password'] != "" )
{
    $password = $_POST['password'];
}
else
{
    $password = "no input";    
}

if ( isset($_POST['sex']) )
{
    $sex = $_POST['sex'];
}
else
{
    $sex = "gender unknown";
}

if ($MAX_NAME_SIZE < $name_size)
{
	print "WARNING!!<br/>";
	print "A HUGE NAME<br/>";
	print "-- " . $_POST['name'] . " --<br/>";
	print "IS APPROCHING FAST";
}
else
{
    ShowResult($name, $password, $sex);
}


// functions--------------------------------------------------
function ShowResult($name, $password, $sex)
{
    // Centering
    print "<div align=\"center\">";

    print "<FONT size=\"7\">";
    print "あなたの情報、ごちになりまーちゅ♡<br />";
    print "</FONT> <BR>";

	print "<b>名前	 ：$name</b><br/><br/>";
	print "<b>パスワード：$password</b><br/><br/>";
	print "<b>性別	 ：$sex</b><br/><br/>";
	print "<b>好物	 ：</b><br/>";

	if ( isset($_POST['food']) )
	{
		for ($i = 0; $i < count($_POST['food']); $i++)
		{
            if ($i != 0)   print "、";
			print "<b>". $_POST['food'][$i]. "</b>";
		}
	}
    else
    {
        print "好物はこの世に無し";
    }
 
    print "</div>";

    print "<br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br />";
    
    print "<h3>その送信、大丈夫？(´・ω・`)</h3><br />";
}
?>

<A Href="http://localhost/yaden-064/submit.php">入力画面へもどる</A><br /><br />
<A Href="http://localhost/yaden-064/Main.html">タイトルへもどる</A><br /><br />

</body>