<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<?php
    $name = $_POST['name'];
    $money = $_POST['money'];
    $month = $_POST['month'];
    $total = $money*$month;
    $status = carCheck($total,$name,$money,$month);

    function carCheck($total,$name,$money,$month){
        if ($total < 749000){
            echo "<table border=1 >";
            echo "<tr>";
                echo "<td>ชื่อลูกค้า :</td>";
                echo "<td> $name</td>";
            echo "</tr>";
            echo "<tr>";
                echo "<td>ผ่อนงวดละ :</td>";
                echo "<td>".number_format($money)."</td>";
            echo "</tr>";
            echo "<tr>";
                echo "<td>จำนวนงวด :</td>";
                echo "<td> $month </td>";
            echo "</tr>";
            echo "<tr>";
                echo "<td>ยอดเงินรวม :</td>";
                echo "<td>".number_format($total). "</td>";
            echo "</tr>";
            echo "<tr>";
                echo "<td colspan=2>ยอดเงินรวมของท่านไม่เพียงพอที่จะซื้อรถได้</td>";
            echo "</tr>";
            echo "<tr>";
                echo "<td colspan=2><center><a href='CarPay.php'><input type=button value=Back></a></td>";
            echo "</tr>";
        }
        else{
            if($total > 749000 && $total < 849000){
                echo "<table border=1 >";
                echo "<tr>";
                    echo "<td>ชื่อลูกค้า :</td>";
                    echo "<td> $name </td>";
                echo "</tr>";
                echo "<tr>";
                    echo "<td>ผ่อนงวดละ :</td>";
                    echo "<td>".number_format($money)."</td>";
                echo "</tr>";
                echo "<tr>";
                    echo "<td>จำนวนงวด :</td>";
                    echo "<td> $month </td>";
                echo "</tr>";
                echo "<tr>";
                    echo "<td>ยอดเงินรวม :</td>";
                    echo "<td>".number_format($total). "</td>";
                echo "</tr>";
                echo "<tr>";
                    echo "<td colspan=2>รถยนต์รุ่นที่ท่านสามารถเลือกซื้อได้</td>";
                echo "</tr>";
                echo "<tr>";
                    echo "<td><img src=img/City.png height=200><img src=img/logo-city.png height=50></td>";
                    echo "<td>ราคา 749,000</td>";
                echo "</tr>";
                echo "<tr>";
                    echo "<td colspan=2><center><a href='CarPay.php'><input type=button value=Back></td>";
                echo "</tr>";
            }
            else if($total > 849000 && $total < 1149000){
                echo "<table border=1 >";
                echo "<tr>";
                    echo "<td>ชื่อลูกค้า :</td>";
                    echo "<td> $name </td>";
                echo "</tr>";
                echo "<tr>";
                    echo "<td>ผ่อนงวดละ :</td>";
                    echo "<td>".number_format($money)."</td>";;
                echo "</tr>";
                echo "<tr>";
                    echo "<td>จำนวนงวด :</td>";
                    echo "<td> $month </td>";
                echo "</tr>";
                echo "<tr>";
                    echo "<td>ยอดเงินรวม :</td>";
                    echo "<td>".number_format($total). "</td>";
                echo "</tr>";
                echo "<tr>";
                    echo "<td colspan=2>รถยนต์รุ่นที่ท่านสามารถเลือกซื้อได้</td>";
                echo "</tr>";
                echo "<tr>";
                    echo "<td><img src=img/Jazz.png height=200><img src=img/logo-jazz.png height=50></td>";
                    echo "<td>ราคา 849,000</td>";
                echo "</tr>";
                echo "<tr>";
                    echo "<td><img src=img/City.png height=200><img src=img/logo-city.png height=50></td>";
                    echo "<td>ราคา 749,000</td>";
                echo "</tr>";
                echo "<tr>";
                    echo "<td colspan=2><center><a href='CarPay.php'><input type=button value=Back></td>";
                echo "</tr>";
            }
            else if($total > 1149000 && $total < 1798999){
                echo "<table border=1 >";
                echo "<tr>";
                    echo "<td>ชื่อลูกค้า :</td>";
                    echo "<td> $name </td>";
                echo "</tr>";
                echo "<tr>";
                    echo "<td>ผ่อนงวดละ :</td>";
                    echo "<td>".number_format($money)."</td>";
                echo "</tr>";
                echo "<tr>";
                    echo "<td>จำนวนงวด :</td>";
                    echo "<td> $month </td>";
                echo "</tr>";
                echo "<tr>";
                    echo "<td>ยอดเงินรวม :</td>";
                    echo "<td>".number_format($total). "</td>";
                echo "</tr>";
                echo "<tr>";
                    echo "<td colspan=2>รถยนต์รุ่นที่ท่านสามารถเลือกซื้อได้</td>";
                echo "</tr>";
                echo "<tr>";
                    echo "<td><img src=img/Jazz.png height=200><img src=img/logo-jazz.png height=50></td>";
                    echo "<td>ราคา 849,000</td>";
                echo "</tr>";
                echo "<tr>";
                    echo "<td><img src=img/City.png height=200><img src=img/logo-city.png height=50></td>";
                    echo "<td>ราคา 749,000</td>";
                echo "</tr>";
                echo "<tr>";
                    echo "<td><img src=img/Civic.png height=200><img src=img/logo-civic.png height=50></td>";
                    echo "<td>ราคา 1,149,000</td>";
                echo "</tr>";
                echo "<tr>";
                    echo "<td colspan=2><center><a href='CarPay.php'><input type=button value=Back></td>";
                echo "</tr>";
            }
            elseif($total > 1799000){
                echo "<table border=1 >";
                echo "<tr>";
                    echo "<td>ชื่อลูกค้า :</td>";
                    echo "<td> $name </td>";
                echo "</tr>";
                echo "<tr>";
                    echo "<td>ผ่อนงวดละ :</td>";
                    echo "<td>".number_format($money)."</td>";
                echo "</tr>";
                echo "<tr>";
                    echo "<td>จำนวนงวด :</td>";
                    echo "<td> $month </td>";
                echo "</tr>";
                echo "<tr>";
                    echo "<td>ยอดเงินรวม :</td>";
                    echo "<td>".number_format($total). "</td>";
                echo "</tr>";
                echo "<tr>";
                    echo "<td colspan=2>รถยนต์รุ่นที่ท่านสามารถเลือกซื้อได้</td>";
                echo "</tr>";
                echo "<tr>";
                    echo "<td><img src=img/Jazz.png height=200><img src=img/logo-jazz.png height=50></td>";
                    echo "<td>ราคา 849,000</td>";
                echo "</tr>";
                echo "<tr>";
                    echo "<td><img src=img/City.png height=200><img src=img/logo-city.png height=50></td>";
                    echo "<td>ราคา 749,000</td>";
                echo "</tr>";
                echo "<tr>";
                    echo "<td><img src=img/Civic.png height=200><img src=img/logo-civic.png height=50></td>";
                    echo "<td>ราคา 1,149,000</td>";
                echo "</tr>";
                echo "<tr>";
                    echo "<td><img src=img/Accord.png height=200><img src=img/logo-accord.png height=50></td>";
                    echo "<td>ราคา 1,799,000</td>";
                echo "</tr>";
                echo "<tr>";
                    echo "<td colspan=2><center><a href='CarPay.php'><input type=button value=Back></td>";
                echo "</tr>";
            }
        }
    }
?>
