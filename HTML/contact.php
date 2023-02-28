<?php
   require_once "connection.php";
?>

<!DOCTYPE html>
<html>

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

  <style type="text/css">
<!--
.style1 {font-size: 48px
		 font-family:Verdana
		}
-->
  </style>
  
</head>

<body>
<div class="container-fluid">
	<nav class="navbar navbar-expand-lg navbar-light bg-warning">
  		<a class="navbar-brand" href="#"><img src="../Gambar/logo(1).png" class="img-fluid" style="width:200px"></a>
  			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls=											"navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    			<span class="navbar-toggler-icon"></span>
  			</button>

  			<div class="collapse navbar-collapse justify-content-left" id="navbarSupportedContent">
    			<ul class="navbar-nav">
      				<li class="nav-item active">
        				<a href="home.php" class="nav-link" a>Home <span class="sr-only">(current)</span></a>      						
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
<div class="col-sm-9">
	<form action="submit_contact.php" method="post">
		<div class="form-group">
		<label class="control-label col-sm-2" for="nama">Nama :</label>
			<div class="col-sm-10">          
 					<input type="text" class="form-control" id="nama" size ="30" placeholder="Masukkan Nama" name="nama" required>
			</div>
		</div>

			<div class="form-group">
			<label class="control-label col-sm-2" for="email">E-Mail:</label>
				<div class="col-sm-10">
					<input type="email" class="form-control" id="email" size ="30" placeholder="Masukkan E-Mail" name="email" required>
				</div>
			</div>
		
	 		<div class="form-group">
			<label class="control-label col-sm-2" for="pesan">Pesan:</label>
				<div class="col-sm-10">
					<textarea cols="40" rows="5" class="form-control" id="pesan"  name="pesan" required></textarea>
				</div>
			</div>
				<div align="left">
   					<button onClick="alert('Anda yakin ingin mengirimkan pesan ini ?')">Kirim</button>
   				</div>
		</form>
	</div>
</div>	
		
<p>&nbsp</p>
<p>&nbsp</p>
<p>&nbsp</p>

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
