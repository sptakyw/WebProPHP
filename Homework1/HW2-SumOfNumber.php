<!DOCTYPE html>
<html lang="en">

<head>
    <title> Sum of number </title>
</head>

<body>
    <center>
        <?php
            if (isset($_GET['submit'])) 
            {
                $number1 = $_GET['number1']; 
                $number2 = $_GET['number2'];
                $number3 = $_GET['number3'];
                $operator1 = $_GET['operator1'];
                $operator2 = $_GET['operator2'];
                $sum = 0;
                if ($operator1 == "+")
                    $sum = $number1 + $number2;
                if ($operator1 == "-")
                    $sum = $number1 - $number2;
                if ($operator1 == "*")
                    $sum = $number1 * $number2;
                if ($operator1 == "/")
                    $sum = $number1 / $number2;
                
                if ($operator2 == "+")
                    $sum += $number3;
                if ($operator2 == "-")
                    $sum -= $number3;
                if ($operator2 == "*")
                    $sum *= $number3;
                if ($operator2 == "/")
                    $sum /= $number3;   
            }
        ?>

        <h1> Sum of number</h1>

        <form>
            <?php
                if (isset($_GET['submit'])) 
                {   /*1*/
                    echo "Num 1 : <input type=text name=number1  value=$number1><br><br>";

                    if ($operator1 == "+") 
                    {
                        echo "<input type=radio name=operator1 value=+ checked > + :";
                        echo "<input type=radio name=operator1 value=-> - :";
                        echo "<input type=radio name=operator1 value=*> * :";
                        echo "<input type=radio name=operator1 value=/> / :<br><br>";
                    }

                    if ($operator1 == "-")
                    {
                        echo "<input type=radio name=operator1 value=+> + :";
                        echo "<input type=radio name=operator1 value=- checked> - :";
                        echo "<input type=radio name=operator1 value=*> * :";
                        echo "<input type=radio name=operator1 value=/> / :<br><br>";
                    }
                    
                    if ($operator1 == "*")
                    {
                        echo "<input type=radio name=operator1 value=+> + :";
                        echo "<input type=radio name=operator1 value=-> - :";
                        echo "<input type=radio name=operator1 value=* checked> * :";
                        echo "<input type=radio name=operator1 value=/> / <br><br>";
                    }

                    if ($operator1 == "/")
                    {
                        echo "<input type=radio name=operator1 value=+> + :";
                        echo "<input type=radio name=operator1 value=-> - :";
                        echo "<input type=radio name=operator1 value=*> * :";
                        echo "<input type=radio name=operator1 value=/ checked> / :<br><br>"; 
                    }

                    /*2*/
                    echo "Num 2 : <input type=text name=number2 value=$number2><br><br>";
                    if ($operator2 == "+") 
                    {
                        echo "<input type=radio name=operator2 value=+ checked > + :";
                        echo "<input type=radio name=operator2 value=-> - :";
                        echo "<input type=radio name=operator2 value=*> * :";
                        echo "<input type=radio name=operator2 value=/> / :<br><br>";
                    }

                    if ($operator2 == "-")
                    {
                        echo "<input type=radio name=operator2 value=+> + :";
                        echo "<input type=radio name=operator2 value=- checked> - :";
                        echo "<input type=radio name=operator2 value=*> * :";
                        echo "<input type=radio name=operator2 value=/> / :<br><br>";
                    }

                    if ($operator2 == "*")
                    {
                        echo "<input type=radio name=operator2 value=+> + ";
                        echo "<input type=radio name=operator2 value=-> - ";
                        echo "<input type=radio name=operator2 value=* checked> * ";
                        echo "<input type=radio name=operator2 value=/> / <br><br>";
                    }

                    if ($operator2 == "/")
                    {
                        echo "<input type=radio name=operator2 value=+> + :";
                        echo "<input type=radio name=operator2 value=-> - :";
                        echo "<input type=radio name=operator2 value=*> * :";
                        echo "<input type=radio name=operator2 value=/ checked> / :<br><br>";
                    }
        
                    echo "Num 3 : <input type=text name=number3 value=$number3><br><br>";

                    echo "<input type=submit name=submit value=Submit />";
                } 

                /*input*/
                else 
                {
                    echo "Num 1 : <input type=text name=number1  /> <br><br>";
                    echo "<input type=radio name=operator1 value=+> + :";
                    echo "<input type=radio name=operator1 value=-> - :";
                    echo "<input type=radio name=operator1 value=*> * :";
                    echo "<input type=radio name=operator1 value=/> / :<br><br>";
                

                    echo "Num 2 : <input type=text name=number2  /><br><br>";
                    echo "<input type=radio name=operator2 value=+> + :";
                    echo "<input type=radio name=operator2 value=-> - :";
                    echo "<input type=radio name=operator2 value=*> * :";
                    echo "<input type=radio name=operator2 value=/> / :<br><br>";
                    

                    echo "Num 3 : <input type=text name=number3  /> <br><br>";
                    echo "<input type=submit name=submit value=Submit />";
                }
            ?>
        </form>

        <br>
       <?php 
            if (isset($_GET['submit'])) 
            {
                echo "Sum of number = ", ($sum);
            }
        ?>
    </center>
</body>
</html>