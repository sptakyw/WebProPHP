<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>ตัวอย่างที่ 9-5 </title></head>
<body>
    <?
        $letters[0] = 'A';
        $letters[1] = 'B';
        $letters[2] = 'C';
        $letters[4] = 'E';
        $letters[3] = 'D';
        $letters[5] = 'F';
        echo "<b>Used foreach access to array</b><br>";

        foreach( $letters as $char ) {
            echo $char . " , ";
        }
        echo "<br><br>";
        $max = count( $letters);
        echo "<b>Used for and count access to array</b><br>";
        for( $n = 0 ; $n < $max ; $n++ ) {
            echo $letters[ $n ] . " , ";
        }
        echo "<br>";
    ?>
</body>
</html>
