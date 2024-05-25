<?php
session_start();
error_reporting(0);
include('dbconnection.php');




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
form {border: 3px solid #f1f1f1;}

input[type=text] {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  box-sizing: border-box;
}


.container {
  padding: 16px;
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
a {
    text-decoration: none;
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
          <a href="manage-category.php">
            <i class='bx bx-book-alt' ></i>
            <span class="links_name">Manage Category</span>
          </a>
        </li>
        <li>
          <a href="add-vehicle.php ">
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
          <a href="search-vehicle.php"  class="active">
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
     
<h2>Search Vehicle</h2>

<form action="" name="search"  method="post">

  <div class="container">
    <label for="uname"><b>Search By Parking Number</b></label>
    <input type="text" id="searchdata" name="searchdata"   required="required" autofocus="autofocus" >
    <button type="submit" name="search" class="signupbtn">Search</button>

  </div>

</form>
<?php
if(isset($_POST['search']))
{ 

$sdata=$_POST['searchdata'];
  ?>
    <h4 align="center">Result against "<?php echo $sdata;?>" keyword </h4> 
    <table id="customers">
  <tr>
    <th>S.No</th>
    <th>Parking No</th>
    <th>Owner Name</th>
    <th>Vehicle Reg Number</th>
      <th>Action</th>
  </tr>
               <?php
$ret=mysqli_query($con,"select *from   tblvehicle where ParkingNumber like '$sdata%'");
$num=mysqli_num_rows($ret);
if($num>0){
$cnt=1;
while ($row=mysqli_fetch_array($ret)) {
?>
               
                <tr>
                  <td><?php echo $cnt;?></td>
            
                 
                  <td><?php  echo $row['ParkingNumber'];?></td>
                  <td><?php  echo $row['OwnerName'];?></td>
                  <td><?php  echo $row['RegistrationNumber'];?></td>
                  
                  <td><a href="vmanagein.php?viewid=<?php echo $row['ID'];?>"><strong>View</strong></a> 
                  </td>
                </tr>
                <?php 
$cnt=$cnt+1;
} } else { ?>
     <tr>
    <td colspan="8"> No record found against this search</td>

  </tr>
   
<?php } }?>
 
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

