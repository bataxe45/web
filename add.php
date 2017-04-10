<?php
require "auth.php";
?>
<center> <h1> Конюхов Михаил </h1> </center>
<hr />
<p><a href="index.php">Главная</a> | <a href="add.php">Добавить пост</a> | <a href="admin.php">Панель управления</a></p>
<hr />
<h1> Добавить пост </h1>
<form method="POST" action="">

Название <input name="name" type="text"> </br>
</br>

<textarea name="text" cols="40" rows="3"> </textarea>
</br>
<input type="submit" value="Добавть">
</form>

<?php 

if (isset($_POST['name']) && isset($_POST['text'])){
$name = $_POST['name'];

$text = $_POST['text'];
$db_host = "localhost"; 
$db_user = "root"; 
$db_password = ""; 
$db_table = "post"; 
$db = mysql_connect($db_host,$db_user,$db_password) OR DIE("Ошибка");
mysql_select_db("blog",$db);
mysql_query("SET NAMES 'cp1251'",$db);


     
$result = mysql_query ("INSERT INTO ".$db_table." (name,text) VALUES ('$name','$text')");
if ($result = 'true'){
        echo "Пост опубликован";
    }else{
        echo "Ошибка";
    }
}
?>
