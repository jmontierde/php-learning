<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <?php
    // $i = 0;

    // do {
    //     echo $i++;
    // } while ($i <= 15);

    // for ($i = 1;; $i++) {
    //     if ($i > 10) {
    //         break;
    //     }
    //     echo $i;
    // }
    $people = array(
        array('name' => 'Kalle', 'salt' => 856412),
        array('name' => 'Pierre', 'salt' => 215863)
    );


    // for ($i = 0, $size = count($people); $i < $size; ++$i) {
    //     echo $people[$i]['salt'];
    // }

    // Foreach
    // foreach ($people as $person) {
    //     echo $person['name'];
    // }


    //For Each and get <key>    </key>
    foreach ($people as $key => $person) {
        echo $key . $person['name'];
    }

    ?>
</body>

</html>