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
                echo "<input type=submit name=submit value=Check /><br>";
                echo "Number = $number <br>";
                echo "Odd  = $odd <br>";
                echo "Even = $even <br> ";
                echo "Zero = $zero <br>";
            } else {
                echo "Number : <input type=number name=number>  ";
                echo "<input type=submit name=submit value=Check /><br>";
            }
            ?>
        </form>

    </body>
</center>

</html>