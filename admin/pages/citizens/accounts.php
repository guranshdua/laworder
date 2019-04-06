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
                  <h3>Pending Approvals</h3>
                  <div class="table-responsive">
                    <table class="table table-striped">
                      <thead>
                        <tr>
                          <th>
                            Name
                          </th>
                          <th>
                            DOB
                          </th>
                          <th>
                            S/O
                          </th>
                          <th>
                            Mobile Number
                          </th>
                          <th>
                            Email
                          </th>
                          <th>
                            Address
                          </th>
                          <th>
                            ID Proof
                          </th>

                        </tr>
                      </thead>
                      <tbody>
                        <?php
                        $query="SELECT * from `Citizen` where CrossCheckStatus=1";
                        $result=mysqli_query($con,$query);
                        while($row=(mysqli_fetch_array($result)))
                        {

                          echo "
                          <tr>
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
                              $row[7]
                            </td>
                            <td>
                              <img src='data:image/jpeg;base64,".base64_encode( $row[10] )."'/>
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
