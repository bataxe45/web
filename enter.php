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
<p><a href="index.php">Главная</a> | <a href="add.php">Добавить пост</a> | <a href="admin.php">Панель управления</a></p>
<hr />

<br />
<form method="post">
	Логин: <input type="text" name="user" /><br />
	Пароль: <input type="password" name="pass" /><br />
	<input type="submit" name="submit" value="Р’РѕР№С‚Рё" />
</form>