<!DOCTYPE html>
<html lang="en">

<head>
    <title> Calgrade </title>
</head>

<body>
    <center>
        <h1>Cal Grade</h1>
        <?php
            if (isset($_GET['submit'])) 
            {
              $final = $_GET['final'];
              $midterm = $_GET['midterm'];
              $assign = $_GET['assign'];
              $homework = $_GET['homework'];
              $total = $final+$midterm+$assign+$homework;
              $grade = "F";

              if($total <= 49)
              {
                $grade = "F";
              }

              else if($total >= 50 && $total <= 54)
              {
                $grade = "D";
              }

              else if($total >= 55 && $total <= 59)
              {
                $grade = "D+";
              }

              else if($total >= 60 && $total <= 64 )
              {
                $grade = "C";
              }

              else if($total >= 65 && $total <= 69 )
              {
                $grade = "C+";
              }

              else if($total >= 70 && $total <= 74)
              {
                $grade = "B";
              }

              else if($total >= 75 && $total <= 79)
              {
                $grade = "B+";
              }

              else if($total >= 80 && $total <= 100)
              {
                $grade = "A";
              }

              else
              {
                $grade = "<font color = red>The grade cannot be calculated.</font>";
              }
            }
        ?>

        <form>
            <?php
                if (isset($_GET['submit']))
                {
                    echo "<h1>Final : ".$final."<br>";
                    echo "Midterm : ".$midterm."<br>";
                    echo "Assignment : ".$assign."<br>";
                    echo "Homework : ".$homework."<br>";
                    echo "Total Score = ".$total."<br>";
                    echo "Your Grade is : ".$grade."<br>";
                }

                else 
                {
                    echo "<h2>Final(0-30) : <input type=number name=final  /> <br><br>";
                    echo "Midterm(0-30) : <input type=number name=midterm  /><br><br>";
                    echo "Assignment(0-20) : <input type=number name=assign  /><br><br>";
                    echo "Homework(0-20) : <input type=number name=homework  /> </h2><br>";
                    echo "<input type=submit name=submit value=Submit />";
                }
                ?>
        </form>
     </center>
</body>
</html>
