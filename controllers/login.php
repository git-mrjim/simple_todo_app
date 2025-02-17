<?php

require '../database.php';
$database = new Database(require '../config.php');

$email = $_POST['email'];

$id = $database->query('SELECT * FROM users WHERE email = ?', [$email])[0]['user_id'];
$notes = $database->query('SELECT * FROM notes WHERE user_id = ?', [$id]);

require '../views/main.view.php';