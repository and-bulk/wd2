<!DOCTYPE html>
<html lang="ru">

<head>
	<meta charset="UTF-8">
	<meta name="format-detection" content="telephone=no">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="shortcut icon" href="/images/favicon.ico" type="image/x-icon">
	<link rel="stylesheet" href="/css/style.css">
	<title>Edit</title>
</head>

<body>
	<div class="wrapper">

		<?php 
			require_once '../includes/header.php';
			require_once '../includes/connect.php';

			if ($connect) {
				$response = mysqli_query($connect, 'SELECT * FROM products WHERE id = ' . $_GET['id']);
				$item = mysqli_fetch_assoc($response);
			}
		?>

		<form action="update.php?id=<?php echo $item['id']; ?>" class="edit" method="post">
			<div class='edit__container container'>
				<input type="text" class="edit__input" name="title" placeholder="Title" value="<?php echo $item['title'] ?>">
				<input type="text" class="edit__input" name="image" placeholder="Image" value="<?php echo $item['image'] ?>">
				<input type="number" class="edit__input" name="price" placeholder="Price" value="<?php echo $item['price'] ?>">
				<button class="edit__btn">
					<img src="/images/icons/add.png" alt="">
				</button>
			</div>
		</form>

		<?php require_once '../includes/footer.php'; ?>

	</div>
	<script src="/js/script.js"></script>
</body>

</html>