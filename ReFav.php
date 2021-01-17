<html lang = "en">
    <head>
        <meta charset = "UTF-8">
        <title> My favorite song is .. </title>
    </head>
    <body>
        
        <?php
        $s = $_GET['s'] ;

        echo "<p>" ;
        echo "<b> My favorite song is </b> <br/>" ;
        echo "Song : <i> $s </i> <br/>" ;
        
        echo "<a href = 'Fav.php'> <big> Back </big> </a>" ;
        ?>
    
</body>
</html>