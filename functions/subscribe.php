<?php

session_start();

require './connect.php';

$email = $_POST['email'];
$full_name = $_SESSION['user']['full_name'];

$sql = $connect->query("INSERT INTO `subscribe` (`email`, `full_name`) VALUES ('$email', '$full_name')");
header("Location: ../pages/main.php");