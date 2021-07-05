<?php
session_start();

    require_once("../include/db.php");
     if (isset($_POST['Submit'])) {
   
        $username = $_POST['username'];
        $password = $_POST['password'];
        if(empty($username))
        {
            $errorMsg = 'Please input an existing username';
            echo "<script type='text/javascript'>alert('$errorMsg');window.location.href = '../page/loginPatient.php'</script>";
        }
        elseif(empty($password))
        {
            $errorMsg = 'Please input Password';
            echo "<script type='text/javascript'>alert('$errorMsg');window.location.href = '../page/loginPatient.php'</script>";
        }
            if(!isset($errorMsg))
            {
                $sql = ("select * from accpatienttbl where pUser = '$username' && pPass = '$password'");
                $result = mysqli_query($conn, $sql);
                if(mysqli_num_rows($result) === 1)
                {
                
                header('Location: ../pagepatient/donorView.php');
                }
                    else
                    {
                    $errorMsg = 'Username or Password incorrect'.mysqli_error($conn);
                    echo "<script type='text/javascript'>alert('$errorMsg');window.location.href = '../page/loginPatient.php'</script>";
                    }
            }
        }

?>