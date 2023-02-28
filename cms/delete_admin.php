<?php
    require_once "connection.php";
    session_start();
    if (!isset( $_SESSION['isLoggedin']))
    {
       header("location:logout.php");
       exit();
 
    }

    $id_admin = $_GET['id_admin'];
 
  $sSQL=" delete from tbladmin 
          where id_admin='$id_admin'";
	

 if (mysqli_query($conn,  $sSQL)) {
	    header("location:list_admin.php");
		exit();
 }	
 else
       echo "Error: " . $sSQL . "<br>" . mysqli_error($conn);	  		  



?>