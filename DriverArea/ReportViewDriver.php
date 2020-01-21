
<?php
session_start();
if(($_SESSION["name"])=="")
 {
  header("location:../login.html");
 }

?>

<!DOCTYPE html>
<html lang="en">
  <head>  
    <title>YouReport | Home</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,500,600,700,800&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="../css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="../css/animate.css">
    <link rel="stylesheet" href="../css/bootstrap.min.css">

    <link rel="stylesheet" href="../css/owl.carousel.min.css">
    <link rel="stylesheet" href="../css/owl.theme.default.min.css">
    <link rel="stylesheet" href="../css/magnific-popup.css">

    <link rel="stylesheet" href="../css/aos.css">

    <link rel="stylesheet" href="../css/ionicons.min.css">

    <link rel="stylesheet" href="../css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="../css/jquery.timepicker.css">
<link rel="stylesheet" href="../css/font-awesome.min.css">
    
    <link rel="stylesheet" href="../css/flaticon.css">
    <link rel="stylesheet" href="../css/icomoon.css">
    <link rel="stylesheet" href="../css/style.css">
<style>
.ftco-degree-bg:after {
    display:none;
}

</style>
  </head>
  <body>
  <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
	    <div class="container">
	      <a class="navbar-brand" href="../index.php">You<span>Report</span></a>
	      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
	        <span class="oi oi-menu"></span> Menu
	      </button>
 
	      <div class="collapse navbar-collapse" id="ftco-nav">
	        <ul class="navbar-nav ml-auto">
	          <li class="nav-item"><a href="index.php" class="nav-link">Report</a></li>
            <li class="nav-item"><a href="" class="nav-link"><?php echo $_SESSION["name"]; ?></a></li>
            <!-- &emsp;<a href="dlogin.html"><button type="button" class="btn btn-success" style="margin-top: 8px;font-size: 17px;">Login</button></a> -->
            <li class="nav-item"><a href="../index.html" class="nav-link">Log Out</a></li>

            <!-- <div class="neon" style="margin-top: 8.5px;margin-left: 7px;">
            <a href="../API/logoutDriver.php">
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                Logout
              </a> 
              </div> -->
            
          </ul>
	      </div>
	    </div>
	  </nav>

	<!-- //products-breadcrumb -->
	<div class="hero-wrap ftco-degree-bg" style="background-image: url('../images/456.jpg');background-position: 0px 0px;height: 100vw;" data-stellar-background-ratio="0.5">
      <div class="overlay" style="height: 100%;"></div>
      <div class="container">
        <div class="row d-flex mb-5 contact-info" >
          
          <div class="col-md-12 block-9 mb-md-5" style="top: 150px;">
              <h1 class="mb-3" style="color:white;">Accident Reports</h1>
              <table class="table-light table-hover" id="dev-table" style="min-width:0!important;">
              <thead>
                <tr>  
                <th style="padding:15px">Report ID</th>
                  <th style="padding:15px">Vehicle Number</th>
                  <th style="padding:15px">Vehicle Type</th>
                  <th style="padding:15px">Contact Number</th>
                  <th style="padding:15px">Action</th>
                </tr>
              </thead>
              <tbody>
			  <?php include "../API/driverAccidentTable.php"; ?>
              </tbody>
            </table>

</div>
          
        </div>
        
      </div>
    </div>
	<!-- banner -->
   
  <footer class="ftco-footer ftco-bg-dark ftco-section">
      <div class="container">
        <div class="row mb-5">
          <div class="col-md">
            <div class="ftco-footer-widget mb-4">
              <h2 class="ftco-heading-2"><a href="#" class="logo">You<span>Report</span></a></h2>
              <p>YouReport helps drivers to report accidents instantly to relevant authorities like Police, RDA & Insurance</p>
            
            </div>
            
              Login as: <div class="btn-group btn-group-sm" role="group" aria-label="Basic example">
              <a href=""><button type="button" class="btn btn-outline-secondary btn-sm">Admin</button></a>
              <a href="plogin.html"><button type="button" class="btn btn-outline-secondary btn-sm">Police/RDA</button></a>
              <a href="ilogin.html"><button type="button" class="btn btn-outline-secondary btn-sm">Insurance</button></a>
              </div>
            
          
          </div>
          <div class="col-md">
            <div class="ftco-footer-widget mb-4">
            	<h2 class="ftco-heading-2">Have Questions?</h2>
            	<div class="block-23 mb-3">
              <ul>
	                <li><span class="icon icon-map-marker"></span><span class="text">203, Awissawella, Pitipana.</span></li>
	                <li><a href="#"><span class="icon icon-phone"></span><span class="text">+9411 550 550</span></a></li>
	                <li><a href="#"><span class="icon icon-envelope"></span><span class="text">info@youreport.lk</span></a></li>
	              </ul>
	            </div>
            </div>
          </div>
         
          
        </div>
       
      </div>
     
    </footer>

        
</body>
</html>