<html>
<head>
    <title> แสดงการสร้างและใช้งานค่าคงที่ </title></head>
<body>
    <font size="3">
        <?php
            define("x", 10);
            echo "The value of the constant is x. <br />";
            echo "The value of the constant is <b>";
            echo x;
            echo "</b>";
            echo "<br>" ;
            $x = 20 ;
            echo "x = " . x ;
            echo "<br>" ;
            echo "\$x = " . $x ;
        ?>
    </font>
</body>
</html>