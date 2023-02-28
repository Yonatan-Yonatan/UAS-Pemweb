<?php
    require_once "connection.php";
    session_start();
    if (!isset( $_SESSION['isLoggedin']))
    {
       header("location:logout.php");
       exit();
 
    }

    $id_promo = $_GET['id_promo'];
 
  $sSQL=" delete from tblpromo 
          where id_promo='$id_promo'";
	

 if (mysqli_query($conn,  $sSQL)) {
	    header("location:list_promo.php");
		exit();
 }	
 else
       echo "Error: " . $sSQL . "<br>" . mysqli_error($conn);	  		  



?>