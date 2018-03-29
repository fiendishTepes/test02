<?php 
	ob_start(); session_start();
	include 'loginOOP.php';
	$obj = new login();
	if(isset($_POST['log']))
	{
		$obj->loginUser($_POST['log']);
		$obj->loginQuery();
	}
?>
<?php if(@$_SESSION['login'] != 'on'): ?>
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
<?php endif;?>
<?php if(@$_SESSION['login'] == 'on'): ?>
<br><a href="?r=logout">Logout</a>
<?php 
	if($_GET['r'] == 'logout')
	{
		session_destroy();
		header("Location: login.php");
	}
?>
<?php endif; ?>