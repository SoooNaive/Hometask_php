<?php

// Напишите функцию, которая принимает на вход массив и возвращает новый массив,
// в который войдут:
// НОВЫЕ ЗАДАЧИ (Дата задачи > date_create())
// ЗАКРЫТЫЕ ЗАДАЧИ (со значением closed равным true)
// НЕВЫПОЛНЕННЫЕ ЗАДАЧИ (со значением closed равным false и датой меньше date_create())

function get_tasks()
{
	return [
        [
            'title'=>'Задача 1',
            'date'=>date_create('yesterday'),
            'participants'=>['Артур', 'Полина'],
            'closed'=>false
        ],
        [
            'title'=>'Задача 2',
            'date'=>date_create('tomorrow'),
            'participants'=>[],
            'closed'=>false
        ],
        [
            'title'=>'Задача 3',
            'date'=>date_create(),
            'participants'=>['Артур', 'Глеб'],
            'closed'=>false
        ],
        [
            'title'=>'Задача 4',
            'date'=>date_create('yesterday'),
            'participants'=>['Павел', 'Полина'],
            'closed'=>true
        ]
    ];
}

function get_sort(array $get_tasks, $filt)
{
	foreach ($get_tasks as $task) 
	{
		  if($filt == "new") 
          {
            if($task['date'] > date_create())
            {
            $newArr[] = $task;
            }
          }
          if($filt == "closed") 
          {
            if($task['closed'])
            {
             $newArr[] = $task;
            }
          }
          if($filt == "unfulfilled")  
          {
            if(!$task['closed'] && $task['date'] < date_create())
            {
              $newArr[] = $task;
              }
            }
	}
	 return($newArr);
}
var_dump(get_sort(get_tasks(), "unfulfilled"));