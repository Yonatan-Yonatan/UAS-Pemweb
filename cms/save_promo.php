<?php
 require_once "connection.php";
	include "fungsi.php";
	
	
	if (isset($_POST['promo_id']))
		$promo_id = $_POST['promo_id'];
		
	if (isset($_POST['promo_title']))
    	$promo_title = $_POST['promo_title'];
		
	if (isset($_POST['promo_detail']))	
		$promo_detail = $_POST['promo_detail'];
		
	
	// cek apakah ada file yang mau diupload atau tidak 
	
	$not_ok=1;
	
	$promo_promo="";
	if ($_FILES['fileMP4ToUpload']['name']!='')
	{
		
		$target_dir="promo/";	
		$message= UploadFilesFromForm($target_dir, "v", "fileMP4ToUpload");	
		
		if (substr($message,0,3)!='***')
		{
		    echo "<a href='list_promo.php'>Back </a>";
		     die("<script>alert('".$message."');</script>");
		   
			$not_ok=0;
			
			
			
		
		}   
		$promo_file=$_FILES['fileMP4ToUpload']['name']; 
		
	}	
	
	$promo_image="";
	if ($_FILES['fileImageToUpload']['name']!='')
	{
	    $target_dir="images/";	
		$message= UploadFilesFromForm($target_dir, "i", "fileImageToUpload");	
		
		if (substr($message,0,3)!='***')
		{   
		  
              $not_ok=0;
			  	echo "<a href='list_promo.php'>Back </a>";
		     die("<script>alert('".$message."');</script>");
		
		  
		 
		}
		$promo_image=$_FILES['fileImageToUpload']['name'];
		
	}
	
	 	
	
	$sql= "INSERT INTO tb_promo (promo_id,promo_title, promo_detail,promo_file,promo_image)
           VALUES ('$promo_id','$promo_title', '$promo_detail','$promo_file','$promo_image')";
	
	if (mysqli_query($conn, $sql)) {
          header("location: list_promo.php");
    } else {
           echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }

mysqli_close($conn);	   
		 