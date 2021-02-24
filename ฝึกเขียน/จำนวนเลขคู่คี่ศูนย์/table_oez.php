<!DOCTYPE html>
<html>
<center>
    <body>
        <?php
        if (isset($_GET['submit'])) {
            $number = $_GET['number'];
            $zero = 0;
            $even = 0;
            $odd = 0;

            for ($i = 0; $i < strlen($number); $i++) {
                if ($number[$i] != 0) {
                    ($number[$i] % 2 == 0) ? $even += 1 : $odd += 1;
                } else {
                    $zero += 1;
                }
            }
        }
        ?>

        <form>
            <?php
            if (isset($_GET['submit'])) {
                echo "Number : <input type=number name=number>  ";
                echo "<input type=submit name=submit value=Check /><br><br>";
                echo "Number = $number <br>";
                echo "<table border=1>";
                echo "<tr><td>Odd = </td>";
                echo "<td>" . $odd . "</td>";
                echo "</tr>";
                echo "<tr><td>Even = </td>";
                echo "<td>" . $even . "</td>";
                echo "</tr>";
                echo "<tr><td>Zero = </td>";
                echo "<td>" . $zero . "</td>";
                echo "</tr>";
                echo "</table>";
            } else {
                echo "Number : <input type=number name=number>  ";
                echo "<input type=submit name=submit value=Check /><br>";
            }
            ?>
        </form>
    </body>
</center>

</html>

