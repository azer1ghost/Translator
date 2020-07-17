<?php
ob_start();
session_start();

if(isset($_SESSION['user_email'])) {

 header("Location:homepage.php");

} else { header("Location:../login.php?durum=nolog"); }



?>
