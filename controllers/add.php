<?php 

require 'database.php';

$database = new Database(require 'config.php');

$id = $_POST['id'];
$email = $_POST['email'];

if ($_POST['isAdding'] == '1') {
    $title = $_POST['title'];
    $note = $_POST['note'];

    $database->query('INSERT INTO notes(user_id, title, note) VALUES (?, ?, ?)', [$id, $title, $note]);
    require 'login.php';
    die();
} 

require 'views/add.view.php';