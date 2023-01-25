<?php
    require_once('connect.php');
    $id = $_POST['id'];
    $mysqli -> query("DELETE FROM goods WHERE id = $id");
    header("Location: service.php?result=delleteee");
?>