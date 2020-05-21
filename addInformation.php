<?php
$servername = "localhost";
$database = "employees";
$username = "user39";
$password = "user39";
$conn = mysqli_connect('localhost','user39','user39', 'employees');
if (!$conn) {
      die("Ошибка " . mysqli_connect_error());
}
 
echo "Подключение успешно <br/>"; 
 
$sql = "INSERT INTO employees (name, age, salary) VALUES ('John', 23, 400), 
('Karl', 25, 500), ('Bill', 23, 500), ('Jane', 30, 1000),
('Megan', 27, 500), ('Nick', 28, 1000);";
if (mysqli_query($conn, $sql)) {
      echo "Новая запись успешно добавлена";
} else {
      echo "Ошибка " . $sql . "<br>" . mysqli_error($conn);
}
mysqli_close($conn);
?>
