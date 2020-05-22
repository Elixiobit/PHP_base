<?php
require_once ENGINE_DIR . "db.php";

function getAllProducts() {
    $sql = "SELECT * FROM product";
    return queryAll($sql);
}

function saveReviews(string $name, string $commit, int $id) {
    $sql = "INSERT INTO reviews (`product_id`, `name_user`, `review`) VALUES  ({$id}, '{$name}', '{$commit}')";
    return execute($sql);
}

function getReviews(int $id) {
    $sql = "SELECT * FROM reviews WHERE product_id = {$id}";
    return queryAll($sql);
}

function getImage(int $id) {
    $sql = "SELECT * FROM product WHERE id = {$id}";
    return queryOne($sql);
}
