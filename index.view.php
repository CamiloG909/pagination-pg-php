<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="theme-color" content="#1CCC5B" />
	<link rel="stylesheet" href="./styles/styles.css">
	<link rel="shortcut icon" href="./assets/favicon.ico" type="image/x-icon">
	<title>Pagination</title>
</head>
<body>
	<header class="header">
		<img src="./assets/logo.png" alt="Logo header">
		<h1 class="header__title">Pagination</h1>
	</header>
	<main>
		<section class="articles-container">
			<article class="articles">1- Lorem ipsum, dolor sit amet consectetur adipisicing elit.</article>
			<article class="articles">2- Lorem ipsum, dolor sit amet consectetur adipisicing elit.</article>
			<article class="articles">3- Lorem ipsum, dolor sit amet consectetur adipisicing elit.</article>
			<article class="articles">4- Lorem ipsum, dolor sit amet consectetur adipisicing elit.</article>
		</section>
		<section class="pagination">
			<ul class="pagination__ul">
				<li class="pagination__item disabled"><a href="#">&laquo;</a></li>
				<li class="pagination__item active"><a href="#">1</a></li>
				<li class="pagination__item"><a href="#">2</a></li>
				<li class="pagination__item"><a href="#">3</a></li>
				<li class="pagination__item"><a href="#">4</a></li>
				<li class="pagination__item"><a href="#">&raquo;</a></li>
			</ul>
		</section>
	</main>
</body>
</html>
