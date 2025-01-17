<!DOCTYPE html>
<html>
<head>
	<meta charset="utf8">
	<title>Концепция MVC</title>
	<link rel="stylesheet" href="#">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
	<div class="container">
		<h1>Концепция MVC</h1>
		<a href="admin">Вход в админ-панель</a>
		<div>
		<?php foreach ($articles as $a): ?>
			<div class="article">
				<h3><a href="article.php?id=<?= $a['id']?>"><?= $a['title']?></a></h3>
				<em>Опубликовано: <?=$a['data']?></em>
				<p><?=$a['content']?></p>
			</div>
		<?php endforeach ?>
		</div>
		<footer>
			<p>Концепция MVC<br>Copyright &copy; 2018</p>
		</footer>
	</div>
</body>
</html>