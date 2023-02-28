<?php
	require_once "connection.php";
  	session_start();
  	$id_promo = $_POST['id_promo'];
  	$jenjang=$_POST['jenjang_sekolah'];
  	$jenis_kursus=$_POST['jenis_kursus'];
  	$harga= $_POST['harga'];
	$diskon= $_POST['diskon'];
  
  	$sSQL=" update tblpromo set jenjang_sekolah='$jenjang',jenis_kursus='$jenis_kursus',harga='$harga',diskon='$diskon'
             where id_promo='$id_promo'";
	
 	if (mysqli_query($conn,  $sSQL)) 
	{
		header("location:list_promo.php");
		exit();
 	}	
 	else
	{
       echo "Error: " . $sSQL . "<br>" . mysqli_error($conn);	  		  
	}	   
	mysqli_close($conn); 
?>