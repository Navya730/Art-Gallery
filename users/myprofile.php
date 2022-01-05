<head>
<link href='https://fonts.googleapis.com/css?family=Charm' rel='stylesheet'>
<script src='https://kit.fontawesome.com/a076d05399.js'></script><!<!-- fontawesome library for icons -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<script>
$(document).ready(function(){
  $('#body').ready(function(){
    $("#p1").css("color", "aqua").slideUp(2000).slideDown(2000);
  });
});
</script>
<style>
* {
  box-sizing: border-box;
}
h1 {
    color: white;
  text-shadow: 3px 3px 5px black;
}
h2 {
    color: white;
  text-shadow: 3px 3px 5px aqua;
}
body {
  font-family: Charm;
  padding: 10px;
  background-color: grey;
}
.header {
  padding: 30px;
  text-align: center;
  background-image : url("https://cdn.pixabay.com/photo/2013/02/14/03/51/painting-81504__340.jpg");

  height:auto; 
    background-size: cover;
    background-position: center;
  background-repeat: no-repeat;
}

.header h1 {
  font-size: 50px;
}
.header p{
  font-size: 30px;
}

.topnav {
  overflow: hidden;
  background-color: #333;
}

/* Style the topnav links */
.topnav a {
  float: left;
  display: inline-block;
  color: #f2f2f2;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

/* Change color on hover */
.topnav a:hover {
  background-color: #ddd;
  color: black;
}

.leftcolumn {   
 
}

.fakeimg {
    align-items: center;
  font-size: 22px;
  padding: 20px;
  margin-left:50px;
}

.fakeimg button{
	margin-left: 80px;
	background-color: tomato;
	color: white;
	display: inline block;
	font-size: 22px;
	opacity: 0.6;
	cursor: pointer;
	
	height: 80px;
}
.fakeimg button:hover{
	opacity: 1;
}
.fakeimg button a{
	text-decoration: none;
	color:white;
	font-family: Charm;
}

.card {

  background-color: #ffc299;
  padding: 20px;
  margin-top: 20px;
  height:650px;
}




.row:after {
  content: "";
  display: table;
  clear: both;
}
.footer {
  padding: 20px;
  text-align: center;
  background: #ddd;
  margin-top: 20px;
  opacity:0.5;
}



</style>
</head>
<body>

<div class="header">
  <h1>Art Gallery</h1>
  <h2><p><b>We wish you find what you're looking for :)</b></p></h2>
</div>

<div class="topnav">
  <a href="index.php">Home</a>
  <a href="myprofile.php">My Profile</a>
  <a href="cart.php">My cart</a>
  <a href="ancient.php">Ancient Art</a>
  <a href="modern.php">Modern Art</a>
  <a href="eview.php">Review</a>
  
</div>
<p id="p1"></p>


<?php

session_start();
$servername = "localhost";
$username = "root";
$password = "2234";
$database="navya";

$con = mysqli_connect($servername, $username, $password, $database);

$em= $_SESSION['eid'];
$runq = mysqli_query($con,"select first_name,last_name,email,gender,mobile,address,city,state1 from user_info where email='$em'");
while($arr2 = mysqli_fetch_array($runq))
{
	print "<div class='row'>
  <div class='leftcolumn'>
    <div class='card'>
      <div class='fakeimg' style='height:200px;' style='width:100%;' ><ul>Welcome to your profile, here are your details. . .
	  <br><hr width='750px' align='left'>
<li><i class='fas fa-user' style='font-size:36px'></i> Name : $arr2[first_name]  $arr2[last_name]</li>
	  <li><i class='fas fa-envelope' style='font-size:36px'></i> Email : $arr2[email]</li>
	  <li><i class='fas fa-phone' style='font-size:36px'></i> Phone Number : $arr2[mobile]</li>
	  <li><i class='fas fa-venus-mars' style='font-size:36px'></i> Gender : $arr2[gender]</li>
	  <li><i class='fas fa-home' style='font-size:36px'></i> Address : $arr2[address]</li>
	  <li><i class='fas fa-city' style='font-size:36px'></i> City: $arr2[city]</li>
	  </ul>
	  <button><a href='cart.php'>Go to your cart</a><i class='fas fa-shopping-cart'></i></button>
          <button><a href='index.php'>Logout</a></button>
	  
	  </div>
	  </div>
	  </div>";
}
?>
 
    </div>
	</div>
	<div class="footer">
  <h3>&copy Art Gallery  Private Limited 2021</h3>
  <p style="text-align:center; font-size: 20px;">Project made by Navya and Meghana</p>
</div>
</body>