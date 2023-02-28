<?php
   	session_start();
   	if (!isset( $_SESSION['isLoggedin']))
   	{
   		header("location:logout.php");
   	} 
	require_once "connection.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
<title>Edit Home Picture Promo</title>
<meta charset="utf-8">
<meta name="viewport" promo="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  
<script>
	function konfirmasi()
	{
	 	if (!confirm('Yakin simpan perubahan data ini ?'))
		{
			return false;
        }
		else
		{ 
			return true;		
		}
	}
  
</script>
</head>

<?php
	$pic_id = $_GET['pic_id'];
	$sql = "SELECT * FROM tblpic_promo where pic_id='$pic_id' order by pic_id desc  limit 1 ";
	$result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0)
	{
	     $row=mysqli_fetch_assoc($result);
	     $pic_title = $row['pic_title'];
		 $pic_detail = $row['pic_detail'];
		 $pic_file = $row['pic_file'];
		 $pic_status = $row['pic_status'];
	}
?> 

<body>
<div class="container">
	<h3>Edit Picture</h3><br>
	<form action="save_update_pic_promo.php" method="post" onSubmit="return konfirmasi()" enctype="multipart/form-data">
	<div class="form-group">
		<div class="col-sm-12">
			<label for="pic_id">Picture ID:</label>
    		<input type="text" class="form-control" placeholder="Enter Picture ID" id="pic_id" name="pic_id" value="<?php echo $pic_id;?>" readonly>
		</div>
  	</div>
 	<div class="form-group">
    	<div class="col-sm-12">
        	<label for="pic_title">Picture Title:</label>
        	<input type="text" class="form-control" placeholder="Enter Picture Title" id="pic_title" name="pic_title" value="<?php echo $pic_title;?>" required>
		</div>
  	</div>
  	<div class="form-group">
    	<div class="col-sm-12">
    		<label for="pic_detail">Picture Detail </label>
   			<textarea class="form-control" placeholder="Enter Picture Detail" id="pic_detail" name="pic_detail"> <?php echo $pic_detail;?></textarea>
		</div>
  	</div>
  	<div class="form-group">
    	<div class="col-sm-12">
    		<label for="pic_file">Select File Image to Upload</label>
          	<p style="color:red" font-size:14px"><?php echo $pic_file;?></p>  	
		  	<input type="hidden" name="pic_file" value="<?php echo $pic_file;?>">
		    <input type="file" name="fileImageToUpload" id="fileImageToUpload" class="form-control">
 		</div>
  	</div>
  	<div class="form-group">
    	<div class="col-sm-12">
    		<label for="pic_status">Picture Status</label>
	  		<?php if ($pic_status=='0')
	        {
			?>		
			<input type="radio" id="aktif" name="pic_status" value="0" checked>
			<label for="aktif">Aktif</label>
 			<input type="radio" id="nonaktif" name="pic_status" value="1" >
			<label for="nonaktif">Nonaktif</label>
			<?php 
		     }	
			 else
			 {
			?>
			<input type="radio" id="aktif" name="pic_status" value="0" >
			<label for="aktif">Aktif</label>
 			<input type="radio" id="nonaktif" name="pic_status" value="1" checked>
			<label for="nonaktif">Nonaktif</label>
			<?php
			 }
			?>		
	   	</div>
  	</div>
  	<div class="form-group">
  		<div class="col-sm-12"> 
  			<button type="submit" class="btn btn-warning">Submit</button>
   			<a href="list_pic_promo.php"><button type="button" class="btn btn-warning">Cancel</button></a>
  		</div>
  	</div>
	</form> 
</div>
</body>
</html>
