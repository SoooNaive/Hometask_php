<?php 

const REG = 'reg.txt';

$post = $_POST;

$login = $post['login'];
$password = $post['password'];

if (file_put_contents(REG, $login . ' ' . $password . PHP_EOL, LOCK_EX | FILE_APPEND) !== false){
    echo 'Данные записаны';
} else {
    echo 'Данные не были записаны';
}