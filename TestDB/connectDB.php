<?php
    $servername = "" ;
    $username = "" ;
    $password = "" ;

    //create connection
    $conn = new mysqli($servername, $username, $password) ;

    //check connection
    if ($conn -> connect_error)
    {
        die ("Connection failed : " .$conn->connect_error) ;
    }
    echo "Connect successfully" ;
?>