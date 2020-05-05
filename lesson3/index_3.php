<?php
/*
$x = 0;
while ($x < 10) {
    echo "$x";
    $x++;
}
*/
/*
$x = 25;
do {
    echo "$x";
    $x++;
}while ($x < 10);*/
/*
echo "<table>";
for ($i = 1; $i < 10; $i++) {
    echo "<tr>";
    for ($j = 1; $j < 10; $j ++) {
        echo "<td>" . $i * $j . "</td>";
}
echo "</tr>";
}
echo "</table>";
*/

$array = [1, 2, 3, 4, 5, 6, 7];

/*array_push($array, 5);
array_shift($array);
array_pop($array);
array_unshift($array,5 );*/

$array []= 10;
//var_dump($array);

$article = [
    'title' => 'Article 1',
    'content' => 'jsdkjsdkljskdljskld',
    'date' => date("Y-m-d"),
    'author' => [
        'first_name' => 'Vasya',
        'last_name' => "Pupkin"
    ],
    'views_count' => 50
];




$article[1] = '11111111';

$array2 = [
    1 => 1,
    2 => 2,
    3 => 3,
    0.25 => 4,
    'ajskjdlkjl' => 'asjalskjadklj'
];

$array2 []= 5;


foreach ($article as &$item) {
    $item = 111111111;
}
//unset($item);

$article2 = [
    'title' => 'Article 2',
    'content' => 'jsdkjsdkljskdljskld',
    'date' => date("Y-m-d"),
    'author' => [
        'first_name' => 'Vasya',
        'last_name' => "Pupkin"
    ],
    'views_count' => 50
];

foreach ($article2 as $item) {
    echo "{$item}<br>";
    $item = 2222222222;
}

var_dump($article);


