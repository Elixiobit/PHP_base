<?php
require_once __DIR__ . '\..\config\main.php';
require ENGINE_DIR . "gallery.php";
require ENGINE_DIR . "base.php";
session_start();
if (isset($_SESSION['user_id'])) {
    $id = get('id');
    $image = getImage($id);
    $fileInclude = VIEWS_DIR . 'product.php';
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $name = post("name");
        $commit = post('commit');
        saveReviews((string)$name, (string)$commit, $id);

    }
    $reviews = getReviews($id);
//$content = render("product", ['product' => $product]);
//echo render('layout', ['content' => $content]);
    include VIEWS_DIR . 'main.php';
} else{
    redirect("login.php");
}
?>
