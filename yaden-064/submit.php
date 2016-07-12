<form action="result.php" method="post">

	あなたの名前は？<br/>
	<input type="text" name="name" /><br/><br/>

	パスワードを教えてくれ？<br/>
	<input type="password" name="password" /><br/><br/>

	あなたどっち？<br/>
	<input type="radio" name="sex" value="イケメン" />イケメン<br/>
	<input type="radio" name="sex" value="美女" />美女<br/><br/>

	好きな食べ物は？<br/>
	<input type="checkbox" name="food[]" value="納豆" />納豆<br/>
	<input type="checkbox" name="food[]" value="煮干し" />煮干し<br/>
	<input type="checkbox" name="food[]" value="ジャンカレー" />ジャンカレー<br/>
	<input type="checkbox" name="food[]" value="鰹節" />鰹節<br/>
	<input type="checkbox" name="food[]" value="パンの耳" />パンの耳<br/><br/>

	<input type="submit" value="Submit" /><br />
</form>