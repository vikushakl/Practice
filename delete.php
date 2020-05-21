<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Удаление данных</title>
<style>
h3{
	color:rgb(51,122,183);
	font-family:Roboto,RobotoDraft,Helvetica,Arial,sans-serif;
	text-align:center;
	font-weight: bold;
}
input {
	color:rgb(55,55,55);
	font-family:Roboto,RobotoDraft,Helvetica,Arial,sans-serif;
	box-sizing: border-box;
	padding: 10px;
	margin-bottom: 20px;
	width: 25%;
	height: 35px;
	border-bottom: 2px solid rgb(231,231,231);
	border-radius: 4px;
	font-weight: bold;
	align:center;
}
</style>
</head>
<body>
<?php
$link = mysqli_connect('localhost','user39','user39', 'employees') 
    or die("Ошибка " . mysqli_error($link));
(int)$_GET["del"];
$query = "DELETE FROM employees WHERE id =".(int)$_GET["del"];
if (mysqli_query($link, $query)) {
					echo "<h3>Данные удалены.</font></h3>";
				} else {
					echo "<h3>Возникла ошибка: ".mysqli_error($link)."</h3>";
				}
				
				mysqli_close ($link);
?>
<form>
<input name="index" type="submit" value="На главную" formaction="index.php">
</form>
</body>
</html>