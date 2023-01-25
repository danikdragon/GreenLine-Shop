<?php
error_reporting(0);
$mysqli = new mysqli("127.0.0.1","root","root","greenline");

session_start();
// Check connection
if ($mysqli -> connect_errno) {
  $error = "Failed to connect to MySQL: " . $mysqli -> connect_error;
}
?>