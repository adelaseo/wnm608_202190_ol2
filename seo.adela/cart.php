<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	
	
	<title>Cart</title>

	<?php include "parts/meta.php"; ?>
</head>
<body>
	
	<?php include "parts/navbar.php"; ?>

<div class="container2">
	<div class="card soft">
		<h2>Shopping Cart</h2>
		<p>This is item # <?= $_GET['id'] ?></p>

		<div class="btn-area">
				<a class="buy" href="shop.php"><button type="submit">KEEP SHOPPING</button></a>
			</div>

		<div class="btn-area">
				<a class="buy" href="payment.php"><button type="submit">BUY</button></a>
			</div>

	</div>
</div>
</body>
</html>