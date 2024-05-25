<?php
session_start();
error_reporting(0);
include('admin/includes/dbconnection.php');
// For deleting    
if($_GET['del']){
$catid=$_GET['del'];
mysqli_query($con,"delete from tbladmin where ID ='$catid'");
echo "<script>alert('Data Deleted');</script>";
          }
   
   

?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
   
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
</style>
   </head>
<body>
 

    <div class="home-content">
     
<h2>View Admins</h2>
             <?php
$ret=mysqli_query($con,"select * from tbladmin ");
$cnt=1;
while ($row=mysqli_fetch_array($ret)) {

?>     


<table id="customers">
 <tr>
                                <th>Admin Name</th>
                                   <td><?php  echo $row['AdminName'];?></td>
                                   </tr>                             
<tr>
                                <th>Username</th>
                                   <td><?php  echo $row['UserName'];?></td>
                                   </tr>
                                   <tr>
                                <th>Mobile Number</th>
                                   <td><?php  echo $row['MobileNumber'];?></td>
                                   </tr>
                                <tr>
                                <th>Email</th>
                                   <td><?php  echo $row['Email'];?></td>
                                   </tr>
                                   <tr>
                                    <th>In Time</th>
                                      <td><?php  echo $row['AdminRegdate'];?></td>
                                  </tr>
                                   <tr>
                                    <th>Action</th>
                   <td>                  
<a href="view.php?del=<?php echo $row['ID'];?>" class="button button2" onClick="return confirm('Are you sure you want to delete?')">Delete</a>
                  </td>
                                  </tr>
								  <br>
                                  <hr>    
</table>
            

  

  <?php } ?>


 </div>



</body>
</html>