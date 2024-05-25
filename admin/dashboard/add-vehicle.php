<?php
session_start();
error_reporting(0);
include('dbconnection.php');

if(isset($_POST['submit']))
  {
    $parkingnumber=mt_rand(100000000, 999999999);
    $catename=$_POST['catename'];
     $vehcomp=$_POST['vehcomp'];
    $vehreno=$_POST['vehreno'];
    $ownername=$_POST['ownername'];
    $ownercontno=$_POST['ownercontno'];
    $enteringtime=$_POST['enteringtime'];
    
     
    $query=mysqli_query($con, "insert into  tblvehicle(ParkingNumber,VehicleCategory,VehicleCompanyname,RegistrationNumber,OwnerName,OwnerContactNumber) value('$parkingnumber','$catename','$vehcomp','$vehreno','$ownername','$ownercontno')");
    if ($query) {
echo "<script>alert('Vehicle Entry Detail has been added');</script>";
  }
  else
    {
     echo "<script>alert('Something Went Wrong. Please try again.');</script>";       
    }

  
}
  ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style1.css">
	
    <!-- Boxicons CDN Link -->
    <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <style>
     	 html * {
  font-family: Comic Sans MS, Comic Sans;
}
* {box-sizing: border-box}

/* Add padding to containers */
.container {
  padding: 16px;
}

/* Full-width input fields */
input[type=text], input[type=password] {
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  display: inline-block;
  border: none;
  background: #f1f1f1;
}

input[type=text]:focus, input[type=password]:focus {
  background-color: #ddd;
  outline: none;
}

/* Overwrite default styles of hr */
hr {
  border: 1px solid #f1f1f1;
  margin-bottom: 25px;
}

/* Set a style for the submit/register button */
.registerbtn {
  background-color: #04AA6D;
  color: white;
  padding: 16px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
  opacity: 0.9;
}

.registerbtn:hover {
  opacity:1;
}

/* Add a blue text color to links */
a {
  color: dodgerblue;
}

/* Set a grey background color and center the text of the "sign in" section */
.signin {
  background-color: #f1f1f1;
  text-align: center;
}
select {

  /* styling */
  background-color: white;
  border: thin solid blue;
  border-radius: 4px;
  display: inline-block;
  font: inherit;
  line-height: 1.5em;
  padding: 0.5em 3.5em 0.5em 1em;

  /* reset */

  margin: 0;      
  -webkit-box-sizing: border-box;
  -moz-box-sizing: border-box;
  box-sizing: border-box;
  -webkit-appearance: none;
  -moz-appearance: none;
}


/* arrows */

select.classic {
  background-image:
    linear-gradient(45deg, transparent 50%, blue 50%),
    linear-gradient(135deg, blue 50%, transparent 50%),
    linear-gradient(to right, skyblue, skyblue);
  background-position:
    calc(100% - 20px) calc(1em + 2px),
    calc(100% - 15px) calc(1em + 2px),
    100% 0;
  background-size:
    5px 5px,
    5px 5px,
    2.5em 2.5em;
  background-repeat: no-repeat;
}

select.classic:focus {
  background-image:
    linear-gradient(45deg, white 50%, transparent 50%),
    linear-gradient(135deg, transparent 50%, white 50%),
    linear-gradient(to right, gray, gray);
  background-position:
    calc(100% - 15px) 1em,
    calc(100% - 20px) 1em,
    100% 0;
  background-size:
    5px 5px,
    5px 5px,
    2.5em 2.5em;
  background-repeat: no-repeat;
  border-color: grey;
  outline: 0;
}
</style>
   </head>
<body>
  <div class="sidebar">
    <div class="logo-details">
      <i class='bx bxs-car'></i>
      <span class="logo_name">VPMS</span>
    </div>
      <ul class="nav-links">
      <li>
          <a href="dashboard.php">
            <i class='bx bx-grid-alt' ></i>
            <span class="links_name">Dashboard</span>
          </a>
        </li>
	  <li>
          <a href="add-category.php " >
            <i class='bx bx-grid-alt' ></i>
            <span class="links_name">Add Category</span>
          </a>
        </li>
		 <li>
          <a href="manage-category.php">
            <i class='bx bx-book-alt' ></i>
            <span class="links_name">Manage Category</span>
          </a>
        </li>
        <li>
          <a href="add-vehicle.php"  class="active">
            <i class='bx bx-grid-alt' ></i>
            <span class="links_name">Add Vehicle</span>
          </a>
        </li>
       
        <li>
          <a href="managein-vehicle.php">
            <i class='bx bx-grid-alt' ></i>
            <span class="links_name">Manage In Vehicle</span>
          </a>
        </li>
        <li>
          <a href="manageout-vehicle.php">
            <i class='bx bx-grid-alt' ></i>
            <span class="links_name">Manage Out Vehicle</span>
          </a>
        </li>
        <li>
          <a href="search-vehicle.php">
            <i class='bx bx-search' ></i>
            <span class="links_name">Search</span>
          </a>
        </li>
        <li class="log_out">
          <a href="../login.php">
            <i class='bx bx-log-out bx-fade-left-hover'></i>
            <span class="links_name">Log out</span>
          </a>
        </li>
      </ul>
  </div>
  <section class="home-section">
    <nav>
      <div class="sidebar-button">
        <i class='bx bx-menu sidebarBtn'></i>
        <span class="dashboard">Vehicle Parking Management System</span>
      </div>
    </nav>

    <div class="home-content">
    <form action="" method="post">
  <div class="container">
    <h1>Add Vehicle</h1>
    <p>Please fill in this form to add vehicle.</p>
    <hr>
	
	<label for="category"><b>Choose Category</b></label>
	<select  name="catename" id="catename" class="classic">
	<option value="0">Select Category</option>
	          <?php $query=mysqli_query($con,"select * from tblcategory");
              while($row=mysqli_fetch_array($query))
              {
              ?>    
    <option value="<?php echo $row['VehicleCat'];?>"><?php echo $row['VehicleCat'];?></option>
                  <?php } ?> 
	</select>
	<br><br>
	
    <label for="company"><b>Vehicle Company</b></label>
    <input type="text" id="vehcomp" name="vehcomp" class="form-control" placeholder="Vehicle Company" required="true">

    <label for="rnumber"><b>Registration Number</b></label>
    <input type="text" id="vehreno" name="vehreno" class="form-control" placeholder="Registration Number" required="true">

    <label for="oname"><b>Owner Name</b></label>
    <input type="text" id="ownername" name="ownername" class="form-control" placeholder="Owner Name" required="true">
    
     <label for="ocnumber"><b>Owner Contact Number</b></label>
    <input type="text"  id="ownercontno" name="ownercontno" class="form-control" placeholder="Owner Contact Number" required="true" maxlength="10" pattern="[0-9]+">
    <hr>

    <button type="submit" name="submit" class="registerbtn">Add</button>
  </div>

</form>


 </div>

  </section>
<script>
  let sidebar = document.querySelector(".sidebar");
let sidebarBtn = document.querySelector(".sidebarBtn");
sidebarBtn.onclick = function() {
  sidebar.classList.toggle("active");
  if(sidebar.classList.contains("active")){
  sidebarBtn.classList.replace("bx-menu" ,"bx-menu-alt-right");
}else
  sidebarBtn.classList.replace("bx-menu-alt-right", "bx-menu");
}
</script>


</body>
</html>

