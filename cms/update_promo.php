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
	$id_promo=$_GET['id_promo'];
 
 	$sSQL=" select * from tblpromo where id_promo='$id_promo' limit 1";
 	$result=mysqli_query($conn, $sSQL);
 	if (mysqli_num_rows($result) > 0) 
	{
		while ($row=mysqli_fetch_assoc($result))
    	{
	    	$jenjang = $row['jenjang_sekolah'];
		 	$jenis_kursus = $row['jenis_kursus'];
		 	$harga = $row['harga']; 
			$diskon = $row['diskon']; 
		}
 	}	 
?>  

<body>

<div class="container">
	<h2>Update Promo</h2>
	<form action="save_update_promo.php" method="post">
  		<div class="form-group">
      		<label for="id_promo">ID Promo : </label>
     		<input type="number" class="form-control" id="id_promo"  name="id_promo" value="<?php echo $id_promo;?>" readonly>  
    	</div>
	 	<div class="form-group">
      		<label for="jenjang">Jenjang Sekolah : </label>
	  		<input type="text" class="form-control" id="jenjang_sekolah" placeholder="Masukkan Jenjang Sekolah" name="jenjang_sekolah" value="<?php echo $jenjang;?>" required>  
    	</div>
		<div class="form-group">
      		<label for="jenis_kursus">Jenis Kursus :</label>
      		<input type="text" class="form-control" id="jenis_kursus" placeholder="Masukkan Jenis Kursus" name="jenis_kursus" value="<?php echo $jenis_kursus;?>" required>
    	</div>
		<div class="form-group">
      		<label for="harga">Harga:</label>
      		<input type="number" class="form-control" id="harga" placeholder="Masukkan harga" name="harga" value="<?php echo $harga;?>" required>
    	</div>
		<div class="form-group">
      		<label for="diskon">Diskon:</label>
      		<input type="number" class="form-control" id="diskon" placeholder="Masukkan Diskon" name="diskon" value="<?php echo $diskon;?>" required>
    	</div>
    	<button type="submit" class="btn btn-warning">Submit</button>
		<a href="list_promo.php"><button type="button" class="btn btn-warning">Cancel</button></a>
	</form>
</div>

</body>
</html>
