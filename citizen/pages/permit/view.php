<!DOCTYPE html>
<html lang="en">

<head>
  <?php
  include('../../partials/_head.php');
   ?>
</head>

<?php
  $query="SELECT * from `licence` where Citizen_id=$_SESSION[citizen]";
  $res=mysqli_query($con,$query);
  $rows=mysqli_num_rows($res);
  if($rows==0)
  {
    $err=3;
  }
  else {
    $record=mysqli_fetch_assoc($res);
    if($record['Status']==0)
    {
      $err=0;
    }
    else if($record['Status']==1){
      $err=1;
    }
    else {
      $err=2;
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
                      if($err==3)
                      {
                        echo'
                        <div class="alert alert-danger" role="alert">
                          You Haven\'t applied for arms yet.
                        </div>';
                      }
                      if($err==0)
                      {
                        echo'
                        <div class="alert alert-info" role="alert">
                          Your approval is pending.
                        </div>';
                      }
                      if($err==1)
                      {
                        echo'
                        <div class="alert alert-success" role="alert">
                          Your request was approved by <strong>'.$record['approved_by'].'</strong> on <strong>'.$record['approved_on'].'</strong>.
                        </div>';
                      }
                      if($err==2)
                      {
                        echo'
                        <div class="alert alert-danger" role="alert">
                          Application Rejected.
                        </div>';
                      }
                      unset($err);
                  }

                   ?>

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
