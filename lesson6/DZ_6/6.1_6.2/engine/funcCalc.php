<?php
function sum(int $paramOne, int $paramTwo): int
{
    return $paramOne + $paramTwo;
}

function difference(int $paramOne, int $paramTwo): int
{
    return $paramOne - $paramTwo;
}

function multiplication(int $paramOne, int $paramTwo): int
{
    return $paramOne * $paramTwo;
}

function division(int $paramOne, int $paramTwo): float
{
    if ($paramTwo !== 0) {
        return $paramOne / $paramTwo;
    } else {
        return "Делить наноль нельзя";
    }
}