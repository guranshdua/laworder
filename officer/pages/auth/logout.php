<?php
session_start();
UNSET($_SESSION['police']);
if(!isset($_SESSION['police']))
{
// Redirecting To Home Page
header("Location: ../../../index.php");
}
?>
