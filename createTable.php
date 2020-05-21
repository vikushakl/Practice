<?php
require_once 'connection.php';
 
$link = mysqli_connect('localhost','user39','user39', 'employees') 
    or die("Ошибка " . mysqli_error($link));
 
$query ="CREATE TABLE employees
(
    id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(200) NOT NULL,
    age INT NOT NULL,
	salary INT NOT NULL
)";
$result = mysqli_query($link, $query) or die("Ошибка " . mysqli_error($link)); 
if($result)
{
    echo "Создание таблицы employees прошло успешно";
}
 
mysqli_close($link);
?>