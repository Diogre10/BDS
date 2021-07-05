

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
          <li class="active">
            <a href="donorView.php">Donor List</a>
          </li>
          <li >
            <a href="patienView.php">Patient List</a>
          </li>
          <li >
            <a href="#" class= "active">Donate Blood</a>
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
                     <div class="card-header">Donate Blood</div>
                     <div class="card-body">
                         <form class="" action="../function/addPatient.php" method="post">
                            <div class="row">
                                 <div class="col-lg-4 mb-4">
                                 <label for="name">Full Name:</label>
                                 <input type="text" class="form-control" name="fullname" placeholder="Enter Name" value="">
                                 </div>
                                 <div class="col-lg-4 mb-4">
                                 <label for="contact">Contact No:</label>
                                 <input type="text" class="form-control" name="mobileno" placeholder="Enter Mobile Number"
                                value="">
                                 </div>
                                 <div class="col-lg-4 mb-4">
                                 <label for="email">E-Mail:</label>
                                 <input type="email" class="form-control" name="emailid" placeholder="Enter Email" value="">
                                 </div>

                            </div>

                            <div class="row">
                                 <div class="col-lg-4 mb-4">
                                 <label for="name">Age:</label>
                                 <input type="text" class="form-control" name="age" placeholder="Enter Age" value="">
                                 </div>
                                 <div class="col-lg-4 mb-4">
                                    <div>
                                        <label for="contact">Gender:</label>
                                        <select name="gender" class="form-control" required>
                                            <option value="">Select</option>
                                            <option value="Male">Male</option>
                                            <option value="Female">Female</option>
                                        </select>
                                    </div>
                                 </div>
                                 <div class="col-lg-4 mb-4">
                                    <div>
                                        <label for="contact">Blood Group:</label>
                                        <select name="bloodgroup" class="form-control" required>
                                            <option value="">Select</option>
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
                                 <label for="name">Address:</label>
                                 <textarea class="form-control" name="address"></textarea>
                                 

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
