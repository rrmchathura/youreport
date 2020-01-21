<?php
session_start();
 if(($_SESSION["name"])=="")
 {
  header("location:.../");
 }


?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>YouReport Admin</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="vendors/simple-line-icons/css/simple-line-icons.css">
    <link rel="stylesheet" href="vendors/flag-icon-css/css/flag-icon.min.css">
    <link rel="stylesheet" href="vendors/css/vendor.bundle.base.css">
    
    <link rel="stylesheet" href="css/style.css">
    <link rel="shortcut icon" href="images/favicon.png" />
  </head>
  <body>


  <!-- Modal start to add button -->
<div style="margin-top:-50px;" class="modal fade" id="UserADD" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title" id="exampleModalLongTitle">Register</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body" style="margin-top:-30px;">
      <form class="forms-sample" name="myForm" onsubmit="return validateForm()"  action="../API/reg.php"  method="post" >
                  
       <label for="naem">Name</label>
      <input type="text" class="form-control" placeholder="Name" name="name" >

      <label for="nic">NIC</label>
      <input type="text"  class="form-control" placeholder="Enter NIC" name="nic" required>
      
      <label for="insuranceID">Insurance ID</label>
      <input type="text" class="form-control" placeholder="Enter Insurance Company ID" class="form-control">Role</label>
        <select name="role"  class="form-control">
          <option value="RDA">RDA</option>
          <option value="POLICE">Police</option>
          <option value="INSURANCE">Insurance</option>
       
        </select>

      <label for="insuranceCompany">Insurance Company</label>
      <input type="text" class="form-control" placeholder="Enter Insurance Company Name" name="insuranceCompany" >

      
      <label for="vehicleNo">Vehicle No</label>
      <input type="text" class="form-control" placeholder="Enter Vehicle Number" name="vehicleNo" >
      
      <label for="contactNo">Contact No</label>
      <input type="text" class="form-control" placeholder="Enter Contact Number" name="contactNo" required>
      
      
      <!-- <input type="text" placeholder="Enter Name" name="name" required> -->


      <label for="email">Email</label>
      <input type="email" class="form-control"  placeholder="Enter Email" name="email" required>

      <label for="email">Password</label>
      <input type="text" class="form-control"  placeholder="Enter Password" name="Password" required>

     
      
                  <!-- <div class="form-group">
                    <label for="exampleInputConfirmPassword1">Confirm Password</label>
                    <input type="password" class="form-control" name="rePassword"  placeholder="rePassword">
                  </div>
                -->
                  <br>
                  <button type="submit" class="btn btn-success">Submit</button>
                  <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>

                </form>
      </div>
      
    </div>
  </div>
