<?php include('include/header.php'); ?>


<?php

include('./connection.php'); 

if(isset($_SESSION['username']) && !empty($_SESSION['username'])){

  $sName=$_SESSION['username'];

  $q1="SELECT * FROM tbl_users WHERE username='$sName'";
  $rz1=mysqli_query($conn,$q1);

  if(mysqli_num_rows($rz1)>0){

    foreach($rz1 as $rData){

      if($rData['aadharNumber'] == NULL){

        ?>  

<div class="jumbotron jumbotron-fluid">
  
  <div class="container">
 
      <h1 class="display-4">NSTI CALICUT Application Form</h1>
      <p class="lead text-primary ont-weight-bold"><?php echo  $_SESSION['fullname']; ?></p>
      <hr class="my-4">
    <p>Please Fill The Form For Apply For The Course..</p>
    <div class="container-fluid">
    <form method="post"   enctype="multipart/form-data">



<div class="form-group row">
  <label for="inputEmail3" class="col-sm-2 col-form-label">Aadhaar Number</label>
  <div class="col-sm-10">
    <input type="number" class="form-control" id="inputaadharno" placeholder="Aadhar Number" name="Aadhar_Number" required>
  </div>
</div>

<div class="form-group row">
  <label for="inputEmail3" class="col-sm-2 col-form-label">Course Name</label>
  <div class="col-sm-10">
<select class="custom-select" id="inputGroupSelect02"name="course_name"required>
  <option selected>Courses...</option>
  <option value="ADIT">ADIT</option>
  <option value="IOT">IOT</option>
</select>
</div>  
  </div>

  <div class="form-group row">
  <label for="inputEmail3" class="col-sm-2 col-form-label">Date Of Birth</label>
  <div class="col-sm-10">
    <input type="Date" class="form-control" id="inputaadharno" name="date_of_birth" required>
  </div>
</div>
  

<div class="form-group row">
  <label for="inputEmail3" class="col-sm-2 col-form-label">Category</label>
  <div class="col-sm-10">
<select class="custom-select" id="inputGroupSelect02" name="category" required>
  <option selected>Category...</option>
  <option value="General">General</option>
  <option value="OBC">OBC</option>
  <option value="SC/ST">SC/ST</option>
  <option value="PWD">PWD</option>
</select>
</div>  
  </div>


  


  <div class="form-group row">
  <label for="inputEmail3" class="col-sm-2 col-form-label">Phone Number</label>
  <div class="col-sm-10">
    <input type="number" class="form-control" id="inputaadharno" placeholder="Phone Number" name="phone_number"required>
  </div>
</div>


<div class="form-group row">
  <label for="inputEmail3" class="col-sm-2 col-form-label">Address</label>
  <div class="col-sm-10">
    <input type="address" class="form-control" id="inputfullname" placeholder="Address" name="address"required>
  </div>
</div>

  

<div class="form-group row">
  <label for="inputEmail3" class="col-sm-2 col-form-label">10 th Certificate No</label>
  <div class="col-sm-10">
    <input type="number" class="form-control" id="inputaadharno" placeholder="10 th Certificate Number" name="sslc_certicicate_number"required>
  </div>
</div>


<div class="form-group row">
  <label for="inputEmail3" class="col-sm-2 col-form-label">10 th Mark %</label>
  <div class="col-sm-10">
    <input type="text" class="form-control" id="inputaadharno" placeholder="10 th Mark Percentage" name="sslc_mark_percentage"required>
  </div>
</div>

<div class="form-group row">
  <label for="inputEmail3" class="col-sm-2 col-form-label">12 th Certificate No</label>
  <div class="col-sm-10">
    <input type="number" class="form-control" id="inputaadharno" placeholder="12 th Certificate Number" name="plustwo_certificate_number"required>
  </div>
</div>


<div class="form-group row">
  <label for="inputEmail3" class="col-sm-2 col-form-label">12 th Mark %</label>
  <div class="col-sm-10">
    <input type="text" class="form-control" id="inputaadharno" placeholder="12 th Mark Percentage" name="plustwo_mark_percentage"required>
  </div>
</div>


<div class="form-group row">
<label for="cphoto" class="col-sm-2 col-form-label">Candidate Photo</label>
  <div class="col-sm-10">
          <input type="file" name="candidate_photo" class="form-control" id="candidate_photo" placeholder="upload file"  title="candidate_photo"required/>
</div></div>

<div class="form-group row">
<label for="sphoto" class="col-sm-2 col-form-label">Signature Photo</label>
  <div class="col-sm-10">
          <input type="file" name="signature_photo" class="form-control" id="signature_photo" placeholder="upload file"  title="signature_photo"required/>
</div></div>


<div class="form-group row">
<label for="sslc cer photo" class="col-sm-2 col-form-label">SSLC Certificate Photo</label>
  <div class="col-sm-10">
          <input type="file" name="sslc_certificate_photo" class="form-control" id="sslc_certificate_photo" placeholder="upload file"  title="sslc_certificate_photo"required/>
</div></div>


<div class="form-group row">
<label for="plus2 cer photo" class="col-sm-2 col-form-label">PLUS TWO Certificate Photo</label>
  <div class="col-sm-10">
          <input type="file" name="plustwo_certificate_photo" class="form-control" id="plustwo_certificate_photo" placeholder="upload file"  title="plustwo_certificate_photo"required/>
</div></div>






<br><br>
<div class="form-group row">
  <input type="checkbox" aria-label="Checkbox for following text input" required>
  <div class="col-sm-10">
  <p>I hereby declare that the details furnished above are true and correct to the best of my knowledge and belief and I undertake to inform you of any changes therein, immediately.</p>

</div></div>

<center>
<input type="submit" id=mysubmit class="btn btn-secondary btn-lg welcome-submit" value="SUBMIT" name="submit" ></center>
</div></div></div>



        
        
        
         <?php




      }elseif($rData['aadharNumber'] == !NULL){

        

        
           
        $q2="SELECT * FROM tbl_payment_success WHERE username='$sName'";
        $rzp=mysqli_query($conn,$q2);

        $q3="SELECT * FROM tbl_cert_verified WHERE username='$sName'";
        $rzc=mysqli_query($conn,$q3);

        $q4="SELECT * FROM tbl_admit WHERE username='$sName'";
        $rzad=mysqli_query($conn,$q4);

        $q5="SELECT * FROM tbl_rejected WHERE username='$sName'";
        $rzrej=mysqli_query($conn,$q5);
        
        if(mysqli_num_rows($rzrej)>0){

          $fullNameDisp=$_SESSION['fullname'];

          echo "<div class='card text-center '>
        <div class='card-header'>
          <h5 class='text-dark font-weight-bold'>National Skill Training Institute  Calicut  </h5>
        </div><br><br>
        <div class='card-body'>
        <h5 class='card-title text-muted font-weight-bold'>Sorry  $fullNameDisp ,  You are Not Eligible</h5><br>

        

          <h2 class='card-title text-danger font-weight-bold'>Application Rejected <img src='./assets./images/rej.png' width='45 px'></img></h5><br>

          <h5 class='text-muted'></h5>
          
        </div><br>
        <div class='card-footer text-muted'>
          Thank You
        </div>
      </div>";

         

      }elseif(mysqli_num_rows($rzad)>0){

        $fullNameDisp=$_SESSION['fullname'];

        echo "<div class='card text-center'>
        <div class='card-header'>
          <h4 class='text-dark font-weight-bold'><img src='./assets./images/web a.png' width='36 px' align='left'></img> National Skill Training Institute  Calicut  <img src='./assets./images/web c.png' width='65 px' align='right'></img></h4>
        </div><br><br>
        <div class='card-body'>
        <h5 class='card-title text-muted font-weight-bold'>Hi  $fullNameDisp , Your Admission Process Completed</h5><br>

        

          <h2 class='card-title text-success font-weight-bold'>Admitted Successfully <img src='./assets./images/ok.png' width='35 px'></img></h5><br>

          <h5 class='text-muted'>Welcome To NSTI Calicut</h5>
          
        </div><br>
        <div class='card-footer text-muted'>
          Thank You
        </div>
      </div>";

          

      }elseif(mysqli_num_rows($rzc)>0){

        echo "<div class='card text-center'>
        <div class='card-header'>
          <h5 class='text-success font-weight-bold'>Your Application Has Been Submitted Successfully </h5>
        </div><br>
        <div class='card-body'>
          <h5 class='card-title text-success font-weight-bold'>Payment Success <img src='./assets./images/ok.png' width='28 px'></img></h5><br>

          <h5 class='card-title text-success font-weight-bold'>Certificate Verified Successfully <img src='./assets./images/ok.png' width='28 px'></img></h5><br>

          <h5 class='card-text'>Admission Pending <img src='./assets./images/pending.png' width='13px'></img></h5>
          
        </div><br>
        <div class='card-footer text-muted'>
          Thank You
        </div>
      </div>";
          

      }elseif(mysqli_num_rows($rzp)>0){

        echo "<div class='card text-center'>
        <div class='card-header'>
          <h5 class='text-success font-weight-bold'>Your Application Has Been Submitted Successfully </h5>
        </div><br>
        <div class='card-body'>
          <h5 class='card-title text-success font-weight-bold'>Payment Success <img src='./assets./images/ok.png' width='28 px'></img></h5><br>
          <h5 class='card-text'>Certificate Verification Pending <img src='./assets./images/pending.png' width='13px'></img></h5>
          
        </div><br>
        <div class='card-footer text-muted'>
          Thank You
        </div>
      </div>";
       

      }else{
        echo "<div class='card text-center'>
        <div class='card-header'>
          <h5 class='text-success font-weight-bold'>Your Application Has Been Submitted Successfully </h5>
        </div><br>
        <div class='card-body'>
          <h5 class='card-title'>Payment Pending <img src='./assets./images/pending.png' width='13px'></img></h5><br>
          <h5 class='card-text'>Certificate Verification Pending <img src='./assets./images/pending.png' width='13px'></img></h5>
          
        </div><br>
        <div class='card-footer text-muted'>
          Thank You
        </div>
      </div>";
      }

       


      }

    }
  }else{
    echo "///no data avialable";
  }



}else{
  echo "///session not started";
}

