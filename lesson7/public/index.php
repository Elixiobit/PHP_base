<?php
require_once __DIR__ . '\..\config\main.php';
require ENGINE_DIR . 'gallery.php';
require ENGINE_DIR . 'render.php';
$productImg = getAllProducts();
$fileInclude = VIEWS_DIR . 'showroom.php';
//$content = render("showroom", ['showroom' => с]);
//echo render('main', ['content' => $content]); // что-то пошло не так! пока не удалосьподключить,
                                                  //несрабатывает foreach с переменной  $productImg.
include VIEWS_DIR . 'main.php';