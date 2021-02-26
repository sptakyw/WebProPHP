<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<center>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <center>
        <?php
        if (isset($_POST['submit'])) {
            echo "<h1>Bingo</h1>";
            $number_return = $_POST['result'];
            $a = 0;
            echo "<table border = '1' style='width:1000px; text-align: center'>";
            for ($i = 0; $i < 5; $i++) {
                echo "<tr>";
                for ($j = 0; $j < 5; $j++) {
                    echo "<td> $number_return[$a] </td>";
                    $a++;
                }
                echo "</tr>";
            }
            echo '</table><br>';

            $check = 0;
            $time = 0;
            do{
                $time++;
                $random = rand(0, 99);
                $check_time = false;
                for ($j = 0; $j < 25; $j++) {
                    if($number_return[$j] == $random){
                        $check++;
                        $check_time = true;
                    } 
                }
                if($check_time){
                    echo "ครั้งที่ $time = $random => ยินดีด้วย คุณมีเลขนี้ <br>";
                }else{
                    echo "ครั้งที่ $time = $random => เสียใจด้วย คุณไม่มีเลขนี้ <br>";
                }
                
            }while($check <= 5);
            echo "<h2 style='color:red'> คุณ จบ Bingo เกมนี้ ใน ครั้งที่ $time </h2> ";

        } else {
            $number;
            echo "<h1>Bingo</h1>";
            echo "<table border = '1' style='width:1000px; text-align: center'>";
            for ($i = 0; $i < 5; $i++) {
                echo "<tr>";
                for ($j = 0; $j < 5; $j++) {
                    $random = rand(0, 99);
                    echo "<td> $random </td>";
                    $number[] = $random;
                }
                echo "</tr>";
            }
            echo '</table>';


            echo '<form action="bingo.php" method="post">';
            foreach ($number as $value) {
                echo '<input type="hidden" name="result[]" value="' . $value . '">';
            }
            echo "<br>";
            echo '<input type="submit"  name=submit value="Start Game"/>';
            echo '</form>';
        }
        ?>
</body>

</html>