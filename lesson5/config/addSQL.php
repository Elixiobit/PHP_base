<?php
function addSQL(string $name_image, string $link, int $size, int $views_counter = 0)
{
    $connectMySQL = mysqli_connect("127.0.0.1", "root", "root", "shop");

    mysqli_query($connectMySQL,
        "INSERT INTO gallery (name_image, link, size, views_counter) VALUES ('$name_image','$link','$size','$views_counter');");

    mysqli_close($connectMySQL);
}