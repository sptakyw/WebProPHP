<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<?php
function checkNum($start, $end, $div)
{
    $result = [];
    $count = 0;
    for (; $start <= $end; $start++) {
        if ($start % $div == 0) {
            $result[] = $start;
            $count++;
        }
    }
    for ($i = 0; $i < $count; $i++) {
        echo $result[$i] . " , ";
    }
    echo "<br>ได้จำนวนท้ั้งหมด :" .countNum($result);
    sumNum($result, $count);
}

function countNum($count)
{
    return count($count);
}
function sumNum($result, $count)
{
    $total = 0;
    for ($i = 0; $i < $count; $i++) {
        $total += $result[$i];
    }
    echo "<br>ผลรวมของตัวเลขที่หารลงตัว = $total";
}

if (isset($_GET['submit'])) {
    $start = $_GET['start'];
    $end = $_GET['end'];
    $div = $_GET['num'];

    echo "ค่าเริ่มต้น :<input type=number name=start value=$start><br>";
    echo "ค่าสุดท้าย : <input type=number name=end value=$end><br>";
    echo "ตัวเลขที่นำไปหาร :<input type=number name=num value=$div><br>";
    echo "<input type=submit name=submit value=Check Num><br>";
    checkNum($start, $end, $div);
} else {
    echo "<form>";
    echo "ค่าเริ่มต้น :<input type=number name=start id=start><br>";
    echo "ค่าสุดท้าย : <input type=number name=end id=end><br>";
    echo "ตัวเลขที่นำไปหาร :<input type=number name=num id=num><br>";
    echo "<input type=submit name=submit value=Check Num></form>";
}
?>

</html>