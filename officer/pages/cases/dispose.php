<?php
include('../../partials/_head.php');
if(isset($_GET['id']))
{
  $query="UPDATE `case_details` SET Status='-1' WHERE Case_ID=$_GET[id]";
  if(mysqli_query($con,$query))
  {
    header("Location: ./cases.php?err=0");
  }
  else {
    header("Location: ./cases.php?err=1");
  }
}
?>
