<?php
    echo getcwd()."'<br>'";
    $dir = 'C:\xampp1\htdocs\WebProPHP';
    $files = scandir($dir);
    foreach($files as $value){
    echo $value."<br>";
    }
    echo getcwd()."<br>";
    chdir("..\..\..\\"); //ถอยไป3ชั้น
    echo getcwd()."<br>";
    chdir ("htdocs\WebProPHP\Chapter7") ; //ขึ้นไป3ชั้น
    echo getcwd() ;
?>
