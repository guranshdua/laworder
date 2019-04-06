<!DOCTYPE html>
<html lang="en">

<head>
  <?php
  include('../../partials/_head.php');
   ?>
</head>

<?php

  if(isset($_POST['pass']))
  {
    extract($_POST);
    if(strlen($pass)>=8)
    {
      if(strcmp($pass,$cpass)==0)
      {
        $query="UPDATE `police` SET Password='$pass' where Officer_id=$_SESSION[police]";
        if(mysqli_query($con,$query))
        {
          $passerror=0;
        }
        else {
          $passerror=2;
          echo $query;
        }
      }
      else {
        $passerror=1;
      }
    }
    else {
      $passerror=3;
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
            <div class="row">
              <div class="col-lg-12">

                  <h1>Update Password</h1><br>
                  <div class="col-12 grid-margin">
                  <div class="card">
                    <div class="card-body">
                      <form class="form-sample" method="post" action="">
                        <p class="card-description">
                          Password
                        </p>
                        <?php
                        if(isset($passerror))
                        {

                          if($passerror==0)
                          {
                            echo '
                            <div class="alert alert-success" role="alert">
                              <small>Password updated successfully.</small>
                            </div>';
                            unset($passerror);
                          }
                          else if($passerror==1)
                          {
                            echo '
                            <div class="alert alert-danger" role="alert">
                              <small>Passwords do not match, please retype. Error ISTEPW01</small>
                            </div>';
                            unset($passerror);
                          }
                          else if($passerror==2)
                          {
                            echo '
                            <div class="alert alert-danger" role="alert">
                              <small>Could not update password. Error ISTEPW02</small>
                            </div>';
                            unset($passerror);
                          }
                          else if($passerror==3)
                          {
                            echo '
                            <div class="alert alert-danger" role="alert">
                              <small>Password must be greater than 8 characters. Error ISTEPW03</small>
                            </div>';
                            unset($passerror);
                          }
                        }
                        ?>
                        <div class="row">
                          <div class="col-md-6">
                            <div class="form-group row">
                              <label class="col-sm-3 col-form-label">Enter Password</label>
                              <div class="col-sm-9">
                                <input type="password" name="pass" class="form-control"  placeholder="***************" required/>
                              </div>
                            </div>
                          </div>
                          <div class="col-md-6">
                            <div class="form-group row">
                              <label class="col-sm-3 col-form-label">Verify Password</label>
                              <div class="col-sm-9">
                                <input type="password" class="form-control" name="cpass"  placeholder="***************" required/>
                              </div>
                            </div>
                          </div>
                        </div>

                        <br>
                        <button type="submit" class="btn btn-success mr-2">Submit</button>
                      </form>
                    </div>
                  </div>

              </div>
            <!-- content-wrapper ends -->
            <!-- partial:../../partials/_footer.html -->
            </div>
          </div>

            <!-- partial -->
          </div>
        </div>
        <?php
          include('../../partials/_footer.html');
        ?>
      </div>
      <!-- main-panel ends -->
    </div>
  </div>
    <!-- page-body-wrapper ends -->

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
