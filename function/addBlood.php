<?php
session_start();

    include("../include/db.php");
   

    if($_SERVER['REQUEST_METHOD'] == 'POST')
    {
        $fullname = $_POST['fullname'];
        $mobileno = $_POST['mobileno'];
        $emailid = $_POST['emailid'];
        $age = $_POST['age'];
        $gender = $_POST['gender'];
        $bloodgroup = $_POST['bloodgroup'];
        $address = $_POST['address'];
        $Msg = 'Thank You for Donating your blood';
        $sql = "insert into donatedbloodtbl (fullName, mobileNumber, emailAddress, age, gender, bloodGroup, address) values ('$fullname','$mobileno','$emailid','$age','$gender','$bloodgroup','$address')";

                if ($conn->query($sql) === TRUE) {
                    echo "<script type='text/javascript'>alert('$Msg');window.location.href = '../page/donateBlood.php'</script>";
                }
                else {
                     echo "Error: " . $sql . "<br>" . $conn->error;
                    }

                $conn->close();
    }
?>