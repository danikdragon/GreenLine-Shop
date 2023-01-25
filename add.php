<?php
//конектим бд
require_once('connect.php');

//получаем данные с формы
$login = $_POST['login'];
$password = md5($_POST['password']);

//получаем результат запросов логина
$result = $mysqli->query("SELECT * FROM accounts WHERE login = '$login'");

//делаем результ в массив
$row = $result -> fetch_assoc();

//проверка на повторения логина
if($row['login']){
  header("Location: index.php?result=tuae");
}
else{
  $mysqli->query("INSERT INTO accounts (login, password) VALUES ('$login', '$password')");
  header("Location: index.php?result=wsr");
}
?>