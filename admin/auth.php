<?php
session_start();
error_reporting(0);
include('includes/dbconnection.php');

if(isset($_POST['login']))
  {
    $adminumber=$_POST['unique'];
    $query=mysqli_query($con,"select ID from tblauths where  UniqueNumber='$adminumber' ");
    $ret=mysqli_fetch_array($query);
    if($ret>0){
      
     header('location:add-admin.php');
    }
    else{
  
     echo "<script>alert('Invalid Details.');</script>";
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
form {border: 3px solid #f1f1f1;}

input[type=text], input[type=password] {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  box-sizing: border-box;
}

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


.container {
  padding: 16px;
}
.form-center form {
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%,-50%);
  width:60%;
}

</style>
</head>
<body>

<div class="form-center">
<form action="" method="post">

  <div class="container">
    <label for="uname"><b>Enter Unique Number</b></label>
	<p>Please Provide The Unique Number</p>
    <input type="password"  name="unique" required>
        
    <button type="submit" name="login">Verify</button>
   
  </div>

</form>
</div>
</body>
</html>
