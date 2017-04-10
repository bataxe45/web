<html lang="ru">
    <head>
        <meta charset="utf-8" />
        <title>Мой блог</title>
        <link rel="stylesheet" href="style.css" />
    </head>
	<body>
<center> <h1> Конюхов Михаил </h1> </center>
<hr />
<p><a href="index.php">Главная</a> | <a href="add.php">Добавить пост</a> | <a href="admin.php">Панель управления</a></p>
<hr />


<?php

	mysql_connect("localhost", "root", "") or die (mysql_error ());
	mysql_select_db("blog") or die(mysql_error());
	
	$strSQL = mysql_query("SELECT * FROM post ORDER BY 'name' DESC");
	
	while($row = mysql_fetch_assoc($strSQL)){
	echo "	<h2>{$row['name']}</h2>
			{$row['text']}
			</br>
 			{$row['date']}";
}
?>

</body>
</html>