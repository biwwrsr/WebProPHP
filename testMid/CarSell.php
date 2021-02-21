<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    function carCheck($total)
    {
        if ($total < 749000) {
            return false;
        } else {
            return true;
        }
    }
    $name = $_POST['name'];
    $money = $_POST['money'];
    $month = $_POST['month'];
    $total = $money * $month;
    $status = carCheck($total);
    if ($status) {
        echo '<table border="1">';
        echo  '<tr>';
        echo '<td>ชื่อ นามสกุล ลูกค้า :</td>';
        echo " <td>$name</td>";
        echo ' </tr>';
        echo  '<tr>';
        echo '<td>จำนวนเงินที่ต้องการผ่อน ต่อ 1 งวด :</td>';
        echo " <td>$money</td>";
        echo ' </tr>';
        echo  '<tr>';
        echo '<td>จำนวนงวด :</td>';
        echo " <td>$month</td>";
        echo ' </tr>';
        echo  '<tr>';
        echo '<td>ยอดรวมเงิน :</td>';
        echo " <td>$total</td>";
        echo ' </tr>';
        echo '<tr>';
        echo '<td colspan="2">';
        echo ' <center>รถยนต์รุ่นที่ท่านสามารถเลือกชื้อได้';
        echo  '</td>';
        echo  '</tr>';
        if ($total >= 1799000) {
            echo  '<tr>';
            echo '<td> <img src="img/Accord.png" width="200" height="200">';
            echo '<img src="img/logo-Accord.png" width="50" height="20"></td>';
            echo '<td>ราคา 1799000 บาท</td>';
            echo '</tr>';
        }
        if ($total >= 1149000) {
            echo  '<tr>';
            echo '<td> <img src="img/Civic.png" width="200" height="200">';
            echo '<img src="img/logo-Civic.png" width="50" height="20"></td>';
            echo '<td>ราคา 1149000 บาท</td>';
            echo '</tr>';
        }
        if ($total >= 849000) {
            echo  '<tr>';
            echo '<td> <img src="img/Jazz.png" width="200" height="200">';
            echo '<img src="img/logo-Jazz.png" width="50" height="20"></td>';
            echo '<td>ราคา 849000 บาท</td>';
            echo '</tr>';
        }
        if ($total >= 749000) {
            echo  '<tr>';
            echo '<td> <img src="img/City.png" width="200" height="200">';
            echo '<img src="img/logo-City.png" width="50" height="20"></td>';
            echo '<td>ราคา 749000 บาท</td>';
            echo '</tr>';
        }
        echo '<tr>';
        echo '<td colspan="2">';
        echo ' <center><a href="CarPay.php">Back to home</a>';
        echo  '</td>';
        echo  '</tr>';
        echo '</table>';
    } else {
        echo '<table border="1">';
        echo  '<tr>';
        echo '<td>ชื่อ นามสกุล ลูกค้า :</td>';
        echo " <td>$name</td>";
        echo ' </tr>';
        echo  '<tr>';
        echo '<td>จำนวนเงินที่ต้องการผ่อน ต่อ 1 งวด :</td>';
        echo " <td>$money</td>";
        echo ' </tr>';
        echo  '<tr>';
        echo '<td>จำนวนงวด :</td>';
        echo " <td>$month</td>";
        echo ' </tr>';
        echo  '<tr>';
        echo '<td>ยอดรวมเงิน :</td>';
        echo " <td>$total</td>";
        echo ' </tr>';
        echo '<tr>';
        echo '<td colspan="2">';
        echo ' <center>ยอดรวมเงินของท่าน ไม่เพียงพอ ที่จะชื้อรถยนต์ได้';
        echo  '</td>';
        echo  '</tr>';
        echo '<tr>';
        echo '<td colspan="2">';
        echo ' <center><a href="CarPay.php">Back to home</a>';
        echo  '</td>';
        echo  '</tr>';
        echo '</table>';
    }
    ?>

</body>

</html>