<?php 

$id = $_POST['id'];

if ($_POST['isAdding'] == '1') {
    $title = $_POST['title'];
    $note = $_POST['note'];

    $database->query('INSERT INTO notes(user_id, title, note) VALUES (?, ?, ?)', [$id, $title, $note]);
} 

require 'views/add.view.php';