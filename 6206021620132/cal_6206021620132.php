<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
    $height = $_GET['height'];
    $value = $_GET['value'];
    $kilo = $_GET['kilo'];
    
    if($value == 1){
        echo "<img src=image/grape.jpg height=$height><br>";
        echo "ราคากิโลกรัมละ 100 บาท<br>";
        if($kilo == 1 ){
            echo "จำนวน ".$kilo." กิโลกรัม<br>";
            echo "ราคารวม ".$kilo*100 . " บาท";
        }
        elseif($kilo == 2 ){
            echo "จำนวน ".$kilo." กิโลกรัม<br>";
            echo "ราคารวม ".$kilo*100 . " บาท";
        }
        elseif($kilo == 3 ){
            echo "จำนวน ".$kilo." กิโลกรัม<br>";
            echo "ราคารวม ".$kilo*100 . " บาท";
        }
        
    }
    else if($value == 2){
        echo "<img src=image/orange.jpg height=$height><br>";
        echo "ราคากิโลกรัมละ 200 บาท<br>";
        if($kilo == 1 ){
            echo "จำนวน ".$kilo." กิโลกรัม<br>";
            echo "ราคารวม ".$kilo*200 . " บาท";
        }
        elseif($kilo == 2 ){
            echo "จำนวน ".$kilo." กิโลกรัม<br>";
            echo "ราคารวม ".$kilo*200 . " บาท";
        }
        elseif($kilo == 3 ){
            echo "จำนวน ".$kilo." กิโลกรัม<br>";
            echo "ราคารวม ".$kilo*200 . " บาท";
        }
    }
    else if($value == 3){
        echo "<img src=image/rambutan.jpg height=$height><br>";
        echo "ราคากิโลกรัมละ 300 บาท<br>";
        if($kilo == 1 ){
            echo "จำนวน ".$kilo." กิโลกรัม<br>";
            echo "ราคารวม ".$kilo*300 . " บาท";
        }
        elseif($kilo == 2 ){
            echo "จำนวน ".$kilo." กิโลกรัม<br>";
            echo "ราคารวม ".$kilo*300 . " บาท";
        }
        elseif($kilo == 3 ){
            echo "จำนวน ".$kilo." กิโลกรัม<br>";
            echo "ราคารวม ".$kilo*300 . " บาท";
        }
    }

?>
<img src="" alt="">
</body>
</html>
