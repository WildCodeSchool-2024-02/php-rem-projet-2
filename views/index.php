<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>List of Items</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@picocss/pico@2/css/pico.min.css" />
</head>

<body>
    <main class="container">
        <h1>List of Items</h1>
        <ul>
            <?php foreach ($items as $item) : ?>
                <li>
                   <?= $item['title'] ?>
                </li>
            <?php endforeach ?>
        </ul>
    </main>
</body>

</html>