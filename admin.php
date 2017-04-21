<?php
require "auth.php";
?>

<html>
<head>
<title> Панель управления </title>

<link rel="stylesheet" href="style/admin.css" />
</head>
<body>

<center> <h1> Top Blog </h1> 
<hr />
<p><a href="index.php">Главная</a> </p>
<hr />
</center>

<h3> Публикация  </h3>
<a href="add.php"> Добавить пост</a> </br>

<hr />

<h3> Оформление </h3>

<form method="POST" action="">
<input type="text"  name="namesite" placeholder="Название блога">  </br>
<input type="text"  name="descriptionsite" placeholder="Описание">  </br>
<input type="text"  name="bg" placeholder="Цвет фона"> </br>
<input type="submit" value="Применить">

</br>
</form>

<body>

</html>

<?php 

if (isset($_POST['bg']) && isset($_POST['namesite']) && isset($_POST['descriptionsite'])){
$bg = $_POST['bg'];
$namesite = $_POST['namesite'];
$descriptionsite = $_POST['descriptionsite'];

$db_host = "localhost"; 
$db_user = "root"; 
$db_password = ""; 
$db_table = "design"; 
$db = mysql_connect($db_host,$db_user,$db_password) OR DIE("Ошибка");
mysql_select_db("blog",$db);
mysql_query("SET NAMES 'cp1251'",$db);


     
$result = mysql_query (" UPDATE `design` SET `bg`='$bg', `namesite`='$namesite', `descriptionsite`='$descriptionsite' WHERE `id`='1' ");
if ($result = 'true'){
        echo '<p style="color:#89F778"> Дизайн обновлен </p>';
    }else{
        echo '<p style="color:red"> Ошибка </p>';
    }
}
?>

</br>
<a href="admin.php?do=logout">Выход</a>