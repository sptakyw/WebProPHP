<html>
<body>
    <?php
    $fp = @fopen("sample.txt" , "r");
    if ($fp) {
        while ( !feof($fp) ) {
            $data = @fgets($fp );
            echo $data . "<br>";
        }
        fclose( $fp);
    }
    else {
        die ("ไม่สามารถเปิดไฟล์ Sample.txt เพื่ออ่านได้ !</body></html>");
    }
    ?>
</body>
</html>