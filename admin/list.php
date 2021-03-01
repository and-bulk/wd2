<!DOCTYPE html>
<html lang="ru">

<head>
	<meta charset="UTF-8">
	<meta name="format-detection" content="telephone=no">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="shortcut icon" href="/images/favicon.ico" type="image/x-icon">
	<link rel="stylesheet" href="/css/style.css">
	<title>Admin</title>
</head>

<body>
	<div class="wrapper">

		<?php
			require_once '../includes/header.php';
			require_once '../includes/connect.php';
		?>

		<div class="panel">
			<div class='panel__container container'>
				<div class="panel__wrapper">
				<form action="add.php" class="panel__form" method="post">
					<input type="text" class="panel__input" placeholder="Title" name="title">
					<input type="text" class="panel__input" placeholder="Image" name="image">
					<input type="number" class="panel__input" placeholder="Price" name="price">
					<button class="panel__btn">
						<img src="/images/icons/add.png" alt="">
					</button>
				</form>
					<div class="panel__row">
						<div class="panel__item">Title</div>
						<div class="panel__item">Image</div>
						<div class="panel__item">Price</div>
					</div>
					<?php
						if ($connect) :
							$response = mysqli_query($connect, 'SELECT * FROM products');
							while ($item = mysqli_fetch_assoc($response)) : ?>
								<div class="panel__row">
									<div class="panel__item"><?php echo $item['title']; ?></div>
									<div class="panel__item"><?php echo $item['image']; ?></div>
									<div class="panel__item"><?php echo $item['price']; ?> $</div>
									<a href="edit.php?id=<?php echo $item['id']; ?>" class="panel__item panel__item-edit"></a>
									<a href="delete.php?id=<?php echo $item['id']; ?>" class="panel__item panel__item-delete"></a>
								</div>
							<?php
								endwhile;
								endif;
								mysqli_close($connect);
						 	?>
				</div>
			</div>
		</div>

		<?php require_once '../includes/footer.php'; ?>

	</div>
	<script src="/js/script.js"></script>
</body>

</html>