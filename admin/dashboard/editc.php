<?php
session_start();
error_reporting(0);
include('dbconnection.php');


if(isset($_POST['submit']))
  {
    $aid=$_SESSION['vpmsaid'];
     $catname=$_POST['catename'];
  $eid=$_GET['editid'];
   
    $query=mysqli_query($con, "update tblcategory set VehicleCat='$catname' where ID='$eid'");
    if ($query) {
    
    echo "<script>alert('Category Details updated');</script>";
  }
  else
    {
    
      echo "<script>alert('Something Went Wrong. Please try again');</script>";
    }

  }
  ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style1.css">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <!-- Boxicons CDN Link -->
    <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
	 <style>
		 html * {
  font-family: Comic Sans MS, Comic Sans;
} 
/* Set a style for all buttons */
button {
  background-color: #04AA6D;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
  opacity: 0.9;
}

button:hover {
  opacity:1;
}

}

/* Float cancel and signup buttons and add an equal width */
 .signupbtn {
  float: left;
  width: 50%;
}
@media screen and (max-width: 300px) {
  .signupbtn {
    width: 100%;
  }
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
     
<div class="w3-container w3-blue">
  <h2>Edit Category</h2>
</div>

<form class="w3-container" action="" method="post" >
                   
                     <?php
 $cid=$_GET['editid'];
$ret=mysqli_query($con,"select * from  tblcategory where ID='$cid'");
$cnt=1;
while ($row=mysqli_fetch_array($ret)) {

?>              
  <p>
  <input class="w3-input" type="text" id="catename" name="catename" placeholder="Vehicle Category" required="true" value="<?php  echo $row['VehicleCat'];?>"></p>
   <?php } ?>
                                    
                                   <button type="submit" name="submit" class="signupbtn">Update</button>
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

