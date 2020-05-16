<?php
/**
 * @param string $url
 */

function redirect(string $url): void
{
    header("Location: {$url}");
    exit;
}

function post($name) {
    return $_POST[$name];
}