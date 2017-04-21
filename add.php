<?php
require "auth.php";
?>

<link rel="stylesheet" href="style/style.css" />
<center> <h1> Конюхов Михаил </h1> 
<hr />
<p><a href="index.php">Главная</a> </p>
<hr />
</center>
<h1> Добавить пост </h1>
<form method="POST" action="">

<p> Название </p> 
<input name="name" type="text"> </br>
</br>

<textarea name="text" cols="40" rows="3"> </textarea>
</br>
<p> Ссылка на изображение </p>
<input name="img" type="text"> </br>
</br>
<input type="submit" value="Создать пост">


</form>

<?php 

if (isset($_POST['name']) && isset($_POST['text']) && isset($_POST['img'])){
$name = $_POST['name'];
$text = $_POST['text'];
$img = $_POST['img'];

$db_host = "localhost"; 
$db_user = "root"; 
$db_password = ""; 
$db_table = "post"; 
$db = mysql_connect($db_host,$db_user,$db_password) OR DIE("Ошибка");
mysql_select_db("blog",$db);
mysql_query("SET NAMES 'cp1251'",$db);


     
$result = mysql_query ("INSERT INTO ".$db_table." (name,text,img) VALUES ('$name','$text','$img')");
if ($result = 'true'){
        echo "Пост опубликован";
    }else{
        echo "Ошибка";
    }
}
?>
