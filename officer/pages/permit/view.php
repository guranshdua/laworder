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
    extract($_POST);
    //echo "<br /><br /><br /><br />".$submit;
    if($submit>0)
    {
      $query="UPDATE `licence` SET Status=1, approved_on='$cenvertedTime', approved_by=$_SESSION[police] where Licence_id=$submit";
      if(mysqli_query($con,$query))
      {
        $err=0;
      }
      else {
        $err=2;
      }
    }
    else
    {
      $submit=$submit*(-1);
      $query="UPDATE `licence` SET Status=2, approved_on='$cenvertedTime', approved_by=$_SESSION[police] where Licence_id=$submit";
      if(mysqli_query($con,$query))
      {
        $err=1;
      }
      else {
        $err=3;
      }
    }


  }
?>
<body>
  <div class="container-scroller">
    <!-- partial:../../partials/_navbar.html -->
    <?php
    //include("../../partials/_navbar.php")
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
                  <?php
                  if(isset($err))
                  {
                    //echo $query;
                      if($err==3)
                      {
                        echo'
                        <div class="alert alert-danger" role="alert">
                          Request was not completed!
                        </div>';

                      }
                      if($err==0)
                      {
                        echo'
                        <div class="alert alert-success" role="alert">
                          Request Approved Successfully!
                        </div>';
                      }
                      if($err==1)
                      {
                        echo'
                        <div class="alert alert-success" role="alert">
                          Request Rejected Successfully!
                        </div>';
                      }
                      if($err==2)
                      {
                        echo'
                        <div class="alert alert-danger" role="alert">
                          Request was not completed!
                        </div>';
                      }
                      unset($err);
                  }

                   ?>
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
                            Applied On
                          </th>
                          <th>
                            Approve
                          </th>
                          <th>
                            Reject
                          </th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php
                        $query="SELECT * from `licence` where ps=$_SESSION[ps] and Status=0";
                        $result=mysqli_query($con,$query);
                        while($row=(mysqli_fetch_array($result)))
                        {
                          $que="SELECT * from `citizen` where Citizen_id=$row[1]";
                          $result1=mysqli_query($con,$que);
                          $row1=(mysqli_fetch_array($result1));
                          $rown=$row[0]*(-1);
                          echo "
                          <tr>
                            <td>
                              $row1[2]
                            </td>
                            <td>
                              $row1[3]
                            </td>
                            <td>
                              $row1[4]
                            </td>
                            <td>
                              $row1[5]
                            </td>
                            <td>
                              $row1[6]
                            </td>
                            <td>
                              $row1[7]
                            </td>
                            <td>
                              $row[4]
                            </td>
                            <form method='post'>
                            <td>
                              <button type='submit' class='btn btn-success submit-btn btn-block' name='submit' value='$row[0]'><i class='fa fa-check'></i></button>
                            </td>
                            <td>
                              <button type='submit' class='btn btn-danger submit-btn btn-block' name='submit' value='$rown'><i class='fa fa-times'></i></button>
                            </td>
                            </form>

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
