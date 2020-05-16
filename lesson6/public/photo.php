<?php
require_once __DIR__ . '\..\config\main.php';
require ENGINE_DIR . "gallery.php";

$id = $_GET['id'];
var_dump($_REQUEST);
$image = getImage($id);
incViewsCount($id);
include VIEWS_DIR . "photo.php";
