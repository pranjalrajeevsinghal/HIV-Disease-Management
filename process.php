<?php
    $servername = "localhost:3307";
    $username = "root";
    $password = "";
    $database = "hivmanagement";

    $conn = mysqli_connect($servername, $username, $password, $database);
    if(isset($_POST['login']))
    {
        $DocId = $_POST['DocId'];
        $pass = $_POST['pass'];

        if(empty($DocId) || empty($pass))
        {
            echo 'Please fill in the Blanks';
        }
        else
        {
            $query = "select * from docsignup where DocID='$DocId'";
            $result = mysqli_query($conn,$query);

            if($row=mysqli_fetch_assoc($result))
            {
                $db_pass = $row['Password'];
                if(($pass)== $db_pass)
                {
                    header('location: /HIV/docform.php');
                }
                else
                {
                    echo 'Incorrect Password';
                }
            }
            else
            {
                echo 'Please check your query';
            }
        }
    }
?>