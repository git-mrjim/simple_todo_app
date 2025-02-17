<?php

require '../database.php';
$database = new Database(require '../config.php');

$name = $_POST['name'];
$email = $_POST['email'];
$database->query('INSERT INTO users(username, email) VALUES (?, ?)', [$name, $email]);

$id = $database->query('SELECT * FROM users WHERE email = ?', [$email])[0]['user_id'];
$notes = $database->query('SELECT * FROM notes WHERE user_id = ?', [$id]);

require '../views/main.view.php';