<?php

    include '../config.php';
    $id = $_GET['id'];
    $sql = "delete from users where id = $id";
    $connect->query($mysql);
    $connect->close();
    header("location: index.php");

?>