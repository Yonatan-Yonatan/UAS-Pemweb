<?php
   require_once "connection.php";
?>

<!DOCTYPE html>
<html>
<title>Beta Course</title>

<head>
<title>Beta Course</title>
<link href="css.css" rel="stylesheet" type="text/css">
<link href="contact.css" rel="stylesheet" type="text/css">
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</head>

<div class="container-fluid">
	<nav class="navbar navbar-expand-lg navbar-light bg-warning">
  		<a class="navbar-brand" href="#"><img src="../Gambar/logo(1).png" class="img-fluid" style="width:200px"></a>
  			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls=											"navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    			<span class="navbar-toggler-icon"></span>
  			</button>

  			<div class="collapse navbar-collapse justify-content-left" id="navbarSupportedContent">
    			<ul class="navbar-nav">
      				<li class="nav-item active">
        				<a class="nav-link" a href="home.php">Home <span class="sr-only">(current)</span></a>
				  </li>
	  							<li class="nav-item active">
        						<a class="nav-link" a href="promo.php">Promo</a>
      						</li>
	  						<li class="nav-item active">
        						<a class="nav-link" a href="about.php">About Us </a>
      						</li>
	  						<li class="nav-item active">
        						<a class="nav-link" a href="contact.php">Contact Us </a>
      						</li>
	  						<li class="nav-item active">
        						<a class="nav-link" a href="daftar.php">Pendaftaran</a>
      						</li>
			  </ul>
	  </div>
  </nav>
</div>

<p>&nbsp</p>
<h1>Pendaftaran Online</h1>
<p>&nbsp</p>				


<div class="col-md-9">
	<form action="submit_daftar.php" method="post">
		<div class="form-group">
		<label class="control-label col-sm-4" for="nama">Nama   :</label>
			<div class="col-sm-10">   
				<input name="nama" type="text" class="form-control" id="nama" size="30" placeholder="Masukkan Nama" required>
			</div>
		</div>
		
		<div class="form-group">
		<label class="control-label col-sm-4" for="nohp">No. HP :</label>
			<div class="col-sm-10">   
				<input name="no_hp" type="tel" class="form-control" id="nohp" size="15" placeholder="Masukkan No. HP" required>
			</div>
		</div>
		
		<div class="form-group">
		<label class="control-label col-sm-4" for="email">E-Mail :</label>
			<div class="col-sm-10">   
				<input name="email" type="text" class="form-control" id="email" size="30" placeholder="Masukkan E-Mail" required>
			</div>
		</div>
		
		<div class="form-group">
		<label class="control-label col-sm-4" for="jkelamin">Jenis Kelamin :</label>
			<div class="col-sm-4">   
				<select name="jenis_kelamin" id="jenis_kelamin" required>
  					<option value="">Jenis Kelamin </option>
					<option value="Perempuan">Perempuan</option>
  					<option value="Laki-laki">Laki-laki</option>
			  </select> 
			</div>
		</div>
		
		<div class="form-group">
		<label class="control-label col-sm-4" for="tsekolah">Tingkatan Sekolah :</label>
			<div class="col-sm-4">   
				<select name="jenjang_sekolah" id="jenjang_sekolah" required>
  					<option value="">Tingkatan Sekolah</option>
					<option value="SD">SD</option>
  					<option value="SMP">SMP</option>
					<option value="SMA">SMA</option>
			  </select> 
			</div>
		</div>
		
		<div class="form-group">
		<label class="control-label col-sm-4" for="jkursus">Jenis Kursus :</label>
			<div class="col-sm-4">   
				<select name="jenis_kursus" id="jenis_kursus" required>
  					<option value="">Jenis Kursus</option>
  					<option value="2X Seminggu">2X Seminggu</option>
					<option value="3X Seminggu">3X Seminggu</option>
			  </select> 
			</div>
		</div>
		
		<div class="form-group">
		<label class="control-label col-sm-4" for="jamkursus">Jam Kursus :</label>
			<div class="col-sm-4">   
				<select name="jam_kursus" id="jam_kursus" required>
  					<option value="">Jam Kursus</option>
  					<option value="16.00 - 18.00 WIB">16.00 - 18.00 WIB</option>
					<option value="19.00 - 21.00 WIB">19.00 - 21.00 WIB</option>
			  </select> 
			</div>
		</div>
		
		<div class="contact-form button">        
			<div class="col-sm-offset-2 col-sm-10">
				<form id="kirim" name="kirim" method="post" action="">
      				<label>
   			  			<div align="left">
   			    			<button onClick="alert('Anda yakin ingin mendaftar ?')">Kirim</button>
   			  			</div>
      				</label>
    			</form>
			</div>
		</div>
	</form>
</div>

	<p>&nbsp</p>
	<p>Mohon mengisi alamat e-mail dengan benar agar kami dapat mengirimkan detail harga kursus yang diambil.</p>
	<p>&nbsp</p>
	<p>Pastikan bahwa data yang diisi sudah benar, jangan daftar 2x atau lebih demi menghindari terjadinya duplikasi data.</p>
	<p>&nbsp;</p>
	
	

<div class="container-fluid bg-warning">
     <div class="row">
			<div class="col-sm-8">
			   <ul style="list-style-type:none" class="my-3">
		    	<li>
			    	<h3 class="text-white style1">Beta Course Copyright©.</h3>
				</li>
			  </ul>
			</div>
	 </div>
</div>

</body>
</html>
