<?php
require("../assets/connect.php");
   $conn->query("DELETE FROM pacjenci_lekarze WHERE id='".$_POST['id']."'");
   header("location:przychodnia1.php");
?>