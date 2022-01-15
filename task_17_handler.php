<?php
include $_SERVER['DOCUMENT_ROOT'] . '/core.php';

if (! empty($_FILES['image']['name'])) {
    var_dump($_FILES);
    $imageFile = uniqid() . '.' . pathinfo($_FILES['image']['name'], PATHINFO_EXTENSION);
    move_uploaded_file($_FILES['image']['tmp_name'], __DIR__ . '/upload/' . $imageFile);
    saveImage($imageFile);
    var_dump($imageFile);
}
header("Location: /task_17.php");
