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
<title>Update Admin</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>

<?php
	$id_admin=$_GET['id_admin'];
 
 	$sSQL=" select * from tbladmin where id_admin='$id_admin' limit 1";
 	$result=mysqli_query($conn, $sSQL);
 	if (mysqli_num_rows($result) > 0) 
	{
		while ($row=mysqli_fetch_assoc($result))
    	{
	    	$nama_depan = $row['nama_depan'];
		 	$nama_belakang = $row['nama_belakang'];
		 	$email = $row['email']; 
		}
 	}	 
?>  

<body>

<div class="container">
	<h2>Update Admin</h2>
	<form action="save_update_admin.php" method="post">
  		<div class="form-group">
      		<label for="id_admin">ID Admin : </label>
     		<input type="number" class="form-control" id="id_admin"  name="id_admin" value="<?php echo $id_admin;?>" readonly>  
    	</div>
	 	<div class="form-group">
      		<label for="nama_depan">Nama Depan : </label>
	  		<input type="text" class="form-control" id="nama_depan" placeholder="Masukkan Nama Depan" name="nama_depan" value="<?php echo $nama_depan;?>" required>  
    	</div>
		<div class="form-group">
      		<label for="nama_belakang">Nama Belakang :</label>
      		<input type="text" class="form-control" id="nama_belakang" placeholder="Masukkan Nama Belakang" name="nama_belakang" value="<?php echo $nama_belakang;?>" required>
    	</div>
		<div class="form-group">
      		<label for="email">Email:</label>
      		<input type="email" class="form-control" id="email" placeholder="Masukkan Email" name="email" value="<?php echo $email;?>" required>
    	</div>
    	<button type="submit" class="btn btn-warning">Submit</button>
		<a href="list_admin.php"><button type="button" class="btn btn-warning">Cancel</button></a>
	</form>
</div>

</body>
</html>
