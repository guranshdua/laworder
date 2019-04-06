<!DOCTYPE html>
<html lang="en">

<head>
  <?php
  include("partials/_headroot.php");
  ?>
</head>

<body>
  <div class="container-scroller">
    <!-- partial:../../partials/_navbar.html -->
    <?php
    include("./partials/_navbarroot.php")
    ?>
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
      <!-- partial:../../partials/_sidebar.html -->

      <?php
      include("./partials/sidenavroot.php");
      ?>

      <!-- partial -->
      <div class="main-panel">
        <div class="content-wrapper">
          <div class="col-lg-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <div class="row">
                    <div class="col-sm-12 text-center">
                      <h2>Indian Administrative Services</h2>
                      <br  /><br  />
                    </div>

                  </div>
                  <?php
                    $query="SELECT * from `administrator` where ID='$_SESSION[admin]'";
                    $result = mysqli_query($con,$query) or die(mysql_error());
                    $record = mysqli_fetch_array($result);
                   ?>
                  <div class="row">
                    <div class="col-lg-12 grid-margin stretch-card ">
                      <!-- Display the countdown timer in an element -->
                      <div class="card bg-light mb-3 col-sm-12 offset-sm-0" >
                        <div class="card-body text-center">
                          <h3>My Profile</h3>
                          <br />
                          <div class="row">
                            <div class="col-sm-3 offset-sm-0 text-left">
                              <h4><strong>ID</strong> : <?php echo $record[0];?></h4>
                            </div>
                            <div class="col-sm-4  text-left">
                              <h4><strong>Name</strong> : <?php echo $record[1];?></h4>
                            </div>
                            <div class="col-sm  text-left">
                              <h4><strong>Designation</strong> : <?php echo $record[3];?></h4>
                            </div>
                          </div>
                          <br />
                          <div class="row">
                            <div class="col-sm-3  text-left">
                              <h4><strong>DOB</strong> : <?php echo $record[6];?></h4>
                            </div>
                            <div class="col-sm-4  text-left">
                              <h4><strong>Contact</strong> : <?php echo $record[4];?></h4>
                            </div>
                            <div class="col-sm  text-left">
                              <h4><strong>Email</strong> : <?php echo $record[5];?></h4>
                            </div>
                          </div><br />
                          <div class="row">
                            <div class="col-sm  text-left">
                              <h4><strong>Qualification</strong> : <?php echo $record[7];?></h4>
                            </div>

                          
                          <br />

                            <div class="col-sm-6  text-left">
                              <h4><strong>Address</strong> : <?php echo $record[8];?></h4>
                            </div>

                          </div>
                        </div>
                      </div>



                    </div>
                  </div>

                  </div>
                </div>
              </div>
        </div>
        <!-- content-wrapper ends -->
        <!-- partial:../../partials/_footer.html -->
        <?php
          include('./partials/_footer.html');
        ?>

        <!-- partial -->
      </div>
      <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->
  <!-- plugins:js -->
  <script src="./vendors/js/vendor.bundle.base.js"></script>
  <script src="./vendors/js/vendor.bundle.addons.js"></script>
  <!-- endinject -->
  <!-- Plugin js for this page-->
  <!-- End plugin js for this page-->
  <!-- inject:js -->
  <script src="./js/off-canvas.js"></script>
  <script src="./js/misc.js"></script>
  <script>
!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src='https://weatherwidget.io/js/widget.min.js';fjs.parentNode.insertBefore(js,fjs);}}(document,'script','weatherwidget-io-js');
</script>

  <!-- endinject -->
  <!-- Custom js for this page-->
  <!-- End custom js for this page-->
</body>

</html>
