<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    function find_char($text)
    {
        for ($i = 0; $i < strlen($text); $i++) {
            $check = true;
            $char = substr($text, $i, 1);
            for ($r = $i - 1; $r > -1; $r--) {
                if ($char == substr($text, $r, 1)) {
                    $check = false;
                }
            }
            if ($check) {
                $count = 0;
                for ($o = $i; $o < strlen($text); $o++) {
                    if ($char == substr($text, $o, 1)) {
                        $count++;
                    }
                }
                if($char == " ")$char = 'space';
                echo ''.$char . '=' . $count . ' , ';
            }
            
        }
    }
    function show_form()
    {
        echo "<center><h1> HW2-1:Find Character</h1>";
        echo '<form method="get" action="HW1-FineCharacter.php">';
        echo 'Your Text : <input type="text" name="text" size="10" value=""/><br><br>';
        echo '<input type="submit" value=" submit " /><input type="reset" value=" Clear " />';
        echo '</form></center>';
    }
    if (isset($_GET['text'])) {
        $text = $_GET['text'];
        show_form();
        echo '<hr>';
        echo '<center><h3> Count Char in Sentence</h3><br><h4>';
        find_char($text);
        echo '</h4></center>';
    } else {
        show_form();
    }
    ?>
</body>

</html>