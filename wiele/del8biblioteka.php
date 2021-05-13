<?php
require("../assets/connect.php");
   $conn->query("DELETE FROM mechanik WHERE id='".$_POST['id']."'");
   header("location:serwis1.php");
?>