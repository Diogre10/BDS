
<?php
include("../include/db.php");

 if (isset($_GET['pBloodKey'])) {
 $pBloodKey = $_GET['pBloodKey'];
 $sql = "select * from patientbloodtbl where pBloodKey=".$pBloodKey;
 $result = mysqli_query($conn, $sql);
 if (mysqli_num_rows($result) > 0) {
 $row = mysqli_fetch_assoc($result);
 }else {
 $errorMsg = 'Could not Find Any Record';

}

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
            <a  href="#" class="active" >Patient List</a>
          </li>
          <li >
            <a  href="patientBlood.php" >Request Blood</a>
          </li>          <li>
            <a  href="../index.php">Logout</a>
          </li>
        </ul>
      </div>
    </nav>
        
    <br>

	   <div class="container">
             <div class="row justify-content-center">
                 <div class="card">
                     <div class="card-header">Donor Info</div>
                     <div class="card-body">
                         <div class="row">
                             <div class="col-md">
                                 <h5 class="form-control"><i class="fa fa-user-tag">
                                 <span><?php echo $row['pBloodKey'] ?></span>
                                 </i></h5>
                                 <h5 class="form-control"><i class="fa fa-user">
                                 <span><?php echo $row['fullName'] ?></span>
                                 </i></h5>
                                 <h5 class="form-control"><i class="fa fa-mobile-alt">
                                 <span><?php echo $row['mobileNumber'] ?></span>
                                 </i></h5>
                                 <h5 class="form-control"><i class="fa fa-envelope">
                                 <span><?php echo $row['emailAddress'] ?></span>
                                 </i></h5>
                                 <h5 class="form-control"><i class="fa fa-child">
                                 <span><?php echo $row['age'] ?></span>
                                 </i></h5>
                                 <h5 class="form-control"><i class="fa fa-venus-mars">
                                 <span><?php echo $row['gender'] ?></span>
                                 </i></h5>
                                 <h5 class="form-control"><i class="fa fa-tint">
                                 <span><?php echo $row['bloodGroup'] ?></span>
                                 </i></h5>
                                 <h5 class="form-control"><i class="fa fa-home">
                                 <span><?php echo $row['address'] ?></span>
                                 </i></h5>
                                 <h5 class="form-control"><i class="fa fa-calendar-day">
                                 <span><?php echo $row['cdate'] ?></span>
                                 </i></h5>
                                 <a class="btn btn-outline-danger" href="patienView.php"><i class="fa fa-sign-outalt"></i><span>Back</span></a>
                             </div>
                         </div>
                     </div>
                 </div>
             </div>
         </div>

</body>

</html>
