<!DOCTYPE html>
<html lang="en">

<head>
  <?php
  include('../../partials/_head.php');
   ?>
</head>

<?php
if(isset($_POST['fir']))
{
  //echo "HELLO";
  extract($_POST);
  $query="SELECT FIR_ID from `fir` where FIR_ID=$fir";
  //echo $query;
  $res=mysqli_query($con,$query);
  if($res)
  {
    $row=mysqli_num_rows($res);
  }
  else {
    $row=0;
  }
  if($row>0)
  {
    $query="INSERT INTO `case_details` values(NULL,'$fir','$location', '$prop', '$status', '$dept','$cenvertedTime')";
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
  else {
    $err=3;
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
                  <h1>New Case</h1><br>
                  <?php
                  if(isset($err))
                  {
                    if($err==0)
                    {
                      echo '
                      <div class="alert alert-success" role="alert">
                        <small>Case Lodged!</small>
                      </div>';
                      unset($err);
                    }
                    else {
                      echo '
                      <div class="alert alert-danger" role="alert">
                        <small>Case not Lodged!</small>
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
                              <label class="col-sm-3 col-form-label">FIR ID</label>
                              <div class="col-sm-9">
                                <input type="text" name="fir" class="form-control" placeholder="ID" required/>
                              </div>
                            </div>
                          </div>
                          <div class="col-md-6">
                            <div class="form-group row">
                              <label class="col-sm-3 col-form-label">Location</label>
                              <div class="col-sm-9">
                                <input type="text" class="form-control" name="location" placeholder="" required/>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="row">
                          <div class="col-md-6">
                            <div class="form-group row">
                              <label class="col-sm-3 col-form-label">Property Seized</label>
                              <div class="col-sm-9">
                                <input type="text" class="form-control" name="prop" placeholder="" required/>
                              </div>
                            </div>
                          </div>
                          <div class="col-md-6">
                            <div class="form-group row">
                              <label class="col-sm-3 col-form-label">Status</label>
                              <div class="col-sm-9">
                                <input type="text" class="form-control" name="status" placeholder="" required/>
                              </div>
                            </div>
                          </div>

                        </div>
                        <div class="row">

                          <div class="col-md-6">
                            <div class="form-group row">
                              <label class="col-sm-3 col-form-label" for="dept">Department</label>
                              <div class="col-sm-9">
                              <select name="dept" class="form-control " id="dept" >
                                <option value="Crime">
                                  Civil Crime
                                </option>
                                <option value="Traffic">
                                  Traffic
                                </option>
                              </select>
                            </div>
                            </div>
                          </div>
                        </div>
                        <br />
                          <div class="row ">
                            <div class="col-sm-3 offset-sm-4">
                              <button type="submit" name="submit" class="btn btn-success btn-block" >Create Case</button>
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
