<?php
require_once ENGINE_DIR . "db.php";

function getGalleryFiles() {
    $sql = "SELECT * FROM gallery ORDER BY views_counter DESC";
    return queryAll($sql);
}

function saveImage(string $name, string $path, int $size) {
    $sql = "INSERT INTO gallery (name_image, path, size, views_counter) VALUES ('{$name}', '{$path}', {$size}, 0)";
    return execute($sql);
}

function getImage(int $id) {
    $sql = "SELECT * FROM gallery WHERE id = {$id}";
    return queryOne($sql);
}

function incViewsCount($id) {
    $sql = "UPDATE gallery SET views_counter = views_counter + 1 WHERE id = {$id}";
    return execute($sql);
}http: