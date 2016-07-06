<?php

$arrInfo[0] = array
(
	"date"	=> "2016/05/25<br/>",
	"photo"	=> "001.jpg<br/>",
	"title"	=> "ウチの猫たち<br/>",
);

$arrInfo[1] = array
(
	"date"	=> "<br/>2016/05/14<br/>",
	"photo"	=> "002.jpg<br/>",
	"title"	=> "今日の晩御飯<br/>",
);

$arrInfo[2] = array
(
	"date"	=> "<br/>2016/05/09<br/>",
	"photo"	=> "003.jpg<br/>",
	"title"	=> "たまには贅沢ディナー<br/>",
);

$arrInfo[3] = array
(
	"date"	=> "<br/>2016/05/02<br/>",
	"photo"	=> "004.jpg<br/>",
	"title"	=> "ただいま金沢！<br/>",
);

?>


<h2>私のお知らせ</h2>

<table>
	<?php for($i = 0; $i < count($arrInfo); $i++){ ?>
		<tr><td><?=$arrInfo[$i]["title"]?></td></tr>
	<?php } ?>
</table>
</table>

