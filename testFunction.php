<?php
$x = 100 ;
$y = 10 ;

    function plus() // บวก
    {
        global $x  ;
        global $y ;
        echo "x + y = " ; echo $x + $y ;
        echo "<br>" ;
    }

    function sub() // ลบ
    {
        global $x  ;
        global $y ;
        echo "x - y = " ; echo $x - $y ;
        echo "<br>" ;
    }

    function mul() // คูณ
    {
        global $x  ;
        global $y ;
        echo "x * y = " ; echo $x * $y ;
        echo "<br>" ;
    }

    function div() // หาร
    {
        global $x  ;
        global $y ;
        echo "x / y = " ; echo $x / $y ;
        echo "<br>" ;
    }
    plus() ;
    sub() ;
    mul() ;
    div() ;
?>