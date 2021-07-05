<?php
session_start();

    include("../include/db.php");

    $output = '';


    $sql = "select * from donatedbloodtbl";
    	$tblview = $conn-> query($sql);

		if($tblview-> num_rows > 0)
		{
			$output .= '
			<table class="table table-border table-striped table-hover">
				<tr>
					<th>Donor ID</th>
					<th>Full Name</th>
					<th>Mobile Number</th>
					<th>Email Address</th>
					<th>Age</th>
					<th>Gender</th>
					<th>Blood Group</th>
					<th>Address</th>
					<th>Date</th>
				</tr>
			';
			while ($row = $tblview-> fetch_assoc()) {
				$output .='
					<tr>
						<td>'.$row['bloodkey'].'</td>
						<td>'.$row['fullName'].'</td>
						<td>'.$row['mobileNumber'].'</td>
						<td>'.$row['emailAddress'].'</td>
						<td>'.$row['age'].'</td>
						<td>'.$row['gender'].'</td>
						<td>'.$row['bloodGroup'].'</td>
						<td>'.$row['address'].'</td>
						<td>'.$row['cdate'].'</td>
					</tr>
				';
										
			}
			$output .= '</table>';
			header("Content-Type: applicaion/xls");
			header("Content-Disposition:attachment; filename=DonorList.xls");
			echo $output;
		}

    
 ?>