<?php
 include('include/header.php');

?>
 <?php
        // connect to db

        $host = "localhost";
        $user = "root";
        $password = "";
        $database = "nsti_calicut";
        $conn = mysqli_connect($host, $user, $password, $database);
       
        ?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>NSTI CALICUT</title>
        <link rel="icon" href="./favicon.ico" />
         <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>


        
    </head>


    <body>
   
    <h2 class="text-center" >NSTI CALICUT<br>
  <small  class=" text-muted">A D I T Admitted Students Details</small></h2>
  <div class="col-md-12 " align="left">
            <a class="btn btn-secondary btn-sm mb-3" href="./index.php" role="button">Go Back</a>
            </div>
  <div class="col-md-12 mt-2" align="right">
            <a class="btn btn-primary btn-sm mb-3" href="./aditAdmitPdf.php" role="button">Download All Data</a>
            </div>
   </div>


   <div class="container-fluid">


<table id="myTable" class="table table-striped table-hover table-success table-responsive">
  <thead>
    <tr>
    <tr>
                <th scope="col">ID</th>
                <th scope="col">Fullname</th>

                <th scope="col">Username</th>
                
                <th scope="col">Email ID</th>
                <th scope="col">Gender</th>
                <th scope="col">Aadhar Number</th>
                <th scope="col">Course Name</th>
                <th scope="col">Date Of Birth</th>
                <th scope="col">Category at</th>
                <th scope="col">Phone Number</th>
                <th scope="col">Address</th>
                <th scope="col">10th Certificate No</th>
                <th scope="col">10th MarkPercentage</th>
                <th scope="col">12th Certificate No</th>
                <th scope="col">12th Mark Percentage</th>
                
                   
                 </tr>
    </tr>
  </thead>
  <tbody>
  
  <?php 
  $i=1;
  $query="SELECT * FROM `tbl_admit` WHERE `courseName`='adit'";
	$res=mysqli_query($conn, $query);
	$count=mysqli_num_rows($res);
	if($count>0)
	{
	while($row=mysqli_fetch_array($res))
	{
  
  ?>
    <tr>
      
      <td><?php echo $row['id']; ?></td>
      <td><?php echo $row['fullname'];?></td>
      
	  <td><?php echo $row['username'];?></td>
      <td><?php echo $row['email']; ?></td>
      <td><?php echo $row['gender'];?></td>
      
	  <td><?php echo $row['aadharNumber'];?></td>
      <td><?php echo $row['courseName'];?></td>
      <td><?php echo $row['dob']; ?></td>
      <td><?php echo $row['category'];?></td>
      
	  <td><?php echo $row['phoneNumber'];?></td>
      <td><?php echo $row['address'];?></td>
      <td><?php echo $row['10thCertificateNo'];?></td>
      <td><?php echo $row['10thMarkPercentage']; ?></td>
      <td><?php echo $row['12thCertificateNo'];?></td>
      
	  <td><?php echo $row['12thMarkPercentage'];?></td>
      
	   
			
			
    </tr>
	<?php $i++;}}else{
		 echo "<div class='alert alert-warning alert-dismissible fade show' role='alert'>
     <strong>Sorry</strong> No record Found!
     <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
       <span aria-hidden='true'>&times;</span>
     </button>
   </div>";
		
	} ?>
  </tbody>
</table> 
</div>
<script>

$(document).ready( function () {
    $('#myTable').DataTable();
} );

</script>
   </body>
   </html>

   <?php include('include/footer.php'); ?>