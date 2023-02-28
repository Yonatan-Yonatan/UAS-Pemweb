<?php
	
 require_once "connection.php";
 $no_pendaftaran = $_GET['no_pendaftaran'];
 
 $sSQL=" delete from tbldaftar 
          where no_pendaftaran='$no_pendaftaran'";
	

 if (mysqli_query($conn,  $sSQL)) {
	    header("location:list_pendaftaran.php");
		exit();
 }	
 else
       echo "Error: " . $sSQL . "<br>" . mysqli_error($conn);	  		  



?>