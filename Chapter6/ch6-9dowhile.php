<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title> ตัวอย่าง Control statement ที่ 9 </title>
</head>
</head>

<body>
    <form>
        start num : <input type="text" name="name1"> <br>
        end num : <input type="text" name="name2"> <br>
        divide num : <input type="text" name="name3"> <br>
        <input type=submit name=submit value=Submit />
    </form>

    <?php
    if (isset($_GET['submit'])) {
        $divide = $_GET['name3'];
        $text = '';
        $num = $_GET['name1']; 
        do {
            if ($num % $divide == 0) {
                $text = "$text  $num ";
            }
            $num++;
        } while ($num <= $_GET['name2']);

        echo "มีเลข $text ที่หารด้วย $divide ลงตัว";
    }
    ?>
</body>

</html>