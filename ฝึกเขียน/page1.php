<html>
<head>
<title>ทดลองกล่องข้อความ</title>
</head>
<body>
<center>
    <?php
        echo "<b>แบบฟอร์มบันทึกข้อมูล</b><br />";
        echo "<img src='cat.png' ", "width=120,height=110 /><br>";
        echo "ชื่อ : <input type=text ><br>";
        echo "นามสกุล : <input type=text ><br>";
        echo "<form>
        วุฒิการศึกษา :
        <select>
        <option>ประถมศึกษา
        <option>มัธยมศึกษา
        <option>ปริญญาตรี
        <option>สูงกว่าปริญญาตรี
        </select>
        </form>";
        echo "E-mail : <input type=text ><br>";
        echo "Password : <input type=password ><br>";
        echo "เพศ : <input type=radio name=sex value=1 /> ชาย
            <input type=radio name=sex value=2 /> หญิง <br />";
        echo "งานอดิเรก :
        <input type=checkbox value=1 /> อ่านหนังสือ
        <input type=checkbox value=2 /> ดูโทรทัศน์
        <input type=checkbox value=3 /> เล่นกีฬา<br />";
        echo "<a href='page2.php'> <input type=button value=submit></a>";
        
    ?>
</center> 
</body>
</html>
