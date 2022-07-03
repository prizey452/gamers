<?php

    include '../config.php';

    $id = $_POST['id'];
    $username = $_POST['username'];
	$phone_number = $_POST['phone_number'];
	$email = $_POST['email'];
	$age = $_POST['age'];
	$location = $_POST['location'];
	$gender = $_POST['gender'];
	$date_of_birth = $_POST['date_of_birth'];
	$gaming_platform = $_POST['gaming_platform'];
	$game_category = $_POST['game_category'];
	$favourite_game = $_POST['favourite_game'];

    $sql = "update users set username='$username', phone_number='$phone_number', email='$email', age='$age',
                                location='$location', gender='$gender', date_of_birth='$date_of_birth',
                                gaming_platform='$gaming_platform', game_category='$game_category',
                                favourite_game='$favourite_game' where id='$id'";
    $result = $connect->query($sql);
    $connect->close();
    header("location: index.php");
?>