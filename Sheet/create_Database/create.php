<?php
    $nameDB = $_GET['nameDB'];
    $servername = "localhost";
    $username = "root";
    $password = "12345";

    $conn = new mysqli($servername, $username , $password);

    if (!$conn){
        die("Connection failed: ". mysqli_connect_error());
    }
    //create database
    if(isset($_GET['createDB'])){
    $sql = "CREATE DATABASE $nameDB";
    if (mysqli_query($conn,$sql)){
        echo "Database created successfull";
    }else{
        echo "Error creating database: ". mysqli_error($conn);
    }
    mysqli_close($conn);
    }

    if(isset($_GET['delete'])){
        $sql = "DROP DATABASE $nameDB";
        if (mysqli_query($conn,$sql)){
            echo "Database  successfull";
        }else{
            echo "Error creating database: ". mysqli_error($conn);
        }
    }

    if(isset($_GET['createTB'])){
        // Create connection
        $nameTB = $_GET['nameTB'];
        $conn = new mysqli($servername, $username, $password, $dbname);
        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }
        // sql to create table
        $sql = "CREATE TABLE $nameTB (
        id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
        firstname VARCHAR(30) NOT NULL,
        lastname VARCHAR(30) NOT NULL,
        email VARCHAR(50),
        reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
        )";
        if ($conn->query($sql) === TRUE) {
        echo "Table  created successfully";
        } else {
        echo "Error creating table: " . $conn->error;
        }
        $conn->close();
    }

?>
