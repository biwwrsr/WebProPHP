<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>ตัวอย่างที่ 9-6 </title>
</head>
<body>
<?php
$month = array( array ( 2555, 230000, 300400, 200900,249000,0),
array ( 2556,300000, 380400, 290000,149000,0),
array ( 2557,330000, 350000, 400900,490000,0),
array (2558,380000, 395000, 290000,349000,0),
array (2559,335000, 400400, 300900,490000,0 ),
array ("ผลรวมของไตรมาส",0,0,0,0,0) );

$title = array(" ปี","ไตรมาส 1","ไตรมาส 2","ไตรมาส 3","ไตรมาส 4","ผลรวมของปี");
$maxRow = count( $month ); //อยากรู้จำนวนแถว
$maxCol = count ( $month[0]) ; //อยากรู้จำนวนของrowที่เท่าไหร่
echo "<table border='1' align='center' width='100%'>";
echo "<tr>";
for ( $c = 0; $c < $maxCol ; $c++ ) {
    echo "<td width='50' align='center'>" . $title[$c] . "</td>";
}
echo "</tr>";

for ( $r = 0; $r < $maxRow ; $r++ ) {
    echo "<tr>";
    if($r > $maxRow && $r != 0){
        $month[$c][$maxRow-1] += $month[$r][$c];
    }

    for ( $c = 0; $c < $maxCol ; $c++ ) {
        echo "<td width='50' align='center'>" . $month[$r][$c] . "</td>";
        if($c < $maxCol-1 && $c != 0){
            $month[$r][$maxCol-1] += $month[$r][$c];
        }
    }
    echo "</tr>";
}

echo "</table>";
?>
</body>
</html>