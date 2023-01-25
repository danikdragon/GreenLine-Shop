<?php
//конектим бд
require_once('connect.php');
//получаем данные
$login = $_POST['login'];
$password = md5($_POST['password']);

//получаем результат запросов логина
$result = $mysqli->query("SELECT * FROM accounts WHERE login = '$login'");
$row = $result -> fetch_assoc();

if($row['login']){
    if($password == $row['password']){
        $_SESSION['login'] = $login;
        $_SESSION['role'] = $row['role'];
        header("Location: service.php?result=logged");
    }
    else{
        header("Location: service.php?result=wrongpassword");
    }
}
else{
    header("Location: service.php?result=userdoesntexist");
}
?>