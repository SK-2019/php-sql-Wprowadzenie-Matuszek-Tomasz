<?php
$servername = "remotemysql.com";
$username = "uAryroT03t";
$password = "gOUYLSNMoE";
$dbname = "uAryroT03t";

$conn=new mysqli($servername, $username, $password, $dbname);
        if($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }
?>
