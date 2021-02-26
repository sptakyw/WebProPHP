<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<center>
<form action="CarSell.php" method="POST">
    <table border="1">
    <tr>
        <td>ชื่อนามสกุลลูกค้า :</td>
        <td><input type="text" name="name" value=""></td>
    </tr>
    <tr>
        <td>จำนวนเงินที่ต้องการผ่อน ต่อ 1 งวด : </td>
        <td><input type="text" name="money" value=""></td>
    </tr>
    <tr>
        <td>จำนวนงวด : </td>
        <td><input list="month" name="month">
            <datalist id="month">
                <option value="36">
                <option value="48">
                <option value="60">
                <option value="72">
            </datalist>
        </td>
    </tr>
    <tr>
        <td colspan="2">
            <center><input type="submit" value="ซื้อรถ">
        </td>
    </tr>
    </table>
</form>
</center>  
</body>
</html>