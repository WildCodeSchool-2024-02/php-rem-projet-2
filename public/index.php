<?php
require_once '../config/config.php';
require_once '../models/item-model.php';

$urlPath = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

if ('/' === $urlPath) {
    $items = getAllItems();
    include '../views/index.php';
}
if ('/contact' === $urlPath) {
    include '../views/contact.php';
}
if ('/presentation' === $urlPath) {
    include '../views/apropo.php';
} else {
    header('HTTP/1.1 404 Not Found');
}
