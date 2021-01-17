<html>
    <head>
        <title> MUSIC </title>
    </head>
    <body>

        <?php
            $music1 = $_GET['music1'] ;
            $Operator = $_GET['Operator'] ;

            echo "<table align = 'center' width = '40%' border = '1'>" ;
            echo "<tr><td colspan = '2' align = 'center'><b> Favorite song </b></td></tr>" ;
            echo "<tr><td Operator : </td> <td> <i> $Operator </i> </td> </tr>" ;

            echo "<tr><td> Result : </td><td> <i>" ;
            if ($operator == "1")
                echo ($music1)."</i> </td></tr>" ;

       // <tr>
           // <td colspan = "2" align = "center"> <big> MUSIC <big> </td></td>
        //</tr>
        

    echo "</table>"
        ?>

    </body>
</html> 