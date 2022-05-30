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
			<?php foreach($articles as $article): ?>
				<article class="articles"><?php echo $article['id'] . ". " . $article['article'] ?></article>
			<?php endforeach; ?>
		</section>
		<section class="pagination">
			<ul class="pagination__ul">
				<?php if($page == 1): ?>
					<li class="pagination__item disabled">&laquo;</li>
					<?php else: ?>
						<li class="pagination__item"><a href="?page=<?php echo $page - 1 ?>">&laquo;</a></li>
				<?php endif; ?>

				<?php
					for($i = 1; $i <= $totalPages; $i++) {
						if($i == $page) {
							echo "<li class='pagination__item active'><a href='?page=$i'>$i</a></li>";
						} else {
							echo "<li class='pagination__item'><a href='?page=$i'>$i</a></li>";
						}
					}
				?>
				<?php if($page == $totalPages): ?>
					<li class="pagination__item disabled">&raquo;</li>
					<?php else: ?>
						<li class="pagination__item"><a href="?page=<?php echo $page + 1 ?>">&raquo;</a></li>
				<?php endif; ?>
			</ul>
		</section>
	</main>
</body>
</html>
