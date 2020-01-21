
<?php
session_start();
if(($_SESSION["name"])=="")
 {
  header("location:../.html");
 }

?>


<!DOCTYPE html>
<html lang="en">
  <head>  
    <title>YouReport | Home </title>
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
	      <a class="navbar-brand" href="../index.html">You<span>Report</span></a>
	      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
	        <span class="oi oi-menu"></span> Menu
	      </button>
 
	      <div class="collapse navbar-collapse" id="ftco-nav">
          <ul class="navbar-nav ml-auto">
	          <li class="nav-item"><a href="reportviewdriver.php" class="nav-link">History</a></li>
            <li class="nav-item"><a href="" class="nav-link"><?php echo $_SESSION["name"]; ?></a></li>
            <!-- &emsp;<a href="dlogin.html"><button type="button" class="btn btn-success" style="margin-top: 8px;font-size: 17px;">Login</button></a> -->
            <li class="nav-item"><a href="../index.html" class="nav-link">Log Out</a></li>

            <!-- <div class="neon" style="margin-top: 8.5px;margin-left: 7px;">
              <a href="../index.php">
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
    <!-- banner -->
    <div class="hero-wrap ftco-degree-bg" style="background-image: url('../images/456.jpg');background-position: 0px 0px;height: 1100px;" data-stellar-background-ratio="0.5">
      <div class="overlay" style="height: 100%;"></div>
      <div class="container" >
        <div class="row d-flex mb-5 contact-info" >
            <div class="col-md-2 block-9 mb-md-5" style="top: 150px;">
            </div>
          <div class="col-md-8 block-9 mb-md-5" style="top: 150px;">
            <form action="../API/saveAccident.php" method="post" class="bg-light p-5 contact-form" enctype="multipart/form-data">
                <h2  class="mb-3">Fill all the Information to Report your Accident</h2>

                <div class="form-group">
                  <label><b>District</b></label>
                  <select class="form-control"  name ="type" >
                    <option value="AMPARA">AMPARA</option>
                    <option value="ANURADHAPURA">ANURADHAPURA</option>
                    <option value="BADULLA">BADULLA</option>
                    <option value="BATTICALOA">BATTICALOA</option>
                    <option value="COLOMBO">COLOMBO</option>
                    <option value="GALLE">GALLE</option>
                    <option value="GAMPAHA">GAMPAHA</option>
                    <option value="HAMBANTHOTA">HAMBANTHOTA</option>
                    <option value="JAFFNA">JAFFNA</option>
                    <option value="KALUTHARA">KALUTHARA</option>
                    <option value="KANDY">KANDY</option>
                    <option value="KEGALLE">KEGALLE</option>
                    <option value="KILINOCHCHI">KILINOCHCHI</option>
                    <option value="KURUNEGALA">KURUNEGALA</option>
                    <option value="MANNARAM">MANNARAM</option>
                    <option value="MATHALE">MATHALE</option>
                    <option value="MATHARA">MATHARA</option>
                    <option value="MULATHIVU">MULATHIVU</option>
                    <option value="NUWARA ELIYA">NUWARA ELIYA</option>
                    <option value="POLONNARUWA">POLONNARUWA</option>
                    <option value="PUTHTHALAM">PUTHTHALAM</option>
                    <option value="RATHNAPURA">RATHNAPURA</option>
                    <option value="TRINCOMALEE">TRINCOMALEE</option>
                    <option value="VAVUNIYA">VAVUNIYA</option>
                  </select>
                </div>
                <div class="form-group">
                  <label><b>Vehicle Type</b></label>
                  <select class="form-control"  name ="vehicleType">
                    <option value="CAR">Car</option>
                    <option value="BIKE">Bike</option>
                    <option value="VAN">Van</option>
                    <option value="BUS">Bus</option>
                  </select>
                </div>
                <div class="form-group">
                  <label><b>Vehicle Number</b></label>
                  <input type="text" class="form-control" name="vehicleNumber" placeholder="Vehicle Number">
                </div>
                <div class="form-group">
                  <label><b>Attachment</b></label>
                  <input class="form-control" name="file1" type="file"></p>
                  <input class="form-control" name="file2" type="file"></p>
                  <input class="form-control" name="file3" type="file"></p>
                  <input class="form-control" name="file4" type="file"></p>
                  <input class="form-control" name="file5" type="file"></p>                
                </div>
                <div class="form-group">
                  <input class="form-control" name="lang" id="lang" type="hidden"></p>
                </div>
                <div class="form-group">
                  <input class="form-control" name="lat" id="lat" type="hidden"></p>
                </div>
                <div class="form-group">
                  <input type="submit" value="Report" class="btn btn-dark py-3 px-5">
                </div>
              </form>
    <!-- <label class="w3-text-red"><b>Flag</b></label>
   
    <select class="w3-input w3-border w3-sand" name ="flag">
  <option value="HIGH">HIGH</option>
  <option value="MEDIUM">MEDIUM</option>
  <option value="LOW">LOW</option>

