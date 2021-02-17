<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<center>
    <form method="get" action="Lab8-4.php">
        row : <input type="number" name = "maxRow"><br>
        Column : <input type="number" name = "maxCol"><br>
        Start Num : <input type="number" name = "SN"><br>
        End Num : <input type="number" name = "EN"><br>
        <input name= "submit" type= "submit" value= "Submit">
    </form>
<center>
</body>
</html>

<?php
    function page_header($title, $bgcolor = "ffffff") {
        echo '<html lang="en"><head><meta charset="UTF-8">';
        echo '<title>' . $title . '</title></head>';
        echo '<body bgcolor="#' . $bgcolor . '">';
    }
    
    function page_footer($message = "ขอบคุณ") {
        echo '<hr>' . $message ;
        echo '</body></html>';
    }
    
    function show_checker( $maxRow, $maxCol, $bgcolor1, $bgcolor2,$SN,$EN) {
        echo "<p align='center'> Row = $maxRow , Column = $maxCol </p>";
        echo '<table align="center" border="1">' ;
        $count = 0;
        $sum = 0;
        $min;
        $max;
        for($r = 1; $r <= $maxRow; $r++) {
            echo '<tr >';
            for($c = 1; $c <= $maxCol; $c++) {
                if ( $r % 2 == 1) {
                    echo '<td bgcolor="#' . (($c % 2 == 1)?$bgcolor1:$bgcolor2) . '">';
                    }
                    else {
                    echo '<td bgcolor="#' . (($c % 2 == 1) ? $bgcolor2 : $bgcolor1) . '">';
                    }
                $num = rand($SN,$EN);
                echo $num. '</td>';
                $sum+=$num;
                $count++;
                if($count == 1){
                    $min = $num;
                    $max = $num;
                }
                else {
                    $min = FindMin($min,$num);
                    $max = FindMax($max,$num);
                }
            }
            echo '</tr>';
        }
        echo '</table>';
        echo "<br>";
        echo "Total = ".number_format($sum)."<br>";
        echo "Average = ".Ave($sum,$maxCol*$maxRow)."<br>";
        echo "Min = ".$min."<br>";
        echo "Max = ".$max."<br>";
       
    }
    function Ave($sum,$count){
        $Ave = $sum/$count;
        return $Ave;
    }
    function FindMin($min,$num){
        if($min>$num){
            return $num;
        }
        return $min;
    }
    function FindMax($max,$num){
        if($max<$num){
            return $num;
        }
        return $max;
    }

    if(isset($_GET['submit'])){
        $maxRow = $_GET['maxRow'];
        $maxCol = $_GET['maxCol'];
        $SN = $_GET['SN'];
        $EN = $_GET['EN'];
        
    page_header("Example 8-4", "FFDDEE");
    show_checker($maxRow, $maxCol,"33ff99","ffff99",$SN,$EN);
    page_footer("Thank You.");
    }
?>