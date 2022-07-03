<?php
	
	include '../config.php';

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

	$sql = "insert into users(username, phone_number, email, age, location, gender, date_of_birth, gaming_platform,
						game_category, favourite_game) values ($username, $phone_number, $email,
						$age, $location, $gender, $date_of_birth, $gaming_platform, $game_category,
						$favourite_game)";
	
	$connect->query($sql);
	$connect->close();
	header("location: index.php");
?>
