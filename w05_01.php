<table border="1" width="500" cellspacing="0" cellpadding="5" bordercolor="#333333">

<tr
<?php

for($y = 0; $y < 10; $y++)
{
	for($x = 0; $x < 10; $x++)
	{
		if($x == 0 && $y == 0)
		{
			print "___";
			continue;
		}		
		

		// 行の番号
		if($y == 0)
		{
			print "__" . $x;
			if($x == 9) print "<br/>";
			continue;
		}
		
		// 列の番号
		if($x == 0)
		{
			print "_" . $y;
			continue;
		}

		

		$ans = $x * $y;
		if($ans > 9)	print "_" . $ans;
		else		print "___". $ans;
		if($x == 9)	print "<br/>";
	}
}

?>
/tr>

<tr>
<th bgcolor="#EE0000"><font color="#FFFFFF">メニュー</font></th>
<th bgcolor="#EE0000" width="150"><font color="#FFFFFF">説明</font></th>
<th bgcolor="#EE0000" width="200"><font color="#FFFFFF">豆知識</font></th>
</tr>
<tr>
<td bgcolor="#99CC00" align="right" nowrap>カルボナーラ</td>
<td bgcolor="#FFFFFF" valign="top" width="150">玉子とベーコンとクリームソースのパスタ</td>
<td bgcolor="#FFFFFF" valign="top" width="200">カルボナーラとは炭焼き職人という意味</td>
</tr>
<tr>
<td bgcolor="#99CC00" align="right" nowrap>ペスカトーレ</td>
<td bgcolor="#FFFFFF" valign="top" width="150">エビとあさりの漁師風パスタ</td>
<td bgcolor="#FFFFFF" valign="top" width="200">ペスカトーレは漁師風という意味</td>
</tr>
</table> 