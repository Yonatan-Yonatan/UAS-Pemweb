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
<title>Enter New Food promo</title>
<meta charset="utf-8">
<meta name="viewport" promo="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  
<script>
function Konfirm_Simpan()
{
	if (confirm('Yakin simpan ?'))
	      return true;
	else 
	      return false;	  
	
}
</script>  
</head>

<body>

<div class="container">
	<h2>Masukkan Promo Baru</h2>
  	<form action="submit_promo.php" method="post"> 
		<div class="form-group">
      		<label for="jenjang_sekolah">Jenjang Sekolah :</label>
      		<input type="text" class="form-control" id="jenjang_sekolah" placeholder="Masukkan Jenjang Sekolah" name="jenjang_sekolah" required>  
    	</div>
		<div class="form-group">
      		<label for="jenis_kursus">Jenis Kursus :</label>
      		<input type="text" class="form-control" id="jenis_kursus" placeholder="Masukkan Jenis Kursus" name="jenis_kursus" required>
    	</div>
		<div class="form-group">
      		<label for="harga">Harga:</label>
      		<input type="number" class="form-control" id="harga" placeholder="Masukkan Harga" name="harga" required>
    	</div>
		<div class="form-group">
      		<label for="diskon">Diskon:</label>
      		<input type="number" class="form-control" id="diskon" placeholder="Masukkan Diskon" name="diskon" required>
    	</div>
		<button type="submit" class="btn btn-warning">Submit</button>
		<a href="list_promo.php" target="primary-content"><button type="button" class="btn btn-warning">Cancel</button></a>
	</form>
</div>

</body>
</html>
