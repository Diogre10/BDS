<?php
session_start();

    include("../include/db.php");
   

    if($_SERVER['REQUEST_METHOD'] == 'POST')
    {
        $username = $_POST['username'];
        $password = $_POST['password'];
        $sql = "insert into accpatienttbl (pUser, pPass) values ('$username','$password')";
        if(empty($username))
        {
            $errorMsg = 'Please add a username';
            echo "<script type='text/javascript'>alert('$errorMsg');window.location.href = '../page/patientSignup.php'</script>";
        }
        elseif(empty($password))
        {
            $errorMsg = 'Please input Password';
            echo "<script type='text/javascript'>alert('$errorMsg');window.location.href = '../page/patientSignup.php'</script>";
        }if(!isset($errorMsg))
            {

                if ($conn->query($sql) === TRUE) {


                    $message = "Thank you for becoming a patient ";
                  
                    echo "<script type='text/javascript'>alert('$message');window.location.href = '../page/loginPatient.php'</script>";

                    
                    } 

                else {
                     echo "Error: " . $sql . "<br>" . $conn->error;
                    }
            }

                $conn->close();
    }
?>