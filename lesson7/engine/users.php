<?php
require_once ENGINE_DIR . "db.php";
function saveUser(string $login, string $password) {
    $sql = "INSERT INTO reviews (`login`, `password`) VALUES  ({$login}, '{$password}')";
    return execute($sql);
}

function getUserByLogin($login) {
    return  queryOne("SELECT * FROM users WHERE login = '{$login}'");
}

function getUserById($id) {
    return  queryOne("SELECT * FROM users WHERE id = '{$id}'");
}