<?php
   function UploadFilesFromForm($Target_Dir, $TypeUpload, $FileUpload)
   {  
	 //$target_dir = "../video/";
    $target_file = $Target_Dir . basename($_FILES[$FileUpload]["name"]);
    //$FileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
	
	 $FileType= $_FILES[$FileUpload]['type'];
	 
	
	$message="ok";
	
	$ok=1;
    
	if($TypeUpload=="v" and $FileType!="video/mp4") {
       $message= "Sorry, only MP4 files are allowed";
		$ok=0;
     }
	
	if ($TypeUpload=="i")
	{
			if($FileType != "image/jpg" && $FileType != "image/png" && $FileType != "image/jpeg" && $FileType != "image/gif" ) 
			{
  				$message= "Sorry, only JPG, JPEG, PNG & GIF files are allowed";
				$ok=0;
  			}
	} 
	
	if (file_exists($target_file)) 
	{
      $message= "Sorry, file ".$_FILES[$FileUpload]["name"]." already exists.";
      $ok = 0;
   }
	 
   if ($ok==1)
   {
    if (move_uploaded_file($_FILES[$FileUpload]["tmp_name"], $target_file)) {
            $message= "*** The file ". htmlspecialchars( basename( $_FILES[$FileUpload]["name"])). " has been uploaded";
    } else {
           $message= "Sorry, there was an error uploading your file.";
    }
   }	
	  return $message;
   }

?>
