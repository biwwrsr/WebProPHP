<html>
<head>
<title>โปรแกรมคำนวณพื้นที่สามเหลี่ยม</title>
</head>
<body>
<center>
<form method= "POST">
    <p><b>คำนวณพื้นที่สี่เหลี่ยม</b><br>
        ฐาน :<input type="number" name= "width"> ตารางเซนติเมตร<br>
        สูง: <input type="number" name= "height"> ตารางเซนติเมตร<br>
       <input name= "submit" type= "submit" value= "คำนวณ">
    </p>
</form>

<?php
$width = @$_POST['width'] ;
$height = @$_POST['height'];
define("n",0.5);

echo "สามหลี่ยมนี้มีพื้นที่ ".n*$width*$height." ตารางเซนติเมตรค่ะ";
 ?>
 </center>
</body>
</html>