<?php

require_once '../includes/connect.php';

$title = $_POST['title'];
$image = $_POST['image'];
$price = $_POST['price'];

if ($connect) {
	$response = mysqli_query($connect, "INSERT INTO products (`title`, `image`, `price`) 
		VALUES ('$title', '$image', $price)");
	
	mysqli_close($connect);
	header('Location: list.php');
}