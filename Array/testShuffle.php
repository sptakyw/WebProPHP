<?php
    for ($i=1 ; $i <= 10 ; $i++)
    {
        $array[$i+1] = $i ;
    }
    shuffle($array) ;
    print_r($array) ;
    echo "<br>" ;
?>