<?php
session_start();
error_reporting(0);
include('dbconnection.php');


if(isset($_POST['submit']))
  {
    
    $cid=$_GET['viewid'];
      $remark=$_POST['remark'];
      $status=$_POST['status'];
      $parkingcharge=$_POST['parkingcharge'];
     
 
    
     
   $query=mysqli_query($con, "update  tblvehicle set Remark='$remark',Status='$status',ParkingCharge='$parkingcharge' where ID='$cid'");
    if ($query) {
    
     echo "<script>alert('All remarks has been updated');</script>";
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

#customers td, #customers th  {
  border: 1px solid #ddd;
  padding: 8px;
}

#customers tr:nth-child(even){background-color: #f2f2f2;}

#customers tr:hover {background-color: #ddd;}

#customers th{
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
   
[type=submit]{
    -webkit-appearance: button;
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
          <a href="signup.php ">
            <i class='bx bx-grid-alt' ></i>
            <span class="links_name">Add Category</span>
          </a>
        </li>
		
        <li>
          <a href="add-vehicle.php">
            <i class='bx bx-grid-alt' ></i>
            <span class="links_name">Add Vehicle</span>
          </a>
        </li>
        <li>
          <a href="manage-category.php">
            <i class='bx bx-book-alt' ></i>
            <span class="links_name">Manage Category</span>
          </a>
        </li>
        <li>
          <a href="managein-vehicle.php" class="active">
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
     
<h2>View Incoming Vehicle</h2>
             <?php
 $cid=$_GET['viewid'];
$ret=mysqli_query($con,"select * from tblvehicle where ID='$cid'");
$cnt=1;
while ($row=mysqli_fetch_array($ret)) {

?>     


<table style="width:100%" id="customers">
 <tr>
                                <th>Parking Number</th>
                                   <td><?php  echo $row['ParkingNumber'];?></td>
                                   </tr>                             
<tr>
                                <th>Vehicle Category</th>
                                   <td><?php  echo $row['VehicleCategory'];?></td>
                                   </tr>
                                   <tr>
                                <th>Vehicle Company Name</th>
                                   <td><?php  echo $packprice= $row['VehicleCompanyname'];?></td>
                                   </tr>
                                <tr>
                                <th>Registration Number</th>
                                   <td><?php  echo $row['RegistrationNumber'];?></td>
                                   </tr>
                                   <tr>
                                    <th>Owner Name</th>
                                      <td><?php  echo $row['OwnerName'];?></td>
                                  </tr>
                                      <tr>  
                                       <th>Owner Contact Number</th>
                                        <td><?php  echo $row['OwnerContactNumber'];?></td>
                                    </tr>
                                    <tr>
                               <th>In Time</th>
                                <td><?php  echo $row['InTime'];?></td>
                            </tr>
                            <tr>
    <th>Status</th>
    <td> <?php  
if($row['Status']=="")
{
  echo "Vehicle In";
}
if($row['Status']=="Out")
{
  echo "Vehicle out";
}

     ;?></td>
  </tr>
</table
<br>
<hr>
<br>
 <table  id="customers">

<?php if($row['Status']==""){ ?>
 <form action="" method="post" id="customers" >
        
                                  
  <tr>
    <th>Remark :</th>
    <td>
    <textarea name="remark" placeholder="" rows="12" cols="70"  required="true"></textarea></td>
  </tr>
 <tr>
<th>Parking Charge: </th>
<td>
  <input type="text" name="parkingcharge" id="parkingcharge"  >
</td></tr>
<tr>
    <th>Status :</th>
    <td>
   <select name="status"  required="true" >
     <option value="Out">Outgoing Vehicle</option>
   </select></td>
  </tr>
                                 
                                    
                                    
                                 <tr>  <p style="text-align: center;"><td> <button type="submit" class="button" name="submit" >Update</button></p></td></tr>
                                                               </form>
                            </table>
<?php } else { ?>
    <table  id="customers">
  <tr>
    <th>Remark</th>
    <td><?php echo $row['Remark']; ?></td>
  </tr>
   <tr>
    <th>Parking Fee</th>
   <td><?php echo $row['ParkingCharge']; ?></td>
  </tr>

  

<?php } ?>
</table>


  

  <?php } ?>

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

