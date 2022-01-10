<?php

// Напишите функцию, которая принимает на вход логин и пароль, если логин не равен 'qwe', а
// пароль не равен '123', функция возвращает false, в противном случае возвращает false.
// Тип входящих и возвращаемых данных определить самостоятельно.

function some_func(string $login, string $password) :bool
{
	if ($login !== "qwe" || $password !== "123") return 0;
	return 1;
}
var_dump(some_func("qwe", "123"));

