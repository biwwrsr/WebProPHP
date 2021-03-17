<form action="#" method="post">
<table border=1>
<?php
    for ($i=0;$i<10;$i++){
        echo'<tr><td>';
        echo '<input name=cars[] placeholder="Enter Car Name">';
        echo '</td></tr>';
    }
?>
<tr><td>
    <input type='submit' name='Submit Information'>
</tr></td>
</form>
</table>
<?php
    if (isset($_GET['submit'])){
    $cars = $_POST['cars'];
    foreach($cars as $showCar):
        echo $showCar."<br>";
    endforeach;
    print_r($cars);
}
?>