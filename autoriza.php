<?php 
   session_start();
   if (!isset($_SESSION['username']))
       Header("location:login.php"); 
?>