<?php
/**
 * @param string $destination
 * @param string $attributeName
 * @return int
 */

function uploadFile(string $destination, string $attributeName): int {
    if (is_uploaded_file($_FILES[$attributeName]['tmp_name'])) {
        return  move_uploaded_file (
            $_FILES[$attributeName]['tmp_name'],
            $destination
        );
    }
    else
        return false;
}

