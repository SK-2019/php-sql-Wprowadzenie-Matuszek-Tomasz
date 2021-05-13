<?php
    require("../assets/connect.php");
    $conn->query("DELETE FROM nauczyciel WHERE id='".$_POST['id']."'");
    header("location:szkola1.php");
?>