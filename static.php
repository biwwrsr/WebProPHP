<html>
<head><title>แสดงการใช้งาน Predefined Variable</title></head>
<body>
<?php
    function myTest(){
        static $x = 0;
        echo $x." , ";
        $x++;
    }
    
    myTest();

    myTest();

    myTest();

    echo $x;
?>
</body>
</html>