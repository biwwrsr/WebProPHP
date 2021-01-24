<!DOCTYPE HTML>
<html>  
<center>
    <body>
    <img src='cat.png' width=120 height=140> <br>
    <form action="page2.php" method="get">
    <b><font size="6">ลงทะเบียน</font></b><br><br>
        ชื่อ : <input type="text" name="name" ><br>
        นามสกุล : <input type="text" name="lastname" ><br>
        วุฒิการศึกษา :
        <select>
        <option>ประถมศึกษา
        <option>มัธยมศึกษา
        <option>ปริญญาตรี
        <option>สูงกว่าปริญญาตรี
        </select><br>
        E-mail : <input type=text ><br>
        Password : <input type=password ><br>
        เพศ : <input type=radio name=sex value=1 /> ชาย
               <input type=radio name=sex value=2 /> หญิง <br />
        งานอดิเรก :
        <input type=checkbox value=1 /> อ่านหนังสือ
        <input type=checkbox value=2 /> ดูโทรทัศน์
        <input type=checkbox value=3 /> เล่นกีฬา<br />
        <input type="submit"  value ="ไป">
    </form>
    </body>
</center>
</html>
