<!DOCTYPE html>
<html lang="en">

<head>
  <?php
  include('../../partials/_head.php');
   ?>
</head>

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
          <div class="col-lg-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h3>Cases</h3>
                  <br />
                  <?php
                  if(isset($_GET['err']))
                  {
                    extract($_GET);
                    if($err==0)
                    {
                      echo '
                      <div class="alert alert-success" role="alert">
                        <small>Case Disposed!</small>
                      </div>';
                      unset($err);
                    }
                    else {
                      echo '
                      <div class="alert alert-danger" role="alert">
                        <small>Case not Disposed!</small>
                      </div>';
                      unset($err);
                    }
                  }
                  ?>
                  <div class="row">
                    

                    <form  method="post" enctype="multipart/form-data">
                    <div class="col-sm-9">
                      <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Search by Case ID</label>
                        <div class="col-sm-6">
                          <input type="text" name="appname" class="form-control" placeholder="Case ID" required/>
                        </div>
                        <div class="col-sm-3">
                          <button class="btn btn-alert btn-primary" type="submit">Search</button>
                        </div>
                      </div>
                    </div>
                    </form>
                  </div>


                  <div class="table-responsive">
                    <table class="table table-striped">
                      <thead>
                        <tr>
                          <th>
                            Case ID
                          </th>
                          <th>
                            FIR ID
                          </th>
                          <th>
                            Location
                          </th>
                          <th>
                            Property
                          </th>
                          <th>
                            Status
                          </th>
                          <th>
                            Department
                          </th>
                          <th>
                            Date
                          </th>
                          <th>
                            Action
                          </th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php
                        if(isset($_POST['appname']))
                        {
                          $query="SELECT * from `case_details` where Case_ID=$_POST[appname] AND Status NOT LIKE '-1'";
                        }
                        else {
                          $query="SELECT * from `case_details` where Status NOT LIKE '-1' ";
                        }
                        //echo $query;
                        $result=mysqli_query($con,$query);
                        while($row=(mysqli_fetch_array($result)))
                        {

                          echo "
                          <tr>
                            <td>
                              $row[0]
                            </td>
                            <td>
                              $row[1]
                            </td>
                            <td>
                              $row[2]
                            </td>
                            <td>
                              $row[3]
                            </td>
                            <td>
                              $row[4]
                            </td>
                            <td>
                              $row[5]
                            </td>
                            <td>
                              $row[6]
                            </td>
                            <td>
                              <a href='dispose.php?id=$row[0]'>Dispose to Court</a>
                            </td>

                          </tr>";
                        }
                        ?>
                      </tbody>
                    </table>
                  </div>

                </div>
              </div>
            </div>
        </div>
        <!-- content-wrapper ends -->
        <!-- partial:../../partials/_footer.html -->
        <?php
          include('../../partials/_footer.html');
        ?>

        <!-- partial -->
      </div>
      <!-- main-panel ends -->
    </div>
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
