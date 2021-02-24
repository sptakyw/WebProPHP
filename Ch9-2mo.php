<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>ตัวอย่างที่ 9-2 </title>
</head>
<body>

<center>
<form method="get" action="Ch9-2mo.php">
        จำนวนนักเรียน : <input type="number" name = "MaxStudent"><br>
        <input name= "submit" type= "submit" value= "Submit">
    </form>
</center>

<?php
if (isset($_GET['submit'])) {
$MaxStudent = $_GET['MaxStudent'];;
$score = array();
$A = 0;
$B = 0;
$C = 0;
$D = 0;
$F = 0;
for($n = 0 ; $n < $MaxStudent; $n++) {
    $score[$n] = rand(0, 100);
}
echo '<center><font size="4" color="blue"> Grade Report </font></center>';
echo '<table border="1" align="center">';
echo '<tr><td align="center" width="90">Student No.</td>';
echo '<td align="center" width="90">Score</td>';
echo '<td align="center" width="90">Grade</td></tr>';

for($n = 0 ; $n < $MaxStudent; $n++) {
    $grade = calgrade($score[$n]);
    echo '<tr><td align="center" width="90">' . ($n+1 ) . '</td>';
    echo '<td align="center" width="90">' . $score[$n] . '</td>';
    echo '<td align="center" width="90">' .$grade. '</td></tr>';
    if($grade==="A"){ 
        $A++;   
    }
    elseif ($grade==="B"){ 
        $B++;      
    }
    elseif ($grade==="C"){ 
        $C++;      
    }
    elseif ($grade==="D"){ 
        $D++;      
    }
    elseif ($grade==="F"){ 
        $F++;      
    }
}

echo '<tr><td colspan="3" align="center"> Average Score : ';
echo average( $score, $MaxStudent);
echo '<tr><td colspan="3" align="center"> Min : '.max($score);
echo '<tr><td colspan="3" align="center"> Max : '.min($score);
echo '<tr><td colspan="3" align="center"> คนที่ได้ A มี : '.$A.' คน';
echo '<tr><td colspan="3" align="center"> คนที่ได้ B มี : '.$B.' คน';
echo '<tr><td colspan="3" align="center"> คนที่ได้ C มี : '.$C.' คน';
echo '<tr><td colspan="3" align="center"> คนที่ได้ D มี : '.$D.' คน';
echo '<tr><td colspan="3" align="center"> คนที่ได้ F มี : '.$F.' คน';
echo '</td></tr></table>';
}

function calgrade($score){
    if($score>=80){ 
        
        return 'A';      
    }
    elseif ($score>=70){ 
       
        return "B";      
    }
    elseif ($score>=60){ 

        return "C";      
    }
    elseif ($score>=50){
         
        return "D";      
    }
    elseif ($score<=49){
        
        return "F";      
    }
}
function average($data, $max) {
    $total = 0;
    for($n = 0 ; $n < $max; $n++) {
    $total += $data[$n];
    }
    return( $total / $max );
}
    ?>
    </body>
    </html>
