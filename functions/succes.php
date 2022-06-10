<?php
    session_start();

    require './connect.php';

    $id = $_GET['id'];

    $sql = $connect->query("INSERT INTO `excursion_succes` SELECT * FROM `excursion` WHERE `id` = '$id'");
    $sql2 = $connect->query("DELETE FROM `excursion` WHERE `excursion`.`id` = '$id'");
    header("Location: ../pages/admin/admin.php");