<!DOCTYPE html>
<html lang="en">

<head>
    <title> Find Min Max Average </title>
</head>

<body>
    <center>
        <h1>Find Min Max Average</h1>

        <?php
            if (isset($_GET['submit'])) 
            {
                $num1 = $_GET['num1']; 
                $num2 = $_GET['num2']; 
                $num3 = $_GET['num3']; 
                $choice = $_GET['choice'];
                $sum = 0;
            }
        ?>

        <form>
            <?php
                if (isset($_GET['submit'])) 
                {
                    echo "Num 1 : <input type =text name =num1 value=$num1> <br><br>";
                    echo "Num 2 : <input type =text name =num2 value=$num2> <br><br>";
                    echo "Num 3 : <input type =text name =num3 value=$num3> <br><br>";
                    if($choice == '1'){
                        echo "<input type=radio name=choice value=1 checked/>Minimum <br><br>";
                        echo "<input type=radio name=choice value=2 />Maximum <br><br>";
                        echo "<input type=radio name=choice value=3 />Average <br><br>";
                        }
                    if($choice == '2'){
                        echo "<input type=radio name=choice value=1 />Minimum <br><br>";
                        echo "<input type=radio name=choice value=2 checked/>Maximum <br><br>";
                        echo "<input type=radio name=choice value=3 />Average <br><br>";
                        }
                    if($choice == '3'){
                        echo "<input type=radio name=choice value=1 />Minimum <br><br>";
                        echo "<input type=radio name=choice value=2 />Maximum <br><br>";
                        echo "<input type=radio name=choice value=3 checked/>Average <br><br>";
                        }

                    echo "<input type=submit name=submit value=Submit />";

                }

                else
                {
                    echo "Num 1 : <input type =text name =num1> <br><br>";
                    echo "Num 2 : <input type =text name =num2> <br><br>";
                    echo "Num 3 : <input type =text name =num3> <br><br>";

                    echo "<input type=radio name=choice value=1 />Minimum <br><br>";
                    echo "<input type=radio name=choice value=2 />Maximum <br><br>";
                    echo "<input type=radio name=choice value=3 />Average <br><br>";

                    echo "<input type=submit name=submit value=Submit />";
                }
            ?>
        </form>
        <br>

        <?php
            if (isset($_GET['submit'])) 
            {
                if ($choice == 3) 
                {
                    echo "Average = ";
                    echo $num1 + $num2 + $num3;
                }

                if ($choice == 2) 
                {
                    echo "Maximum = ";
                    echo(max($num1,$num2,$num3));
                }

                if ($choice == 1) 
                {
                    echo "Minimum = ";
                    echo(min($num1,$num2,$num3));
                }
                
            }
        ?>

</body>
</center>

</html>