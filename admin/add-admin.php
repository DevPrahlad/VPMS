<?php
session_start();
error_reporting(0);
include('includes/dbconnection.php');
error_reporting(0);

if(isset($_POST['submit']))
  {
 
	$adminame=$_POST['adminame'];
	$adminuser=$_POST['username'];
    $password=md5($_POST['password']);
	$contactno=$_POST['contactno'];
    $email=$_POST['email'];

        $query=mysqli_query($con, "insert into  tbladmin(AdminName, UserName, MobileNumber, Email, Password) value('$adminame','$adminuser','$contactno','$email','$password')");
   if($query)
   {
echo "<script>
window.location.href='login.php';
alert('Admin Successfully Added');
</script>";
session_destroy();
   }
  
  }
  ?>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
	 html * {
font-family: Comic Sans MS, Comic Sans;
}

/* Full-width input fields */
input[type=text], input[type=password] {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  box-sizing: border-box;
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
}

button:hover {
  opacity: 0.8;
}

</style>

</head>
<body>

<h2>Add New Admin</h2>

  
  <form  action="" method="post">
  

    <div class="container">
      <label for="aname"><b>Admin Name</b></label>
      <input type="text" placeholder="Enter Admin Name" name="adminame" required>

      <label for="uname"><b>Username</b></label>
      <input type="text" placeholder="Enter Username" name="username" required>
	  
	    <label for="mob"><b>Mobile Number</b></label>
      <input type="text" placeholder="Enter Mobile Number" name="contactno" required>

      <label for="email"><b>Email</b></label>
      <input type="text" placeholder="Enter Email" name="email" required>
	  
	  <label for="psw"><b>Password</b></label>
      <input type="password" placeholder="Enter Password" name="password"   required>
        
      <button type="submit" name="submit">Add</button>
     
    </div>

  </form>
</div>


</body>
</html>
