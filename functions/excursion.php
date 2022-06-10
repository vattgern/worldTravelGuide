<?php

session_start();

require './connect.php';

$radio_day = $_POST['radio-day'];
$radio_time = $_POST['radio-time'];
$full_name = $_POST['fullName'];
$email = $_POST['email'];
$tel = $_POST['tel'];
$default_bilet = $_POST['default_bilet'];
$preferential_bilet = $_POST['preferential_bilet'];
$summ = $_POST['summ'];
$id_user = $_SESSION['user']['id'];

$sql = $connect->query("INSERT INTO `excursion` 
    (`day`, `time`, `full_name`, `email`, `tel`, `default_bilet`, `preferential_bilet`, `summ`, `id_user`) VALUES 
    ('$radio_day', '$radio_time', '$full_name', '$email', '$tel', '$default_bilet', '$preferential_bilet', ' $summ', '$id_user')");
header("Location: ../pages/tours/tour-moscow-1.php");