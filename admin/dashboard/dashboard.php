<?php
session_start();
error_reporting(0);
include('dbconnection.php');
error_reporting(0);
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
* {box-sizing: border-box;}

input[type=text], select, textarea {
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
  margin-top: 6px;
  margin-bottom: 16px;
  resize: vertical;
}

input[type=submit] {
  background-color: #04AA6D;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: #45a049;
}

.container {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
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
          <a href="dashboard.php" class="active">
            <i class='bx bx-grid-alt' ></i>
            <span class="links_name">Dashboard</span>
          </a>
        </li>
        <li>
          <a href="add-category.php ">
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
          <a href="add-vehicle.php">
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
            <span class="links_name">manage out vehicle</span>
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
   <h3>Vehicle Entries</h3>

<div class="container">
    <label for="today">Today Vehicle Entries</label>
     <?php
//todays Vehicle Entries
 $query=mysqli_query($con,"select ID from tblvehicle where date(InTime)=CURDATE();");
$count_today_vehentries=mysqli_num_rows($query);
 ?>
    <input type="text"  value="<?php echo $count_today_vehentries;?>" disabled>
    
 <label for="yesterday">Yesterday Vehicle Entries</label>
                         <?php
     //Yesterdays Vehicle Entrie
 $query1=mysqli_query($con,"select ID from tblvehicle where date(InTime)=CURDATE()-1;");
$count_yesterday_vehentries=mysqli_num_rows($query1);
?>
    <input type="text"  value="<?php echo $count_yesterday_vehentries?>" disabled>
    
<label for="sevenday">Last 7 Days Vehicle Entries</label>
<?php
//Last Sevendays Vehicle Entries
 $query2=mysqli_query($con,"select ID from tblvehicle where date(InTime)>=(DATE(NOW()) - INTERVAL 7 DAY);");
$count_lastsevendays_vehentries=mysqli_num_rows($query2);
 ?>
  <input type="text" id="lname" name="lastname" placeholder="Your last name.."  value="<?php echo $count_lastsevendays_vehentries?>" disabled>
  
  <label for="total">Total Vehicle Entries</label>
                         <?php
//Total Vehicle Entries
 $query3=mysqli_query($con,"select ID from tblvehicle");
$count_total_vehentries=mysqli_num_rows($query3);
 ?>
   <input type="text"   value="<?php echo $count_total_vehentries?>" disabled>
</div>  

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

