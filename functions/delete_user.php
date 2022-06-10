<?php
session_start();

require './connect.php';

$id = $_GET['id'];

$sql = $connect->query("DELETE FROM `users` WHERE `id` = '$id'");

header("Location: ../pages/admin/admin.php");