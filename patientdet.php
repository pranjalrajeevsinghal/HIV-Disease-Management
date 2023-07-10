<?php
        $servername = "localhost:3307";
        $username = "root";
        $password = "";
        $database = "hivmanagement";
        $conn = mysqli_connect($servername, $username, $password, $database);
        if (!$conn){
            die("Sorry we failed to connect ".mysqli_connect_error());
        }
        
        $sql = "SELECT * FROM patientdet";
        $result = $conn->query($sql);
        $conn->close();
?>
<!-- HTML code to display data in tabular format -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <title>Document</title>
</head> 
<body>
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
</body>
 
</html>