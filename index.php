<!DOCTYPE html>
<?php
include("./db.php");
include('./authlogin.php');
?>
<?php
$startTime = date("Y-m-d H:i:s");
$cenvertedTime = date('Y-m-d H:i:s',strtotime('+5 hour +30 minutes',strtotime($startTime)));

  // If form submitted, insert values into the database.
  if (isset($_POST['username'])){
    $type=$_POST['type'];
    //echo $type;
      // removes backslashes
    $username = stripslashes($_REQUEST['username']);
      //escapes special characters in a string
    $username = mysqli_real_escape_string($con,$username);
    $password = stripslashes($_REQUEST['password']);
    $password = mysqli_real_escape_string($con,$password);
    if($type==1)
    {
      $query = "SELECT * FROM `citizen` WHERE Citizen_id='$username'
      and Password='$password' and CrossCheckStatus=1";
    }
    else if($type==2)
    {
      $query = "SELECT * FROM `police` WHERE Officer_id='$username'
      and Password='$password' ";

    }
    else if($type==3)
    {
      $query = "SELECT * FROM `administrator` WHERE ID='$username'
      and Password='$password' ";
    }
    //echo $query;
    //Checking is user existing in the database or not

    $result = mysqli_query($con,$query) or die(mysql_error());
    $rows = mysqli_num_rows($result);
    $record = mysqli_fetch_assoc($result);
    if($rows==1){
      if($type==1)
      {
        echo "Here";
        $_SESSION["citizen"] = $record['Citizen_id'];
        $_SESSION["ps"]=$record['ps'];
      }
      else if($type==2)
      {
        $_SESSION["police"] = $record['Officer_id'];
        $_SESSION["ps"]=$record['Station_Code'];
      }
      else if($type==3)
      {
        $_SESSION["admin"] = $record['ID'];
      }
      $_SESSION["name"]=$record['Name'];

      if($type==1)
      {
        header("Location: ./citizen");
      }
      else if($type==2)
      {
        header("Location: ./officer");
      }
      else if($type==3)
      {
        header("Location: ./admin");
      }

    }
    else{
      $_SESSION['loginerror']=1;
    }
  }
?>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Indian Law</title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="./citizen/vendors/iconfonts/mdi/css/materialdesignicons.min.css">
  <link rel="stylesheet" href="./citizen/vendors/css/vendor.bundle.base.css">
  <link rel="stylesheet" href="./citizen/vendors/css/vendor.bundle.addons.css">
  <!-- endinject -->
  <!-- plugin css for this page -->
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="./citizen/css/style.css">
  <!-- endinject -->
  
</head>

<body>
  <div class="container-scroller">
    <div class="container-fluid page-body-wrapper full-page-wrapper auth-page">
      <div class="content-wrapper d-flex align-items-center auth auth-bg-1 theme-one">
        <div class="row w-100">

          <div class="col-lg-4 mx-auto">
            <div class="auto-form-wrapper">
              <h1>Law and Order</h1>


              <?php
              if(isset($_SESSION['loginerror']))
              {
                if($_SESSION['loginerror']==1)
                {
                  echo '
                  <div class="alert alert-danger" role="alert">
                    <small>Invalid Credentials</small>
                  </div>';
                  unset($_SESSION['loginerror']);
                }
              }
              ?>
              <form action="" method="post" name="login">
                <div class="form-group">
                  <label class="label">User Type</label>
                  <div class="input-group">
                    <select name="type" class="form-control">
                      <option value='1'>
                        Citizen
                      </option>
                      <option value='2'>
                        Police
                      </option>
                      <option value='3'>
                        Administrator
                      </option>
                    </select>
                  </div>
                </div>
                <div class="form-group">
                  <label class="label">Username</label>
                  <div class="input-group">
                    <input type="text" class="form-control" placeholder="Username" name="username">
                    <div class="input-group-append">
                      <span class="input-group-text">
                        <i class="mdi mdi-check-circle-outline"></i>
                      </span>
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <label class="label">Password</label>
                  <div class="input-group">
                    <input type="password" class="form-control" placeholder="*********" name="password">
                    <div class="input-group-append">
                      <span class="input-group-text">
                        <i class="mdi mdi-check-circle-outline"></i>
                      </span>
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <button class="btn btn-primary submit-btn btn-block" type="submit" name="submit">Login</button>
                </div>
              </form>
              <button class="btn btn-info btn-block" onclick="location.href='./register.php'">Sign Up</button>
            </div>
            <p class="footer-text text-center">Copyright © 2019 Dua Technologies. All rights reserved.</p>
          </div>
        </div>
      </div>
      <!-- content-wrapper ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->
  <!-- plugins:js -->
  <!-- endinject -->
  <!-- inject:js -->
  <!-- endinject -->
</body>

</html>
