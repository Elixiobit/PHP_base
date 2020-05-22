<?php
require_once __DIR__ . '\..\config\main.php';
require ENGINE_DIR . "gallery.php";
require ENGINE_DIR . "base.php";

$id = get('id');
$image = getImage($id);
$fileInclude = 'product.php';
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = post("name");
    $commit = post('commit');
    saveReviews($name, $commit, $id);
}
$reviews = getReviews ($id);
include VIEWS_DIR . 'main.php'
?>
