<?php
  error_reporting(E_ALL);
  ini_set('display_errors', 1);

  $db_conn = mysqli_connect("localhost", "root", "", "MoviesD") or die("Connection Error!".mysqli_connect_error());
?>
