<?php

require_once '../includes/connect.php';

if ($connect) {
	$response = mysqli_query($connect, 'DELETE FROM products WHERE id = ' . $_GET['id']);
	mysqli_close($connect);
	header('Location: list.php');
}