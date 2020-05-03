<?php
/*
 * 1. Объявить две целочисленные переменные $a и $b и задать им произвольные начальные значения. Затем написать скрипт, который работает по следующему принципу:

    если $a и $b положительные, вывести их разность;
    если $а и $b отрицательные, вывести их произведение;
    если $а и $b разных знаков, вывести их сумму;

Ноль можно считать положительным числом.
 */
/*
$a = 5;
$b = 7;

if ($a >= 0 XOR $b >= 0) {
    echo $a + $b;
} elseif ($a < 0 ) {
    echo $a * $b;
} else {
    echo $a - $b;
}*/

/*
 * 3. Реализовать основные 4 арифметические операции в виде функций с двумя параметрами.
 *  Обязательно использовать оператор return.
 */

$x = 5;
$y = 7;

//echo sum($x, $y);

function sum(int $x, int $y): int
{
    return $x + $y;
}

function sub(int $x, int $y): int
{

}

function mult(int $x, int $y): int
{

}

function div($x, $y)
{

}

/*
$operation = 'sum';
echo $operation(2, 2);


function mathOperation(int $x, int $y, int $operation)
{
    $operations = [
        1 => 'sum',
        2 => 'sub',
        3 => 'mult',
        4 => 'div',
    ];

    if (in_array($operation, $operations)) {
        return $operations[$operation];
    }
    return false;

}


echo mathOperation(5, 7, 1);*/


function endings($value, $ending1, $ending2, $ending3)
{
    $ending = '';
    if ($value > 20) {
        $value %= 10;
    }

    if ($value == 1) {
        $ending = $ending1;
    } elseif ($value > 1 && $value < 5) {
        $ending = $ending2;
    } else {
        $ending = $ending3;
    }

    return $ending;
}

function getCurrentTime()
{
    $currentTime = time();
    $hour = date('H', $currentTime);
    $minutes = date("i", $currentTime);

    echo $hour, " ", endings($hour, "час", "часа", "часов");
    echo $minutes, " ", endings($minutes, "минута", "минуты", "минут");
}


$hour = 36;
getCurrentTime();
//echo $minutes, " ", minutesEndings($minutes);


