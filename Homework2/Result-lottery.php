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
    $random = rand(0,99);
    $num = $_GET['lucky'];
    $money = $_GET['money'];
    $getmoney = $money*60;
    if($random == $num){
        echo "ยินดีด้วยคุณถูกรางวัล";
        echo "<br>คุณได้เงินรางวัล". $getmoney. " บาท";
        echo "<form method='get' action='lottery.php'>";
        echo "<button type='submit'>back</button>";
        echo "</form>";
        echo "<br>รางวัล เลขที่ออก คือ : ". $random ;
    }
    else{
        echo "เสียใจด้วยคุณไม่ถูกรางวัล<br>";
        echo "<form method='get' action='lottery.php'>";
        echo "<button type='submit'>back</button>";
        echo "</form>";
        
        echo "<br>รางวัล เลขที่ออก คือ : ". $random ;
    }
    ?>
</body>
</html>