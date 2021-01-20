<html>
<head>
<title>โปรแกรมคำนวณพื้นที่สี่เหลี่ยม</title>
</head>
<body>
<center>
<form method= "POST">
    <p><b>คำนวณพื้นที่สี่เหลี่ยม</b><br>
        กว้าง :<input name= "width">ตารางเซนติเมตร<br>
       ยาว: <input name= "height">ตารางเซนติเมตร<br>
       <input name= "submit" type= "submit" value= "เลือก">
    </p>
</form>

<?php
$width = @$_POST['width'] ;
$height = @$_POST['height'];


echo "สี่หลี่ยมนี้มีพื้นที่ ".$width*$height." ตารางเซนติเมตรค่ะ";
 ?>
 </center>
</body>
</html>
