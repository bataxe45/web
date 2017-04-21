<?php
session_start();

if($_SESSION['admin']){
	header("Location: admin.php");
	exit;
}

$admin = 'admin';
$pass = '123456';

if($_POST['submit']){
	if($admin == $_POST['user'] AND $pass == ($_POST['pass'])){
		$_SESSION['admin'] = $admin;
		header("Location: admin.php");
		exit;
	}else echo '<p style="color:red;">Ошибка!</p>';
}
?>
<link rel="stylesheet" href="style/enter.css" />


<br />
<form method="post">
<div class="enter">
<center>
	<h1> Top Blog </h1>
	<input type="text" name="user" placeholder="Логин" /><br />
	<br />
	<input type="password" name="pass" placeholder="Пароль"/><br />
	<br />
	<input type="submit" name="submit" class="SingIn" value="Войти" />
</center>
</div>
</form>