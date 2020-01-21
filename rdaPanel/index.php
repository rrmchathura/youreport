<?php
 include "../commenComponent/header.php";

 ?>
<div class="container-fluid bg-3 text-center">    

<div class="row">
<div class="col-sm-3" > 
<div class="w3-sidebar w3-light-grey w3-bar-block" style="width:25%">
  <table id="dataTabale">
  
</table>
</div>
</div>
  <div class="col-sm-9" >
<div id="googleMap" style="width:100%;height:700px;"></div>

<div id="id01" class="modal">
  
  <form class="modal-content animate" action="../API/updateAccident.php" method="POST" style="width:95%;">
    <div class="imgcontainer">
      <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
    </div>

    <div class="container">
    <div class="col-sm-6">
    <img style='border: 1px solid #ddd;  border-radius: 4px;  padding: 5px;  width: 200px;}' alt="Case Main Image" id="img1">
    <img style='border: 1px solid #ddd;  border-radius: 4px;  padding: 5px;  width: 200px;}' alt=" Main Image" id="img2">
    <img style='border: 1px solid #ddd;  border-radius: 4px;  padding: 5px;  width: 200px;}' alt=" Main Image" id="img3">
    <img style='border: 1px solid #ddd;  border-radius: 4px;  padding: 5px;  width: 200px;}' alt=" Main Image" id="img4">
    <img style='border: 1px solid #ddd;  border-radius: 4px;  padding: 5px;  width: 200px;}' alt=" Main Image" id="img5">
    </div>
    <div class="col-sm-6" style="padding: 15px;">

    <table>
    <tr>
      <th>Case Type</th>
      <td ><div id="caseType"></div></td>
    </tr>
    <tr>
      <th>Date & TIme</th>
      <td id="timeStamp"></td>
    </tr>
    <tr>
      <th>Vehicle Number</th>
      <td id="vehicleNumber"></td>
    </tr>
    <tr>
      <th>Seriousness</th>
      <td > <div id="flag"></div><select name="flag">
  <option value="SERIOUS">SERIOUS</option>
  <option value="NOT_SERIOUS">NOT_SERIOUS</option>
</select></td>
    </tr>
    <tr>
      <th>Status</th>
      <td ><h5 id="status"></h5><select name="status" style=" width: 150px;">
  <option value="NOT_SLOVED">Approved</option>
  <option value="SLOVED">Not Approved</option>
  
</select></td>
    </tr>  </table>
    <input type="hidden" name="caseID" id="caseID">
    <input type="submit" value="UPDATE" class="btn-primary"> 
    <button type="button" onclick="document.getElementById('id01').style.display='none'" class="btn-danger" style="width:20%;padding:3px;">Cancel</button>

    </div>
     
  
    </div>

  
  </form>
</div>
    
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

  function initialize() {

    var myOptions = {
      center: new google.maps.LatLng(locations[1][1], locations[1][2]),
      zoom: 8,
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
getDataTable();

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

  
  
  <?php
 include "../commenComponent/footer.php";

 ?>



  



