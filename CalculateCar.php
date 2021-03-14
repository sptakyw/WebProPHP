<?php
    echo "<form method='POST'>";
    echo "<table border = 0>";
    echo "<tr>";
    $car = $_GET['car'];
    if ($car == 'Accord') {
        echo "<td>";
        echo "<center><img src='Pic/logo-accord.png' width=200 height=50><br>";
        echo "<img src='Pic/Accord.png' width=400 height=400>";
        echo "</td>";
    }
    if ($car == 'Civic') {
        echo "<td>";
        echo "<center><img src='Pic/logo-civic.png' width=200 height=50><br>";
        echo "<img src='Pic/Civic.png' width=520 height=400>";
        echo "</td>";
    }
    if ($car == 'Jazz') {
        echo "<td>";
        echo "<center><img src='Pic/logo-jazz.png' width=200 height=50><br>";
        echo "<img src='Pic/Jazz.png' width=400 height=270>";
        echo "</td>";
    }
    if ($car == 'City') {
        echo "<td>";
        echo "<center><img src='Pic/logo-city.png' width=200 height=50><br>";
        echo "<img src='Pic/City.png' width=600 height=400>";
        echo "</td>";
    }
    echo "<td>";
    echo "<fieldset>";
    echo "<h2>เลือกเงินดาวน์</h2>";
    echo "เงินดาวน์ <input type='radio' id='down' name='choose' value='down' checked>";
    echo "<select name='downs' id='downs'>";
    echo "<option value='15'>15%</option>";
    echo "<option value='20'>20%</option>";
    echo "<option value='25'>25%</option>";
    echo "<option value='30'>30%</option>";
    echo "</select>";
    echo "หรือ ";
    echo "ระบุจำนวนเงิน <input type='radio' id='money' name='choose' value='money'>";
    echo "<input type='text' name='paymoney'> บาท <br>";
    echo "</fieldset><br>";
    echo "<fieldset>";
    echo "<h2>เลือกระยะเวลาการผ่อนชำระ</h2><br>";
    echo "ระยะเวลา ";
    echo "<select name='month' id='month'>";
    echo "<option value='36'>36</option>";
    echo "<option value='48'>48</option>";
    echo "<option value='60'>60</option>";
    echo "<option value='72'>72</option>";
    echo "</select>";
    echo "</fieldset><br><br>";
    echo "<input type='submit' name='submit' value = 'Calculate'><br>";

    function DownPayment($car, $down)
    {
        $price = 0;
        if ($car == 'Accord') {
            $price = 1799000;
        }
        if ($car == 'Civic') {
            $price = 1145000;
        }
        if ($car == 'Jazz') {
            $price = 754000;
        }
        if ($car == 'City') {
            $price = 749000;
        }
        return ceil($price * $down / 100);
    }
    function installment($car, $money)
    {
        $price = 0;
        if ($car == 'Accord') {
            $price = 1799000;
        }
        if ($car == 'Civic') {
            $price = 1145000;
        }
        if ($car == 'Jazz') {
            $price = 754000;
        }
        if ($car == 'City') {
            $price = 749000;
        }
        return ceil($price - $money);
    }
    function interestYear($ment)
    {
        return ceil($ment * 2 / 100);
    }
    function interestTotal($interYear, $month)
    {
        return ceil($interYear * ($month / 12));
    }
    function payMonth($ment, $interTotal, $month)
    {
        return ceil(($ment + $interTotal) / $month);
    }


    if (isset($_POST['submit'])) {
        $choose = $_POST['choose'];
        $down;
        $money;
        $namecar;
        if ($choose == 'down') {
            $down = $_POST['downs'];
        }
        if ($choose == 'money') {
            $money = $_POST['paymoney'];
        }
        $month = $_POST['month'];
        $price = 0;
        if ($car == 'Accord') {
            $price = 1799000;
        }
        if ($car == 'Civic') {
            $price = 1145000;
        }
        if ($car == 'Jazz') {
            $price = 754000;
        }
        if ($car == 'City') {
            $price = 749000;
        }
        echo "<br><br>";
        echo "<table border=1>";
        echo "<tr>";
        echo "<td colspan='2' width = 400 style='text-align:center'> รายงานการคำนวณสินเชื่อผ่อนชำระ </td>";
        echo "</tr>";
        echo "<tr>";
        echo "<td> รุ่นรถยนต์ : </td>";
        echo "<td> $car </td>";
        echo "</tr>";
        echo "<tr>";
        echo "<td> ราคารถยนต์ </td>";
        echo "<td>" . number_format($price) . " บาท</td>";
        echo "</tr>";
        echo "<tr>";
        echo "<td> (1) เงินดาวน์ : </td>";
        $DownPayment;
        if ($choose == 'money') {
            $DownPayment = $money;
            echo "<td>" . number_format($money) . " บาท </td>";
        } else {
            $DownPayment = (DownPayment($car, $down));
            echo "<td>" . number_format($DownPayment) . " บาท ($down %) </td>";
        }
        echo "</tr>";
        echo "<tr>";
        echo "<td> (2) จำนวนเงินที่ขอสินเชื่อ : </td>";
        $installment = installment($car, $DownPayment);
        echo "<td>" . number_format($installment) . " บาท </td>";
        echo "</tr>";
        echo "<tr>";
        echo "<td> (3) ดอกเบี้ย ต่อ ปี : </td>";
        $interYear = interestYear($installment);
        echo "<td>" . number_format($interYear) . " บาท (2% ต่อ ปี) </td>";
        echo "</tr>";
        echo "<tr>";
        echo "<td> (4) ดอกเบี้ย ทั้งหมด " . ($month / 12) . " ปี : </td>";
        $interTotal = interestTotal($interYear, $month);
        echo "<td>" . number_format($interTotal) . " บาท </td>";
        echo "</tr>";
        echo "<tr>";
        echo "<td> (5) จำนวนเงินที่ต้องผ่อน ต่อ 1 งวด : </td>";
        $payMoney = payMonth($installment, $interTotal, $month);
        echo "<td>" . number_format($payMoney) . " บาท </td>";
        echo "</tr>";
        echo "<tr>";
        echo "<td colspan='2'><center><a href='index.php'><input type=button value=กลับไปหน้าแรก></a></td>";
        echo "</tr>";
        echo "</table>";

        echo "</td>";
    }

    echo "</tr>";
    echo "</table>";
    echo "</form>";

?>