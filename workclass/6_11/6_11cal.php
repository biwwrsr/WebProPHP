<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title> โปรแกรมค านวณเกรด </title>
</head>
<body>
    <?php
    $hw = $_GET['hw'];
    $midterm = $_GET['midterm'];
    $final = $_GET['final'];
    if ($hw > 30) $hw = 30;
    if ($midterm > 35) $midterm = 35;
    if ($final > 35) $final = 35;

    echo "<p>";
    echo "<b>ข้อมูลคะแนน </b><br />";
    echo "Homework : <i> $hw </i> <br/>";
    echo "Midterm : <i> $midterm </i> <br/>";
    echo "Final : <i> $final </i> <br/>";
    $total = $hw + $midterm + $final;

    echo "Total Score : $total <br>";
    if ($total >= 80) echo "<img src=A.jpg width=100px>";
    elseif ($total >= 70) echo "<img src=B.jpg width=100px>";
    elseif ($total >= 60) echo "<img src=C.jpg width=100px>";
    elseif ($total >= 50) echo "<img src=D.jpg width=100px>";
    else echo "<img src=F.jpg width=100px>";
    echo "<br>";
    echo "<a href='6_11.php'> <big>Back </big></a>";
    ?>
</body>
</html>





