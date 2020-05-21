<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Данные о новом сотруднике</title>
<style>
input, button{
	color:rgb(55,55,55);
	font-family:Roboto,RobotoDraft,Helvetica,Arial,sans-serif;
	box-sizing: border-box;
	padding: 10px;
	margin-bottom: 20px;
	width: 35%;
	height: 35px;
	border-bottom: 2px solid rgb(231,231,231);
	border-radius: 4px;
	font-weight: bold;
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
</head>
<body>
<?php
$link = mysqli_connect('localhost','user39','user39', 'employees') 
    or die("Ошибка " . mysqli_error($link)); 
?>
<p>Внесите данные о новом сотруднике</p>
<form method="post" action="<?php echo $_SERVER['PHP_SELF']?>">
<input name="name" placeholder="Имя" required></p>
<input name="age" placeholder="Возраст" required></p>
<input name="salary" placeholder="Оклад" required></p>
<input name="submit" type="submit" value="Добавить"><br/>
</form>
<form><input name="index" type="submit" value="На главную" formaction="index.php"></form>
<?php
			if (isset($_POST['submit'])){
				if (isset($_POST['name']))
					$name = addslashes($_POST['name']);
				if (isset($_POST['age']))
					$age = addslashes($_POST['age']);
				if (isset($_POST['salary']))
					$salary = addslashes($_POST['salary']);
			
				$query = "INSERT INTO employees (name, age, salary) VALUES ('$name', '$age', '$salary');";
				
				if (mysqli_query($link, $query)) {
					echo "<h3>Данные внесены успешно.</h3>";
				} else {
					echo "<h3>Возникла ошибка: ".mysqli_error($link)."</h3>";
				}
				
				mysqli_close ($link);
			}
?>
</body>
</html>
