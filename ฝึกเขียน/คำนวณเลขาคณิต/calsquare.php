<html>
<head>
<title>โปรแกรมคำนวณพื้นที่สีเหลี่ยม</title>
</head>
<body background="Bgeq.jpg">
<center>
<form method= "POST">
<br><br><br><br><br><br>
    <p><b><font size="6">คำนวณพื้นที่สี่เหลี่ยม</font></b><br><br>
    <img src='1sq.png' width=120 height=110> <br>
        กว้าง :<input type="number" name= "width"> ตารางเซนติเมตร<br>
       ยาว : <input type="number" name= "height"> ตารางเซนติเมตร<br><br>
       <input name= "submit" type= "submit" value= "คำนวณ">
    </p>
</form>

<?php
$width = @$_POST['width'] ;
$height = @$_POST['height'];
echo "สี่หลี่ยมนี้มีพื้นที่ ".$width*$height." ตารางเซนติเมตรค่ะ<br><br>";
 ?>
 <a href='calgeometry.php'> <input type=button value=กลับ></a><br><br>
 </center>
</body>
</html>
