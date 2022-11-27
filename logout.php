<?php
    session_start();
    //echo $_SESSION['data'];
    unset($_SESSION['data']);
    header("location:index.php");
?>
