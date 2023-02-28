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
<title>Admin Baru</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>

<body>

<div class="container">
	<h2>Masukkan Admin Baru</h2>
  	<form action="submit_admin.php" method="post"> 
		<div class="form-group">
      		<label for="nama_depan">Nama Depan :</label>
      		<input type="text" class="form-control" id="nama_depan" placeholder="Masukkan Nama Depan" name="nama_depan" required>  
    	</div>
		<div class="form-group">
      		<label for="nama_belakang">Nama Belakang :</label>
      		<input type="text" class="form-control" id="nama_belakang" placeholder="Masukkan Nama Belakang" name="nama_belakang" required>
    	</div>
		<div class="form-group">
      		<label for="email">Email:</label>
      		<input type="email" class="form-control" id="email" placeholder="Masukkan Email" name="email" required>
    	</div>
		<div class="form-group">
      		<label for="password">Password:</label>
      		<input type="password" class="form-control" id="password" placeholder="Masukkan Password" name="password" required>
    	</div>
		<div class="form-group">
    		<input type="checkbox" onClick="myFunction()"> &nbsp;&nbsp;Show Password 
		</div>
		<button type="submit" class="btn btn-warning">Submit</button>
		<a href="list_admin.php" target="primary-content"><button type="button" class="btn btn-warning">Cancel</button></a>
	</form>
</div>

<script>
function myFunction()
{
	var x = document.getElementById("password");
  	if (x.type === "password") 
	{
    	x.type = "text";
  	} 
	else 
	{
    	x.type = "password";
  	}
}
</script>

</body>
</html>
