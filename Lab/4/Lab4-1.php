<html>
<head><title>การก าหนดค่าตัวแปร</title></head>
<body>
<?php
$x = 100;
$y = "200";
$z = '300';
$add = $x + $y;
$sub = $z - $y;
$K = $y * $z;
$H = $K / $z;
$messageadd = "ผลบวก ".$x."+".$y." = ".$add;
$messagesub = "ผลลบ ".$z."-".$x." = ".$sub;
$messageK = "ผลคูณ ".$y."*".$z." = ".$K;
$messageH = "ผลบวก ".$K."/".$z." = ".$H;

echo $messageadd;  echo "<br />";
echo $messagesub;  echo "<br />";
echo $messageK;  echo "<br />";
echo $messageH;  echo "<br />";

?>
</body>
</html>