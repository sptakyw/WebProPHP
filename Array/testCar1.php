<html>
<body>
    <form method="POST" action="testCar1.php">
    <?php
    $nameArray = array();
    for($i=0;$i < 10;$i++)
    { 
        echo '<input type = "text" name = "members[]"><br>';
    }
    ?>

    <input type = "submit" value = "Submit Information"><br>
    <form>

    <?php
        $mm = $_POST['members'];
        for($i=0;$i < 10;$i++)
        {
            echo $mm[$i],'<br>';
        }
    ?>
</body>
</html>