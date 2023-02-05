<?php
session_start();

if(!isset($_SESSION['col'])){
    header("Location: collagelogin.php");
    
    }
?>