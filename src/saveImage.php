<?php

function saveImage($imageFile)
{
    $pdo = createPDO();
    $sql = "INSERT INTO images (image) VALUES (:image)";
    $statement = $pdo->prepare($sql);
    $statement->execute(['image' => $imageFile]);
}
