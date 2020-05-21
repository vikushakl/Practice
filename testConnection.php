<?php
require_once 'connection.php'; 
$link = mysqli_connect('localhost','user39','user39', 'employees') 
    or die("Ошибка " . mysqli_error($link));
echo("Подключение прошло успешно");
mysqli_close($link);
?>