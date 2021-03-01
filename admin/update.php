<?php

require_once '../includes/connect.php';

$title = $_POST['title'];
$image = $_POST['image'];
$price = $_POST['price'];

if ($connect) {
	$response = mysqli_query($connect, "UPDATE products SET title = '$title', image = '$image', price = '$price'  WHERE id = " . $_GET['id']);
	mysqli_close($connect);
	header('Location: list.php');
}