<?php 
	include 'loginOOP.php';
	$obj = new login();
	if(isset($_POST['log']))
	{
		$obj->loginUser($_POST['log']);
		$obj->loginQuery();
	}
?>
<form name="fm" id="fm" method="post" action="">
	<div>
		<label>USERNAME: </label>
		<input type="text" name="log[user]" id="user">
	</div>
	<div>
		<label>PASSWORD: </label>
		<input type="text" name="log[pass]" id="pass">
	</div>
	<div>
		<button type="submit">LOGIN</button>
	</div>
</form>