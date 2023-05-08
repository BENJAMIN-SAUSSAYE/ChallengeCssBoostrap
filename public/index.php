<?php

$articles = [
	['id' => 1, 'title' => 'Visit Components classless', 'img' => 'imgArticle1.png', 'intro' => 'Some quick example text to build on the card title and make up the bulk of the card\'s content', 'link' => 'https://picocss.com/docs/classless.html'],
	['id' => 2, 'title' => 'Facing Cascade Style Sheet', 'img' => 'imgArticle2.png', 'intro' => 'Some quick example text', 'link' => 'https://picocss.com/docs/classless.html'],
	['id' => 3, 'title' => 'Contemplate Form Inputs river', 'img' => 'imgArticle3.png', 'intro' => 'Make up the bulk of the card\'s content', 'link' => 'https://picocss.com/docs/classless.html'],
	['id' => 4, 'title' => 'Enjoy no Javascript', 'img' => 'imgArticle4.png', 'intro' => 'Build on the card title and make up the bulk of the card\'s content', 'link' => 'https://picocss.com/docs/classless.html'],
];


?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
	<title>Challenge Bootstrap</title>
</head>

<body>
	<div class="container">
		<nav class="navbar navbar-expand-lg bg-primary" data-bs-theme="dark">
			<div class="container-fluid">
				<a class="navbar-brand" href="#">Discovering Boostrap 5.1</a>
				<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>
				<div class="collapse navbar-collapse flex-grow-0" id="navbarSupportedContent">
					<ul class="navbar-nav me-auto mb-2 mb-lg-0">
						<li class="nav-item">
							<a class="nav-link active" aria-current="page" href="#">Home</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="#">About</a>
						</li>
						<li class="nav-item dropdown" data-bs-theme="light">
							<a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Categories</a>
							<ul class="dropdown-menu">
								<li>
									<a class="dropdown-item" href="#">Photos</a>
								</li>
								<li>
									<a class="dropdown-item" href="#">Articles</a>
								</li>
								<li>
									<a class="dropdown-item" href="#">Projects</a>
								</li>
							</ul>
						</li>
					</ul>
				</div>
			</div>
		</nav>

		<main>

			<header class="d-flex p-2 justify-content-center text-center">
				<h1>Journey Into Bootstrap Classes</h1>
			</header>

			<section>
				<div class="row justify-content-center m-2 p-0">
					<?php foreach ($articles as $article) : ?>
						<article id="article <?= $article['id']; ?>" class="card shadow border-0 col-xs-12 col-md-4 col-lg-2 p-0 m-2">
							<img class="card-img-top" alt="article n°<?= $article['id']; ?>" src="/assets/images/articles/<?= $article['img']; ?>">
							<div class="card-body">
								<h5 class="card-title"><?= $article['title']; ?></h5>
								<p class="card-text d-md-none d-lg-block"><?= $article['intro']; ?></p>
							</div>
							<div class="card-footer bg-transparent border-0 d-grid m-2">
								<a href="<?= $article['link']; ?>" role="button" class="btn btn-block btn-primary">Read More...</a>
							</div>
						</article>
					<?php endforeach; ?>
				</div>
			</section>

			<footer class="d-flex flex-column p-2 mt-2 align-items-center">
				<h2>The css frameworks are very useful</h2>
				<small>Learning them comes with practice</small>
			</footer>
		</main>

		<footer class="container bg-primary d-flex p-3 justify-content-center fixed-bottom" data-bs-theme="dark">
			<span class="text-center text-bg-primary align-self-center">@2023 wilders | images @picsum</span>
		</footer>
	</div>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>

</html>