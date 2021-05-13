<?php
require("../assets/connect.php");
   $conn->query("DELETE FROM autor_tytul WHERE id='".$_POST['id']."'");
   header("location:biblioteka1.php");
?>