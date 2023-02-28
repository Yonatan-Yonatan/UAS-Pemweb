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
<title>Add About Us Message</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>

<body>

<div class="container">
	<h2>Masukkan Pesan About Us</h2><br>
  	<form action="submit_about_us.php" method="post"> 
	  <div class="form-group">
      		<label for="about_message">About Us Message :</label>
		    <textarea name="about_message" rows="10" class="form-control" id="about_message" ></textarea>
	  </div>
		<button type="submit" class="btn btn-warning">Submit</button>
		<a href="list_about_us.php" target="primary-content"><button type="button" class="btn btn-warning">Cancel</button></a>
	</form>
</div>
</body>
</html>
