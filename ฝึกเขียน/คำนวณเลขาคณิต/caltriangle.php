<html>
<head>
<title>โปรแกรมคำนวณพื้นที่สามเหลี่ยม</title>
</head>
<body background="Bg.jpg">
<center>
<form method= "POST">
<br><br><br><br><br><br>
    <p><b><font size="6">คำนวณพื้นที่สามเหลี่ยม</font></b><br><br>
    <img src='1tri.png' width=120 height=110> <br>
        ฐาน :<input type="number" name= "width"> ตารางเซนติเมตร<br>
        สูง: <input type="number" name= "height"> ตารางเซนติเมตร<br><br>
       <input name= "submit" type= "submit" value= "คำนวณ">
    </p>
</form>

<?php
$width = @$_POST['width'] ;
$height = @$_POST['height'];
define("n",0.5);

echo "สามหลี่ยมนี้มีพื้นที่ ".n*$width*$height." ตารางเซนติเมตรค่ะ<br><br>";
 ?>
  <a href='calgeometry.php'> <input type=button value=กลับ></a><br><br>
 </center>
</body>
</html>