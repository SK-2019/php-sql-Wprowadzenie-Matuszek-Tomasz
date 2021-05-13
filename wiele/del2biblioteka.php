<?php
require("../assets/connect.php");
   $conn->query("DELETE FROM tytul WHERE id='".$_POST['id']."'");
   header("location:biblioteka1.php");
?>