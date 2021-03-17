<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>ตัวอย่าง Function ที่ 2 </title>
<body>
<form method="get" action="Ex.php">

    <?php
    if (isset($_GET['submit'])){
        $car1 = $_GET['car1'];
        $car2 = $_GET['car2'];
        $car3 = $_GET['car3'];
        $car4 = $_GET['car4'];
        $car5 = $_GET['car5'];
        $car6 = $_GET['car6'];
        $car7 = $_GET['car7'];
        $car8 = $_GET['car8'];
        $car9 = $_GET['car9'];
        $car10 = $_GET['car10'];

        echo "<input type='text' placeholder = Enter car name = 'car1'><br>" ;
        echo "<input type='text' name = 'car2'><br>" ;
        echo "<input type='text' name = 'car3'><br>" ;
        echo "<input type='text' name = 'car4'><br>" ;
        echo "<input type='text' name = 'car5'><br>" ;
        echo "<input type='text' name = 'car6'><br>" ;
        echo "<input type='text' name = 'car7'><br>" ;
        echo "<input type='text' name = 'car8'><br>" ;
        echo "<input type='text' name = 'car9'><br>" ;
        echo "<input type='text' name = 'car10'><br>" ;
        echo "<input type='submit' name = 'submit'><br>";

        echo $car1."<br>";
        echo $car2."<br>";
        echo $car3."<br>";
        echo $car4."<br>";
        echo $car5."<br>";
        echo $car6."<br>";
        echo $car7."<br>";
        echo $car8."<br>";
        echo $car9."<br>";
        echo $car10."<br>";
    }

     else{
        echo "<input type='text' placeholder= 'Enter car name' name = 'car1'><br>" ;
        echo "<input type='text' placeholder= 'Enter car name' name = 'car2'><br>" ;
        echo "<input type='text' placeholder= 'Enter car name' name = 'car3'><br>" ;
        echo "<input type='text' placeholder= 'Enter car name'  name = 'car4'><br>" ;
        echo "<input type='text' placeholder= 'Enter car name' name = 'car5'><br>" ;
        echo "<input type='text' placeholder= 'Enter car name' name = 'car6'><br>" ;
        echo "<input type='text' placeholder= 'Enter car name' name = 'car7'><br>" ;
        echo "<input type='text' placeholder= 'Enter car name' name = 'car8'><br>" ;
        echo "<input type='text' placeholder= 'Enter car name' name = 'car9'><br>" ;
        echo "<input type='text' placeholder= 'Enter car name' name = 'car10'><br>" ;
        echo "<input type='submit' name = 'submit'><br>" ;
     }
    ?>

</form>
</body>
</html>
