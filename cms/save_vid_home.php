<?php
	require_once "connection.php";
	include "fungsi.php";
	if (isset($_POST['vid_id']))
	{
		$vid_id = $_POST['vid_id'];
	}	
	if (isset($_POST['vid_title']))
    {	
		$vid_title = $_POST['vid_title'];
	}	
	if (isset($_POST['vid_detail']))	
	{
		$vid_detail = $_POST['vid_detail'];
	}	
	
	// cek apakah ada file yang mau diupload atau tidak 
	$not_ok=1;
	$vid_file="";
	if ($_FILES['fileMP4ToUpload']['name']!='')
	{
	    $target_dir="video/";	
		$message= UploadFilesFromForm($target_dir, "v", "fileMP4ToUpload");	
		
		if (substr($message,0,3)!='***')
		{   
		  
              $not_ok=0;
			  echo "<a href='list_vid_home.php'>Back </a>";
		      die("<script>alert('".$message."');</script>");
		
		  
		 
		}
		$vid_file=$_FILES['fileMP4ToUpload']['name'];
		
	}

	$sql= "INSERT INTO tblvid_home (vid_id,vid_title, vid_detail,vid_file)
           VALUES ('$vid_id','$vid_title', '$vid_detail','$vid_file')";
	
	if (mysqli_query($conn, $sql)) 
	{
          header("location: list_vid_home.php");
    } 
	else 
	{
           echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }

	mysqli_close($conn);	   
	 
?>