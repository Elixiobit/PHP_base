<?php
function sum($paramOne, $paramTwo)
{
    return $paramOne + $paramTwo;
}

function difference($paramOne, $paramTwo)
{
    return $paramOne - $paramTwo;
}

function multiplication($paramOne, $paramTwo)
{
    return $paramOne * $paramTwo;
}

function division($paramOne, $paramTwo)
{
    if ($paramTwo !== 0) {
        return $paramOne / $paramTwo;
    } else {
        return "Делить наноль нельзя";
    }
}