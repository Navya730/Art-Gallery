<head>
<link href='https://fonts.googleapis.com/css?family=Charm' rel='stylesheet'>
<script src='https://kit.fontawesome.com/a076d05399.js'></script>
<style>
* {
  box-sizing: border-box;
}

body {
  font-family: Charm;
  padding: 10px;
  background-color: grey;
}
.header {
  padding: 30px;
  text-align: center;
  background-image : url("bg3.png");
  width:100%;
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

/* Style the top navigation bar */
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
  float: left;
  width: 75%;
}
.rightcolumn {
  float: left;
  width: 25%;
  background-color: grey;
  padding-left: 20px;
}
.fakeimg {
  width: 100%;
  padding: 20px;
  margin-left:50px;
}
.fakeimg button{
	background-color: tomato;
	color: black;
	display: inline block;
	margin-left:320px;
	font-size: 15px;
	opacity: 1;
	cursor: pointer;
	width: 200px;
	height: 50px;
}
.fakeimg button a{
	text-decoration: none;
	color:white;
	font-family: Charm;
}
.fakeimg1 {
  width: 100%;
  padding: 10px;
  margin-right: 80px;
}
.card {
width:1090px;
  background-color: #ffc299;
  padding: 20px;
  margin-top: 20px;
  height:2000px;
}

.card2 {
  width:345px;
  background-color: #ffcce0;
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

table {
  border-collapse: collapse;
  width: 800px;
}

th, td {
  text-align: center;
  padding: 8px;
}

tr:nth-child(even) {background-color: #f2f2f2;}
</style>
</head>
<body>

<?php

$servername = "localhost";
$username = "root";
$password = "2234";
$database="navya";

$con = mysqli_connect($servername, $username, $password, $database);


?>

<?php
$quer= "select * from orders";
$rq= mysqli_query($con,$quer);
$total=0;
echo "<div class='row'>
  <div class='leftcolumn'>
    <div class='card'>
      <div class='fakeimg' style='height:200px;'><h1 style='margin-left:280px;'>Total Orders </h1><hr width='500px' style='margin-left:150px;'><br><br>
	  <table>
  <tr>
  <th>Order ID</th>
  <th>User ID</th>
  <th>email</th>
  <th>state</th>
  </tr>";
  if(mysqli_num_rows($rq) >0)
  {
while($arr= mysqli_fetch_array($rq))
{
   $p= mysqli_query($con," select product_price from products where product_id=$arr[product_id];");
   
	
echo "<tr>
  <th>$arr[order_id]</th>
  <th>$arr[userid]</th>
  <th>$arr[product_id]</th>
  <th>$arr[email]</th>
  </tr>";
}
  }
echo "</table><br><br><br></a></div></div></div>";
?>
<div class="rightcolumn">
    <div class="card2">
      <h2 style="text-align:center;">Remember that you're being loved!</h2>
      <div class="fakeimg1" style="height:100px;"><img src="https://i.pinimg.com/236x/77/54/8a/77548aa88d11a266524e13b518d206c5.jpg" width="290px" height="420px"></div>
 </div>
    </div>
	</div>
	
</body>