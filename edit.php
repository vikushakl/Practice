<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Обновление данных о сотруднике</title>
<style>
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
p{
	color:rgb(51,122,183);
	font-family:Roboto,RobotoDraft,Helvetica,Arial,sans-serif;
	border-radius: 4px;
	text-align:center;
	font-weight: bold;
}
h3{
	color:rgb(51,122,183);
	font-family:Roboto,RobotoDraft,Helvetica,Arial,sans-serif;
	text-align:center;
	font-weight: bold;
}
</style>
<?php 
if(isset($_GET['edi'])){
	$idx = $_GET['edi']; 
}?>
</head>
<body>
<p>Обновите данные о сотруднике</p>
<form>
    <input name="name" placeholder="Имя"><br><br>
    <input name="age" placeholder="Возраст"><br><br>
    <input name="salary" placeholder="Оклад"><br><br>
    <input name="submit" type="submit" value="Обновить"><br/>
	<input name="index" type="submit" value="На главную" formaction="index.php">
	<?php 
	if(isset($idx)){
	echo "<input name='id' type='hidden' value='$idx'>";
	}
	?>
</form>
<?php
$link = mysqli_connect('localhost','user39','user39', 'employees') 
    or die("Ошибка " . mysqli_error($link));
if(isset(($_REQUEST['name']), ($_REQUEST['age']), ($_REQUEST['salary']))) {
	$idd = ($_REQUEST['id']);
	$name = ($_REQUEST['name']);
    $age = ($_REQUEST['age']);
    $salary = ($_REQUEST['salary']);
	$query = "UPDATE employees SET name= '$name', age=$age, salary=$salary WHERE id=$idd";
    $result = mysqli_query($link, $query) or die(mysqli_error($link));
	if (!$result) {
            die("Database query failed");
        }
		if (mysqli_query($link, $query)) {
					echo "<h3>Данные внесены успешно.</h3>";
				} else {
					echo "<h3>Возникла ошибка: ".mysqli_error($link)."</h3>";
				}
	}
?>
</body>
</html>
