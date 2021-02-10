<?php
$x= 100;
$y= 10;
$operator = "-";
if($operator ==  "+"){
    plus();
}
else if($operator ==  "-"){
    sub();
}
else if($operator ==  "*"){
    mul();
}
else if($operator ==  "/"){
    div();
}
function plus(){
    global $x;
    global $y;
    echo $x+$y;
};
function sub(){
    global $x;
    global $y;
    echo $x-$y; 
};
function mul(){
    global $x;
    global $y;
   echo $x*$y; 
};
function div(){
    global $x;
    global $y;
    echo $x/$y; 
};

?>