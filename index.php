<?php
    echo "Hello World";

    $color = 'red';
    $x = 5;
    $y = 10;
    // echo "$color";
    // echo $x + $y;




    // function test(){ 
    //     $x = 5; 


    //     echo "Variable $x";
    // }
    // test();

    // PHP The global Keyword
    
    function mytest(){ 
        global $x, $y;
        $y = $x + $y;
    }   

    mytest();
    echo "<br>A", $y; // outputs 15


?>