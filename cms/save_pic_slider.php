<?php
	require_once "connection.php";
	include "fungsi.php";
	if (isset($_POST['pic_id']))
	{
		$pic_id = $_POST['pic_id'];
	}	
	if (isset($_POST['pic_title']))
    {	
		$pic_title = $_POST['pic_title'];
	}	
	if (isset($_POST['pic_detail']))	
	{
		$pic_detail = $_POST['pic_detail'];
	}	
	
	// cek apakah ada file yang mau diupload atau tidak 
	$not_ok=1;
	$pic_file="";
	if ($_FILES['fileImageToUpload']['name']!='')
	{
	    $target_dir="images/";	
		$message= UploadFilesFromForm($target_dir, "i", "fileImageToUpload");	
		
		if (substr($message,0,3)!='***')
		{   
		  
              $not_ok=0;
			  echo "<a href='list_pic_slider.php'>Back </a>";
		      die("<script>alert('".$message."');</script>");
		
		  
		 
		}
		$pic_file=$_FILES['fileImageToUpload']['name'];
		
	}

	$sql= "INSERT INTO tblpic_slider (pic_id,pic_title, pic_detail,pic_file)
           VALUES ('$pic_id','$pic_title', '$pic_detail','$pic_file')";
	
	if (mysqli_query($conn, $sql)) 
	{
          header("location: list_pic_slider.php");
    } 
	else 
	{
           echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }

	mysqli_close($conn);	   
	 
?>