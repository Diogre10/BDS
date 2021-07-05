<?php
session_start();

    include("../include/db.php");
   

    if($_SERVER['REQUEST_METHOD'] == 'POST')
    {
        $username = $_POST['username'];
        $password = $_POST['password'];
        $sql = "insert into accdonortbl (dUser, dPass) values ('$username','$password')";
        if(empty($username))
        {
            $errorMsg = 'Please add a username';
            echo "<script type='text/javascript'>alert('$errorMsg');window.location.href = '../page/donorSignup.php'</script>";
        }
        elseif(empty($password))
        {
            $errorMsg = 'Please input Password';
            echo "<script type='text/javascript'>alert('$errorMsg');window.location.href = '../page/donorSignup.php'</script>";
        }if(!isset($errorMsg))
            {

                if ($conn->query($sql) === TRUE) {


                    $message = "Thank you for becoming a donor ";
                  
                    echo "<script type='text/javascript'>alert('$message');window.location.href = '../page/loginDonor.php'</script>";

                    
                    } 

                else {
                     echo "Error: " . $sql . "<br>" . $conn->error;
                    }
            }

                $conn->close();
    }
?>