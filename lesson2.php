<?php
// 2.1
//
$numberOne = (int)-45;
$numberTwo = (int)11;

if ($numberOne >= 0 && $numberTwo >= 0)
    echo $numberOne - $numberTwo;
if ($numberOne < 0 && $numberTwo <0)
    echo $numberOne * $numberTwo;
if (($numberOne >= 0 && $numberTwo < 0) || ($numberOne < 0 && $numberTwo >= 0))
    echo $numberOne + $numberTwo;

echo '<br>';

// 2.3
//
function sum($arg1, $arg2) {
    return $arg1 + $arg2;
}
function difference($arg1, $arg2){
    return $arg1 - $arg2;
}
function multiplication($arg1, $arg2) {
    return $arg1 * $arg2;
}
function division($arg1, $arg2) {
   return $arg1 / $arg2;
}

// 2.4
//
$operation = 'Умножение';
function mathOperation($arg1, $arg2, $operation) {
    switch ($operation) {
        case 'Сложение':
            echo $arg1 . ' + ' . $arg2 . ' = ' . sum($arg1, $arg2);
            break;
        case 'Вычитание':
            echo $arg1 . ' - ' . $arg2 . ' = ' . difference($arg1, $arg2);
            break;
        case 'Умножение':
            echo $arg1 . ' * ' . $arg2 . ' = ' . multiplication($arg1, $arg2);
            break;
        case 'Деление':
            echo $arg1 . ' / ' . $arg2 . ' = ' . division($arg1, $arg2);
            break;
        default:
            echo 'Что-то пошлоне так...';
    }
}

mathOperation($numberOne, $numberTwo, $operation);

echo '<br>';

//2.6
//
function power($val, $pow) {
    if ($pow > 1) {
        return $val *= power($val, $pow - 1);
    }
    return $val;
}
$val = 4;
$pow = 5;
echo $val . ' в степени ' . $pow . ' = ' . power($val,$pow);



//2.5
//
//?>

<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>PHP</title>
</head>
<body>
<header></header>
<div id="content"></div>
<footer>
    <p> &copy; <?= date('g:i:s M Y'); ?> </p>
</footer>
</body>
</html>