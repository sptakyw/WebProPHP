<html>
<head>
    <title> jsonobj </title>
</head>
<body bgcolor = "#E6E6FA">

<table border = "1" align = "center" width = "500" bgcolor = "#CC99CC">
        <tr>
            <td colspan = "4" align = "center"> SCORE EXAM / 30 </td>
        </tr>

        <tr> 
            <td align = "center"> Subject </td>
            <td align = "center"> John </td>
            <td align = "center"> David </td>
            <td align = "center"> Julia </td>
        </tr>

        <tr>
            <td align = "center"> English | ปรนัย : อัตนัย </td>
            <td align = "center"> 12 : 3 </td>
            <td align = "center"> 8 : 4 </td>
            <td align = "center"> 20 : 5 </td>
        </tr>

        <tr>
            <td align = "center"> Math | ปรนัย : อัตนัย </td>
            <td align = "center"> 6 : 2 </td>
            <td align = "center"> 6 : 0 </td>
            <td align = "center"> 18 : 3 </td>
        </tr>

        <tr>
            <td align = "center"> Science | ปรนัย : อัตนัย </td>
            <td align = "center"> 6 : 1 </td>
            <td align = "center"> 12 : 2 </td>
            <td align = "center"> 15 : 4 </td>
        </tr>


        <?php
            $jsonobj = '{"Johneng":15, "Johnmath":8, "Johnscie":7, "Davideng":12, "Davidmath":6, "Davidscie":14, "Juliaeng":25, "Juliamath":21, "Juliascie":19}';

            $obj = json_decode($jsonobj);

            echo "&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; " ;
            echo "Total Score" ;
            echo "<br>" ;
            echo "<br>" ;

            echo "John's Score" ;
            echo "&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; " ; 
            echo "David's Score" ; 
            echo "&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; " ; 
            echo "Julia's Score" ;

            echo "<br>" ;

            echo "&nbsp; &nbsp; &nbsp; &nbsp; " ;
            echo $obj->Johneng ;
            echo "&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; " ;
            echo $obj->Davideng ;
            echo "&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; " ;
            echo $obj->Juliaeng ;

            echo "<br>" ;

            echo "&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; " ;
            echo $obj->Johnmath ;
            echo "&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; " ;
            echo $obj->Davidmath ;
            echo "&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; " ;
            echo $obj->Juliamath ;

            echo "<br>" ;

            echo "&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; " ;
            echo $obj->Johnscie ;
            echo "&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; " ;
            echo $obj->Davidscie ; 
            echo "&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; " ;
            echo $obj->Juliascie ; 
        ?>

</body>
</html>