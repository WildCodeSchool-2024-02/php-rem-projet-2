<?php

function createConnection(): PDO
{
    return new PDO("mysql:host=" . SERVER . ";dbname=" . DATABASE . ";charset=utf8", USER, PASSWORD);
}

function getAllItems(): array|false
{
    $connection = createConnection();

    $statement = $connection->query('SELECT id, title FROM item');
    $items = $statement->fetchAll(PDO::FETCH_ASSOC);

    return $items;
}

