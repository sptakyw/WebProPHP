<?php
    $x = 5 ;
    $y = 10 ;
    $z = $x+5 ;

    function myTest()
    {
        $GLOBAL['y'] = $GLOBALS['x'] + $GLOBALS['y'] + $GLOBALS['z'] ;
    }

    myTest() ;
    echo "<h1> $y </h1>" ;
?>