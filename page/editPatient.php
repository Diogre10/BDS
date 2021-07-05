<?php
 include("../include/db.php");
     if (isset($_GET['pBloodKey'])) {
         $pBloodKey = $_GET['pBloodKey'];
         $sql = "select * from patientbloodtbl where pBloodKey=".$pBloodKey;
         $result = mysqli_query($conn, $sql);

             if (mysqli_num_rows($result) > 0) {
             $row = mysqli_fetch_assoc($result);
             }
     else {
     $errorMsg = 'Could not Find Any Record';

    }

}
         if($_SERVER['REQUEST_METHOD'] == 'POST')
    {
        $fullname = $_POST['fullname'];
        $mobileno = $_POST['mobileno'];
        $emailid = $_POST['emailid'];
        $age = $_POST['age'];
        $gender = $_POST['gender'];
        $bloodgroup = $_POST['bloodgroup'];
        $address = $_POST['address'];
        $pBloodKey = $_POST['pBloodKey'];
        $cdate = $_POST['cdate'];
        $Msg = 'Update Succesfull';
         $sql = " update patientbloodtbl set fullName = '".$fullname."', mobileNumber = '".$mobileno."', emailAddress = '".$emailid."', age = '".$age."', gender = '".$gender."', bloodGroup = '".$bloodgroup."', address = '".$address."', cdate = '".$cdate."' where pBloodKey=" .$pBloodKey;

                if ($conn->query($sql) === TRUE) {
                    echo "<script type='text/javascript'>alert('$Msg');window.location.href = '../page/patienView.php'</script>";
                }
                else {
                     echo "Error: " . $sql . "<br>" . $conn->error;
                    }

                $conn->close();
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <link href="../fontawesome/css/all.css" rel="stylesheet" />
    <link href="../css1/navbar.css" rel="stylesheet">
    <script src="../jquery/jquery.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>


    </head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light">
      <h3>Blood Donation System</h3>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul >
          <li>
            <a href="donorView.php">Donor List</a>
          </li>
          <li >
            <a  href="#" class="active">Patient List</a>
          </li>
          <li >
            <a href="donateBlood.php">Donate Blood</a>
          </li>
          <li >
            <a  href="patientBlood.php">Request Blood</a>
          </li>
          <li>
            <a  href="../index.php">Logout</a>
          </li>
        </ul>
      </div>
    </nav>
        
    <br>

	   <div class="container">
         <div class="row">
             <div class="col-lg-12">
                 <div class="card">
                     <div class="card-header">Edit Patient Blood</div>
                     <div class="card-body">
                         <form class="" action="" method="post">

                            <div class="row">
                                 <div class="col-lg-4 mb-4">
                                 <label for="name">Full Name:</label>
                                 <input type="text" class="form-control" name="fullname" placeholder="Enter Name" value="<?php echo $row['fullName']; ?>">
                                 </div>
                                 <div class="col-lg-4 mb-4">
                                 <label for="contact">Contact No:</label>
                                 <input type="text" class="form-control" name="mobileno" placeholder="Enter Mobile Number" value="<?php echo $row['mobileNumber']; ?>">
                                
                                 </div>
                                 <div class="col-lg-4 mb-4">
                                 <label for="email">E-Mail:</label>
                                 <input type="email" class="form-control" name="emailid" placeholder="Enter Email" value="<?php echo $row['emailAddress']; ?>">
                                 </div>

                            </div>

                            <div class="row">
                                 <div class="col-lg-4 mb-4">
                                 <label for="name">Age:</label>
                                 <input type="text" class="form-control" name="age" placeholder="Enter Age" value="<?php echo $row['age']; ?>">
                                 </div>
                                 <div class="col-lg-4 mb-4">
                                    <div>
                                        <label for="contact">Gender:</label>
                                        <select name="gender" class="form-control">
                                            <option value="<?php echo $row['gender']; ?>"><?php echo $row['gender']; ?></option>
                                            <option value="Male">Male</option>
                                            <option value="Female">Female</option>
                                        </select>
                                    </div>
                                 </div>
                                 <div class="col-lg-4 mb-4">
                                    <div>
                                        <label for="contact">Blood Group:</label>
                                        <select name="bloodgroup" class="form-control" >
                                            <option value="<?php echo $row['bloodGroup']; ?>"><?php echo $row['bloodGroup']; ?></option>
                                            <option value="A+">A+</option>
                                            <option value="A-">A-</option>
                                            <option value="B+">B+</option>
                                            <option value="B-">B-</option>
                                            <option value="O+">O+</option>
                                            <option value="O-">O-</option>
                                            <option value="AB+">AB+</option>
                                            <option value="AB-">AB-</option>
                                        </select>
                                    </div>
                                 </div>

                            </div>

                            <div class="row">
                                 <div class="col-lg-12 mb-4">
                                 <label for="address">Address</label>
                                 <input type="text" class="form-control" name="address" placeholder="Enter Address" value="<?php echo $row['address']; ?>">
                                 </div>
                                 

                            </div>

                            <div class="row">
                                 <div class="col-lg-6 mb-4">

                                 <input type="hidden" class="form-control" name="pBloodKey" placeholder="Enter Address" value="<?php echo $row['pBloodKey']; ?>" >
                                 </div>

                                 <div class="col-lg-6 mb-4">
                                 <input type="hidden" class="form-control" name="cdate" placeholder="Enter Address" value="<?php echo $row['cdate']; ?>">
                                 </div>
                                 
                                 

                            </div>


                            <div class="row"></div>
                                 <div class="col-lg-4 mb-4">
                                 <button type="submit" name="Submit" class="btn btn-primary waves">Submit</button>
                            </div>
                         </form>
                     </div>
                 </div>
             </div>
         </div>
     </div>

</body>

</html>
