<!DOCTYPE html>
<html lang="en">

<head>
  <?php
  include('../../partials/_head.php');
   ?>
</head>

<?php
if(isset($_GET))
{
  extract($_GET);
  $query="SELECT * from `citizen` where Citizen_id=$id";
  $result=mysqli_query($con,$query);
  $record = mysqli_fetch_assoc($result);
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
                  <h1>Account Approval</h1><br>
                  <?php
                  if(isset($err))
                  {
                    if($err==0)
                    {
                      echo '
                      <div class="alert alert-primary" role="alert">
                        <small>Account Approved</small>
                      </div>';
                      unset($err);
                    }
                  }
                  ?>
                  <div class="col-12 grid-margin">
                  <div class="card">
                    <div class="card-body">
                      <form class="form-sample" method="post" action="">
                        <p class="card-description">
                          Personal info
                        </p>
                        <div class="row">
                          <div class="col-md-6">
                            <div class="form-group row">
                              <label class="col-sm-3 col-form-label">Name</label>
                              <div class="col-sm-9">
                                <input type="text" name="fname" class="form-control" value="<?php echo $record['Name'] ?>" placeholder="First Name" readonly/>
                              </div>
                            </div>
                          </div>
                          <div class="col-md-6">
                            <div class="form-group row">
                              <label class="col-sm-3 col-form-label">S/o</label>
                              <div class="col-sm-9">
                                <input type="text" class="form-control" name="lname" value="<?php echo $record['Parents_name'] ?>" placeholder="Last Name" readonly/>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="row">
                          <div class="col-md-6">
                            <div class="form-group row">
                              <label class="col-sm-3 col-form-label">DOB</label>
                              <div class="col-sm-9">
                                <input type="text" class="form-control" name="rno" value="<?php echo $record['DOB'] ?>" placeholder="Register No." readonly/>
                              </div>
                            </div>
                          </div>
                          <div class="col-md-6">
                            <div class="form-group row">
                              <label class="col-sm-3 col-form-label">E - Mail ID</label>
                              <div class="col-sm-9">
                                <input type="email" class="form-control" name="mail" placeholder="E-Mail ID" value="<?php echo $record['email'] ?>" readonly/>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="row">
                          <div class="col-md-6">
                            <div class="form-group row">
                              <label class="col-sm-3 col-form-label">Mobile Number</label>
                              <div class="col-sm-9">
                                <input type="text" class="form-control" name="mobile" placeholder="Mobile Number" value="<?php echo $record['contact'] ?>" readonly/>
                              </div>
                            </div>
                          </div>
                        </div>
                        <br>
                        <p class="card-description">
                          Address
                        </p>
                        <div class="row">
                          <div class="col-md-6">
                            <div class="form-group row">
                              <label class="col-sm-3 col-form-label">Police Station ID</label>
                              <div class="col-sm-9">
                                <input type="text" class="form-control" name="block" value="<?php echo $record['ps'] ?>" readonly/>
                              </div>
                            </div>
                          </div>
                          <div class="col-md-6">
                            <div class="form-group row">
                              <label class="col-sm-3 col-form-label">Address</label>
                              <div class="col-sm-9">
                                <input type="text" class="form-control" name="room" value="<?php echo $record['Address'] ?>" readonly/>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="row">
                          <div class="col-sm-12">
                            <?php
                            echo "
                            <img width='100%' src='data:image/jpeg;base64,".base64_encode( $record['id_image'] )."'/>
                            ";
                            ?>
                          </div>
                        </div>
                        <br />
                        <form method="post" action="">
                          <div class="row ">
                            <div class="col-sm-3 offset-sm-3">
                              <a class="btn btn-success btn-block" href="accept.php?id=<?php echo $record['Citizen_id'];?>">Approve</a>
                            </div>
                            <div class="col-sm-3">
                              <a class="btn btn-danger btn-block" href="reject.php?id=<?php echo $record['Citizen_id'];?>">Reject</a>
                            </div>
                          </div>
                        </form>

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
