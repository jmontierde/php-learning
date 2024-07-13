<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <?php
    $a = array('one', 'two', 'three');
    $b = array('three', 'four', 'five');
    //not a union of arrays' values
    // echo '$a + $b : ';
    // print_r($a + $b);
    //a union of arrays' values
    // echo "array_unique(array_merge($a,$b)):";
    // cribbed from http://oreilly.com/catalog/progphp/chapter/ch05.html
    print_r(array_merge($a, $b));
    ?>

    ?>

</body>

</html>