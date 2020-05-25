<?php
require_once __DIR__ . '\..\config\main.php';
require ENGINE_DIR . "cart.php";
require ENGINE_DIR . "base.php";
session_start();
if (!empty(session('user_id'))) {
    if (!isset($_SESSION['product_id'])){
        $_SESSION['product_id'] = [];
    }
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $deleteItem = post('product_id');
        $key = array_search($deleteItem, session('product_id'));
        unset ($_SESSION['product_id'][$key]);
    }

    $products = session('product_id');
    $fileInclude = VIEWS_DIR . 'cart.php';
    include VIEWS_DIR . 'main.php';
} else {
    redirect("login.php");
}
?>
