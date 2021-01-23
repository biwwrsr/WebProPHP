<html>
<center>
<body>
<br><br><br><br><br><br><br><br>
    <?php
        $num = $_GET["num"];
        echo "<b><font size='6'>สูตรคูรแม่ ".$num." มีดังนี้</font></b></br>";
        if($num == 0){
            echo "0 คูณกับอะไรก็ได้ 0";
        }
        else{
        for($i = 1 ; $i < 13 ; $i++ ){
           echo ($num." x ".$i." = ".$num*$i."<br>");
        }
        }

    ?>
</body>
</center>
</html>