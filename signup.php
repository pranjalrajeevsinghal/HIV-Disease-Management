
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    <title>Document</title>
    <style>
        @media (min-width: 1025px) {
.h-custom {
height: 100vh !important;
}
}
.card-registration .select-input.form-control[readonly]:not([disabled]) {
font-size: 1rem;
line-height: 2.15;
padding-left: .75em;
padding-right: .75em;
}
.card-registration .select-arrow {
top: 13px;
}

.gradient-custom-2 {
/* fallback for old browsers */
background: #a1c4fd;

/* Chrome 10-25, Safari 5.1-6 */
background: -webkit-linear-gradient(to right, rgba(161, 196, 253, 1), rgba(194, 233, 251, 1));

/* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
background: linear-gradient(to right, rgba(161, 196, 253, 1), rgba(194, 233, 251, 1))
}

.bg-indigo {
  background-color: #4e68e9;
}
@media (min-width: 992px) {
.card-registration-2 .bg-indigo {
border-top-right-radius: 15px;
border-bottom-right-radius: 15px;
}
}
@media (max-width: 991px) {
.card-registration-2 .bg-indigo {
border-bottom-left-radius: 15px;
border-bottom-right-radius: 15px;
}
}
    </style>
</head>
<body>

    <section class="h-100 h-custom gradient-custom-2">
        <div class="container py-5 h-100">
          <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col-12">
              <div class="card card-registration card-registration-2" style="border-radius: 15px;">
                <div class="card-body p-0">
                  <div class="row g-0">
                    <div class="col-lg-6">
                    <img src="signup.webp" width="95%" height="70%" style="position: relative; top: 15%;">
                      <!-- <div class="p-5">
                        <h3 class="fw-normal mb-5" style="color: #4835d4;">General Infomation</h3>
      
                        <div class="mb-4 pb-2">
                          <select class="select">
                            <option value="1">Title</option>
                            <option value="2">Dr.</option>
                            <option value="3">Dr.(Mrs.)</option>
                            <option value="4">Resident</option>
                          </select>
                        </div>
      
                        <div class="row">
                          <div class="col-md-6 mb-4 pb-2">
      
                            <div class="form-outline">
                              <input type="text" id="form3Examplev2" class="form-control form-control-lg" />
                              <label class="form-label" for="form3Examplev2">First name</label>
                            </div>
      
                          </div>
                          <div class="col-md-6 mb-4 pb-2">
      
                            <div class="form-outline">
                              <input type="text" id="form3Examplev3" class="form-control form-control-lg" />
                              <label class="form-label" for="form3Examplev3">Last name</label>
                            </div>
      
                          </div>
                        </div>
      
                        <div class="mb-4 pb-2">
                          <select class="select">
                            <option value="1">Chief of HIV Dept.</option>
                            <option value="2">Senior Doctor</option>
                            <option value="3">Doctor</option>
                            <option value="4">Junior Doctor or Resident</option>
                          </select>
                        </div>
      
                        <div class="mb-4 pb-2">
                          <div class="form-outline">
                            <input type="text" id="form3Examplev4" class="form-control form-control-lg" />
                            <label class="form-label" for="form3Examplev4">Position</label>
                          </div>
                        </div>
      
                        <div class="row">
                          <div class="col-md-6 mb-4 pb-2 mb-md-0 pb-md-0">
      
                            <div class="form-outline">
                              <input type="text" id="form3Examplev5" class="form-control form-control-lg" />
                              <label class="form-label" for="form3Examplev5">Bussines Arena</label>
                            </div>
      
                          </div>
                          <div class="col-md-6">
      
                            <select class="select">
                              <option value="1">HDFN 1</option>
                              <option value="2">HDFN 2</option>
                              <option value="3">HDFN 3</option>
                              <option value="4">HDFN 4</option>
                            </select>
      
                          </div>
                        </div>
      
                      </div> -->
                    </div>
                    <div class="col-lg-6 bg-indigo text-white">
                      <div class="p-5">
                        <h3 class="fw-normal mb-5">Doctor Registration</h3>
                        <form action="signup.php" method="post">
                        <div class="mb-4 pb-2">
                          <div class="form-outline form-white">
                            <input type="text" name="DocId" id="DocId" class="form-control form-control-lg" />
                            <label class="form-label" for="DocId">Doctor ID</label>
                          </div>
                        </div>
      
                        <div class="mb-4 pb-2">
                          <div class="form-outline form-white">
                            <input type="text" name="DocName" id="DocName" class="form-control form-control-lg" />
                            <label class="form-label" for="DocName">Doctor Name</label>
                          </div>
                        </div>
      
                        <div class="row">
                          <div class="col-md-5 mb-4 pb-2">
      
                            <div class="form-outline form-white">
                              <input type="password" name="pass" id="password" class="form-control form-control-lg" />
                              <label class="form-label" for="password">Enter Password</label>
                            </div>
      
                          </div>
                          <div class="col-md-7 mb-4 pb-2">
      
                            <div class="form-outline form-white">
                              <input type="text" name="confPass" id="confPass" class="form-control form-control-lg" />
                              <label class="form-label" for="confPass">Confirm Password</label>
                            </div>
      
                          </div>
                        </div>
      
                        <div class="mb-4 pb-2">
                          <div class="form-outline form-white">
                            <input type="email" name="MailID" id="MailID" class="form-control form-control-lg" />
                            <label class="form-label" for="MailID">Enter E-Mail Id</label>
                          </div>
                        </div>
      
                        <div class="row">
                          <div class="col-md-5 mb-4 pb-2">
      
                            <div class="form-outline form-white">
                              <input type="text" name="Department" id="Department" class="form-control form-control-lg" />
                              <label class="form-label" for="Department">Enter Your Department</label>
                            </div>
      
                          </div>
                          <div class="col-md-7 mb-4 pb-2">
      
                            <div class="form-outline form-white">
                              <input type="text" name="PhoneNo" id="PhoneNo" class="form-control form-control-lg" />
                              <label class="form-label" for="PhoneNo">Phone Number</label>
                            </div>
      
                          </div>
                        </div>
      
                        <div class="mb-4">
                          <div class="form-outline form-white">
                            <input type="text" name="Address" id="Address" class="form-control form-control-lg" />
                            <label class="form-label" for="Address">Enter Your Address</label>
                          </div>
                        </div>
      
                        <div class="form-check d-flex justify-content-start mb-4 pb-3">
                          <input class="form-check-input me-3" type="checkbox" value="" id="form2Example3c" />
                          <label class="form-check-label text-white" for="form2Example3">
                            I do accept the <a href="#!" class="text-white"><u>Terms and Conditions</u></a> of your
                            site.
                          </label>
                        </div>
      
                        <button method="post" type="submit" class="btn btn-light btn-lg"
                          data-mdb-ripple-color="dark">Register</button>
                        <a href="patientdet2.php" class="btn btn-light btn-lg" data-mdb-ripple-color="dark">Proceed</a>

                         
                      </div>
                      </form>
                    </div>

                  </div>

                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
  <?php
    if ($_SERVER['REQUEST_METHOD']== 'POST'){
        $DocId = $_POST['DocId']; 
        $DocName = $_POST['DocName'];
        $pass = $_POST['pass'];
        $confPass = $_POST['confPass'];
        $MailID= $_POST['MailID'];
        $Department= $_POST['Department'];
        // $PhoneNo= $_POST['PhoneNo'];
        $PhoneNo = $_POST['PhoneNo'];
        $Address= $_POST['Address'];

    $servername = "localhost:3307";
    $username = "root";
    $password = "";
    $database = "hivmanagement";

    $conn = mysqli_connect($servername, $username, $password, $database);

    if (!$conn){
      die("Sorry we failed to connect ".mysqli_connect_error());
    }

    else {
      // echo "Connection was successfull<br>";
      // $sql = "INSERT INTO `docsignup` (`DocID`, `Name` , `Password`, `Email`, `Dept`, `PhoneNo`, `Address`) VALUES ('$DocId', '$DocName', '$confPass', '$MailID', '$Department', '$PhoneNo', '$Address')";
      
      if($pass != $confPass)
      {
        echo '<script>alert("password is not equal to confirm password")</script>';
      }
      else
      {
        $sql = "INSERT INTO `docsignup` (`DocID`, `Name` , `Password`, `Email`, `Dept`, `PhoneNo`, `Address`) VALUES ('$DocId', '$DocName', '$confPass', '$MailID', '$Department', '$PhoneNo', '$Address')";
        $result = mysqli_query($conn, $sql);
        if ($result)
        {
            echo '<script>alert("Successfully registered!")</script>';
            // header('location: /HIV/docform.php');
        }
        else
        {
          // echo "The record was not inserted successfully because of this error ---> ". mysqli_error($conn);
          echo '<script>alert("Doctor already exist")</script>';
        }
      }
    }
  }
  ?>
</body>
</html>

