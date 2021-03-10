<?php
    echo "<br> test For <br>" ;
        for ($i = 0 ; $i < count($Emp) ; $i++)
        {
            echo "index[".$i."] = ".$Emp[$i]."<br>" ;
        }

    echo "<br>" ;
    for ($i = 0 ; $i < count($funArray) ; $i++)
        {
            echo "index[".$i."] = ".$funArray[$i]."<br>" ;
        }
        echo "<br> Test For Each <br>" ;
        foreach ($funArray as $value)
        {
            echo $value ."<br>" ;
        }
?>