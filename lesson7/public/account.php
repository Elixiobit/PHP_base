<?php
require_once __DIR__ . '\..\config\main.php';
require ENGINE_DIR . "base.php";
require ENGINE_DIR .'users.php';
session_start();
if (isset($_SESSION['user_id'])) {
    $fileInclude = VIEWS_DIR . 'account.php';
    $user = getUserById($_SESSION['user_id']);
    include VIEWS_DIR . 'main.php';
} else{
    redirect("login.php");
}
