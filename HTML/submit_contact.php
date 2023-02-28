<?php
  require_once "connection.php";
  session_start();
  $nama=$_POST['nama'];
  $email= $_POST['email'];
  $pesan=$_POST['pesan'];
  
  $sSQL=" insert into tblcontactus (nama,email,pesan)
		  values ('$nama','$email','$pesan')";
	

 if (mysqli_query($conn,  $sSQL)) {
	    header("location:contact.php");
		exit();
 }	
 else
       echo "Error: " . $sSQL . "<br>" . mysqli_error($conn);	  		  
		   
mysqli_close($conn); 


?>