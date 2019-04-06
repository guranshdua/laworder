<?php
session_start();
if(!isset($_SESSION["citizen"]))
{
header("Location: ../../../index.php");
exit();
}
?>
