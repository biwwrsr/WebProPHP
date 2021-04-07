<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    //Main!!
    $servername = "localhost";
    $username = "root";
    $password = "12345";
    $sql = "SHOW DATABASES";
    echo "<h2>List Database</h2>";
    $link = mysqli_connect($servername, $username, $password) or
        die('Error Connecting to mysql: ' . mysqli_error($link) . '\r\n');

    if (!($result = mysqli_query($link, $sql))) {
        printf("Error: %s\n", mysqli_error($link));
    }
    while ($row = mysqli_fetch_row($result)) {
        if (($row[0] != "information_schema") && ($row[0] != "mysql")) {
            echo $row[0] . "\r<br>";
        }
    }
    echo "<br>";
    echo  "<form action='FormDB.php' method='POST'>";
    echo 'DataBase name ** : <input type="text" name="name" value="test">';
    echo '<input type="submit" name="submit" value="Add">';
    echo '<input type="submit" name="Delete" value="Delete"><br>';
    echo 'Table name ** : <input type="text" name="table" value="student">';
    echo '<input type="submit" name="add" value="Add"><br><br>';
    echo '<table>';
    echo '<tr>';
    echo '<td>ID (Update Delete Only): <input type="text" name="ID" value=""> </td>';
    echo '</tr>';
    echo '<tr>';
    echo '<td>ชื่อจริง : <input type="text" name="Name" value=""> </td>';
    echo '</tr>';
    echo '<tr>';
    echo '<td>นามสกุล : <input type="text" name="surName" value=""> </td>';
    echo '</tr>';
    echo '<tr>';
    echo '<td>Email: <input type="text" name="Email" value=""> </td>';
    echo '</tr>';
    echo '<tr>';
    echo '<td><input type="submit" name="Insert" value="Insert"> </td>';
    echo '</tr>';
    echo '<tr>';
    echo '<td><input type="submit" name="Update" value="Update"> </td>';
    echo '</tr>';
    echo '<tr>';
    echo '<td><input type="submit" name="DeleteT" value="Delete"> </td>';
    echo '</tr>';
    echo "</form>";
    //Created Database
    if (isset($_POST['submit'])) {
        $name = $_POST['name'];
        echo $name;
        $conn = new mysqli($servername, $username, $password);

        if (!$conn) {
            die("Connection Failed: " . mysqli_connect_error());
        }

        $sql = "CREATE DATABASE $name";
        if (mysqli_query($conn, $sql)) {
            echo "Database created successfully";
        } else {
            echo "Error creating database: " . mysqli_error($conn);
        }
        mysqli_close($conn);
    }
    //Delete Database
    if (isset($_POST['Delete'])) {
        $name = $_POST['name'];
        echo $name;
        $conn = new mysqli($servername, $username, $password);

        if (!$conn) {
            die("Connection Failed: " . mysqli_connect_error());
        }

        $sql = "DROP DATABASE $name";
        if (mysqli_query($conn, $sql)) {
            echo "Database drop successfully";
        } else {
            echo "Error drop database: " . mysqli_error($conn);
        }
        mysqli_close($conn);
    }
    //Add Table in Database
    if (isset($_POST['add'])) {
        $dbname = $_POST['name'];
        $table = $_POST['table'];
        $conn = new mysqli($servername, $username, $password, $dbname);
        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }
        // sql to create table
        $sql = "CREATE TABLE $table (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
firstname VARCHAR(30) NOT NULL,
lastname VARCHAR(30) NOT NULL,
email VARCHAR(50),
reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
)";
        if ($conn->query($sql) === TRUE) {
            echo "Table MyGuests created successfully";
        } else {
            echo "Error creating table: " . $conn->error;
        }
        $conn->close();
    }
    //Insert table
    if (isset($_POST['Insert'])) {
        $dbname = $_POST['name'];
        $table = $_POST['table'];
        $Name = $_POST['Name'];
        $surname = $_POST['surName'];
        $email = $_POST['Email'];
        // Create connection
        $conn = new mysqli($servername, $username, $password, $dbname);
        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }
        $sql = "INSERT INTO $table (firstname, lastname, email)
VALUES ('$Name', '$surname', '$email')";
        if ($conn->query($sql) === TRUE) {
            echo "New record created successfully";
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
        $conn->close();
    }
    //Update table
    if (isset($_POST['Update'])) {
        $ID = $_POST['ID'];
        $dbname = $_POST['name'];
        $table = $_POST['table'];
        $Name = $_POST['Name'];
        $surname = $_POST['surName'];
        $email = $_POST['Email'];
        // Create connection
        $conn = new mysqli($servername, $username, $password, $dbname);
        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }
        $sql = "UPDATE $table SET firstname='$Name' ,lastname='$surname' , email='$email'   WHERE id=$ID";
        if ($conn->query($sql) === TRUE) {
            echo "Record updated successfully";
        } else {
            echo "Error updating record: " . $conn->error;
        }
        $conn->close();
    }
    if (isset($_POST['DeleteT'])) {
        $ID = $_POST['ID'];
        $dbname = $_POST['name'];
        $table = $_POST['table'];
        // Create connection
        $conn = new mysqli($servername, $username, $password, $dbname);
        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }
        // sql to delete a record
        $sql = "DELETE FROM $table WHERE id=$ID";
        if ($conn->query($sql) === TRUE) {
            echo "Record deleted successfully";
        } else {
            echo "Error deleting record: " . $conn->error;
        }
        $conn->close();
    }
    //show database
    echo "<br><br>";
    echo "Table student<br>";
    $conn = new mysqli($servername, $username, $password, 'test');
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    $sql = "SELECT id, firstname, lastname FROM student";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        // output data of each row
        while ($row = $result->fetch_assoc()) {
            echo "id: " . $row["id"] . " - Name: " . $row["firstname"] . " " .
                $row["lastname"] . "<br>";
        }
    } else {
        echo "0 results";
    }
    $conn->close();
    echo "<br>";
    ?>
</body>

</html>