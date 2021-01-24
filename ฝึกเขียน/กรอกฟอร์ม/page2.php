<html>
<center>
<body>
    <?php
        $name = $_GET["name"];
        $lastname = $_GET["lastname"];
        echo "<img src='check.png' width=120 height=100 /><br>";
        echo "<b><font size='6'>ยินดีต้องรับ</b><br>";
        echo "<b>คุณ ".$name." ".$lastname."</b><br>";
        echo "<b>ลงทะเบียนเรียบร้อยแล้ว</b></font><br>";
        echo "<a href='page1.php'>กลับ</a>";
    ?>
</body>
</center>
</html>
