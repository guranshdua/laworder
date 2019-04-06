<?php
if(isset($_SESSION["police"])){
header("Location: ./officer/index.php");
exit(); }
else if(isset($_SESSION["citizen"])){
header("Location: ./citizen/index.php");
exit(); }
else if(isset($_SESSION["administrator"])){
header("Location: ./administrator/index.php");
exit(); }
?>
