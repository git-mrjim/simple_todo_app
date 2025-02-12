<?php

require '../database.php';
$database = new Database(require '../config.php');

$email = $_POST['email'];
$user = $database->query('SELECT * FROM users WHERE email = ?', [$email]);

echo ($user[0]['username']);