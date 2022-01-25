<?php
require_once 'item.php';
require_once 'itemStorage.php';

// создать объекты Item (товар) и ItemStore (хранилище),
$dram = new Item(1, 'Dram', 67000, 'wood');
$piano = new Item(2, 'Piano', 35000, 'plastic');
$harp = new Item(3, 'Harp', 60000, 'metal');
$guitar = new Item(4, 'Guitar', 20000, 'wood');
$storage = new ItemStirage();

// добавить товары в хранилище
$storage->add_item($dram);
$storage->add_item($piano);
$storage->add_item($harp);
$storage->add_item($guitar);

// вызвать методы поиска товаров в хранилище:
    // get_by_material,
var_dump($storage->get_by_material('wood'));

    // get_by_price_and_material,
var_dump($storage->get_by_price_and_material(20000,'wood'));

    // get_by_price
var_dump($storage->get_by_price(20000, 35000));