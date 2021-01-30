<!DOCTYPE html>
<html>
<head>
<title>Cal GPA</title>
</head>
<body>
<center>
<h1>Cal GPA<br></h1>

<h3>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;วิชา&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;หน่วยกิต&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;เกรด</h3>

<?php
    if (isset($_GET['submit'])) 
    {
        $obj1 = $_GET['obj1'];
        $obj2 = $_GET['obj2'];
        $obj3 = $_GET['obj3'];
        $obj4 = $_GET['obj4'];
        $obj5 = $_GET['obj5'];
        $credit1 = $_GET['credit1'];
        $credit2 = $_GET['credit2'];
        $credit3 = $_GET['credit3'];
        $credit4 = $_GET['credit4'];
        $credit5 = $_GET['credit5'];
        $grade1 = $_GET['grade1']; 
        $grade2 = $_GET['grade2'];
        $grade3 = $_GET['grade3'];
        $grade4 = $_GET['grade4'];
        $grade5 = $_GET['grade5'];
        $numcredit1 = 0;
        $numcredit2 = 0;
        $numcredit3 = 0;
        $numcredit4 = 0;
        $numcredit5 = 0;
        $numgrade1 = 0;
        $numgrade2 =0;
        $numgrade3 = 0;
        $numgrade4 = 0;
        $numgrade5 = 0;

        if($credit1 == '1')
        {
           $numcredit1 = 1;
        }
        if($credit1 == '2')
        {
            $numcredit1 = 2;
        }
        if($credit1 == '3')
        {
            $numcredit1 = 3;
        }

        //เกรด
        if ($grade1 == '1')
        {
            $numgrade1 = 4;
        }
        if ($grade1 == '2')
        {
            $numgrade1 = 3.5;
        }
        if ($grade1 == '3')
        {
            $numgrade1 = 3;
        }
        if ($grade1 == '4')
        {
            $numgrade1 = 2.5;
        }
        if ($grade1 == '5')
        {
            $numgrade1 = 2;
        }
        if ($grade1 == '6')
        {
            $numgrade1 = 1.5;
        }
        if ($grade1 == '7')
        {
            $numgrade1 = 1;
        }
        if ($grade1 == '8')
        {
            $numgrade1 = 0;
        }

        /*วิชาที่2*/ 
        //หน่วยกิต
        if($credit2 == '1')
        {
            $numcredit2 = 1;
        }
        if($credit2 == '2')
        {
            $numcredit2 = 2;
        }
        if($credit2 == '3')
        {
            $numcredit2 = 3;
        }

        //เกรด
        if ($grade2 == '1')
        {
            $numgrade2 = 4;
        }
        if ($grade2 == '2')
        {
            $numgrade2 = 3.5;
        }
        if ($grade2 == '3')
        {
            $numgrade2 = 3;
        }
        if ($grade2 == '4')
        {
            $numgrade2 = 2.5;
        }
        if ($grade2 == '5')
        {
            $numgrade2 = 2;
        }
        if ($grade2 == '6')
        {
            $numgrade2 = 1.5;
        }
        if ($grade2 == '7')
        {
            $numgrade2 = 1;
        }
        if ($grade2 == '8')
        {
            $numgrade2 = 0;
        }

        /*วิชาที่3*/  
        //หน่วยกิต
        if($credit3 == '1')
        {
            $numcredit3 = 1;
        }
        if($credit3 == '2')
        {
            $numcredit3 = 2;
        }
        if($credit3 == '3')
        {
            $numcredit3 = 3;
        }
        //เกรด
        if ($grade3 == '1')
        {
            $numgrade3 = 4;
        }
        if ($grade3 == '2')
        {
            $numgrade3 = 3.5;
        }
        if ($grade3 == '3')
        {
            $numgrade3 = 3;
        }
        if ($grade3 == '4')
        {
            $numgrade3 = 2.5;
        }
        if ($grade3 == '5')
        {
            $numgrade3 = 2;
        }
        if ($grade3 == '6')
        {
            $numgrade3 = 1.5;
        }
        if ($grade3 == '7')
        {
            $numgrade3 = 1;
        }
        if ($grade3 == '8')
        {
            $numgrade3 = 0;
        }

        /*วิชาที่4*/  
        //หน่วยกิต
        if($credit4 == '1')
        {
            $numcredit4 = 1;
        }
        if($credit4 == '2')
        {
            $numcredit4 = 2;
        }
        if($credit4 == '3')
        {
            $numcredit4 = 3;
        }

        //เกรด
        if ($grade4 == '1')
        {
            $numgrade4 = 4;
        }
        if ($grade4 == '2')
        {
            $numgrade4 = 3.5;
        }
        if ($grade4 == '3')
        {
            $numgrade4 = 3;
        }
        if ($grade4 == '4')
        {
            $numgrade4 = 2.5;
        }
        if ($grade4 == '5')
        {
            $numgrade4 = 2;
        }
        if ($grade4 == '6')
        {
            $numgrade4 = 1.5;
        }
        if ($grade4 == '7')
        {
            $numgrade4 = 1;
        }
        if ($grade4 == '8')
        {
            $numgrade4 = 0;
        }

        /*วิชาที่5*/ 
        //หน่วยกิต
        if($credit5 == '1')
        {
            $numcredit5 = 1;
        }
        if($credit5 == '2')
        {
            $numcredit5 = 2;
        }
        if($credit5 == '3')
        {
            $numcredit5 = 3;
        }
        //เกรด
        if ($grade5 == '1')
        {
            $numgrade5 = 4;
        }
        if ($grade5 == '2')
        {
            $numgrade5 = 3.5;
        }
        if ($grade5 == '3')
        {
            $numgrade5 = 3;
        }
        if ($grade5 == '4')
        {
            $numgrade5 = 2.5;
        }
        if ($grade5 == '5')
        {
            $numgrade5 = 2;
        }
        if ($grade5 == '6')
        {
            $numgrade5 = 1.5;
        }
        if ($grade5 == '7')
        {
            $numgrade5 = 1;
        }
        if ($grade5 == '8')
        {
            $numgrade5 = 0;
        }
        
    }