?>




  
          <?php

            include('./connection.php');
            
             

            if(isset($_POST['submit'])){

              
              
              $myAadhar=$_POST['Aadhar_Number'];
              $myCourse=$_POST['course_name'];
              $myDob=$_POST['date_of_birth'];
              $myCatogery=$_POST['category'];
              $myPh=$_POST['phone_number'];
              $myAddress=$_POST['address'];
              $mysslc_certicicate_number=$_POST['sslc_certicicate_number'];
              $mysslc_mark_percentage=$_POST['sslc_mark_percentage'];
              $myplustwo_certificate_number=$_POST['plustwo_certificate_number'];
              $myplustwo_mark_percentage=$_POST['plustwo_mark_percentage'];

              
              $mycandidate_photo=$_FILES['candidate_photo']['name'];
              $temp_name  =$_FILES["candidate_photo"]["tmp_name"];
              if(isset($mycandidate_photo) and !empty($mycandidate_photo)){
                $location = './uploads/'.time();      
                if(move_uploaded_file($temp_name, $location.$mycandidate_photo)){
                    echo '';
                }
            } else {
                echo 'You should select a file to upload !!';
            }

            //signature photo
              $mysignature_photo=$_FILES['signature_photo']['name'];
              $temp_name  =$_FILES["signature_photo"]["tmp_name"];
              if(isset($mysignature_photo) and !empty($mysignature_photo)){
                $location = './uploads/'.time();      
                if(move_uploaded_file($temp_name, $location.$mysignature_photo)){
                    echo '';
                }
            } else {
                echo 'You should select a file to upload !!';
            }

             //sslc certificate  photo
             
             $mysslc_certificate_photo=$_FILES['sslc_certificate_photo']['name'];
             $temp_name  =$_FILES["sslc_certificate_photo"]["tmp_name"];
             if(isset($mysslc_certificate_photo) and !empty($mysslc_certificate_photo)){
               $location = './uploads/'.time();      
               if(move_uploaded_file($temp_name, $location.$mysslc_certificate_photo)){
                   echo '';
               }
           } else {
               echo 'You should select a file to upload !!';
           }




           

              
            
               //plustwo certificate  photo
             
               $myplustwo_certificate_photo=$_FILES['plustwo_certificate_photo']['name'];
             $temp_name  =$_FILES["plustwo_certificate_photo"]["tmp_name"];
             if(isset($myplustwo_certificate_photo) and !empty($myplustwo_certificate_photo)){
               $location = './uploads/'.time();      
               if(move_uploaded_file($temp_name, $location.$myplustwo_certificate_photo)){
                   echo '';
               }
           } else {
               echo 'You should select a file to upload !!';
           }


              if(empty($myAadhar) && empty($myCourse) && empty($myDob) && empty($myCatogery) && empty($myPh) && empty($myAddress)
              && empty($mysslc_certicicate_number) && empty($mysslc_mark_percentage) && empty($myplustwo_certificate_number) && empty($myplustwo_mark_percentage) && empty($mycandidate_photo) && empty($mysignature_photo) && empty($mysslc_certificate_photo)
              && empty($myplustwo_certificate_photo) ){

                echo "ENTER YOUR DETAILS ";
            }else{
    
                echo "";
                $picachu=$_SESSION['username'];
                
                
                
               
                $sql="UPDATE `tbl_users` SET `aadharNumber` = '$myAadhar',
                `courseName`='$myCourse',
                `dob`='$myDob',
                `category`='$myCatogery',
                `phoneNumber`='$myPh',
                `address`='$myAddress',
                `10thCertificateNo`='$mysslc_certicicate_number',
                `10thMarkPercentage`='$mysslc_mark_percentage',
                `12thCertificateNo`='$myplustwo_certificate_number',
                `12thMarkPercentage`='$myplustwo_mark_percentage',
        
                `CandidatePhoto`='$mycandidate_photo',
                `SignaturePhoto`='$mysignature_photo',
                `10thCertificatePhoto`='$mysslc_certificate_photo',
                `12thCertificatePhoto`='$myplustwo_certificate_photo'
                
               
                

                 WHERE `tbl_users`.`username` ='$picachu'";
                
                $result=mysqli_query($conn,$sql);

                if($result){



                 $_SESSION['status']="Registered Successfully";
                 $_SESSION['status_code']="success";

                 header('location:welcome.php');

                }else{
                  $_SESSION['status']="Not Registered There is an error !";
                  $_SESSION['status_code']="error";
                }
    
            }
    



            }

           

          ?>


</div>



<?php

/*

$picachu1=$_SESSION['username'];


$queryz="SELECT * FROM tbl_admit WHERE username=$picachu1";
$resz=mysqli_query($conn,$queryz);

if($resz){
  echo "hai";
}else{
  echo "sorry";
}

*/

?>

<?php include('./includes/footer.php'); ?>

