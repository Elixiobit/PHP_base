<?php
/**
 * @param $uploud_file
 * @return array
 */

function getImagesList (string $uploud_file): array {
    $images = [];
    $gallery = opendir($uploud_file);
    while ($image = readdir($gallery)) {
        if (!is_dir($image)) {
            $images[] = $image;
        }
    }
    closedir($gallery);
    return $images;
}
?>