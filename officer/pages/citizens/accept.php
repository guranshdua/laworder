<head>
  <?php
  include('../../partials/_head.php');
   ?>
</head>

<?php
if(isset($_GET))
{
  extract($_GET);
  $query="UPDATE `citizen` SET CrossCheckStatus=1 where Citizen_id=$id";
  if(mysqli_query($con,$query))
  {
    echo "APPROVED!";
  }

}
?>

<a href="./approval.php">Go Back</a>
