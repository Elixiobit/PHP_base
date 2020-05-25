<?php
require_once __DIR__ . '\..\config\main.php';
require ENGINE_DIR . 'base.php';
require ENGINE_DIR . 'users.php';
//require ENGINE_DIR . 'render.php';
//render("login", ['']);
session_start();
if (!isset($_SESSION['user_id'])) {
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $login = post('login');
        $password = post('password');
        $user = getUserByLogin($login);
        if ($user && $user['password'] == getHash($password)){
            $_SESSION['user_id'] = $user['id'];
            redirect('account.php');
        }else {
            $resultAuth = "Повторите попытку";
        }

    }
}

$fileInclude = VIEWS_DIR . 'login.php';
include VIEWS_DIR . 'main.php';