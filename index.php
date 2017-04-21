<html lang="ru">
    <head>
        <meta charset="utf-8" />
        <title>Мой блог</title>
		<link rel="stylesheet" href="style/style.css" />
		
		
		<?php
		require_once 'bd.php';
		$strSQL = mysql_query("SELECT * FROM design ORDER BY 'bg','namesite','descriptionsite' DESC LIMIT 1");
		while($row = mysql_fetch_assoc($strSQL)){

		$bg = "{$row['bg']}";
		$namesite = "{$row['namesite']}";
		$descriptionsite = "{$row['descriptionsite']}";
		?>
		
		<style>
		body{
			background: <? echo $bg ?>;
		}
		</style>

    </head>
	<body>
<center> 
		
		
		
		<h1> <? echo $namesite ?> </h1> 
		<p> <? echo $descriptionsite ?> </p>

		<?
		}
		?>
</center>
<hr />
<center>
<p><a href="index.php">Главная</a> </p>
</center>
<hr />


<?php
	mysql_connect("localhost", "root", "") or die (mysql_error ());
	mysql_select_db("blog") or die(mysql_error());
	
	$strSQL = mysql_query("SELECT * FROM post ORDER BY 'name' DESC");
	while($row = mysql_fetch_assoc($strSQL)){

	$a = '<img src='.$row[img].'> ';
	$b = "<h1>{$row['name']}</h1>";
	$c = "{$row['text']}";
?>
	<table>
	<tr>
	<td rowspan="2">
	<? echo $a; ?>
	</td>
	<td style="height: 60px;">
	<?  echo $b; ?>
	</td>
	</tr>
	<tr>
	<td>
	<? echo $c;
			 ?>
	</td>
	</tr>
	</table>
<?
	}
?>



</br>
</body>
</html>