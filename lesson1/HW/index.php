<!--1.1
Всё установил, работает.

1.2
Методичку изучил.

1.3

<?php
/*    $a = 5;
    $b = '05';
    var_dump($a == $b);         // Почему true? - все приводит к одному типу и в случаи PHP то к числовому.
    var_dump((int)'012345');     // Почему 12345? - перевели из типа string в int
    var_dump((float)123.0 === (int)123.0); // Почему false? - int это целочисленный тип и он отбрасывет ".0"
    var_dump((int)0 === (int)'hello, world'); // Почему true? - переводя string в int, он отбрасывает все что не понимает,
//а так как цифор нет оставляет "0".
*/?>

1.4

--><?php
   $title = "Lesson 1";
   $content = "Homework!!!";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title><?= $title?></title>
</head>
<body>
<h1><?= $title?></h1>
<p><?= $content?></p>
</body>
</html>