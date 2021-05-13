<?php
    require("../assets/connect.php");
    $conn->query("DELETE FROM produkt WHERE id='".$_POST['id']."'");
    header("location:sklep1.php");
?>