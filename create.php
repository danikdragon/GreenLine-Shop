<?php
require_once('connect.php');

$nameFile = $_POST['nameFile'];
$heade = $_POST['heade'];
$description = $_POST['description'];
$prices = $_POST['prices'];

$mysqli->query("INSERT INTO goods (nameFile, heade, description, prices) VALUES ('$nameFile', '$heade', '$description', '$prices')");
header("Location: service.php?result=addder");
?>