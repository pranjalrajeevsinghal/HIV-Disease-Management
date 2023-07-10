
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Teacher Review Form</title>
  </head>
  <body>
    <h1>Hello, user!</h1>
    <div class="container">
    <form action="/CR SYSTEM/form.php" method="post">
          <p>Name of person :</p>
           <input class="box" type="text" name="Name_of_user" id="name" required/><br>
           <p>Person Contact Number: </p>
           <input class="box" type="text" name="Contact_info" id="number" required/><br>
           
           <p>Person Mail</p>
           <input class="box" type="text" name="Contact_mail" id="mail" required/><br>
           <p>Type your query here: </p>
           <input id = "queryform" name= "query" rows="10" cols = "10"/> <br>
           <input type="submit" id="submitDetails"  
            name="submitDetails" value="Submit" /><br>    



    </form>
    </div>
    <?php
    if ($_SERVER['REQUEST_METHOD']== 'POST'){
        $name_user = $_POST['Name_of_user']; 
        $contact_info = $_POST['Contact_info'];
        $Contact_Mail = $_POST['Contact_mail'];
        $query_user= $_POST['query'];

$servername = "localhost";
$username = "root";
$password = "";
$database = "user_query_form";

$conn = mysqli_connect($servername, $username, $password, $database);

if (!$conn){
    die("Sorry we failed to connect ".mysqli_connect_error());
}

else {
    echo "Connection was successfull<br>";
    $sql = "INSERT INTO `queries_user` (`PERSONNAME`, `PERSONNUMBER` , `PERSONMAIL`, `PERSONQUERY`) VALUES ($name_user, $contact_info, $Contact_Mail, $query_user)";
    $result = mysqli_query($conn, $sql);

    if ($result){
        echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>Success!</strong> Your entry has been submitted successfully!
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">×</span>
        </button>
      </div>';
      }
      else{
          // echo "The record was not inserted successfully because of this error ---> ". mysqli_error($conn);
          echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
        <strong>Error!</strong> We are facing some technical issue and your entry ws not submitted successfully! We regret the inconvinience caused!
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">×</span>
        </button>
      </div>';
      }
}
    }
    ?>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
  </body>
</html>