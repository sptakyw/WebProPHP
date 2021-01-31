<html>
<head>
    <title> Student Score </title>
</head>
<body bgcolor = "#DCDCDC">
<form method = "get" action = "pp.php">
    <table border = "1" align = "center" width = "500">
        <tr>
            <td colspan = "2" align = "center"> Student Score </td>
        <tr>

        <tr>
            <td> Enter name : </td>
            <td><input type = "text" name = "name" size = "50" value = "" /> </td>
        </tr>

        

        <tr>
            <td> Enter Score1 : </td>
            <td><input type = "text" name = "score1" size = "50" value = "" /> </td>
        </tr>
            <td> Enter Score2 : </td>
            <td><input type = "text" name = "score2" size = "50" value = "" /> </td>
        </tr>

        <tr>
            <td> operator </td>
            <td align = "center">
                <input type = "radio" name = "operator" value = "+"> + <br>
                <input type = "radio" name = "operator" value = "-"> - <br>
            </td>
        </tr>

        <tr>
            <td colspan = "2" align = "center">
                <input type = "submit" value = "OK" />
            </td>
        </tr>

    <?php

        $score1 = $_GET['score1'] ;
        $score2 = $_GET['score2'] ;
        $operater = $_GET['operator'] ;
        $name = $_GET['name'] ;

        echo "<table align = 'center' width = '40%' border = '1'> " ;
        echo "<tr><td colspan = '2' align = 'center'> <b> Student Score </b> </td></tr>" ;
        echo "<tr><td> name : </td><td> <i> $name </i> </td></tr>" ;
        echo "<tr><td> score1 : </td><td> <i> $score1 </i> </td></tr>" ;
        echo "<tr><td> score2 : </td><td> <i> $score2 </i> </td></tr>" ;
        //echo "<tr><td> operator : </td><td> <i> $operator </i> </td></tr>" ;

        echo "<tr><td> Score </td</tr> <i>" ;
        if ($operater == "+")
            echo ($score1 + $score2)." <i> </td></tr>" ;
        
        if ($operater == "-")
            echo ($score1 - $score2)." <i> </td></tr>" ;
        
        echo "</table>"
        
    ?>
</table>
</form>
</body>
</html>