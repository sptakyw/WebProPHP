<?php
$x = 100 ;
$y = 10 ;
$operator = "/" ;

function plus($x,$y) // บวก
    {
        echo "x + y = " ; echo $x + $y ;
        echo "<br>" ;
    }

    function sub($x,$y) // ลบ
    {
        echo "x - y = " ; echo $x - $y ;
        echo "<br>" ;
    }

    function mul($x,$y) // คูณ
    {
        echo "x * y = " ; echo $x * $y ;
        echo "<br>" ;
    }

    function div($x,$y) // หาร
    {
        echo "x / y = " ; echo $x / $y ;
        echo "<br>" ;
    }

    switch($operator)
    {
        case "+" :
            plus ($x,$y) ;
            break ;
        case "-" :
            sub ($x,$y) ;
            break ;
        case "*" :
            mul ($x,$y) ;
            break ;
        case "/" :
            div ($x,$y) ;
            break ;
        default ;
    }
?>