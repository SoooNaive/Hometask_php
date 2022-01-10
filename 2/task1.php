<?php 
// 1.1 Отсортировать массив 'price' (продумать разные варианты)
// 1.2 Отсортировать массив по 'price', потом' по 'title' (если значения price одинаковые)

$items = [
     [
         'id' => 1,
         'title' => 'Flute',
         'price' => 20000,
     ],
     [
         'id' => 2,
         'title' => 'Guitar',
         'price' => 18000,
     ],
     [
         'id' => 3,
         'title' => 'Piano',
         'price' => 68000,
     ],
     [
         'id' => 4,
         'title' => 'Drum',
         'price' => 68000,
     ],
 ];

 // 1.1

 function sort_by_price($a, $b)
 {
    if ($a['price'] == $b['price'])
        return 0;
    if ($a['price'] < $b['price'])
        return -1;
    else
        return 1;
 }

 // 1.2

 function sortByTitle($a, $b)
 {
    if ($a['price'] == $b['price'])
    {
        if ($a['title'] == $b['title']) 
           return 0;
        if ($a['title'] < $b['title'])
           return -1;
       else
           return 1;
    }
    if ($a['price'] < $b['price'])
        return -1;
    else
        return 1;
 }
 

 uasort($items, 'sort_by_price');
 uasort($items, 'sortByTitle');
