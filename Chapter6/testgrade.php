<html>
<head>
<title> Test Grade </title>
</head>
</head>
<body>
    <?php
        $score = 67;

        echo "You score is  : <b> $score </b><br/>";

        if ($score >= 80 && $score <= 100)
            {
                echo "You Grade is : <b> A </b><br/>";
            }
        elseif ($score >= 70 && $score <= 79)
            {
                echo "You Grade is : <b> B </b><br/>";
            }
        elseif ($score >= 60 && $score <= 69)
            {
                echo "You Grade is : <b> C </b><br/>";
            }
        elseif ($score >= 50 && $score <= 59)
            {
                echo "You Grade is : <b> D </b><br/>";
            }
        else
        echo "You Grade is : <b> F </b><br/>";
    ?>
</body>
</html>
