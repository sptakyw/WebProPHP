<!DOCTYPE html>
<html>
<body>
    <?php
            if (isset($_GET['submit'])) {
                $odd = 0;
                $even = 0;
                $zero = 0;
                $text = $_GET['name'];
                $i = 0;
                $a = -1;
                echo "<br>Num = $text<br>";
                for (; $i < strlen($text); $i++) {
         
                    if ($i == 0) {
                        if (substr($text, 0, 1) == "0") {
                            $zero++;
                        } else if (substr($text, 0, 1) % 2 == 0) {
                            $even++;
                        } else {
                            $odd++;
                        }
                    }else if($i == 1){
                        if (substr($text, 1, 1) == "0") {
                            $zero++;
                        } else if (substr($text, 1, 1) % 2 == 0) {
                            $even++;
                        } else {
                            $odd++;
                        }
                    } 
                    else if (substr($text, $i, $a) == "0") {
                        $zero++;
                    } else if (substr($text, $i, $a) % 2 == 0) {
                        $even++;
                    } else {
                        $odd++;
                    }
                    $a++;
                }
                echo "<table border=1>";
                echo "<tr><td>Odd = </td>";
                echo "<td>".$odd."</td>";
                echo "</tr>";
                echo "<tr><td>Even = </td>";
                echo "<td>".$even."</td>";
                echo "</tr>";
                echo "<tr><td>Zero = </td>";
                echo "<td>".$zero."</td>";
                echo "</tr>";
                echo "</table>";
            }
    ?>
    
    <form>
        input : <input type="text" name="name">
        <input type=submit name=submit value=Submit />
    </form>
    

</body>
</html>