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
	}else echo '<p style="color:red;">������!</p>';
}
?>
<p><a href="index.php">�������</a> | <a href="add.php">�������� ����</a> | <a href="admin.php">������ ����������</a></p>
<hr />

<br />
<form method="post">
	�����: <input type="text" name="user" /><br />
	������: <input type="password" name="pass" /><br />
	<input type="submit" name="submit" value="�����" />
</form>