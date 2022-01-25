<?php 

$get = $_GET;
$id = (int) $get['id'];

if (!isset($id)) {
	header("Location: instruments.php");
}

function getInstrument(int $id)
{
	$instruments = require_once 'data_b.php';
	foreach ($instruments as $instrument) {
		if ($id === $instrument['id']) return $instrument;
	}
}
$instrument = getInstrument($id);
if (!isset($instrument)) {
	header("Location: instruments.php");
}

?>

<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="utf-8">
	<title>Товар</title>
	 <link rel="stylesheet" href="css/style.css">
</head>
<body>
   <div>
   	<h2><?= $instrument['title'] ?></h2>
   	<img class="img" src="img/<?= $instrument['image'] ?>" alt="foto">
   	<p><?= $instrument['description'] ?></p>
   	<p>Стоимость: <?= $instrument['price'] ?></p>
   	<p>В наличии: <?= $instrument['count'] ?></p>
   </div>
</body>
</html>