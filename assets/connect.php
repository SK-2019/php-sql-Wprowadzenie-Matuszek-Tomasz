<?php
$servername = $_SERVER['mysql'];
$username = $_SERVER['nazwa'];
$password = $_SERVER['haslo'];
$dbname = $_SERVER['dbname'];

$conn=new mysqli($servername, $username, $password, $dbname);
        if($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }
?>
