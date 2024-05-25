<!DOCTYPE html>
<html lang="en">
 <head>
   <meta charset="UTF-8" />
   <meta http-equiv="X-UA-Compatible" content="IE=edge" />
   <meta name="viewport" content="width=device-width, initial-scale=1.0" />
      <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>
   <title>VPMS</title>
   <link rel="icon" type="image/x-icon" href="car.png">
 </head>
 <style>
 	 html * {
  font-family: Comic Sans MS, Comic Sans;
}
 body{
 
 background-color: rgba(26, 188, 156, 0.3);
 
 
 }
 /* NAVBAR STYLING STARTS */
.navbar {
 display: flex;
 align-items: center;
 justify-content: space-between;
 padding: 20px;
 background-color: teal;
 color: #fff;
}
.nav-links a {
 color: #fff;
}
/* LOGO */
.logo {
 font-size: 32px;
}
/* NAVBAR MENU */
.menu {
 display: flex;
 gap: 1em;
 font-size: 18px;
}
.menu li:hover {
 background-color: #4c9e9e;
 border-radius: 5px;
 transition: 0.3s ease;
}
.menu li {
 padding: 5px 14px;
}
/*RESPONSIVE NAVBAR MENU STARTS*/
/* CHECKBOX HACK */
input[type=checkbox]{
 display: none;
} 
/*HAMBURGER MENU*/
.hamburger {
 display: none;
 font-size: 24px;
 user-select: none;
}
/* APPLYING MEDIA QUERIES */
@media (max-width: 768px) {
.menu { 
 display:none;
 position: absolute;
 background-color:teal;
 right: 0;
 left: 0;
 text-align: center;
 padding: 16px 0;
}
.menu li:hover {
 display: inline-block;
 background-color:#4c9e9e;
 transition: 0.3s ease;
}
.menu li + li {
 margin-top: 12px;
}
input[type=checkbox]:checked ~ .menu{
 display: block;
}
.hamburger {
 display: block;
}
.dropdown {
 left: 50%;
 top: 30px;
 transform: translateX(35%);
}
.dropdown li:hover {
 background-color: #4c9e9e;
}
}
.card {
  box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
  transition: 0.3s;
      width: 100%;
    margin-left: auto;
    margin-right: :auto;
    
}

.card:hover {
  box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2);
}

.container {
  padding: 2px 16px;
}
 .center {
  display: block;
  margin-left: auto;
  margin-right: auto;
  width: 50%;
}
 </style>
 <body>
   <nav class="navbar">
     <!-- LOGO -->
     <div class="logo">
      <i class='bx bxs-car bx-fade-down' ></i>
      <span class="logo_name">VPMS</span>
      </div
     <!-- NAVIGATION MENU -->
     <ul class="nav-links">
       <!-- USING CHECKBOX HACK -->
       <input type="checkbox" id="checkbox_toggle" />
       <label for="checkbox_toggle" class="hamburger">&#9776;</label>
       <!-- NAVIGATION MENUS -->
       <div class="menu">
         <li><a href="index.php">Home</a></li>
         <li><a href="/">Team</a></li>
         <li><a href="admin/login.php">Admin</a></li>
         <li><a href="https://maohsama0.wixsite.com/contact">Contact</a></li>
         <li><a href="auth.php">Edit Account</a></li>
       </div>
     </ul>
   </nav>
  <div class="card">
  <img src="bg.png" alt="Avatar" style="width:40%" class="center">
  <div class="container">
    <h4><b>Vehicle Parking Management System</b></h4> 
    <p> The  Vehicle  Parking  Management  System  (VPMS)  is  a  system  that  enables customers/drivers to reserve a parking space.
	It also allows the customers/drivers to view the  parking  status . 
	It  was  developed because the congestion and collision of the vehicle. 
	Therefore, the project aimed at solving such  problems  by  designing  a  web  based  system  that  will  enable  the customers/drivers  to  make  a  reservation  of  available  parking  space. 
	These requirements were later used to design the system by creating data flow  diagrams  and  entity  relationship  diagrams. 
	The  designed  system  was implemented using different development tools which include HTML for creating interfaces, CSS for styling web pages for dynamism  in the web pages and as an input validation tool.
	XAMMP was used to build the database and PHP used as a server side scripting language to connect the user interfaces to the database. </p> 
  </div>
</div>
 </body>
</html>