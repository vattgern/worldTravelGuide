<?php

session_start();

require './connect.php';

$id = $_GET['id'];

$sql = $connect->query("DELETE FROM `excursion_succes` WHERE `excursion_succes`.`id` = '$id'");
header("Location: ../pages/profile.php");