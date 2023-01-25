<?php 
require_once('connect.php');
$login = $_SESSION['login'];
$role = $_SESSION['role'];
$result = $mysqli -> query("SELECT * FROM accounts")
?>
<?php
$id = $_SESSION['id'];
$nameFile = $_SESSION['nameFile'];
$heade = $_SESSION['heade'];
$description = $_SESSION['description'];
$prices = $_SESSION['prices'];

$result = $mysqli -> query("SELECT * FROM goods")
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $sql = "SELECT * FROM goods";
    echo'<img src="/' . $nameFile['nameFile'] . '" class="productIMG">';
    ?> 
    <div>test
    </div>
</body>
</html>