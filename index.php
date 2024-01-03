<?php
   include './App/Logic/db_connect.php';
   $sql = "SELECT * FROM settings";
   $result = $conn->query($sql);
   $site=$result->fetch_assoc();
   print_r($site);

require "./Router/router.php";
?>