<?php

function deleteImage($imageFile)
{
    $pdo = createPDO();
    $sql = 'DELETE FROM images WHERE image=:image';
    $statement = $pdo->prepare($sql);
    $statement->execute(['image' => $imageFile]);
}
