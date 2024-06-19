<?php
require_once '../config/config.php';
require_once '../models/item-model.php';

$urlPath = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
if ('/les-chaussures' === $urlPath) {
    include '../views/les-chaussures.php';
} elseif ('/pantalons' === $urlPath) {
    include '../views/pantalons.php';
} elseif ('/les-robes' === $urlPath) {
    include '../views/les-robes.php';
} elseif ('/les-accessoirs' === $urlPath) {
    include '../views/accessoirs.php';
} elseif ('/' === $urlPath) {
    $items = getAllItems();
    include '../views/index.php';
} elseif ('/les-hauts' === $urlPath) {
    include '../views/les-hauts.php';
} elseif ('/contact' === $urlPath) {
    include '../views/contact.php';
} elseif ('/presentation' === $urlPath) {
    include '../views/apropo.php';
} else {
    header('HTTP/1.1 404 Not Found');
}

