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
  <small  class=" text-muted">Students Admission Data</small></h2>
  <div class="col-md-12 " align="left">
            <a class="btn btn-secondary btn-sm mb-3" href="./index.php" role="button">Go Back</a>
            </div>
  <div class="col-md-12 mt-2" align="right">
            <a class="btn btn-primary btn-sm mb-3" href="./generatePdf.php" role="button">Download All Data</a>
            </div>
   
    <?php
if(isset($_POST['approved']))

{

  
  
  
	
	$id=$_POST['id'];


  
  $query3="SELECT * FROM tbl_admit WHERE id=$id";
  $res3=mysqli_query($conn,$query3);

  if(mysqli_num_rows($res3)>0){
    $query5="SELECT * FROM tbl_rejected WHERE id=$id";
    $res5=mysqli_query($conn,$query5);
        if(mysqli_num_rows($res5)>0){
          $query6="DELETE FROM tbl_rejected WHERE id=$id";
          $res6=mysqli_query($conn,$query6);

  
          if($res6){
            $query7="UPDATE tbl_users SET status1=1 WHERE id=$id";
            $res7=mysqli_query($conn,$query7);

            //added now
           
          //added now end
          }
          
        }
    echo "<div class='alert alert-danger' role='alert'>
    <h4 class='alert-heading'> Admitted !</h4>
    <p> Candidate data  Added </p>
    <hr>
   
  </div>";


  }else{
    
    $query="INSERT INTO tbl_admit(id,fullname,username,email,gender,aadharNumber,courseName,dob,category,phoneNumber,
    address,10thCertificateNo,10thMarkPercentage,12thCertificateNo,12thMarkPercentage)
    SELECT id,fullname,username,email,gender,aadharNumber,courseName,dob,category,phoneNumber,
    address,10thCertificateNo,10thMarkPercentage,12thCertificateNo,12thMarkPercentage
    FROM tbl_users WHERE id=$id";
    
 $res=mysqli_query($conn,$query);
 
 if($res){
   
  $query6="DELETE FROM tbl_rejected WHERE id=$id";
  $res6=mysqli_query($conn,$query6);
    
   $query7="UPDATE tbl_users SET status1=1 WHERE id=$id";
   $res7=mysqli_query($conn,$query7);

       $_SESSION['status']="Registered Successfully";
       $_SESSION['status_code']="success";

     /*  header('location:./formDataTest.php');*/

       
 
 }else{
   echo "Data not Updated, please try again!";
       
 }

  }

	
	

}
if(isset($_POST['rejected']))
{
   
	
	
	$id=$_POST['id'];

 

  $query3="SELECT * FROM tbl_rejected WHERE id=$id";
  $res3=mysqli_query($conn,$query3);

  if(mysqli_num_rows($res3)>0) {

    $queryp="DELETE FROM tbl_payment_success WHERE id=$id";
    $resp=mysqli_query($conn,$queryp);

    if($resp){
      $queryupPay="UPDATE tbl_users SET pay_status=0 WHERE id=$id";
      $resupPay=mysqli_query($conn,$queryupPay);
    }

    $queryc="DELETE FROM tbl_cert_verified WHERE id=$id";
    $resc=mysqli_query($conn,$queryc);

    if($resc){
      $queryupCert="UPDATE tbl_users SET cert_status=0 WHERE id=$id";
      $resupCert=mysqli_query($conn,$queryupCert);
    }



    $query6="DELETE FROM tbl_admit WHERE id=$id";
        $res6=mysqli_query($conn,$query6);

    $query5="SELECT * FROM tbl_admit WHERE id=$id";
  $res5=mysqli_query($conn,$query5);
      if(mysqli_num_rows($res5)>0){
        $query6="DELETE FROM tbl_admit WHERE id=$id";
        $res6=mysqli_query($conn,$query6);

        if($res6){
          $query7="UPDATE tbl_users SET status1=2 WHERE id=$id";
          $res7=mysqli_query($conn,$query7);
        }
        
      }

   echo "<div class='alert alert-warning' role='alert'>
    <h4 class='alert-heading'> Rejected !</h4>
    <p>This Candidate's Application is  Rejected </p>
    <hr>
   
    </div>";}else{



    $query="INSERT INTO tbl_rejected(id,fullname,username,email,gender,aadharNumber,courseName,dob,category,phoneNumber,
  address,10thCertificateNo,10thMarkPercentage,12thCertificateNo,12thMarkPercentage)
  SELECT id,fullname,username,email,gender,aadharNumber,courseName,dob,category,phoneNumber,
  address,10thCertificateNo,10thMarkPercentage,12thCertificateNo,12thMarkPercentage
  FROM tbl_users WHERE id=$id";

$res=mysqli_query($conn,$query);
	if($res){

    $queryp="DELETE FROM tbl_payment_success WHERE id=$id";
    $resp=mysqli_query($conn,$queryp);

    if($resp){
      $queryupPay="UPDATE tbl_users SET pay_status=0 WHERE id=$id";
      $resupPay=mysqli_query($conn,$queryupPay);
    }

    $queryc="DELETE FROM tbl_cert_verified WHERE id=$id";
    $resc=mysqli_query($conn,$queryc);

    if($resc){
      $queryupCert="UPDATE tbl_users SET cert_status=0 WHERE id=$id";
      $resupCert=mysqli_query($conn,$queryupCert);
    }

    $query6="DELETE FROM tbl_admit WHERE id=$id";
    $res6=mysqli_query($conn,$query6);

    $query7="UPDATE tbl_users SET status1=2 WHERE id=$id";
    $res7=mysqli_query($conn,$query7);

    $_SESSION['estatus']="Not Registered There is an error !";
    $_SESSION['estatus_code']="error";
	
   
		
	}else{
		echo "Data not Updated, please try again!";
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
                <th scope="col">Admission Status</th>
                
                <th scope="col">Actions</th>   
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
    if($row['status1']==0){
      $disp="<br><h6 class='badge badge-warning'>Pending</h6>";
    }elseif($row['status1']==1){
      $disp="<br><h6 class='badge badge-success'>Admitted</h6>";
    }elseif($row['status1']==2){
      $disp="<br><h6 class='badge badge-danger'>Rejected</h6>";
    }
    
    if($row['pay_status']==0){
      $disp1="<br><h6 class='badge badge-warning'>Payment Pending</h6>";
    }elseif($row['pay_status']==1){
      $disp1="<br><h6 class='badge badge-success'>Payment Success</h6>";
    }else{

    }
    if($row['cert_status']==0){
      $disp2="<br><h6 class='badge badge-warning'>Verification Pending</h6>";
    }elseif($row['cert_status']==1){
      $disp2="<br><h6 class='badge badge-success'>Certificate Verified</h6>";
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

    <td><?php echo $disp1?></td>
    <td><?php echo $disp2?></td>

    <td><?php echo $disp?></td>

    
      
	   
			
			<td><form method="post" action="" >
			
			<input type="hidden" name="id" value="<?php echo $row['id'];?>">
			
			<button type="submit" name="approved" class="btn btn-sm btn-success mb-2">Admit</button>
			<button type="submit" name="rejected" class="btn btn-sm btn-danger">Reject</button>
			</form></td>
    </tr>
	<?php $i++;}}else{
		 echo "No record Found!";
		
	} ?>
  </tbody>
</table> 

</div>

<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

<?php

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

?>


</body>
</html>

<?php include('include/footer.php'); ?>