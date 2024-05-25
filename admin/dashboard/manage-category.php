<?php
session_start();
error_reporting(0);
include('dbconnection.php');
// For deleting    
if($_GET['del']){
$catid=$_GET['del'];
mysqli_query($con,"delete from tblcategory where ID ='$catid'");
echo "<script>alert('Data Deleted');</script>";
echo "<script>window.location.href='manage-category.php'</script>";
          }

  ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style1.css">
	<link rel = "javascript" href = "script.js">
    <!-- Boxicons CDN Link -->
    <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <style>
     	 html * {
  font-family: Comic Sans MS, Comic Sans;
}
#customers {
  font-family: Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

#customers td, #customers th {
  border: 0px solid #ddd;
  padding: 8px;
}

#customers tr:nth-child(even){background-color: #f2f2f2;}

#customers tr:hover {background-color: #ddd;}

#customers th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #04AA6D;
  color: white;
}
.button {
  background-color: #4CAF50; /* Green */
  border: none;
  color: white;
  padding: 5px 42px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
}
.button2 {background-color: #f44336;}
a{
    text-decoration: none;
}

a {
    background-color: transparent;
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
          <a href="add-category.php ">
            <i class='bx bx-grid-alt' ></i>
            <span class="links_name">Add Category</span>
          </a>
        </li>
		<li>
          <a href="manage-category.php" class="active">
            <i class='bx bx-book-alt' ></i>
            <span class="links_name">Manage Categor</span>
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
   
<h1>Manage Category</h1>

<table id="customers">
  <tr>
    <th>S.No</th>
    <th>Category</th>
    <th>Action</th>
    <th>date</th>
  </tr>
   <?php
$ret=mysqli_query($con,"select *from  tblcategory");
$cnt=1;
while ($row=mysqli_fetch_array($ret)) {

?>
  <tr>
                  <td><?php echo $cnt;?></td>
            
                 
                  <td><?php  echo $row['VehicleCat'];?></td>
                  
                  <td><a href="editc.php?editid=<?php echo $row['ID'];?>" class="button">Edit</a>
<a href="manage-category.php?del=<?php echo $row['ID'];?>" class="button button2" onClick="return confirm('Are you sure you want to delete?')">Delete</a>
                  </td>
                  <td><?php  echo $row['CreationDate'];?></td>
                </tr>
                <?php 
$cnt=$cnt+1;
}?>
 
</table>
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

