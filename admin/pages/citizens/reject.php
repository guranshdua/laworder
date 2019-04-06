<head>
  <?php
  include('../../partials/_head.php');
   ?>
</head>

<?php
if(isset($_GET))
{
  extract($_GET);
  $query="DELETE FROM `citizen` where Citizen_id=$id";
  if(mysqli_query($con,$query))
  {
    echo "Rejected!";
  }

}
?>

<a href="./approval.php">Go Back</a>
