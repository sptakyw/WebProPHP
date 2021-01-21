<?php
    $x = 5 ;
    function myTest($x)
        {
            global $x ;
            //$x = 5 ;
            echo "<p> Varible x inside function is : global $x </p>" ;
        }
    myTest($x) ;
            //$x = 4 ;
    echo "<p> Varible x outside function is : $x </p>" ;
?>