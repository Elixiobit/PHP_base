<?php
require_once __DIR__ . '\..\config\main.php';
require ENGINE_DIR . "gallery.php";
require ENGINE_DIR . "base.php";
session_start();
if (!empty(session('user_id'))) {   //  проверка auth.
    $id = get('id');
    $image = getImage((int)$id);
    $fileInclude = VIEWS_DIR . 'product.php';
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        if (!empty(post('name'))) {
            $name = post("name");
            $commit = post('commit');
            saveReviews((string)$name, (string)$commit, $id); // сохраняетв комментарий в БД
        }
        if (!empty(post('order')) && empty(session('product_id'))) {
            $_SESSION['product_id'] = [$id];

        } else {
            array_push($_SESSION['product_id'], $id);

        }
    }

    $reviews = getReviews((int)$id);
    include VIEWS_DIR . 'main.php';
//    redirect("product.php");
//$content = render("product", ['product' => $product]);
//echo render('layout', ['content' => $content]);
} else {
    redirect("login.php");
}
?>
