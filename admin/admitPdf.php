<?php
 
 session_start();

 if(!isset($_SESSION["username"]))
 {
   header('location: login.html');
 }


    $servername="localhost";
    $username="root";
    $password="";
    $dbname="nsti_calicut";

    // Create connection
    $conn = mysqli_connect($servername, $username, $password, $dbname);

    // Check connection
    if(!$conn){
        die("Connection failed: ".mysqli_connect_error());
    }

 //pdf generating code

    
    $result = $conn->Query("SELECT fullname,username,email,gender,aadharNumber,courseName,dob,category,phoneNumber,
    address,10thCertificateNo,10thMarkPercentage,12thCertificateNo,12thMarkPercentage FROM tbl_admit");
    $header = $conn->Query("SELECT UCASE(`COLUMN_NAME`) 
    FROM `INFORMATION_SCHEMA`.`COLUMNS` 
    WHERE `TABLE_SCHEMA`='nsti_calicut' 
    AND `TABLE_NAME`='tbl_admit'
    and `COLUMN_NAME` in ('fullname','username','email','gender','aadharNumber','courseName','dob','category','phoneNumber','address','10thCertificateNo','10thMarkPercentage','12thCertificateNo','12thMarkPercentage')");


    require('./fpdf/fpdf.php');
    
    
   
    $pdf = new FPDF('L','mm',array(650,450));
    $pdf->AddPage('L');


    // Logo
    $pdf->Image('web b.jpg',15,11,18);
    $pdf->Image('web a.png',625,11,10);

    $pdf->SetFont('Arial','B',25);
   
    // Title
    $pdf->Cell(630,20,'NSTI Calicut - Admitted Students Details',1,0,'C');
    // Line break
    $pdf->Ln(20);
    
    $pdf->SetFont('Arial','B',10);
   
    
    
    
    foreach($header as $heading) {
        foreach($heading as $column_heading)
            $pdf->Cell(45,8,$column_heading,1);
    }
    foreach($result as $row) {
        $pdf->Ln();
        foreach($row as $column)
            $pdf->Cell(45,8,$column,1);
    }
    $pdf->Output();

    

?>
    
