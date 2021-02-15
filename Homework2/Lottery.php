<!DOCTYPE html>
<html lang="en">

<head>
    <script>
        function validateForm() {
            var x = document.forms["myForm"]["lucky"].value;
            var y = document.forms["myForm"]["money"].value;
            if (x == "" || x == null || y == "" || y == null) {
                alert("Number must be filled out");
                return false;
            }
        }
    </script>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <center>
        <form name="myForm" method="get" action="Result-lottery.php" onsubmit="return validateForm()" required>
            <h1 style="color:blue">โปรแกรม ตรวจ เลขท้าย 2 ตัว</h1>
            <h2 style="color:red">รางวัล เมื่อถูกเลขท้าย 2 ตัว (ต้นทุนชื้อ x 60 เท่า)</h2>
            <h3 style="color:red">เช่น ถ้าชื้อ 10 บาท ถูกรางวัล รับเงิน 600 บาท</h3>
            <h3 style="color:red">เลขเสี่ยงโชค[0 - 99]
                <input type="number" name="lucky" min="0" max="99" />
            </h3>
            <br><br>
            <h1 style="color:red">*ชื้อได้ ตั้งแต่ 10-500 บาท เท่านั้น</h1><br>
            <h1 style="color:red">จำนวนเงินที่คุณต้องการชื้อ[10 - 500 บาท]
            <input type="number" name="money"  min="10" max="500" /></h1>
            <input type="submit" value=" ตรวจรางวัล " />
        </form>
    </center>
</body>

</html>