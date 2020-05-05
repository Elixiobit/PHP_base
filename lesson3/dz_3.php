<?php
//3.1 С помощью цикла while вывести все числа в промежутке от 0 до 100, которые делятся на 3 без остатка.
//$i = 0;
//$maxI = 100;
//$multiple = 3;
//while ( $i <= $maxI){
//    if ($i % $multiple == 0 && $i != 0){
//        echo "$i <br>";
//    }
//    $i++;
//}

//3.2 С помощью цикла do…while написать функцию для вывода чисел от 0 до 10, чтобы результат выглядел так:
//0 – ноль. 1 – нечетное число. 2 – четное число. …
//
//function namesNumber($i, $maxI, $multiple) {
//    do {
//        if ($i == 0)
//            echo "{$i} - ноль. <br>";
//        elseif ($i % $multiple == 0)
//            echo "{$i} - четное число.<br>";
//        else
//            echo "{$i} - нечетное число.<br>";
//        $i++;
//    } while ($i <= $maxI);
//}
//namesNumber (0, 10, 2);

//3.3 Объявить массив, в котором в качестве ключей будут использоваться названия областей,
//а в качестве значений – массивы с названиями городов из соответствующей области. Вывести
//в цикле значения массива.
//
//$citiesInRegions = [
//    "Московская область:" => ["Москва", "Зеленоград", "Клин"],
//    'Ленинградская область:' => ['Санкт-Петербург', 'Всеволожск', 'Павловск', 'Кронштадт'],
//    'Рязанская область' => ['Касимов', 'Кораблино', 'Михайлов', 'Новомичуринск'],
//    'Костромская область' => ['Нея', 'Буй', 'Нерехта', 'Боговарово'],
//];
//foreach ($citiesInRegions as $region => $cities) {
//    $citiesString = implode(", ",$cities);
//    echo "$region <br> $citiesString <br> <br>";
//}

//3.4 Объявить массив, индексами которого являются буквы русского языка, а значениями – соответствующие латинские
//буквосочетания (‘а’=> ’a’, ‘б’ => ‘b’, ‘в’ => ‘v’, ‘г’ => ‘g’, …, ‘э’ => ‘e’, ‘ю’ => ‘yu’, ‘я’ => ‘ya’).
//Написать функцию транслитерации строк.
//$templateString = "Текст — зафиксированная на каком-либо материальном носителе человеческая мысль,
//                    в общем плане связная и полная последовательность символов.";
//$arrayTransliterations = [
//    'а' => 'a', 'б' => 'b', 'в' => 'v', 'г' => 'g', 'д' => 'd', 'е' => 'e', 'ё' => 'yo', 'ж' => 'zh', 'з' => 'z',
//    'и' => 'i', 'й' => 'y', 'к' => 'k', 'л' => 'l', 'м' => 'm', 'н' => 'n', 'о' => 'o', 'п' => 'p', 'р' => 'r',
//    'с' => 's', 'т' => 't', 'у' => 'u', 'ф' => 'f', 'х' => 'h', 'ц' => 'ts', 'ч' => 'ch', 'ш' => 'sh', 'щ' => 'sch',
//    'ы' => 'y', 'э' => 'e', 'ю' => 'yu', 'я' => 'ya'
//];
//
//function getTransliterations ($templateString, $arrayTransliterations) {
//    $templateStringLower = mb_strtolower ($templateString);
//    $arrayTemplateString = mb_str_split ($templateStringLower);
//    foreach ($arrayTemplateString as &$symbol) {
//        foreach ($arrayTransliterations as $key => $letter){
//            if ($symbol == $key) {
//                $symbol = $letter;
//            }
//        }
//    }
//    return implode ("", $arrayTemplateString);
//}
//echo getTransliterations ($templateString, $arrayTransliterations);

//3.5 Написать функцию, которая заменяет в строке пробелы на подчеркивания и возвращает видоизмененную строчку.
//
//$templateString = "Текст — зафиксированная на каком-либо материальном носителе человеческая мысль, в общем плане связная и полная последовательность символов.";
//function changeGaps($templateString) {
//    $arrayTemplateString = explode  (' ', $templateString);
//    return implode  ('_', $arrayTemplateString);
//}
//echo changeGaps ($templateString);

//3.7 *Вывести с помощью цикла for числа от 0 до 9, не используя тело цикла.
//for ($i = 0; $i < 10; print $i++) {
//
//}

//3.6 В имеющемся шаблоне сайта заменить статичное меню (ul – li) на генерируемое через PHP. Необходимо представить
//пункты меню как элементы массива и вывести их циклом. Подумать, как можно реализовать меню с вложенными подменю?
//Попробовать его реализовать.
//$arrayMenu = [
//    'Home',
//    'Man',
//    'Women',
//    'Kids',
//    'Accoseriese',
//    'Featured',
//    'Hot Deals'
//]
?>

<!--<!doctype html>-->
<!--<html lang="en">-->
<!--<head>-->
<!--    <meta charset="UTF-8">-->
<!--    <meta name="viewport"-->
<!--          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">-->
<!--    <meta http-equiv="X-UA-Compatible" content="ie=edge">-->
<!--    <title>Document</title>-->
<!--</head>-->
<!--<body>-->
<!--<nav class="center">-->
<!--    <ul class="menu">-->
<!--        --><?php //foreach ($arrayMenu as $item): ?>
<!--        <li class="menu__list"><a href="#" class="menu__link">--><?//=$item?><!--</a></li>-->
<!--        --><?// endforeach;?>
<!--    </ul>-->
<!--</nav>-->
<!--</body>-->
<!--</html>-->
