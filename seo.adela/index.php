<?php 
include_once "lib/php/functions.php";
include_once "parts/templates.php"; 

?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Petcrew Website</title>

	<?php include "parts/meta.php"; ?>

</head>
<body class="flush">
	
	<?php include "parts/navbar.php"; ?>

	<div class="mainslogan">
		<img src="img/pinkdog.jpeg">
	</div>

	<div class="intro_text">
			<h1>MAKING PET'S LIFE BETTER</h1>
			<p class="firstp">We make healthy and organic food for our pet.</p>
			<p class="firstp"> Our product is safe for all.</p>
			<div class="welcome-text">
			<a href="about.php" class="aboutmore"> More </a>
		    </div>
	</div>

	<div class="styleguidecontainer">
		<h2> Latest Products</h2>
			<?php

			$result = makeQuery(makeConn(),"SELECT * FROM `products` WHERE `category` = 'treat' ORDER BY `date_create` DESC LIMIT 3");

			recommendedProducts($result);

			?>

	</div>

	<div class="styleguidecontainer">
		<h2> Latest Accessory</h2>
			<?php

			recommendedCategory("accessory");

			?>

	</div>

	<div class="empty"></div>

	
	<div class="last">
		<div class="view-window2" style="background-image:url('img/redgreenyellowtopad.png')"></div>
	</div>

	<div class="container2 display-flex">
		<article id="article4" class="article">
			<div class="display-flex flex-align-center">
				<div class="flex-stretch">
					<h2>Newsletter</h2>
				</div>
				<div class="flex-none"><small>more→</small></div>
			</div>
			<div class="article-body">
				<p>Welcome! Petcrew website is now open for all customers. </p>
				<p>During the first month of the grand opening, we offer 15% discount coupon to our customers. Please join us and get the deal!</p>
				
			</div>
		</article>
	</div>

	
		
</body>
</html>

<footer>
	Copyright © 2022 Adela Seo - AAU WNM 608 Assignment
</footer>