<?php
 
 require_once "connection.php";  
 $contactus_id = $_GET['contactus_id'];
 
 $sSQL=" delete from tblcontactus
          where contactus_id='$contactus_id'";
	

 if (mysqli_query($conn,  $sSQL)) {
	    header("location:list_contact_us.php");
		exit();
 }	
 else
       echo "Error: " . $sSQL . "<br>" . mysqli_error($conn);	  		  



?>