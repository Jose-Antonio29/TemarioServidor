<?php
    session_start();
    if (!isset($_SESSION['dniU']) && !isset($_SESSION['rolU']) || $_SESSION['rolU'] != 1) {
        header("LOCATION:../index.php");
    }
?>