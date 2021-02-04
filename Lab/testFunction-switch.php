<?php
$x= 100;
$y= 10;
$operator = "-";
switch($operator){
    case("+") : plus(); break;
    case("-") : sub(); break;
    case("*") : mul(); break;
    case("/") : div(); break;
}
function plus(){
    global $x;
    global $y;
    echo "x + y = ";echo $x+$y; echo "<br>"; 
};
function sub(){
    global $x;
    global $y;
    echo "x - y = ";echo $x-$y; echo "<br>"; 
};
function mul(){
    global $x;
    global $y;
    echo "x * y = ";echo $x*$y; echo "<br>"; 
};
function div(){
    global $x;
    global $y;
    echo "x / y = ";echo $x/$y; echo "<br>"; 
};

?>