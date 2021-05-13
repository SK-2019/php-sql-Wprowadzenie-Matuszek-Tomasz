<?php
    require("../assets/connect.php");
    $conn->query("DELETE FROM producent WHERE id='".$_POST['id']."'");
    header("location:sklep1.php");
?>