<?php
    session_start();

    unset($_SESSION['username']); 
    unset($_SESSION['nome']); 

    Header("Location:login.php"); 
?>