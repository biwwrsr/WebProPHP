<?php
    $servername = "localhost";
    $username = "root";
    $password = "";

    $conn = new mysqli($servername, $username , $password);

    if (!$conn){
        die("Connection failed: ". mysqli_connect_error());
    }
    //create database
    $sql = "CREATE DATABASE myDB";
    if (mysqli_query($conn,$sql)){
        echo "Database created successfull";
    }else{
        echo "Error creating database: ". mysqli_error($conn);
    }
    mysqli_close($conn);
?>