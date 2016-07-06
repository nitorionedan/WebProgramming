<?php

$arrInfo[0] = array
(
	"date"	=> "<br/>2016/05/25<br/>",
	"photo"	=> "000.gif",
	"title"	=> "ウチの猫たち<br/>",
);

$arrInfo[1] = array
(
	"date"	=> "<br/>2016/05/14<br/>",
	"photo"	=> "001.gif",
	"title"	=> "今日の晩御飯<br/>",
);

$arrInfo[2] = array
(
	"date"	=> "<br/>2016/05/09<br/>",
	"photo"	=> "002.gif",
	"title"	=> "たまには贅沢ディナー<br/>",
);

$arrInfo[3] = array
(
	"date"	=> "<br/>2016/05/02<br/>",
	"photo"	=> "003.gif",
	"title"	=> "ただいま金沢！<br/>",
);


function CheckLine($line)
{
	$color1 = "#FFFFFF";
	$color2 = "#CCCCCC";

	return ($line % 2 == 0) ? $color1 : $color2;
}

?>


<h2>私のお知らせ</h2>

<table>
	<?php for($i = 0; $i < count($arrInfo); $i++){ ?>
		<tr>
			<td>
				<div style="background-color:#FF0000;">
				<?= 
				$arrInfo[$i]["date"] .
				$arrInfo[$i]["title"] .
				$arrInfo[$i]["photo"]
				 ?>
				<img src= <?= $arrInfo[$i]["photo"] ?> alt= <?= $arrInfo[$i]["title"] ?>
			</td>
		</tr>
	<?php } ?>
</table>

