<?php
session_start();
UNSET($_SESSION['admin']);
if(!isset($_SESSION['admin']))
{
// Redirecting To Home Page
header("Location: ../../../index.php");
}
?>
