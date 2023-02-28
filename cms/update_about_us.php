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
<title>Update About Us</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>

<?php 
	$about_id=$_GET['about_id'];
 
 	$sSQL=" select * from tblabout where about_id='$about_id' limit 1";
 	$result=mysqli_query($conn, $sSQL);
 	if (mysqli_num_rows($result) > 0) 
	{
		while ($row=mysqli_fetch_assoc($result))
    	{
	    	$about_message = $row['about_message'];
		}
 	}	 
?>  

<body>

<div class="container">
	<h2>Update About Us</h2>
	<form action="save_update_about_us.php" method="post">
  		<div class="form-group">
      		<label for="about_id">About Us ID  : </label>
     		<input type="number" class="form-control" id="about_id"  name="about_id" value="<?php echo $about_id;?>" readonly>  
			
    	</div>
	 	<div class="form-group">
      		<label for="about_message">About Us Message : </label>
			<textarea name="about_message" rows="10" class="form-control" id="about_message" required><?php echo $about_message;?></textarea>
    	</div>
    	<button type="submit" class="btn btn-warning">Submit</button>
		<a href="list_about_us.php"><button type="button" class="btn btn-warning">Cancel</button></a>
	</form>
</div>

</body>
</html>