</div> 
<!--end of the model add--> 


    <div class="container-scroller">
      <nav class="navbar default-layout-navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
        <div class="navbar-brand-wrapper d-flex align-items-center">
          <a class="navbar-brand brand-logo" href="index.php">
            <h2 style="color: #ffffff;text-decoration: none;padding: 20px;">Admin</h2>
          </a>
          <a class="navbar-brand brand-logo-mini" href="index.html"><img src="images/user.png" alt="logo" /></a>
        </div> 
        <div class="navbar-menu-wrapper d-flex align-items-center flex-grow-1">
          <h5 class="mb-0 font-weight-medium d-none d-lg-flex"></h5>
          <ul class="navbar-nav navbar-nav-right ml-auto">
            <form class="search-form d-none d-md-block" action="#">
            </form>
            <li>
            <button style="padding:10px 20px;" type="button" class="btn btn-outline-dark" data-toggle="modal" data-target="#UserADD">
                          Register
            </button>
            </li>
            <li class="nav-item dropdown d-none d-xl-inline-flex user-dropdown">
              <a class="nav-link dropdown-toggle" id="UserDropdown" href="#" data-toggle="dropdown" aria-expanded="false">
                <img class="img-xs rounded-circle ml-2" src="images/user.png" alt="Profile image"> <span class="font-weight-normal"> <?php echo $_SESSION["name"]; ?></span></a>
                <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="UserDropdown">
                <div class="dropdown-header text-center">
                  <img class="img-md rounded-circle" src="images/user.png" alt="Profile image" style="width:100px;height:100px;">
                  <p class="mb-1 mt-3"><?php echo $_SESSION["name"]; ?></p>
                </div>
                <a class="dropdown-item" href="../index.html"><i class="dropdown-item-icon icon-power text-primary"></i>Sign Out</a>
              </div>
            </li>
          </ul>
          
        </div>
      </nav>
      <!-- partial -->
      <div class="container-fluid page-body-wrapper">
        <nav class="sidebar sidebar-offcanvas" id="sidebar">
          <ul class="nav">
            <li class="nav-item nav-profile">
              <a href="#" class="nav-link">
                <div class="profile-image">
                  <img class="img-xs rounded-circle" src="images/user.png" alt="profile image">
                  <div class="dot-indicator bg-success"></div>
                </div>
                <div class="text-wrapper">
                  <p class="profile-name"><?php echo $_SESSION["name"]; ?></p>
                  <p class="designation">Administrator</p>
                </div>
                
              </a>
            </li>
            <li class="nav-item nav-category">
              <span class="nav-link">Dashboard</span>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="index.php">
                <span class="menu-title">Home</span>
              </a>  
            </li>
            
            
          </ul>
        </nav>
        <!-- partial -->
        <div class="main-panel">
          
          <div class="col-md-6 grid-margin stretch-card">
          <div class="card">
              <div class="card-body">
          <label><b>Users Table </b></label>
            <table class="table table-hover" id="dev-table">
              <thead>
                <tr>
                  <th>ID</th>
                  <th>Username</th>
                  <th>Password</th>
                  <th>Insurance <br>Number</th>
                  <th>Insurance <br>Company</th>
                  <th>User Role</th>
                  <th>User <br>Status</th>
                  
                  
                    <th>
                    </th>
                    <th>
                    </th>
                </tr>
              </thead>
              <tbody>
                <?php include "../API/UserViewAdmin.php"; ?>
              </tbody>
            </table>
</div>
</div></div>
          <script>
					function validateForm()
					 {
           
					  var Username = document.forms["myForm"]["Username"].value;
					  var email = document.forms["myForm"]["email"].value;
					  var Password = document.forms["myForm"]["Password"].value;
					  var rePassword= document.forms["myForm"]["rePassword"].value; 
					  var vnumber = document.forms["myForm"]["vnumber"].value;
            var userType = document.forms["myForm"]["userType"].value;
            var INumber = document.forms["myForm"]["INumber"].value;


 
            if (userType == "") {
						alert(" Account Type must be filled out");
						return false;}
				  
					if (Username == "") {
						alert(" Username must be filled out");
						return false;}
            if(email=="")
						{alert("Email must be filled out");
						return false;}

            if(Password=="")
						{alert("Password must be filled out");
						return false;}
					if(rePassword=="")
						{alert("Repassword must be filled out");
						return false;}
					 if(Password!=rePassword)
					 {alert("Password not be Match");
						return false;}


            if (vnumber == "") {
						alert(" Vehicle   Number must be filled out");
						return false;}
            if (INumber == "") {
						alert(" Insurance   Number must be filled out");
						return false;}
					
					
				
					
					  
					}
          </script>
           
           
            
          </div>
        
          </div>
          
          <!-- <footer class="footer">
            <div class="d-sm-flex justify-content-center justify-content-sm-between">
            </div>
          </footer> -->
          <!-- partial -->
        </div>
        <!-- main-panel ends -->
      </div>
      <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    <script src="vendors/js/vendor.bundle.base.js"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="js/off-canvas.js"></script>
    <script src="js/misc.js"></script>
    <!-- endinject -->
    <!-- Custom js for this page -->
    <!-- End custom js for this page -->
    <script>
    function updateUser(id,status) {
            alert("response");
                $.post("../API/updateUser.php", {
                        uId: id,
                        status: status
                            // success: "Duckburg "
                    },
                    function(response, status) {
                        alert(response);
                        if (response == 1) {
                            alert("Success ");
                           // loadDoc();
                        } else {
                            alert("Error ");
                           // loadDoc();
                        }
                    });

      }
      function deleteUser(id) {
                $.post("../API/deleteUser.php", {
                        seat: seat,
                        shedule: shedule
                            // success: "Duckburg "
                    },
                    function(response, status) {
                        //alert(response);
                        if (response == 1) {
                            alert("Success ");
                            //loadDoc();
                        } else {
                            alert("Error ");
                           // loadDoc();
                        }
                    });

      }
<script>
  </body>
</html>