<?php
session_start();
if(!isset($_SESSION["police"]))
{
header("Location: ../../../index.php");
exit();
}
?>