</select> -->
          
          </div>
          <div class="col-md-2 block-9 mb-md-5" style="top: 150px;">
        </div>
        </div>
        
      </div>
    </div>

    <p id="demo"></p>
    <p id="location"></p>
    <div id="googleMap" style="width:100%;height:400px;"></div>  
    <footer class="ftco-footer ftco-bg-dark ftco-section">
      <div class="container">
        <div class="row mb-5">
          <div class="col-md">
            <div class="ftco-footer-widget mb-4">
              <h2 class="ftco-heading-2"><a href="#" class="logo">You<span>Report</span></a></h2>
              <p>YouReport helps drivers to report accidents instantly to relevant authorities like Police, RDA & Insurance</p>
            
            </div>
          </div>
          
          
          <div class="col-md">
            <div class="ftco-footer-widget mb-4">
            	<h2 class="ftco-heading-2">Have a Questions?</h2>
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
    <script type="text/javascript">
     
    var myVar = setInterval(getlocation, 10000);
   
        getlocation();

          

            function getlocation() {
              
                if (navigator.geolocation) {  
                   //alert("lat");
                    if(document.getElementById('location').innerHTML == '') {
                        
                         navigator.geolocation.getCurrentPosition(visitorLocation);
                    // alert ("xcxcxcxc"); 
                     } 
                    else
                    {
                        alert ("GPS SIgnal Lost");
                    }


                } else { 
                    $('#location').html('This browser does not support Geolocation Service.');
                }
            }

            
            function visitorLocation(position) {
                 //alert("lat");
                var lat = position.coords.latitude;
                var long = position.coords.longitude;


                
                document.getElementById('lang').value=long;
                document.getElementById('lat').value=lat;

            }
            function myMap() {
                if (navigator.geolocation) {
    navigator.geolocation.getCurrentPosition(showPosition);
  } else {
    x.innerHTML = "Geolocation is not supported by this browser.";
  }
      }          
                function showPosition(position) {
                   var mapProp= {
                center:new google.maps.LatLng(position.coords.latitude,position.coords.longitude),
                zoom:7,
                };
                var loc = {lat:position.coords.latitude, lng:position.coords.longitude};
                var map = new google.maps.Map(document.getElementById("googleMap"),mapProp);
                var marker = new google.maps.Marker({position: loc, map: map});
                } 
                
        </script>
        
<!-- 
<script src="https://maps.googleapis.com/maps/api/js?key=
AIzaSyD72lh9FIkNzZ3XETm4vCMvZITfikxQ-Fw
&callback=myMap"></script> -->



<script>
getLocation();
var x = document.getElementById("map");
var center ;
var loc ;

function getLocation() {

  if (navigator.geolocation) {
    navigator.geolocation.getCurrentPosition(showPosition);
  } else { 
    x.innerHTML = "Geolocation is not supported by this browser.";
  }
}

function showPosition(position) {
   center = {lat: position.coords.latitude, lng:position.coords.longitude};
loc = {lat: position.coords.latitude, lng:position.coords.longitude};
document.getElementById("lat").value = position.coords.latitude;
document.getElementById("lang").value = position.coords.longitude;
}
alert("Getting Your Current location");
function myMap() { 
var mapProp= {
  center:new google.maps.LatLng(center),
  zoom:7,
};
var map = new google.maps.Map(document.getElementById("googleMap"),mapProp);

var marker = new google.maps.Marker({
    position: loc,
    map: map,
    title: 'Hello World!'
  });
marker.setMap(map);
}
google.maps.event.addListener(map, 'click', function(event) {
  placeMarker(map, event.latLng);
});

function placeMarker(map, location) {
  var marker = new google.maps.Marker({
    position: location,
    map: map
  });
  var infowindow = new google.maps.InfoWindow({
    content: 'Latitude: ' + location.lat() +
    '<br>Longitude: ' + location.lng()
  });
  infowindow.open(map,marker);
}

</script>
      <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCLLFhjGtokLTy7xIaGAzRzOhaLyyN3350&callback=myMap"></script>
  
</body>
</html>