<?php include('include/header.php'); ?>

  <div class="container">
    <!-- General Information -->
    




    <div class="card" style="margin-top:30px">
    <a href="./paymentVerification.php" style="text-decoration:none">
    
   
      <div class="card-body text-center">
      
        <div class="row">
          <div class="col-xl-4 col-sm-4 mb-4">
            <div class="card bg-dark text-white o-hidden h-100 arg">
              <div class="card-body">
              <h4>Step 1</h4>
                <div class="card-body-icon">
                  <h2><i class="fas fa-wallet"></i></h2>
                </div>
                <h4><b id="total_users"></b> Fee Payment Verification</h4>
              </div>
            </div>
            </a>
          </div>
          <div class="col-xl-4 col-sm-4 mb-4">
          <a href="./certificateVerification.php" style="text-decoration:none">
            <div class="card bg-secondary text-white o-hidden h-100 arg">
              <div class="card-body">
              <h4>Step 2</h4>
                <div class="card-body-icon">
                  <h2><i class="fas fa-certificate"></i></h2>
                </div>
                <h4><b id="total_inactive_users"></b>Certificate Verification</h4>
              </div>
            </div>
            </a>
          </div>
          <div class="col-xl-4 col-sm-4 mb-4">
          <a href="./formDataTest.php" style="text-decoration:none">
            <div class="card bg-dark text-white o-hidden h-100 arg">
              <div class="card-body">
              <h4>Step 3</h4>
                <div class="card-body-icon">
                  <h2><i class="fas fa-users"></i></h2>
                </div>
                <h4><b id="total_active_users"></b> Admission Pending</h4>
              </div>
            </div>
            </a>
          </div>


          <div class="col-xl-6 col-sm-6 mb-3  " >
          <a href="./admitData.php" style="text-decoration:none">
            <div class="card bg-success text-white o-hidden h-100 arg">
              <div class="card-body">
                <div class="card-body-icon">
                  <h2><i class="fas fa-user-graduate"></i></h2>
                </div>
                <h4><b id="total_active_users"></b> Admitted List</h4>
              </div>
            </div>
            </a>
          </div>


          <div class="col-xl-6 col-sm-6 mb-3 ">
          <a href="./rejectedData.php" style="text-decoration:none">
            <div class="card bg-danger text-white o-hidden h-100 arg">
              <div class="card-body">
                <div class="card-body-icon">
                  <h2><i class="fas fa-user-times"></i></h2>
                </div>
                <h4><b id="total_active_users"></b> Rejected List</h4>
              </div>
            </div>
            </a>
          </div>

          
         
          
          
          </div></div>
          <h3 class="text-center">Coursewise Students Details</h3>
          
         

          <a href="./aditAdmitted.php" style="text-decoration:none">
      <div class="card-body">
        <div class="row">
          <div class="col-xl-6 col-sm-6 mb-6">
            <div class="card bg-info text-white o-hidden h-100 arg">
              <div class="card-body text-center">
                <div class="card-body-icon">
                  <h2><i class="fas fa-laptop"></i></h2>
                </div>
                <h4><b id="total_users"></b> A D I T</h4>
              </div>
            </div>
            </a>
          </div>
          <div class="col-xl-6 col-sm-6 mb-6 ">
          <a href="./iotAdmitted.php" style="text-decoration:none">
            <div class="card bg-info text-white o-hidden h-100 arg">
              <div class="card-body text-center">
                <div class="card-body-icon ">
                  <h2><i class="fas fa-network-wired"></i></h2>
                </div>
                <h4><b id="total_inactive_users"></b>I O T</h4>
              </div>
            </div>
            </a>
          </div></div></div>

         





         </div>
    
    <br><br><br><br><br><br><br><br><br><br><br><br>
 <style>
 
 .arg:hover{
  height: 200px; /* [1.1] Set it as per your need */
  overflow: hidden; /* [1.2] Hide the overflowing of child elements */
  transition: transform .2s ease;
  transform: scale(0.9);

 }
 

 
 
 </style>
  <?php include('include/footer.php'); ?>

  