<?php
session_start();
UNSET($_SESSION['citizen']);
if(!isset($_SESSION['citizen']))
{
// Redirecting To Home Page
header("Location: ../../../index.php");
}
?>
