<?php
    $name = $_GET['name'];
    $last = $_GET['last'];
    $email = $_GET['email'];
    $nameTB = $_GET['nameTB'];
    $nameDB = $_GET['nameDB'];
    $servername = "localhost";
    $username = "root";
    $password = "12345";
    // Create connection
    $conn = new mysqli($servername, $username, $password, $nameDB);
    // Check connection
    if ($conn->connect_error) 
    {
        die("Connection failed: " . $conn->connect_error);
    }
    $sql = "INSERT INTO $nameTB (firstname, lastname, email)
    VALUES ('$name', '$last', '$email')";
    if ($conn->query($sql) === TRUE) 
    {
        echo "New record created successfully";
    } else 
    {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
    $conn->close();
?>