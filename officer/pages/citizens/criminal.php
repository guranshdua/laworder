<!DOCTYPE html>
<html lang="en">

<head>
  <?php
  include('../../partials/_head.php');
   ?>
</head>

<?php
if(isset($_POST['cname']))
{
  //echo "HELLO";
  extract($_POST);
  //echo "HERE";
    $query="INSERT INTO `criminal` values(NULL,'$cname','$pname', '$age', '$address', '$job')";
    //echo $query;
    if(mysqli_query($con,$query))
    {
      //echo "HERE";
      $err=0;
    }
    else {
      echo("Error description: " . mysqli_error($con));
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
                  <h1>New Criminal</h1><br>
                  <?php
                  if(isset($err))
                  {
                    if($err==0)
                    {
                      echo '
                      <div class="alert alert-success" role="alert">
                        <small>Criminal Added</small>
                      </div>';
                      unset($err);
                    }
                    else {
                      echo '
                      <div class="alert alert-danger" role="alert">
                        <small>Criminal not added!</small>
                      </div>';
                      unset($err);
                    }
                  }
                  ?>
                  <div class="col-12 grid-margin">
                  <div class="card">
                    <div class="card-body">
                      <form  method="post" enctype="multipart/form-data">
                        <p class="card-description">

                        </p>
                        <div class="row">
                          <div class="col-md-6">
                            <div class="form-group row">
                              <label class="col-sm-3 col-form-label">Name</label>
                              <div class="col-sm-9">
                                <input type="text" name="cname" class="form-control" placeholder="ID" required/>
                              </div>
                            </div>
                          </div>
                          <div class="col-md-6">
                            <div class="form-group row">
                              <label class="col-sm-3 col-form-label">Parent's Name</label>
                              <div class="col-sm-9">
                                <input type="text" class="form-control" name="pname" placeholder="" required/>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="row">
                          <div class="col-md-6">
                            <div class="form-group row">
                              <label class="col-sm-3 col-form-label">Age</label>
                              <div class="col-sm-9">
                                <input type="text" class="form-control" name="age" placeholder="" required/>
                              </div>
                            </div>
                          </div>
                          <div class="col-md-6">
                            <div class="form-group row">
                              <label class="col-sm-3 col-form-label">Address</label>
                              <div class="col-sm-9">
                                <input type="text" class="form-control" name="address" placeholder="" required/>
                              </div>
                            </div>
                          </div>

                        </div>
                        <div class="row">

                          <div class="col-md-6">
                            <div class="form-group row">
                              <label class="col-sm-3 col-form-label">Job</label>
                              <div class="col-sm-9">
                                <input type="text" class="form-control" name="job" placeholder="" required/>
                              </div>
                            </div>
                          </div>
                        </div>
                        <br />
                          <div class="row ">
                            <div class="col-sm-3 offset-sm-4">
                              <button type="submit" name="submit" class="btn btn-success btn-block" >Add Criminal</button>
                            </div>

                          </div>
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
  <script type="application/javascript">
    $('input[type="file"]').change(function(e){
        var fileName = e.target.files[0].name;
        $('.custom-file-label').html(fileName);
    });
</script>
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
