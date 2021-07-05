<?php
 include("../include/db.php");

      if(isset($_GET['delete'])){
    $bloodkey = $_GET['delete'];
    $sql = "select * from donatedbloodtbl where bloodkey = ".$bloodkey;
    $result = mysqli_query($conn, $sql);
        if(mysqli_num_rows($result) > 0){
        $row = mysqli_fetch_assoc($result);
        $sql = "delete from donatedbloodtbl where bloodkey=".$bloodkey;

            if(mysqli_query($conn, $sql)){
            header('location:donorView.php');
            }
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
            <a href="#" class= "active">Donor List</a>
          </li>
          <li >
            <a  href="patienView.php">Patient List</a>
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
                 <div class="row justify-content-center">
                     <div class="col-md-12">
                         <div class="card">
                             <div class="card-header">Donor List
                                <div class="float-right"><a href="../function/donorList.php">Download</a></div>
                             </div>
                             
                             <div class="card-body">
                             <table id="example" class="table table-striped table-bordered" style="width:100%">
                             <thead>
                                 <tr>
                                     <th>Donor ID</th>
                                     <th>Donor Name</th>
                                     <th>Donor Contact No.</th>
                                     <th>Donor E-mail</th>
                                     <th>Donor Age</th>
                                     <th>Donor Gender</th>
                                     <th>Blood Group</th>
                                     <th>Donor Address</th>
                                     <th>Date</th>
                                     <th>Manage</th>
                                 </tr>
                             </thead>
                             <tfoot>
                                 <tr>
                                     <th>Donor ID</th>
                                     <th>Donor Name</th>
                                     <th>Donor Contact No.</th>
                                     <th>Donor E-mail</th>
                                     <th>Donor Age</th>
                                     <th>Donor Gender</th>
                                     <th>Blood Group</th>
                                     <th>Donor Address</th>
                                     <th>Date</th>
                                     <th>Manage</th>
                                 </tr>
                             </tfoot>

                             <tbody>
                             <?php
                             $sql = "select * from donatedbloodtbl";
                             $result = mysqli_query($conn, $sql);
                             if(mysqli_num_rows($result)){
                             while($row = mysqli_fetch_assoc($result)){
                             ?>

                                 <tr>
                                 <td><?php echo $row['bloodkey'] ?></td>
                                 <td><?php echo $row['fullName'] ?></td>
                                 <td><?php echo $row['mobileNumber'] ?></td>
                                 <td><?php echo $row['emailAddress'] ?></td>
                                 <td><?php echo $row['age'] ?></td>
                                 <td><?php echo $row['gender'] ?></td>
                                 <td><?php echo $row['bloodGroup'] ?></td>
                                 <td><?php echo $row['address'] ?></td>
                                 <td><?php echo $row['cdate'] ?></td>
                                 <td class="text-center">
                                 <a href="showDonator.php?bloodkey=<?php echo $row['bloodkey'] ?>" class="btn btn-success"><i class="fa fa-eye"></i></a>
                                 <a href="editDonor.php?bloodkey=<?php echo $row['bloodkey'] ?>" class="btn btn-info"><i class="fa fa-edit"></i></a>
                                 <a href="donorView.php?delete=<?php echo $row['bloodkey'] ?>" class="btn btn-danger"
                                onclick="return confirm('Are you sure to delete this record?')"><i class="fa fa-trash-alt"></i></a>
                                 </td>
                                 </tr>
                             <?php
                             }
                             }
                             ?>
                             </tbody>
                             </table>
                             </div>
                         </div>
                     </div>
                 </div>
             </div>

    

</body>

</html>
