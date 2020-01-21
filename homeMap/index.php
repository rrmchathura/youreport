<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
 <style>
    /* Remove the navbar's default margin-bottom and rounded borders */ 
    .navbar {
      margin-bottom: 0;
      border-radius: 0;
    }
    
    /* Add a gray background color and some padding to the footer */
    footer {
      background-color: #f2f2f2;
      padding: 25px;
    }

    body {font-family: Arial, Helvetica, sans-serif;}

/* Full-width input fields */
input[type=text], input[type=password],select {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  box-sizing: border-box;
}

/* Set a style for all buttons */
button {
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
}

button:hover {
  opacity: 0.8;
}

/* Extra styles for the cancel button */
.cancelbtn {
  width: auto;
  padding: 10px 18px;
  background-color: #f44336;
}

/* Center the image and position the close button */
.imgcontainer {
  text-align: center;
  margin: 24px 0 12px 0;
  position: relative;
}

img.avatar {
  width: 40%;
  border-radius: 50%;
}

.container {
  padding: 16px;
}

span.psw {
  float: right;
  padding-top: 16px;
}

/* The Modal (background) */
.modal {
  display: none; /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 1; /* Sit on top */
  left: 0;
  top: 0;
  width: 100%; /* Full width */
  height: 100%; /* Full height */
  overflow: auto; /* Enable scroll if needed */
  background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
  padding-top: 60px;
}

/* Modal Content/Box */
.modal-content {
  background-color: #fefefe;
  margin: 5% auto 15% auto; /* 5% from the top, 15% from the bottom and centered */
  border: 1px solid #888;
  width: 80%; /* Could be more or less, depending on screen size */
}

/* The Close Button (x) */
.close {
  position: absolute;
  right: 25px;
  top: 0;
  color: #000;
  font-size: 35px;
  font-weight: bold;
}

.close:hover,
.close:focus {
  color: red;
  cursor: pointer;
}

/* Add Zoom Animation */
.animate {
  -webkit-animation: animatezoom 0.6s;
  animation: animatezoom 0.6s
}

@-webkit-keyframes animatezoom {
  from {-webkit-transform: scale(0)} 
  to {-webkit-transform: scale(1)}
}
  
@keyframes animatezoom {
  from {transform: scale(0)} 
  to {transform: scale(1)}
}

/* Change styles for span and cancel button on extra small screens */
@media screen and (max-width: 300px) {
  span.psw {
     display: block;
     float: none;
  }
  .cancelbtn {
     width: 100%;
  }
}

  </style>
</head>
<body onload="initialize()">




<div class="container-fluid bg-3 text-center">    

  <div class="row">
  
    <div class="col-sm-12" > 
<div id="googleMap" style="width:100%;height:650px;"></div>


    
  </div>
  
</div><br>

<br><br>

<script type="text/javascript">

function moreInfoWindow(id){
  document.getElementById('id01').style.display='block'
  var caseIndex=getCaseIndex(id);
  document.getElementById("img1").src = "../uploads/1/"+locations[caseIndex][0]+".jpg";
  document.getElementById("img2").src = "../uploads/2/"+locations[caseIndex][0]+".jpg";
  document.getElementById("img3").src = "../uploads/3/"+locations[caseIndex][0]+".jpg";
  document.getElementById("img4").src = "../uploads/4/"+locations[caseIndex][0]+".jpg";
  document.getElementById("img5").src = "../uploads/4/"+locations[caseIndex][0]+".jpg";
  
  document.getElementById("caseType").innerHTML =locations[caseIndex][3];
  document.getElementById("timeStamp").innerHTML =locations[caseIndex][4];
  document.getElementById("vehicleNumber").innerHTML =locations[caseIndex][5];
  document.getElementById("flag").innerHTML =locations[caseIndex][9];

  document.getElementById("status").innerHTML =locations[caseIndex][8];
  document.getElementById("caseID").value =locations[caseIndex][0];



}

function getCaseIndex(id){

  for (var i=0;i<locations.length;i++){
    if (locations[i][0]==id) return i
  }

}
</script>

<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBLhBU04o3cx1Yo0auCEBCTiLEYu_KWCl4&callback=initMap"></script>

<script type="text/javascript">

var locations = getData();
getDataTable();

  function initialize() {

    var myOptions = {
      center: new google.maps.LatLng(locations[1][1], locations[1][2]),
      zoom: 7.5,
      mapTypeId: google.maps.MapTypeId.ROADMAP

    };
    var map = new google.maps.Map(document.getElementById("googleMap"),
        myOptions);

    setMarkers(map,locations)

  }



  function setMarkers(map,locations){

      var marker, i

for (i = 0; i < locations.length; i++)
 {  

 var id = locations[i][0]
 var timeStamp = locations[i][4]
 var vehicleType = locations[i][5]
 var lat = locations[i][1]
 var long = locations[i][2]
 var add =  locations[i][3]

 latlngset = new google.maps.LatLng(lat, long);

  var marker = new google.maps.Marker({  
          map: map, title: id , position: latlngset  
        });
        map.setCenter(marker.getPosition())


        var content = "<img style='border: 1px solid #ddd;  border-radius: 4px;  padding: 5px;  width: 150px;}' src=\"../uploads/1/"+id+".jpg\" alt=\"Case Main Image\"><h1>"+timeStamp+"</h1><h2>"+vehicleType+"</h2><button onclick=\"moreInfoWindow("+id+")\" style=\"width:auto;\">More Info</button>"
    

  var infowindow = new google.maps.InfoWindow()

google.maps.event.addListener(marker,'click', (function(marker,content,infowindow){ 
        return function() {
           infowindow.setContent(content);
           infowindow.open(map,marker);
        };
    })(marker,content,infowindow)); 

  }
  }

function getData(){
    var datalist=[
 
  ] 
;
    var xmlhttp = new XMLHttpRequest();
xmlhttp.onreadystatechange = function() {
  if (this.readyState == 4 && this.status == 200) {
     //alert(this.responseText);
    //   return this.responseText;
     var myObj = JSON.parse(this.responseText);
     
     for (var i=0;i<myObj.length;i++){
        data=[]
        for (var j=0;j<myObj[i].length;j++){
        data.push(myObj[i][j])
        }
        datalist.push(data);
     }
     
  }
};
xmlhttp.open("GET", "../API/policeAccidentList.php", true);
xmlhttp.send();
 

     return datalist;
}

function getDataTable(){
    var datalist=[
 
  ] 
;
    var xmlhttp = new XMLHttpRequest();
xmlhttp.onreadystatechange = function() {
  if (this.readyState == 4 && this.status == 200) {
     //alert(this.responseText);
     //alert(document.getElementById("dataTabale").innerHTML);

    // return this.responseText;
    //  var myObj = JSON.parse(this.responseText);
      document.getElementById("dataTabale").innerHTML =this.responseText;
    //  for (var i=0;i<myObj.length;i++){
    //     data=[]
    //     for (var j=0;j<myObj[i].length;j++){
    //     data.push(myObj[i][j])
    //     }
    //     datalist.push(data);
    //  }
     
  }
};
xmlhttp.open("GET", "../API/policeAccidentTable.php", true);
xmlhttp.send();
 

   
}



  </script>

</body>
</html>
