<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css">
    <style>
        .card-registration .select-input.form-control[readonly]:not([disabled]) {
        font-size: 1rem;
        line-height: 2.15;
        padding-left: .75em;
        padding-right: .75em;
        }
        .card-registration .select-arrow {
        top: 13px;
        }
    </style>
</head>
<body>
    <section class="h-100 bg-dark">
        <div class="container py-5 h-100">
          <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col">
              <div class="card card-registration my-4">
                <div class="row g-0">
                  <div class="col-xl-6 d-none d-xl-block">
                    <img src="cartoon-drawing-of-a-doctor-vector.webp" alt="Sample photo" class="img-fluid" style="border-top-left-radius: .25rem; border-bottom-left-radius: .25rem; width:100%; height:100%" />
                  </div>
                  <div class="col-xl-6">
                    <div class="card-body p-md-5 text-black">
                      <h3 class="mb-5 text-uppercase">Patient registration form</h3>
                    <form action="docform.php" method="post">
                      <div class="row">
                        <div class="col-md-6 mb-4">
                          <div class="form-outline">
                            <input type="text" name="DocId" id="form3Example1m" class="form-control form-control-lg" />
                            <label class="form-label" for="form3Example1m">Doctor Id</label>
                          </div>
                        </div>
                        <div class="col-md-6 mb-4">
                          <div class="form-outline">
                            <input type="text" name="PatientId" id="form3Example1n" class="form-control form-control-lg" />
                            <label class="form-label" for="form3Example1n">Patient ID</label>
                          </div>
                        </div>
                      </div>
      
                      <div class="row">
                        <div class="col-md-6 mb-4">
                          <div class="form-outline">
                            <input type="text" name="PatientName" id="form3Example1m1" class="form-control form-control-lg" />
                            <label class="form-label" for="form3Example1m1">Patient Name</label>
                          </div>
                        </div>
                        <div class="col-md-6 mb-4">
                          <div class="form-outline">
                            <input type="text" name="Gender" id="form3Example1n1" class="form-control form-control-lg" />
                            <label class="form-label" for="form3Example1n1">Patient's Gender</label>
                          </div>
                        </div>
                        <div class="col-md-6 mb-4">
                          <div class="form-outline">
                            <input type="text" name="Age" id="form3Example1n1" class="form-control form-control-lg" />
                            <label class="form-label" for="form3Example1n1">Patient's Age</label>
                          </div>
                        </div>
                        <div class="col-md-6 mb-4">
                          <div class="form-outline">
                            <input type="text" name="MaritalStatus" id="form3Example1n1" class="form-control form-control-lg" />
                            <label class="form-label" for="form3Example1n1">Patient's Marital Status</label>
                          </div>
                        </div>
                        <div class="col-md-6 mb-4">
                          <div class="form-outline">
                            <input type="text" name="MobNo" id="form3Example1n1" class="form-control form-control-lg" />
                            <label class="form-label" for="form3Example1n1">Patient's Mobile Number</label>
                          </div>
                        </div>
                      </div>
      
                      <div class="form-outline mb-4">
                        <input type="text" name="Diagnosis" id="form3Example8" class="form-control form-control-lg" />
                        <label class="form-label" for="form3Example8">Patient's Diagnosis</label>
                      </div>
      
                      <div class="form-outline mb-4">
                        <input type="text" name="Med1" id="form3Example9" class="form-control form-control-lg" />
                        <label class="form-label" for="form3Example9">Prescripted Medicine 1</label>
                      </div>

                      <div class="form-outline mb-4">
                        <input type="text" name="Med2" id="form3Example9" class="form-control form-control-lg" />
                        <label class="form-label" for="form3Example9">Prescripted Medicine 2</label>
                      </div>

                      <div class="form-outline mb-4">
                        <input type="text" name="Med3" id="form3Example9" class="form-control form-control-lg" />
                        <label class="form-label" for="form3Example9">Prescripted Medicine 3</label>
                      </div>

                      <div class="form-outline mb-4">
                        <input type="text" name="ExtraMed" id="form3Example9" class="form-control form-control-lg" />
                        <label class="form-label" for="form3Example9">Other Prescripted Medicine </label>
                      </div>
      
                      <div class="form-outline mb-4">
                        <input type="text" name="TreatmentDays" id="form3Example90" class="form-control form-control-lg" />
                        <label class="form-label" for="form3Example90">Revisit Span</label>
                      </div>
      
                      <div class="form-outline mb-4">
                        <input type="text" name="Date"id="form3Example99" class="form-control form-control-lg" />
                        <label class="form-label" for="form3Example99">Date</label>
                      </div>
      
                      <div class="d-flex justify-content-end pt-3">
                        <button name="Submit"class="btn btn-warning btn-lg ms-2" type="submit" method="post">Submit form</button>
                        <a href="patientdet2.php" class="btn btn-warning btn-lg ms-2" data-mdb-ripple-color="dark">Proceed</a>
                      </div>
                    
                    </div>
                    </form>
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
        $PatientId = $_POST['PatientId'];
        $PatientName = $_POST['PatientName'];
        $Gender = $_POST['Gender'];
        $Age = $_POST['Age'];
        $MobNo= $_POST['MobNo'];
        $MaritalStatus= $_POST['MaritalStatus'];
        $Diagnosis= $_POST['Diagnosis'];
        $Med1 = $_POST['Med1'];
        $Med2 = $_POST['Med2'];
        $Med3 = $_POST['Med2'];
        $ExtraMed = $_POST['ExtraMed'];
        $TreatmentDays= $_POST['TreatmentDays'];
        $Date = $_POST['Date'];

        $servername = "localhost:3307";
        $username = "root";
        $password = "";
        $database = "hivmanagement";

        $conn = mysqli_connect($servername, $username, $password, $database);

        if (!$conn){
            die("Sorry we failed to connect ".mysqli_connect_error());
        }
        else
        {        
            // echo '<script>alert("password is not equal to confirm password")</script>';
            $sql = "INSERT INTO `patientdet` (`DocID`, `PatientID` , `PatientName`, `Diagnosis`, `Med1`, `Med2`, `Med3`, `ExtraMed`, `TreatmentDays` , `Date`, `Gender`, `Age`, `MaritalStatus`,`MobNO`) VALUES ('$DocId', '$PatientId', '$PatientName', '$Diagnosis', '$Med1', '$Med2', '$Med3','$ExtraMed', '$TreatmentDays', '$Date', '$Gender', '$Age', '$MaritalStatus','$MobNo')";
            $result = mysqli_query($conn, $sql);
            if ($result)
            {
              echo '<script>alert("Patient is successfully registered")</script>';
              // header('location: /HIV/patientdet.php');
            }
            else
            {
                // echo "The record was not inserted successfully because of this error ---> ". mysqli_error($conn);
                echo '<script>alert("Failure")</script>';
            }
        }
    }
    ?>

    
</body>
</html>