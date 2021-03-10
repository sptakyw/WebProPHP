<!DOCTYPE html>
<body>
    ต้องการใส่กี่ค่า<br>
    <form method="POST" action="test.php">
    <input type="number" name="num" required placeholder="Enter number"><br><br><hr>
    <form>
    <form method="POST" action="test.php">
    <?php
    $num = $_POST['num'];
    ;$nameArray = array();
    for($i=0;$i < $num;$i++){ 
    echo '<input type="text" name="members[]"required placeholder="Enter Car name"><br>';
    }
    ?>
    <input type="submit" value=" Submit Information "><br>
    <form>
    <?php
        $mm = $_POST['members'];
        for($i=0;$i < $num;$i++){
            echo $mm[$i],'<br>';
        }
    ?>
</body>
</html>
