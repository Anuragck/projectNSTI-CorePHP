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
        $sql="SELECT * FROM `tbl_users`";
        $result=mysqli_query($conn,$sql) ;
        

        $num=mysqli_num_rows($result);
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
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="//cdn.datatables.net/1.10.23/css/jquery.dataTables.min.css">
       
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>

        
    </head>


    <body>
   
    <h2 class="text-center" >NSTI CALICUT<br>
  <small  class=" text-muted">Certificate Verification</small></h2>
  <div class="col-md-12 " align="left">
            <a class="btn btn-secondary btn-sm mt-3" href="./index.php" role="button">Go Back</a>
            </div>


            <div class="col-md-12 " align="right">
            <a class=" btn btn-secondary btn-sm mb-3"  href="./formDataTest.php" role="button" >N e x t</a>
            </div>




  
   
    <?php
if(isset($_POST['paid']))

{
  
  
	
	$id=$_POST['id'];
    
    $query2="SELECT * FROM tbl_cert_verified WHERE id=$id";
    $res2=mysqli_query($conn,$query2);
  
    if(mysqli_num_rows($res2)>0){

        echo "<div class='alert alert-danger' role='alert'>
        <h4 class='alert-heading'>Already Updated !</h4>
        <p> This Data is Already Added </p>
        <hr>
       
      </div>";

    }else{


    $query="INSERT INTO tbl_cert_verified(id,fullname,username,email,gender,aadharNumber,courseName,dob,category,phoneNumber,
    address,10thCertificateNo,10thMarkPercentage,12thCertificateNo,12thMarkPercentage)
    SELECT id,fullname,username,email,gender,aadharNumber,courseName,dob,category,phoneNumber,
    address,10thCertificateNo,10thMarkPercentage,12thCertificateNo,12thMarkPercentage
    FROM tbl_payment_success WHERE id=$id";
    
    $res=mysqli_query($conn,$query);
    echo "<div class='alert alert-success' role='alert'>
    <h4 class='alert-heading'>Certificate Verified !</h4>
    <p> Candidate data  Added </p>
    <hr>
   
  </div>";

  if($res){
    $query1="UPDATE tbl_users SET cert_status=1 WHERE id=$id";
    $res1=mysqli_query($conn,$query1);
  }



    }

  
  }

  


?>
<!------end header here --------->
<div class="container-fluid">


<table class="table table-striped table-hover table-responsive">
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
                <th scope="col">Payment Status</th>
                <th scope="col">Certificate Verification Status</th>
                
                <th scope="col">Certificate Verification Actions</th>   
                 </tr>
    </tr>
  </thead>
  <tbody>
  
  <?php 
  $i=1;
  $query="SELECT * FROM `tbl_users`";
	$res=mysqli_query($conn, $query);
	$count=mysqli_num_rows($result);
	if($count>0)
	{
	while($row=mysqli_fetch_array($result))
	{
        if($row['pay_status']==0){
            $disp="<h6 class='badge badge-warning'>Payment Pending</h6>";
          }elseif($row['pay_status']==1){
            $disp="<h6 class='badge badge-success'>Payment Success</h6>";
          }else{
      
          }
          if($row['cert_status']==0){
            $disp1="<h6 class='badge badge-warning'>Verification Pending</h6>";
          }elseif($row['cert_status']==1){
            $disp1="<h6 class='badge badge-success'>Certificate Verified</h6>";
          }else{
      
          }
        

    
  
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
    <td><?php echo $disp?></td>

    <td><?php echo $disp1?></td>
      
	   
			
			<td><form method="post" action="" >
			
			<input type="hidden" name="id" value="<?php echo $row['id'];?>">
			
			<button class='add_field_button'  style='background-color:transparent;border:none;' 
                   name='paid' id='appr' >
                    <img src='./img/Tick.png' width='25px'></img></button> </a> 
                   
			</form></td>
    </tr>
	<?php $i++;}}else{
		 echo "No record Found!";
		
	} ?>
  </tbody>
</table> 

</div>

<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

<?php  /*

if(isset($_SESSION['status'] ) && $_SESSION['status'] !='' ){

 ?>

 <script>
       swal({
               title: "Admitted",
              
              icon: "success",
              button: "OK",
          });
</script>

 <?php

  unset($_SESSION['status']);
}

if(isset($_SESSION['estatus'] ) && $_SESSION['estatus'] !='' ){

    ?>
   
    <script>
          swal({
                  title: "Rejected!",
                 
                 icon: "error",
                 button: "OK",
             });
   </script>
   
    <?php
   
     unset($_SESSION['estatus']);


   }


   */
?>


</body>
</html>

<?php include('include/footer.php'); ?>