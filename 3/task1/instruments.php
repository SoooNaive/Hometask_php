<?php 

// Вывод информации о товарах (данные в директории lesson4/task1):
// 1: на одной странице вывести информацию о всех товарах, по каждому товару вывести 
// название, стоимость, изображение и ссылку 'Подробнее'
// 2: Если количество товара равно 0 вместо ссылки 'Подробнее' отображать 'Товар закончился'
// 3: При переходе по ссылке 'Подробнее' отобразить всю информацию о выбранном товаре.

   $instruments = require_once 'data_b.php';

?>

<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="utf-8">
	<title>Товары</title>
	 <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div>
    	<? foreach ($instruments as $instrument): ?>
    		<div>
    			<h2><?= $instrument['title'] ?></h2>
    			<img class="img" src="img/<?= $instrument['image'] ?>" alt="foto">
    			<p>Стоимость: <?= $instrument['price'] ?></p>
    			<? if ($instrument['count'] > 0): ?>
    				<a href="instrument.php?id=<?=$instrument['id']?>">Подробнее</a>
    			<? else: ?>
    				<p>Товар закончился</p>
    			<? endif; ?>
    		<? endforeach; ?>
    		</div>
    </div>
</body>
</html>