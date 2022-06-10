<?php

require './connect.php';
$id = $_GET['id'];

$sql = $connect->query("DELETE FROM `subscribe` WHERE `subscribe`.`id` = '$id'");
header("Location: ../pages/admin/admin.php");