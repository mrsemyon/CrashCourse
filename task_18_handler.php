<?php
include $_SERVER['DOCUMENT_ROOT'] . '/core.php';

if (isset($_GET['del'])) {
    deleteImage($_GET['del']);
    unlink($_SERVER['DOCUMENT_ROOT'] . '/upload/' . $_GET['del']);
}

if (! empty($_FILES['image'])) {
    foreach ($_FILES['image']['name'] as $item => $value) {
        $arImages[$item]['name'] = $value;
    }
    foreach ($_FILES['image']['tmp_name'] as $item => $value) {
        $arImages[$item]['tmp_name'] = $value;
    }
    ?><pre><?=var_dump($arImages)?></pre>###########<br><?
    foreach ($arImages as $item) {
        ?><pre><?=var_dump($item)?></pre><br><?
        $imageFile = uniqid() . '.' . pathinfo($item['name'], PATHINFO_EXTENSION);
        move_uploaded_file($item['tmp_name'], __DIR__ . '/upload/' . $imageFile);
        saveImage($imageFile);
    }
}
header("Location: /task_18.php");