?>

<form>
    <?php
        if (isset($_GET['submit'])) 
            {
                /*วิชาที่1*/   
                echo "<h2>1. <input type = text name = obj1 value = $obj1>";
                echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";

                //หน่วยกิต
                
                if($credit1 == '1')
                {
                    echo "<select name = credit1 ><option value=1 cheack>1</select>";
                }
                if($credit1 == '2')
                {
                    echo "<select name = credit1 ><option value=2 cheack>2</select>";
                }
                if($credit1 == '3')
                {
                    echo "<select name = credit1 ><option value=3 cheack>3</select>";
                }
                //เกรด
                echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
                if ($grade1 == '1')
                {
                    echo "<select name = grade2 > <option value=1 cheack >A </select><br>";
                }
                if ($grade1 == '2')
                {
                    echo "<select name = grade2 > <option value=2 cheack >B+</select><br>";
                }
                if ($grade1 == '3')
                {
                    echo "<select name = grade2 > <option value=3 cheack >B </select><br>";
                }
                if ($grade1 == '4')
                {
                    echo "<select name = grade2 > <option value=4 cheack >C+</select><br>";
                }
                if ($grade1 == '5')
                {
                    echo "<select name = grade2 > <option value=5 cheack >C </select><br>";
                }
                if ($grade1 == '6')
                {
                    echo "<select name = grade2 > <option value=6 cheack >D+</select><br>";
                }
                if ($grade1 == '7')
                {
                    echo "<select name = grade2 > <option value=7 cheack >D </select><br>";
                }
                if ($grade1 == '8')
                {
                    echo "<select name = grade2 > <option value=8 cheack >F </select><br>";
                }

                /*วิชาที่2*/
                echo "2. <input type = text name = obj1 value = $obj2>";
                //หน่วยกิต
                echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";

                if($credit2 == '1')
                {
                    echo "<select name = credit2 ><option value=1 cheack>1</select>";
                }
                if($credit2 == '2')
                {
                    echo "<select name = credit2 ><option value=2 cheack>2</select>";
                }
                if($credit2 == '3')
                {
                    echo "<select name = credit2 ><option value=3 cheack>3</select>";
                }
                //เกรด
                echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
                if ($grade2 == '1')
                {
                    echo "<select name = grade2 > <option value=1 cheack >A </select><br>";
                }
                if ($grade2 == '2')
                {
                    echo "<select name = grade2 > <option value=2 cheack >B+</select><br>";
                }
                if ($grade2 == '3')
                {
                    echo "<select name = grade2 > <option value=3 cheack >B </select><br>";
                }
                if ($grade2 == '4')
                {
                    echo "<select name = grade2 > <option value=4 cheack >C+</select><br>";
                }
                if ($grade2 == '5')
                {
                    echo "<select name = grade2 > <option value=5 cheack >C </select><br>";
                }
                if ($grade2 == '6')
                {
                    echo "<select name = grade2 > <option value=6 cheack >D+</select><br>";
                }
                if ($grade2 == '7')
                {
                    echo "<select name = grade2 > <option value=7 cheack >D </select><br>";
                }
                if ($grade2 == '8'){
                    echo "<select name = grade2 > <option value=8 cheack >F</select><br>";
                }

                /*วิชาที่3*/
                echo "3. <input type = text name = obj1 value = $obj3>";
                //หน่วยกิต
                echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
                if($credit3 == '1')
                {
                    echo "<select name = credit3 ><option value=1 cheack>1</select>";
                }
                if($credit3 == '2')
                {
                    echo "<select name = credit3 ><option value=2 cheack>2</select>";
                }
                if($credit3 == '3')
                {
                    echo "<select name = credit3 ><option value=3 cheack>3</select>";
                }
                //เกรด
                echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
                if ($grade3 == '1')
                {
                    echo "<select name = grade3 > <option value=1 cheack >A </select><br>";
                }
                if ($grade3 == '2')
                {
                    echo "<select name = grade3 > <option value=2 cheack >B+</select><br>";
                }
                if ($grade3 == '3')
                {
                    echo "<select name = grade3 > <option value=3 cheack >B </select><br>";
                }
                if ($grade3 == '4')
                {
                    echo "<select name = grade3 > <option value=4 cheack >C+</select><br>";
                }
                if ($grade3 == '5')
                {
                    echo "<select name = grade3 > <option value=5 cheack >C </select><br>";
                }
                if ($grade3 == '6')
                {
                    echo "<select name = grade3 > <option value=6 cheack >D+</select><br>";
                }
                if ($grade3 == '7')
                {
                    echo "<select name = grade3 > <option value=7 cheack >D </select><br>";
                }
                if ($grade3 == '8')
                {
                    echo "<select name = grade3 > <option value=8 cheack >F </select><br>";
                }

                /*วิชาที่4*/
                 echo "4. <input type = text name = obj1 value = $obj4>";
                //หน่วยกิต
                echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
                if($credit4 == '1')
                {
                    echo "<select name = credit4 ><option value=1 cheack>1</select>";
                }
                if($credit4 == '2')
                {
                    echo "<select name = credit4 ><option value=2 cheack>2</select>";
                }
                if($credit4 == '3')
                {
                    echo "<select name = credit4 ><option value=3 cheack>3</select>";
                }

                //เกรด
                echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
                if ($grade4 == '1')
                {
                    echo "<select name = grade4 > <option value=1 cheack >A </select><br>";
                }
                if ($grade4 == '2')
                {
                    echo "<select name = grade4 > <option value=2 cheack >B+</select><br>";
                }
                if ($grade4 == '3')
                {
                    echo "<select name = grade4 > <option value=3 cheack >B </select><br>";
                }
                if ($grade4 == '4')
                {
                    echo "<select name = grade4 > <option value=4 cheack >C+</select><br>";
                }
                if ($grade4 == '5')
                {
                    echo "<select name = grade4 > <option value=5 cheack >C </select><br>";
                }
                if ($grade4 == '6')
                {
                    echo "<select name = grade4 > <option value=6 cheack >D+</select><br>";
                }
                if ($grade4 == '7')
                {
                    echo "<select name = grade4 > <option value=7 cheack >D </select><br>";
                }
                if ($grade4 == '8')
                {
                    echo "<select name = grade4 > <option value=8 cheack >F </select><br>";
                }

                /*วิชาที่5*/
                echo "5. <input type = text name = obj1 value = $obj5>";
                //หน่วยกิต
                echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
                if($credit5 == '1')
                {
                    echo "<select name = credit5 ><option value=1 cheack>1</select>";
                }
                if($credit5 == '2')
                {
                    echo "<select name = credit5 ><option value=2 cheack>2</select>";
                }
                if($credit5 == '3')
                {
                    echo "<select name = credit5 ><option value=3 cheack>3</select>";
                }

                //เกรด
                echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
                if ($grade5 == '1')
                {
                    echo "<select name = grade5 > <option value=1 cheack >A </select><br>";
                }
                if ($grade5 == '2')
                {
                    echo "<select name = grade5 > <option value=2 cheack >B+</select><br>";
                }
                if ($grade5 == '3')
                {
                    echo "<select name = grade5 > <option value=3 cheack >B </select><br>";
                }
                if ($grade5 == '4')
                {
                    echo "<select name = grade5 > <option value=4 cheack >C+</select><br>";
                }
                if ($grade5 == '5')
                {
                    echo "<select name = grade5 > <option value=5 cheack >C </select><br>";
                }
                if ($grade5 == '6')
                {
                    echo "<select name = grade5 > <option value=6 cheack >D+</select><br>";
                }
                if ($grade5 == '7')
                {
                    echo "<select name = grade5 > <option value=7 cheack >D </select><br>";
                }
                if ($grade5 == '8')
                {
                    echo "<select name = grade5 > <option value=8 cheack >F </select></h2><br>";
                }
            }

        else {
        echo "<h2>1. <input type =text name = obj1>";
        echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
        echo "<select name = credit1 >
        <option value=1>1<option value=2>2<option value=3>3</select>";
        echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
        echo "<select name = grade1 >
        <option value=1>A<option value=2>B+<option value=3>B<option value=4>C+
        <option value=5>C<option value=6>D<option value=7>D+<option value=8>F</select><br>";

        echo "2. <input type = text name = obj2>";
        echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
        echo "<select name = credit2 > 
        <option value=1>1<option value=2>2<option value=3>3</select>";
        echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
        echo "<select name = grade2 > 
        <option value=1>A<option value=2>B+<option value=3>B<option value=4>C+
        <option value=5>C<option value=6>D<option value=7>D+<option value=8>F</select><br>";

        echo "3. <input type = text name = obj3>";
        echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
        echo "<select name = credit3 >
        <option value=1>1<option value=2>2<option value=3>3</select>";
        echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
        echo "<select name = grade3 >
        <option value=1>A<option value=2>B+<option value=3>B<option value=4>C+
        <option value=5>C<option value=6>D<option value=7>D+<option value=8>F</select><br>";

        echo "4. <input type = text name = obj4>";
        echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
        echo "<select name = credit4 > 
        <option value=1>1<option value=2>2<option value=3>3</select>";
        echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
        echo "<select name = grade4 > 
        <option value=1>A<option value=2>B+<option value=3>B<option value=4>C+
        <option value=5>C<option value=6>D<option value=7>D+<option value=8>F</select><br>";

        echo "5. <input type = text name = obj5>";
        echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
        echo "<select name = credit5 > 
        <option value=1>1<option value=2>2<option value=3>3</select>";
        echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
        echo "<select name = grade5 >
        <option value=1>A<option value=2>B+<option value=3>B<option value=4>C+
        <option value=5>C<option value=6>D<option value=7>D+<option value=8>F</select><br><br>";

        echo "<input type=submit name=submit value=Submit />";
        }
    
    ?>
</form>

    <?php
        if (isset($_GET['submit'])) 
        {   
            $totalgrade = ($numcredit1*$numgrade1)+($numcredit2*$numgrade2)+($numcredit3*$numgrade3)+($numcredit4*$numgrade4)+($numcredit5*$numgrade5);
            $totalcredit = $numcredit1+$numcredit2+$numcredit3+$numcredit4+$numcredit5;
            $GPA = $totalgrade/$totalcredit;
            echo  "<br>";
            echo "GPA = ";
            echo number_format($GPA, 2, '.', '');
            echo "<br>";
            echo "<input type=submit name=reset value=Reset />";
        }
    ?>
</center>
</body>
</html>