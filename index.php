<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Сотрудники</title>
<style>
tr{
	font-family:Roboto,RobotoDraft,Helvetica,Arial,sans-serif;
	box-sizing: border-box;
    border-bottom: 1px solid rgb(231,231,231);
    color: rgb(142,142,142);
    padding: 5px 0px;
    min-width: 40px;
    vertical-align: top;
	line-height: 30px;
    margin: 0px;
	box-sizing: border-box;
    margin-bottom: 0px;
    font-size: small;
	background-color: transparent;
	align: center;
}
table {
    border-collapse: separate;
    border-spacing: 2px;
}
th{
	box-sizing: border-box;
    font-size: small;
    line-height: 30px;
    margin: 0px;
    color: rgb(55,55,55);
    padding: 1px 30px;
    min-height: 512px;
	background-color: rgb(235,235,235);
	align: center;
    border-bottom: 1px solid rgb(231,231,231);
	font-weight: bold;
}
td{
	text-align: center;
	margin: 0;
    font-family: Roboto,RobotoDraft,Helvetica,Arial,sans-serif;
	box-sizing: border-box;
    border-bottom: 1px solid rgb(231,231,231);
    color: rgb(142,142,142);
    padding: 5px 0px;
    min-width: 40px;
    vertical-align: top;
}
input{
	background-color:transparent;
	box-sizing: border-box;
	border:none;
	text-decoration-line:none;
	margin-bottom:0px;
	color: rgb(51,122,183);
}
a{
	color:rgb(51,122,183);
	text-decoration-line: none;
}
p{
	margin: 0;
}
p::first-letter{
	color: rgb(93,43,255);
}
</style>
</head>
<body>
<?php
require_once 'connection.php'; 

$link = mysqli_connect('localhost','user39','user39', 'employees') 
    or die("Ошибка " . mysqli_error($link)); 
     
$query ="SELECT * FROM employees";
 
$result = mysqli_query($link, $query) or die("Ошибка " . mysqli_error($link)); 
if($result)
{
    $rows = mysqli_num_rows($result);
     
    echo "<table>";
	echo "<tr><th>id</th><th>name</th><th>age</th><th>salary</th><th>удаление</th><th>редактировать</th></tr>";
	echo "<tr>";
	while ($row = mysqli_fetch_assoc($result)) {
		echo "<td>$row[id]</td>";
        echo "<td>$row[name]</td>";
        echo "<td>$row[age]</td>";
        echo "<td>$row[salary]</td>";
        echo "<td><p><a name='delete' href='delete.php?del=$row[id]'>delete</a></p></td>";
        echo "<td><p><a name='edit' href='edit.php?edi=$row[id]'>edit</a></p></td></tr>";
    }
	echo "</table>";
	echo"<br></br>";
	echo "<td><form method='POST' action='insert.php?id=1'><input type='submit' name='insert' value='Добавить данные о новом сотруднике';></form></td>";
    mysqli_free_result($result);
}
 
mysqli_close($link);
?>
</body>
</html>