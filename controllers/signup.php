<?php

require '../database.php';
$database = new Database(require '../config.php');

$name = $_POST['name'];
$email = $_POST['email'];
$database->query('INSERT INTO users(username, email) VALUES (?, ?)', [$name, $email]);

echo 'Signup';
echo ($database->query('SELECT * FROM users WHERE email = ?', [$email])[0]['username']);