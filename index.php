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
            "author" => "C",
            "name" => "The subtle of not giving a fuck",
        ],
        [
            "author" => "C",
            "name" => "Atomic Habit"
        ]


    ];


    function filterByAuthor($books, $author)
    {
        $filteredBooks = [];

        foreach ($books as $book) {
            if ($book["author"] == $author) {

                $filteredBooks[] = $book;
            }
        }
        return $filteredBooks;
    }

    ?>


    <h1>
        Hello World
        <?php foreach (filterByAuthor($books, "A") as $book) : ?>
            <?= $book['name'] ?>
        <?php endforeach; ?>
    </h1>
</body>

</html>