<?php
    require_once "connection.php";
    session_start();
    if (!isset( $_SESSION['isLoggedin']))
    {
       header("location:logout.php");
       exit();
 
    }

    $about_id = $_GET['about_id'];
 
  $sSQL=" delete from tblabout 
          where about_id='$about_id'";
	

 if (mysqli_query($conn,  $sSQL)) {
	    header("location:list_about_us.php");
		exit();
 }	
 else
       echo "Error: " . $sSQL . "<br>" . mysqli_error($conn);	  		  



?>