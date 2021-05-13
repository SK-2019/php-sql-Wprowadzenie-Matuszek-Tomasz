<?php
    require("../assets/connect.php");
    $conn->query("DELETE FROM  WHERE id='klasa".$_POST['id']."'");
    header("location:szkola1.php");
?>