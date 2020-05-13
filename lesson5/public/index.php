<?php
require_once __DIR__ . "/../config/main.php";
require ENGINE__DIR . "base.php";
require ENGINE__DIR . "addImage.php";
require DOCUMENT__ROOT . "config/addSQL.php";
require ENGINE__DIR . "getImList.php";
require VIEW__DIR . "idForm.php";
$directoryImg = PUBLIC__DIR . "img/";

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (!file_exists($directoryImg)) {
        mkdir($directoryImg);
    }

    $filename = $directoryImg . $_FILES['id']['name'];
    uploadFile($filename, 'id');
    addSQL($_FILES['id']['name'], $filename, $_FILES['id']['size']);
    redirect('/index.php');
}
$id = $_GET['id'];

$images = getImagesList($directoryImg);

$connectMySQL = mysqli_connect("127.0.0.1", "root", "root", "shop");


$sql = "SELECT link FROM gallery WHERE id = {$id}";

$res = mysqli_query($connectMySQL, $sql);


mysqli_close($connectMySQL);

include VIEW__DIR . "upload_form.php";
include VIEW__DIR . "imageList.php";
