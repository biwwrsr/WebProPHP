<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<center>
<body>
    <?php
    function checkNum($start, $stop, $div)
    {
        $ans = [];
        $count = 0;
        for (; $start <= $stop; $start++) {
            if ($start % $div == 0) {
                $ans[] = $start;
                $count++;
            }
        }
        for ($i = 0; $i < $count; $i++) {
            echo $ans[$i] . " , ";
        }
        echo "<br>จำนวนที่หารลงตัว " . countNum($ans);
        echo "<br>ผลรวมของตัวเลขที่หารลงตัว = " . sumNum($ans, $count);
    }
    function countNum($ans)
    {
        return count($ans);
    }
    function sumNum($ans, $count)
    {
        $total = 0;
        for ($i = 0; $i < $count; $i++) {
            $total += $ans[$i];
        }
        return $total;
    }
    if (isset($_POST['submit'])) {
        $start = $_POST['start'];
        $stop = $_POST['stop'];
        $div = $_POST['div'];
        echo '<form action="test3.php" method="POST">';
        echo "ค่าเรี่มต้น : <input type='number' name='start' value='$start'/><br>";
        echo "ค่าสุดท้าย :<input type='number' name='stop' value='$stop'/><br>";
        echo "ตัวเลขที่นำไปหาร :<input type='number' name='div' value='$div'/><br>";
        echo '<input type="submit" name="submit" value="Check Num"/><br>';
        echo '</form>';
        checkNum($start, $stop, $div);
    } else {
        echo '<form action="test3.php" method="POST">';
        echo 'ค่าเรี่มต้น : <input type="number" name="start" value=""/><br>';
        echo 'ค่าสุดท้าย :<input type="number" name="stop" value=""/><br>';
        echo 'ตัวเลขที่นำไปหาร :<input type="number" name="div" value=""/><br>';
        echo '<input type="submit" name="submit" value="Check Num"/><br>';
        echo '</form>';
    }
    ?>
</body>
</center>

</html>