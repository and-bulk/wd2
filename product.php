<!DOCTYPE html>
<html lang="ru">

<head>
	<meta charset="UTF-8">
	<meta name="format-detection" content="telephone=no">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
	<link rel="stylesheet" href="css/style.css">
	<title>Product</title>
</head>

<body>
	<div class="wrapper">

		<?php
			require_once 'includes/header.php';
			require_once 'includes/connect.php';

			if ($connect) {
				$response = mysqli_query($connect, 'SELECT * FROM products WHERE id = ' . $_GET["id"]);
				$item = mysqli_fetch_assoc($response);
			}
		?>

		<section class="product">
			<div class='product__container container'>
				<h2 class="product__title"><?php echo $item['title']; ?></h2>
				<div class="product__inner">
					<div class="product__left">
						<img src="images/products/<?php echo $item['image']; ?>" alt="" class="product__img">
						<div class="product__price"><?php echo $item['price']; ?> $</div>
					</div>
					<div class="product__right">
						<h3 class="product__right-title">Description</h3>
						<p class="product__right-text">
							Lorem, ipsum dolor sit amet consectetur adipisicing elit. Blanditiis possimus tenetur provident inventore.
							Facilis consequuntur dolorum eaque accusantium est quas ipsum quasi eius, fugiat id et aliquid quia, tempora
							adipisci impedit illum! Perspiciatis voluptatum et dignissimos magni quo quam exercitationem libero unde non.
							Rerum incidunt maxime doloribus aliquid, hic modi qui vero cumque praesentium natus ipsam, deserunt, error
							ullam excepturi.
						</p>
						<div class="product__right-info">Stats</div>
						<table class="product__right-table">
							<tr class="product__right-row">
								<td class="product__right-item">Country of origin</td>
								<td class="product__right-item">Armenia</td>
							</tr>
							<tr class="product__right-row">
								<td class="product__right-item">Condition</td>
								<td class="product__right-item">Used</td>
							</tr>
							<tr class="product__right-row">
								<td class="product__right-item">Produced by</td>
								<td class="product__right-item">2016</td>
							</tr>
						</table>
					</div>
				</div>
				<div class="other-products">
					<h2 class="other-products__title">Other products</h2>
					<div class="other-products__inner">
						<?php
							if ($connect) :
								$response = mysqli_query($connect, 'SELECT * FROM products LIMIT 4');
								while ($item = mysqli_fetch_assoc($response)) : ?>
									<div class="other-products__item item">
										<h3 class="item__title"><?php echo $item['title']; ?></h3>
										<a href="product.php?id=<?php echo $item['id']; ?>" class="item__link">
											<img src="images/products/<?php echo $item['image']; ?>" alt="" class="item__img">
										</a>
										<div class="item__price"><?php echo $item['price']; ?> $</div>
										<a href="product.php?id=<?php echo $item['id']; ?>" class="item__btn">more</a>
									</div>
								<?php
									endwhile;
									endif;
									mysqli_close($connect);
								?>
					</div>
				</div>
			</div>
		</section>
		
		<?php require_once 'includes/footer.php'; ?>

	</div>
	<script src="js/script.js"></script>
</body>

</html>