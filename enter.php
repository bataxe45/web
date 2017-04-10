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
	}else echo '<p>Р›РѕРіРёРЅ РёР»Рё РїР°СЂРѕР»СЊ РЅРµ РІРµСЂРµРЅС‹!</p>';
}
?>
<p><a href="index.php">Home</a> | <a href="contact.php">Add Post</a> | <a href="admin.php">Panel Admin</a></p>
<hr />

<br />
<form method="post">
	Username: <input type="text" name="user" /><br />
	Password: <input type="password" name="pass" /><br />
	<input type="submit" name="submit" value="Р’РѕР№С‚Рё" />
</form>