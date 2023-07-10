<?php
        $servername = "localhost:3307";
        $username = "root";
        $password = "";
        $database = "hivmanagement";
        $conn = mysqli_connect($servername, $username, $password, $database);
        if (!$conn){
            die("Sorry we failed to connect ".mysqli_connect_error());
        }
        if ($_SERVER['REQUEST_METHOD']== 'POST')
        {
            $abc = $_POST['patientId'];
            if(empty($abc))
            {
                echo '<script>alert("Please fill all the queries")</script>';
            }
            else
            {
                $sql = "SELECT * FROM patientdet where PatientID='$abc'";
                $result = mysqli_query($conn,$sql);
            }
        // $sql = "SELECT * FROM patientdet";
        // $result = $conn->query($sql);
        $conn->close();
        }
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>Pateint Details</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css">
    <style>
      body {
        background-color: #d7b9b9;
      }
      header {
        background-color: #ed542ddf;
        color: #fff;
        padding: 10px;
        text-align: center;
        font-size: 20px;        
      }
      nav {
        background-color: #f1f1f1;
        padding: 10px;
      }
      nav a {
        color: #333;
        text-decoration: none;
        padding: 5px 10px;
        border-radius: 5px;
      }
      nav a:hover {
        background-color: #333;
        color: #fff;
      }
      section {
        margin: 20px;
        padding: 10px;
        background-color: #fff;
        border-radius: 5px;
      }
      form {
        display: inline-block;
        margin-bottom: 20px;
        
      }
      input[type="text"] {
        flex: 1;
        padding: 5px;
        border-radius: 5px 0 0 5px;
        border: none;
      }
      button[type="submit"] {
        padding: 5px 10px;
        border: none;
        border-radius: 0 5px 5px 0;
        background-color: #333;
        color: #fff;
        cursor: pointer;
      }
      a.back-link {
        color: #333;
        text-decoration: none;
        font-size: 14px;
        margin-right: 10px;
      }
      a.back-link:hover {
        text-decoration: underline;
      }
      .frm{
        float: right;
      }
    </style>
  </head>
  <body>
    <header>
      <h1>Pateint Details</h1>
    </header>
    <main>
      <a href="/HIV/Final Review/docform.php">Back to previous page</a>
      <div class="frm">
      <form action="patientdet2.php" method = "post">
        <input type="text" name="patientId" placeholder="Search...">
        <button type="submit">Search</button>
      </form>
      <!-- <form action="patientdet2.php" method = "post">
        <button type="submit">Add new Patient</button>
      </form> -->
      <a href='/HIV/Final Review/docform.php'>
        <button type="submit"class="GFG">
            New Patient Registration
        </button>
    </a>
    </div>
    <section>
        <div class="container my-5">
        <h1>Patient Details</h1>
        <br>
        <!-- TABLE CONSTRUCTION -->
        <table class="table table-striped">
            <tr>
                <th>Doctor ID</th>
                <th>Patient ID</th>
                <th>Patient Name</th>
                <th>Gender</th>
                <th>Age</th>
                <th>Marital Status</th>
                <th>Contant Number</th>
                <th>Diagnosis</th>
                <th>Medicine 1</th>
                <th>Medicine 2</th>
                <th>Medicine 3</th>
                <th>Extra Medicine</th>
                <th>Revisit Span</th>
                <th>Date</th>
            </tr>
            <!-- PHP CODE TO FETCH DATA FROM ROWS -->
            <?php
                // LOOP TILL END OF DATA
                while($rows=$result->fetch_assoc())
                {
            ?>
            <tr>
                <!-- FETCHING DATA FROM EACH
                    ROW OF EVERY COLUMN -->
                <td><?php echo $rows['DocID'];?></td>
                <td><?php echo $rows['PatientID'];?></td>
                <td><?php echo $rows['PatientName'];?></td>
                <td><?php echo $rows['Gender'];?></td>
                <td><?php echo $rows['Age'];?></td>
                <td><?php echo $rows['MaritalStatus'];?></td>
                <td><?php echo $rows['MobNO'];?></td>
                <td><?php echo $rows['Diagnosis'];?></td>
                <td><?php echo $rows['Med1'];?></td>
                <td><?php echo $rows['Med2'];?></td>
                <td><?php echo $rows['Med3'];?></td>
                <td><?php echo $rows['ExtraMed'];?></td>
                <td><?php echo $rows['TreatmentDays'];?></td>
                <td><?php echo $rows['Date'];?></td>
            </tr>
            <?php
                }
            ?>
        </table>
        </div>
    </section>
    </main>
  </body>
</html>