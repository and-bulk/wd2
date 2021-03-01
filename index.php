<!DOCTYPE html>
<html lang="ru">

<head>
	<meta charset="UTF-8">
	<meta name="format-detection" content="telephone=no">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
	<link rel="stylesheet" href="css/style.css">
	<title>Home Page</title>
</head>

<body>
	<div class="wrapper">

		<?php require_once 'includes/header.php'; ?>

		<div class="products">
			<div class='products__container container'>
				<div class="products__items">
					<?php require_once 'includes/connect.php';
						if ($connect) :
							$response = mysqli_query($connect, 'SELECT * FROM products');
							while ($item = mysqli_fetch_assoc($response)) : ?>
								<div class="products__item item">
									<h3 class="item__title"><?php echo $item['title']; ?></h3>
									<a href="product.php?id=<?php echo $item['id']; ?>" class="item__link">
										<img src="images/products/<?php echo $item['image']; ?>" alt="" class="item__img">
									</a>
									<div class="item__price"><?php echo $item['price']; ?> $</div>
									<a href="product.php?id=<?php echo $item['id']; ?>" class="item__btn">դիտել</a>
								</div>
							<?php 
								endwhile;
								endif;
								mysqli_close($connect);
							?>
				</div>
			</div>
		</div>

		<?php require_once 'includes/footer.php'; ?>

	</div>
	<script src="js/script.js"></script>
</body>

</html>