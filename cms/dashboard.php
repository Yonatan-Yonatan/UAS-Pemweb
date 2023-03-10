<!DOCTYPE html>
<html lang="en">

<?php  
	session_start();
   	if (!isset( $_SESSION['isLoggedin']))
   	{
    	header("location:logout.php");
	}
	require_once "connection.php";
?>


<head>

<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta name="description" content="">
<meta name="author" content="">
<title>BetaCourse Dashboards</title>

<!-- Custom fonts for this template -->
<link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
<link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
<!-- Custom styles for this template -->
<link href="css/sb-admin-2.min.css" rel="stylesheet">
<!-- Custom styles for this page -->
<link href="vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">

</head>

<body id="page-top">
	<!-- Page Wrapper -->
  	<div id="wrapper">
		 <!-- Sidebar -->
    		<ul class="navbar-nav bg-gradient-warning sidebar sidebar-dark accordion" id="accordionSidebar">
				<!-- Sidebar - Brand -->
      				<a class="sidebar-brand d-flex align-items-center justify-content-center" href="dashboard.php">
        				<div class="sidebar-brand-icon rotate-n-15">
          					<i class="fas fa-laugh-wink"></i>
        				</div>
        				<div class="sidebar-brand-text mx-3">BetaCourse Dashboard</div>
      				</a>
				<!-- Divider -->
      			<hr class="sidebar-divider">
				<!-- Nav Item - Charts -->
      			<li class="nav-item active">
        			<a class="nav-link" href="list_admin.php" target="primary-content">
          				<i class="fas fa-fw fa-table"></i>
          				<span>Admin List</span>
					</a>
      			</li>
				<!-- Nav Item - Tables -->
          		<li class="nav-item active">
        			<a class="nav-link" href="list_vid_home.php" target="primary-content">
          				<i class="fas fa-fw fa-table"></i>
          				<span>Home Video Content</span>
					</a>
      			</li>
				<!-- Nav Item - Tables -->
          		<li class="nav-item active">
        			<a class="nav-link" href="list_pic_promo.php" target="primary-content">
          				<i class="fas fa-fw fa-table"></i>
          				<span>Home Picture Promo Content</span>
					</a>
      			</li>
	 			<!-- Nav Item - Tables -->
      			<li class="nav-item active">
        			<a class="nav-link" href="list_promo.php" target="primary-content">
          				<i class="fas fa-fw fa-table"></i>
          				<span>Promo Content</span>
					</a>
      			</li>
 				<!-- Nav Item - Tables -->
      			<li class="nav-item active">
        			<a class="nav-link" href="list_about_us.php" target="primary-content">
          				<i class="fas fa-fw fa-table"></i>
          				<span>About Us Content</span>
					</a>
      			</li>
	   			<!-- Nav Item - Tables -->
      			<li class="nav-item active">
        			<a class="nav-link" href="list_contact_us.php" target="primary-content">
          				<i class="fas fa-fw fa-table"></i>
          				<span>Contact Us Message</span>
					</a>
      			</li>
	   			<!-- Nav Item - Tables -->
      			<li class="nav-item active">
        			<a class="nav-link" href="list_pendaftaran.php" target="primary-content">
          				<i class="fas fa-fw fa-table"></i>
          				<span>Pendaftaran Form</span>
					</a>
      			</li>
	  			<!-- Divider -->
      			<hr class="sidebar-divider d-none d-md-block">
				<!-- Sidebar Toggler (Sidebar) -->
      			<div class="text-center d-none d-md-inline">
       				<button class="rounded-circle border-0" id="sidebarToggle"></button>
      			</div>
			</ul>
    		<!-- Content Wrapper -->
    		<div id="content-wrapper" class="d-flex flex-column">
				<!-- Main Content -->
      			<div id="content">
					<!-- Topbar -->
        			<nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">
						<!-- Sidebar Toggle (Topbar) -->
          				<button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
            				<i class="fa fa-bars"></i>
          				</button>
						<!-- Topbar Navbar -->
          				<ul class="navbar-nav ml-auto">
							<!-- Nav Item - Search Dropdown (Visible Only XS) -->
            				<li class="nav-item dropdown no-arrow d-sm-none">
              					<a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                					<i class="fas fa-search fa-fw"></i>
              					</a>
            				</li>
							<!-- Nav Item - User Information -->
            				<li class="nav-item dropdown no-arrow">
            					<a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                					<span class="mr-2 d-none d-lg-inline text-gray-600 small"><?php echo $_SESSION['username'];?></span>
                					<img class="img-profile rounded-circle" src="https://source.unsplash.com/QAB-WJcbgJk/60x60">
              					</a>
              					<!-- Dropdown - User Information -->
              					<div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                					<a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                  						<i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                  						Logout
                					</a>
              					</div>
            				</li>
						</ul>
					</nav>
  					<!-- Begin Page Content -->
    				<div class="container-fluid">
    					<!-- DataTales Example -->
        				<div class="card shadow mb-4">
          					<div class="card-body">
              					<div class="table-responsive">
              						<iframe name="primary-content"  style="border:none;width:100%;height:500px"  title="List Content"></iframe>
								</div>
            				</div>
          				</div>
					</div>
        		</div>
      			<!-- Footer -->
      			<footer class="sticky-footer bg-white">
        			<div class="container my-auto">
          				<div class="copyright text-center my-auto">
            				<span>Copyright &copy; BetaCourse Dashboard 2021</span>
          				</div>
        			</div>
      			</footer>
      		</div>
    	</div>
		<!-- Scroll to Top Button-->
  		<a class="scroll-to-top rounded" href="#page-top">
    		<i class="fas fa-angle-up"></i>
  		</a>
		<!-- Logout Modal-->
  		<div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    		<div class="modal-dialog" role="document">
      			<div class="modal-content">
        			<div class="modal-header">
          				<h5 class="modal-title" id="exampleModalLabel">Are you sure to exit the system ?</h5>
          				<button class="close" type="button" data-dismiss="modal" aria-label="Close">
            				<span aria-hidden="true">??</span>
          				</button>
        			</div>
        			<div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
        				<div class="modal-footer">
          					<button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
          					<a class="btn btn-primary" href="logout.php">Logout</a>
        				</div>
      				</div>
    			</div>
  			</div>
			
			<!-- Bootstrap core JavaScript-->
  			<script src="vendor/jquery/jquery.min.js"></script>
  			<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
			<!-- Core plugin JavaScript-->
  			<script src="vendor/jquery-easing/jquery.easing.min.js"></script>
			<!-- Custom scripts for all pages-->
  			<script src="js/sb-admin-2.min.js"></script>
			<!-- Page level plugins -->
  			<script src="vendor/datatables/jquery.dataTables.min.js"></script>
  			<script src="vendor/datatables/dataTables.bootstrap4.min.js"></script>
			<!-- Page level custom scripts -->
  			<script src="js/demo/datatables-demo.js"></script>
</body>

</html>
