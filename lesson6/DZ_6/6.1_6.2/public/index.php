<?php
require_once __DIR__ . '\..\config\main.php';
require ENGINE_DIR . 'base.php';
require ENGINE_DIR . 'funcCalc.php';

$paramOne = (int)post('paramOne');
$paramTwo = (int)post('paramTwo');
$operation = post('operation');
if (isset($operation) && $paramOne !== 0 && $paramTwo !== 0) {
    $result = $operation($paramOne, $paramTwo);
}
//redirect("/"); //так и не понял где его поставить.

require VIEWS_DIR . "formCalc.php";
?>

