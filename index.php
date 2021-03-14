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
<form action="CalculateCar.php" method="get">
<center><img src="Pic/header (1).jpg" width="800" height="350">
<h1><center>Car Model</center></h1><br>
<center>เลือกรุ่นรถยนต์ <select name ='car'>
    <option value=Accord>Accord</option>
    <option value=Civic>Civic</option>
    <option value=Jazz>Jazz</option>
    <option value=City>City</option>
</select>
<input type="submit" name = "Submit" value="Submit"><br><br>
<table border="1" align="center">
<tr align="center">
    <td align="center">ภาพรถยนต์</td>
    <td align="center">รุ่นรถยนต์</td>
    <td align="center">ราคารถยนต์ (บาท)</td>
    <td align="center">อัตราดอกเบี้ย ต่อปี (ร้อยละ , %)</td>
</tr>
<tr align="center">
    <td><img src="Pic/Accord.png" width="200" height="200"></td>
    <td>Accord</td>
    <td>1,799,000</td>
    <td>2.00</td>
</tr>
<tr align="center">
    <td align="center"><img src="Pic/Civic.png" width="280" height="200"></td>
    <td align="center">Civic</td>
    <td align="center">1,145,000</td>
    <td align="center">2.00</td>
</tr>
<tr align="center">
    <td align="center"><img src="Pic/Jazz.png" width="300" height="200"></td>
    <td align="center">Jazz</td>
    <td align="center">754,000</td>
    <td align="center">4.00</td>
</tr>
<tr align="center">
    <td align="center"><img src="Pic/City.png" width="300" height="200"></td>
    <td align="center">City</td>
    <td align="center">749,000</td>
    <td align="center">4.00</td>
</tr>

</table>


<center>
</form>
</body>
</html>