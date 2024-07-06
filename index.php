<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>


    <?php
    $books = [
        [
            "author" => "A",
            "name" => "Rich Dad Poor Dad",
        ],
        [
            "author" => "B",
            "name" => "The subtle of not giving a fuck",
        ],
        [
            "author" => "C",
            "name" => "Atomic Habit"
        ]


    ];

    ?>


    <h1>
        <?php foreach ($books as $book) : ?>
            <li><?= $book['author'] ?></li>
        <?php endforeach; ?>
    </h1>
</body>

</html>