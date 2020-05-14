<?php

require_once __DIR__ . '\..\config\main.php';
require ENGINE_DIR . 'getImageList.php';

if($_SERVER['REQUEST_METHOD'] == 'POST') { //- проверка отправки формы
    if(isset($_FILES['new_image'])) { //- проверили существование
        $sizeImage = $_FILES['new_image']['size'];
        $typeImage = $_FILES['new_image']['type'];
        if(!file_exists(UPLOADS_DIR)) { //- проверяем на существоание
            mkdir(UPLOADS_DIR); // - создаем
        }
        if ($sizeImage < 4194304 || $typeImage == 'image/jpeg' && $typeImage == 'image/png') { //проверяем размер файла и тип
            move_uploaded_file( // - для загрузки файлов
                $_FILES['new_image']['tmp_name'], // - где берем файл
                UPLOADS_DIR . $_FILES['new_image']['name'] //- куда копируем
            );
        }
    }
    header("Location: /index.php");
}

$images = getImagesList(UPLOADS_DIR);

$form_title = "Фото галерея";
include VIEWS_DIR . "upload_form.php";
include VIEWS_DIR . "imageList.php";
?>