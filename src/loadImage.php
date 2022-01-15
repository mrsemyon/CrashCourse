<?php

function loadImage()
{
    $pdo = createPDO();
    $sql = 'SELECT * FROM images';
    $statement = $pdo->prepare($sql);
    $statement->execute();
    return $statement->fetchAll();
}
