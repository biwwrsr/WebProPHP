<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title> ตัวอย่าง Control statement ที่ 3 </title></head>
</head>
<body>
<?php
    $score = 23;

    echo "You score is  : <b>$score </b><br/>";

    if ($score >= 80 ){
    echo "You Grade is : <b>A </b><br/>";
    }
    elseif ($score >= 70 ){
    echo "You Grade is : <b>B </b><br/>";
    }
    elseif ($score >= 60){
    echo "You Grade is : <b>C </b><br/>";
    }
    elseif ($score >= 50 ){
    echo "You Grade is : <b>D </b><br/>";
    }
    elseif ($score > 100){
        echo "You are too smart";
    }
    else
    echo "You Grade is : <b>F </b><br/>";

?>
</body>
</html>