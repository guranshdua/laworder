<!DOCTYPE html>
<html lang="en">

<head>
  <?php
  include('../../partials/_head.php');
   ?>
</head>

<?php
if(isset($_POST['submit']))
{

  $query="INSERT INTO `licence` values(NULL,$_SESSION[citizen],$_SESSION[ps],0,'$cenvertedTime',NULL,NULL)";
  //echo "<br /><br /><br />".$query;
  if(!mysqli_query($con,$query))
  {
    $err=1;
  }
  else {
    $err=0;
  }
}
?>

<body>
  <div class="container-scroller">
    <!-- partial:../../partials/_navbar.html -->
    <?php
    include("../../partials/_navbar.php")
    ?>
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
      <!-- partial:../../partials/_sidebar.html -->
      <?php
      include("../../partials/sidenav.php");
      ?>


      <!-- partial -->
      <div class="main-panel">
        <div class="content-wrapper">
          <div class="container">
            <br>
            <div class="row">
              <div class="col-lg-12">
                  <h1>Arms Appication</h1><br>
                  <?php
                  if(isset($err))
                  {
                      if($err==1)
                      {
                        echo'
                        <div class="alert alert-danger" role="alert">
                          You can apply only once!! Check Status of previous application in Permits Menu.
                        </div>';
                      }
                      if($err==0)
                      {
                        echo'
                        <div class="alert alert-success" role="alert">
                          Your approval is pending.
                        </div>';
                      }
                      unset($err);
                  }

                   ?>
                  <div class="col-12 grid-margin">
                  <div class="card">
                    <div class="card-body">
                      <form class="form-sample" method="post" action="">
                        <p class="card-description">
                        </p>
                        <button name="submit" type="submit" class="btn btn-primary submit-btn btn-block">Apply by agreeing to T&Cs of posessing arms.</button>
                      </form>
                    </div>
                    <?php
                    /*if(isset($flag))
                    {
                      if($flag==1)
                      {
                        echo "DONE";
                      }
                      else if($flag==2)
                      {
                        echo "Nahi Hua<br>";
                        echo("Error description: " . mysqli_error($con));
                      }
                    }
                    if(isset($query))
                    {
                      echo $query;
                    }*/
                    ?>
                  </div>
                </div>
            <!-- content-wrapper ends -->
            <!-- partial:../../partials/_footer.html -->
            </div>
          </div>

            <!-- partial -->
          </div>
      <!-- main-panel ends -->
    </div>
    <?php
      include('../../partials/_footer.html');
    ?>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->
  <!-- plugins:js -->
  <script src="../../vendors/js/vendor.bundle.base.js"></script>
  <script src="../../vendors/js/vendor.bundle.addons.js"></script>
  <!-- endinject -->
  <!-- Plugin js for this page-->
  <!-- End plugin js for this page-->
  <!-- inject:js -->
  <script src="../../js/off-canvas.js"></script>
  <script src="../../js/misc.js"></script>
  <!-- endinject -->
  <!-- Custom js for this page-->
  <!-- End custom js for this page-->
</body>

</html>
