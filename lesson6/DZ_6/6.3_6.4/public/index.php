<?php
require_once __DIR__ . '\..\config\main.php';
require ENGINE_DIR . 'gallery.php';
$productImg = getGalleryFiles();
$fileInclude = 'showroom.php';

include VIEWS_DIR . 'main.php';