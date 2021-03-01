<!DOCTYPE html>
<html lang="ru">

<head>
	<meta charset="UTF-8">
	<meta name="format-detection" content="telephone=no">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="shortcut icon" href="/images/favicon.ico" type="image/x-icon">
	<link rel="stylesheet" href="/css/style.css">
	<title>Log In</title>
</head>

<body>
	<div class="wrapper">

		<?php require_once '../includes/header.php'; ?>

		<form action="list.php" class="form">
			<div class='form__container container'>
				<input id="login" type="text" class="form__input" placeholder="login">
				<input id="password" type="password" class="form__input" placeholder="password">
				<button class="form__btn">Log in</button>
			</div>
		</form>
		
		<?php require_once '../includes/footer.php'; ?>

	</div>
	<script src="/js/script.js"></script>
</body>

</html>