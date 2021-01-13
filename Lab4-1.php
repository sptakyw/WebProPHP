<html>
    <head>
        <title> การกำหนดค่าตัวแปร </title>
</head>
<body>
    <?php
    $x = 100 ;
    $y = "200" ;
    $z = '300' ;
    $add = $x + $y ;
    $sub = $z - $y ;
    $mul = $y * $z ;
    $div = $mul / $z ;

    $message = "Hello world" ;
    $messageadd = "ผลบวก " .$x."+" .$y." = ".$add ;
    $messagesub = "ผลลบ " .$z."-" .$y." = ".$sub ;
    $messagemul = "ผลคูณ " .$y."*" .$z." = ".$mul ;
    $messagediv = "ผลหาร " .$mul."+" .$z." = ".$div ;

    echo $messageadd ;      echo "<br />" ;
    echo $messagesub ;      echo "<br />" ;
    echo $messagemul ;      echo "<br />" ;
    echo $messagediv ;      echo "<br />" ;
?>
</body>
</html>