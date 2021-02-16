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
                if($char == " ")$char = 'space';
                echo ''.$char . ': Ascii = ' . ord($char) . ' <br> ';
            }
            
        }
    }
    function show_form()
    {
        echo "<center><h1> HW2-2:Find Ascii</h1>";
        echo '<form method="get" action="HW2-FindWord.php">';
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