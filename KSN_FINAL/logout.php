<?php 
session_start();


session_destroy();

echo "<script>window.location.assign('login.php?status=logout');</script>";

?>