<?php
require_once ENGINE_DIR . "db.php";

function getGalleryFiles() {
    $sql = "SELECT * FROM product";
    return queryAll($sql);
}

function saveReviews(string $review, int $id) {
    $sql = "UPDATE `shop`. `product` SET reviews = '{$review}' WHERE  `id` = {$id}";
    return execute($sql);
}

function getImage(int $id) {
    $sql = "SELECT * FROM product WHERE id = {$id}";
    return queryOne($sql);
}
