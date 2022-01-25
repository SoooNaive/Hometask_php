<?php

$server = $_SERVER;
$post = $_POST;

if ($server['REQUEST_METHOD'] === 'POST') {

    if ($post['login'] === 'qwe' && $post['password'] === '123') {
        echo 'Успешный вход';
    } else {
        echo 'Вход не выполнен';
    }
}