<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form>
        input : <input type="text" name="name">;
        <input type=submit name=submit value=Submit />
    </form>

    <?php
    if (isset($_GET['submit'])) {
        $odd = 0;
        $even = 0;
        $zero = 0;
        $text = $_GET['name'];
        $i = 0;

        echo "<br>Num = $text<br>";
        for (; $i < strlen($text); $i++) {
            if (substr($text, $i, 1) == "0") {
                $zero++;
            } else if (substr($text, $i, 1) % 2 == 0) {
                $even++;
            } else {
                $odd++;
            }
        }
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
    }

    ?>
</body>

</html>
