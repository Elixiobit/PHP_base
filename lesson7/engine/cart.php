<?php
require_once ENGINE_DIR . "db.php";

function getProduct(int $id) {
    $sql = "SELECT * FROM product WHERE id = {$id}";
    return queryAll($sql);
}

