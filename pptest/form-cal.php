<html>
<body>
    <?php
        $width = $_GET ['width'] ;
        $value = $_GET ['value'] ;
        $kg = $_GET ['kg'] ;
            if ($value == 1)
                { 
                    echo "<img src = image/W.jpg height = $width> <br>" ;
                    if ($kg == 1)
                    {
                        echo "ราคากิโลละ : 100 <br>" ; 
                        echo "จำนวน " .$kg . " กิโล <br>" ;
                        echo $kg * 100 ;
                    }
                    else if ($kg == 2)
                    {
                        echo "ราคากิโลละ : 200 <br>" ;
                        echo "จำนวน " .$kg . " กิโล <br>" ;
                        echo $kg * 200 ;
                    }
                    else if ($kg == 3)
                    {
                        echo "ราคากิโลละ : 300 <br>"  ;
                        echo "จำนวน " .$kg . " กิโล <br>" ;
                        echo $kg * 300 ;
                    }

                }
            else if ($value == 2)
                {
                    if ($kg == 1)
                    {
                        echo "ราคากิโลละ : 100 <br>" ; 
                        echo "จำนวน " .$kg . " กิโล <br>" ;
                        echo $kg * 100 ;
                    }
                    else if ($kg == 2)
                    {
                        echo "ราคากิโลละ : 200 <br>" ;
                        echo "จำนวน " .$kg . " กิโล <br>" ;
                        echo $kg * 200 ;
                    }
                    else if ($kg == 3)
                    {
                        echo "ราคากิโลละ : 300 <br>"  ;
                        echo "จำนวน " .$kg . " กิโล <br>" ;
                        echo $kg * 300 ;
                    }
                }
            else if ($value == 3)
                {
                    if ($kg == 1)
                    {
                        echo "ราคากิโลละ : 100 <br>" ; 
                        echo "จำนวน " .$kg . " กิโล <br>" ;
                        echo $kg * 100 ;
                    }
                    else if ($kg == 2)
                    {
                        echo "ราคากิโลละ : 200 <br>" ;
                        echo "จำนวน " .$kg . " กิโล <br>" ;
                        echo $kg * 200 ;
                    }
                    else if ($kg == 3)
                    {
                        echo "ราคากิโลละ : 300 <br>"  ;
                        echo "จำนวน " .$kg . " กิโล <br>" ;
                        echo $kg * 300 ;
                    }
                }
    ?>
<img src = "" alt = "">
</body>
</html>