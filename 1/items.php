<?php

$items = require_once 'data/data.php';

?>

<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="utf-8">
	<title>Товары</title>
</head>
<body>
	<section>
		<h2>Все товары</h2>

		<?php foreach ($items as $item):  ?>
			<div>
				<h3>Название: <?= $item['title'] ?> </h3>
				<p>Цена: <?= $item['price'] ?> </p>
				<img height="300" src="img/<?= $item['img'] ?>">
				<h3>Дополнительно: </h3>
					<div>
						<p>Цвет: <?= $item['description']['color'] ?> </p>
						<p>Материал: <?= $item['description']['material'] ?> </p>
					</div>
			</div>
		<?php endforeach; ?>
	</section>

</body>
</html>