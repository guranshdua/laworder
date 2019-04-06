<!DOCTYPE html>
<html lang="en">
<?php
include("./db.php");
include('./authlogin.php');



?>
<?php

    if (isset($_POST['fname'])) {
      //echo "HAI";
      //echo $_POST['myfile'];
      $fileExtensions = ['jpeg','jpg']; // Get all the file extensions
    extract($_POST);
      $check=1;
      $imgData =addslashes (file_get_contents($_FILES['myfile']['tmp_name']));
      $fileName = $_FILES['myfile']['name'];
      $fileExtension = (explode('.',$fileName));
      $fileExtension = strtolower(end($fileExtension));

          while($check==1)
          {
                $Postf=rand(1000,9999);
                $ID='2019'.$Postf;
                $Que="Select Citizen_id from `citizen` where Citizen_id='$ID'";
      					$result=mysqli_query($con,$Que);
                if(mysqli_num_rows($result)==0)
      					{
      						$check=0;
      					}
                else {
                  $check=1;
                }
          }
          //echo "YAHAN";
          if (! in_array($fileExtension,$fileExtensions)) {
              $err =1;
          }
          else {

            $err=0;
            $query="INSERT INTO `citizen` values('$ID','$p1','$fname','$dob','$pname', $mob, '$email','$add','$area','$idtype','{$imgData}',0)";

            if(!mysqli_query($con,$query))
            {
              $err=4;
            }
            else {
              $err=0;
            }
          }

                //echo "DONE";





    }
    else {
      //echo "NOT THERE";
    }
    if(isset($_GET))
    {
      extract($_GET);
    }
    ?>

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Register</title>
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
  <link rel="shortcut icon" href="./citizen/images/favicon.png" />
</head>

<body>
  <div class="container-scroller">
    <div class="container-fluid page-body-wrapper full-page-wrapper auth-page">
      <div class="content-wrapper d-flex align-items-center auth register-bg-1 theme-one">
        <div class="row w-100">
          <div class="col-lg-4 mx-auto">
            <h2 class="text-center mb-4">Register</h2>
            <div class="auto-form-wrapper">
              <?php
              if(isset($err))
              {
                  if($err==1)
                  {
                    echo'
                    <div class="alert alert-danger" role="alert">
                      Not an Image!
                    </div>';
                  }
                  if($err==0)
                  {
                    echo'
                    <div class="alert alert-success" role="alert">
                      Your ID is '.$ID.'. Your approval is pending and will be done within 24 hrs.
                    </div>';
                  }
                  unset($err);
              }

               ?>

              <form action="" method="post" enctype="multipart/form-data">
                <div class="form-group">
                  <div class="input-group">
                    <input type="text" class="form-control" placeholder="Name" name="fname" required/>
                    <div class="input-group-append">
                      <span class="input-group-text">
                        <i class="mdi mdi-check-circle-outline"></i>
                      </span>
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <div class="input-group">
                    <input type="text" class="form-control" placeholder="Parent's Name" name="pname" required/>
                    <div class="input-group-append">
                      <span class="input-group-text">
                        <i class="mdi mdi-check-circle-outline"></i>
                      </span>
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <div class="input-group">
                    <input type="date" class="form-control" placeholder="Date Of Birth" name="dob" required/>
                    <div class="input-group-append">
                      <span class="input-group-text">
                        <i class="mdi mdi-check-circle-outline"></i>
                      </span>
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <div class="input-group">
                    <input type="tel" class="form-control" placeholder="Mobile Number" name="mob" required/>
                    <div class="input-group-append">
                      <span class="input-group-text">
                        <i class="mdi mdi-check-circle-outline"></i>
                      </span>
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <div class="input-group">
                      <select class="form-control" name="area">
                        <option value=NULL>
                          Select Area
                        </option>
                        <?php
                        $query="SELECT * from `ps` ORDER BY Location";
                        $rows=mysqli_query($con,$query);
                        while($res=mysqli_fetch_assoc($rows))
                        {
                        ?>
                          <option value="<?php echo $res['Station_Code'];?>"><?php echo $res['Location'];?></option>
                        <?php
                        }
                        ?>
                      </select>
                  </div>
                </div>
                <div class="form-group">
                  <div class="input-group">
                    <input type="text" class="form-control" placeholder="Address" name="add" required/>
                    <div class="input-group-append">
                      <span class="input-group-text">
                        <i class="mdi mdi-check-circle-outline"></i>
                      </span>
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <div class="input-group">
                    <input type="email" class="form-control" placeholder="Email ID" name="email" required/>
                    <div class="input-group-append">
                      <span class="input-group-text">
                        <i class="mdi mdi-check-circle-outline"></i>
                      </span>
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <div class="input-group">
                    <select class="form-control" name="idtype">
                      <option value=NULL>
                        Select ID Proof Type
                      </option>
                      <option value="1">
                        Aadhaar Card
                      </option>
                      <option value="2">
                        Voter ID
                      </option>
                      <option value="3">
                        Passport
                      </option>
                      <option value="4">
                        Driving License
                      </option>
                      <option value="5">
                        Employee ID
                      </option>
                      <option value="6">
                        School ID
                      </option>
                    </select>
                  </div>
                </div>
                <div class="form-group">
                  <div class="custom-file input-group">
                    <input type="file" class="custom-file-input file-upload-default form-control" name="myfile" id="customFile" required/>
                    <label class="custom-file-label" for="customFile">Choose file</label>
                  </div>
                </div>
                <div class="form-group">
                  <div class="input-group">
                    <input type="password" class="form-control" placeholder="Password" name="p1" required/>
                    <div class="input-group-append">
                      <span class="input-group-text">
                        <i class="mdi mdi-check-circle-outline"></i>
                      </span>
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <div class="input-group">
                    <input type="password" class="form-control" placeholder="Confirm Password" name="p2" required/>
                    <div class="input-group-append">
                      <span class="input-group-text">
                        <i class="mdi mdi-check-circle-outline"></i>
                      </span>
                    </div>
                  </div>
                </div>

                <div class="form-group">
                  <button class="btn btn-primary submit-btn btn-block">Register</button>
                </div>
                <div class="text-block text-center my-3">
                  <span class="text-small font-weight-semibold">Already have and account ?</span>
                  <a href="index.php" class="text-black text-small">Login</a>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
      <!-- content-wrapper ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->
  <!-- plugins:js -->
  <script src="./citizen/vendors/js/vendor.bundle.base.js"></script>
  <script src="./citizen/vendors/js/vendor.bundle.addons.js"></script>
  <!-- endinject -->
  <!-- inject:js -->
  <script src="./citizen/js/off-canvas.js"></script>
  <script src="./citizen/js/misc.js"></script>
  <script type="application/javascript">
    $('input[type="file"]').change(function(e){
        var fileName = e.target.files[0].name;
        $('.custom-file-label').html(fileName);
    });
</script>
  <!-- endinject -->
</body>

</html>
