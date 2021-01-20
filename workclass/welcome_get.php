<html>
<body>
Show Result<br>
    <?php
      $x = $_GET["x"];
      $y = $_GET["y"];
      $o = $_GET["o"];

      if($o ==  "+"){
        plus();
      }
    else if($o ==  "-"){
        sub();
      }
    else if($o ==  "*"){
        mul();
      }
    else if($o ==  "/"){
        div();
      }
      function plus(){

        global $x;
        global $y;
        echo "<br>";
        echo $x." + ".$y ; echo " = "; echo $x+$y; 
      };
      function sub(){
        global $x;
        global $y;
        echo "<br>";
        echo $x." - ".$y ; echo " = "; echo $x-$y;
      };
      function mul(){
        global $x;
        global $y;
        echo "<br>";
        echo $x." * ".$y ; echo " = "; echo $x*$y;
    };
    function div(){
        global $x;
        global $y;
        echo "<br>";
        echo $x." / ".$y ; echo " = "; echo $x/$y;
    };
    ?>
    
</body>
</html>