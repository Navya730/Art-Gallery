<style>
div.gallery {
  margin-left: 120px;
  margin-right:40px;
  margin-top:40px;
  float: left;
  width: 300px;
}
h2{
    background-color: grey;
    height: 30px;
    color: #ccc;
}

div.gallery img {
  width: 360px;
  height: 400px;
}

div.desc {
  padding: 10px;
  text-align: center;
  background-color:#c4e17f;
  width: 340px;
  height:20px;
 
}

button[type=submit]{
background-color: lightsteelblue;
 
  
}
	
.b{
    background-color: thistle;
  width:100%;
  height: auto; 
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
}
</style>
<body class="b">
<?php

$servername = "localhost";
$username = "root";
$password = "2234";
$database="navya";

$con = mysqli_connect($servername, $username, $password, $database);

if ($con) {
    echo("Connection ");
}
session_start();
print "<h2><center> Ancient Art </center></h2>";
$q1="select * from products where cat_id=1 and sub_cat_id=1";
print "<h3>Sub Category 1 : Japanese Art </center></h3>";
$run_q= mysqli_query($con,$q1);
  print "<div style='height:600px'>";
    while($arr=mysqli_fetch_array($run_q))
   {
	   $i=$arr['product_id'];
   print " 
  <div class='gallery' class='container'>
     
		<form action='updatevalues.php' method='post'>
                <div class='desc'><input type='hidden' name='name' value='$arr[product_title]'><button type='submit'>Name :'$arr[product_title]' </button></div>
	  <div class='desc'><input type='hidden' name='id' value='$arr[product_id]'>$arr[product_id] </div>
	<div class='desc'><input type='hidden' name='price' value='$arr[product_price]'>Rs.$arr[product_price]</div>
      <div class='desc'><input type='hidden' name='Category' value='$arr[cat_id]'>category id : $arr[cat_id]</div>
          <div class='desc'><input type='hidden' name='sub' value='$arr[sub_cat_id]'>Sub Category id: $arr[sub_cat_id]</div>
</form></div>";
   }
   print "</div>";
   print "<br>";
   $q1="select * from products where cat_id=1 and sub_cat_id=2";
print "<h3>Sub Category 2 : Historical Art </center></h3>";
$run_q= mysqli_query($con,$q1);
print "<div style='height:600px'>";
    while($arr=mysqli_fetch_array($run_q))
   {
	   $i=$arr['product_id'];
   echo " 
  <div class='gallery'>
     
				<form action='updatevalues.php' method='post'>
                <div class='desc'><input type='hidden' name='name' value='$arr[product_title]'><button type='submit'>Name :'$arr[product_title]' </button></div>
	 <div class='desc'><input type='hidden' name='id' value='$arr[product_id]'>$arr[product_id] </div>
	<div class='desc'><input type='hidden' name='price' value='$arr[product_price]'>Rs.$arr[product_price]</div>
      <div class='desc'><input type='hidden' name='Category' value='$arr[cat_id]'>category id $arr[cat_id]</div>
          <div class='desc'><input type='hidden' name='sub' value='$arr[sub_cat_id]'>Sub Category id $arr[sub_cat_id]</div>
</form></div>";
   }	
   print "</div>";
   print "<br>";
   $q1="select * from products where cat_id=1 and sub_cat_id=3";
print "<h3>Sub Category 3 : Arabic Art </center></h3>";
$run_q= mysqli_query($con,$q1);
print "<div style='height:600px'>";
    while($arr=mysqli_fetch_array($run_q))
   {
	   $i=$arr['product_id'];
   echo " 
  <div class='gallery'>
                   		<form action='updatevalues.php' method='post'>
                <div class='desc'><input type='hidden' name='name' value='$arr[product_title]'><button type='submit'>Name :'$arr[product_title]' </button></div>
	  <div class='desc'><input type='hidden' name='id' value='$arr[product_id]'>$arr[product_id] </div>
	<div class='desc'><input type='hidden' name='price' value='$arr[product_price]'>Rs.$arr[product_price]</div>
      <div class='desc'><input type='hidden' name='Category' value='$arr[cat_id]'>category id $arr[cat_id]</div>
          <div class='desc'><input type='hidden' name='sub' value='$arr[sub_cat_id]'>Sub Category id $arr[sub_cat_id]</div>
</form></div>";
   }	
   print "</div>";
   print "<br>";
   $q1="select * from products where cat_id=1 and sub_cat_id=4";
print "<h3>Sub Category 4 : Women Art </center></h3>";
$run_q= mysqli_query($con,$q1);
print "<div style='height:600px'>";
    while($arr=mysqli_fetch_array($run_q))
   {
	   $i=$arr['product_id'];
   echo " 
  <div class='gallery'>
     
				<form action='updatevalues.php' method='post'>
                <div class='desc'><input type='hidden' name='name' value='$arr[product_title]'><button type='submit'>Name :'$arr[product_title]' </button></div>
	 <div class='desc'><input type='hidden' name='id' value='$arr[product_id]'>$arr[product_id] </div>
	<div class='desc'><input type='hidden' name='price' value='$arr[product_price]'>Rs.$arr[product_price]</div>
      <div class='desc'><input type='hidden' name='Category' value='$arr[cat_id]'>category id $arr[cat_id]</div>
          <div class='desc'><input type='hidden' name='sub' value='$arr[sub_cat_id]'>Sub Category id $arr[sub_cat_id]</div>
</form></div>";
   }	
   print "</div>";
   print "<br>";
   $q1="select * from products where cat_id=2 and sub_cat_id=1";
   print "<h2><center>Modern Art</center></h2>";
print "<h3>Sub Category 1 : Deco Art </center></h3>";
$run_q= mysqli_query($con,$q1);
print "<div style='height:600px'>";
    while($arr=mysqli_fetch_array($run_q))
   {
	   $i=$arr['product_id'];
   echo " 
  <div class='gallery'>
     
				<form action='updatevalues.php' method='post'>
                <div class='desc'><input type='hidden' name='name' value='$arr[product_title]'><button type='submit'>Name :'$arr[product_title]' </button></div>
	  <div class='desc'><input type='hidden' name='id' value='$arr[product_id]'>$arr[product_id] </div>
	<div class='desc'><input type='hidden' name='price' value='$arr[product_price]'>Rs.$arr[product_price]</div>
      <div class='desc'><input type='hidden' name='Category' value='$arr[cat_id]'>category id $arr[cat_id]</div>
          <div class='desc'><input type='hidden' name='sub' value='$arr[sub_cat_id]'>Sub Category id $arr[sub_cat_id]</div>
</form></div>";
   }	
   
   print "</div>";
   print "<br>";
   $q1="select * from products where cat_id=2 and sub_cat_id=2";
print "<h3>Sub Category 1 : Abstract Art </center></h3>";
$run_q= mysqli_query($con,$q1);
print "<div style='height:600px'>";
    while($arr=mysqli_fetch_array($run_q))
   {
	   $i=$arr['product_id'];
   echo " 
  <div class='gallery'>
     
				<form action='updatevalues.php' method='post'>
                <div class='desc'><input type='hidden' name='name' value='$arr[product_title]'><button type='submit'>Name :'$arr[product_title]' </button></div>
	 <div class='desc'><input type='hidden' name='id' value='$arr[product_id]'>$arr[product_id] </div>
	<div class='desc'><input type='hidden' name='price' value='$arr[product_price]'>Rs.$arr[product_price]</div>
      <div class='desc'><input type='hidden' name='Category' value='$arr[cat_id]'>category id $arr[cat_id]</div>
          <div class='desc'><input type='hidden' name='sub' value='$arr[sub_cat_id]'>Sub Category id $arr[sub_cat_id]</div>
</form></div>";
   }	
   print "</div>";
   print "<br>";
   $q1="select * from products where cat_id=2 and sub_cat_id=3";
print "<h3>Sub Category 1 : Illustartion Art </center></h3>";
$run_q= mysqli_query($con,$q1);
print "<div style='height:600px'>";
    while($arr=mysqli_fetch_array($run_q))
   {
	   $i=$arr['product_id'];
   echo " 
  <div class='gallery'>
     
				<form action='updatevalues.php' method='post'>
                <div class='desc'><input type='hidden' name='name' value='$arr[product_title]'><button type='submit'>Name :'$arr[product_title]' </button></div>
	 <div class='desc'><input type='hidden' name='id' value='$arr[product_id]'>$arr[product_id] </div>
	<div class='desc'><input type='hidden' name='price' value='$arr[product_price]'>Rs.$arr[product_price]</div>
      <div class='desc'><input type='hidden' name='Category' value='$arr[cat_id]'>category id $arr[cat_id]</div>
          <div class='desc'><input type='hidden' name='sub' value='$arr[sub_cat_id]'>Sub Category id $arr[sub_cat_id]</div>
</form></div>";
   }	
   print "</div>";
   print "<br>";
   $q1="select * from products where cat_id=2 and sub_cat_id=4";
print "<h3>Sub Category 1 : Canvas Art </center></h3>";
$run_q= mysqli_query($con,$q1);
print "<div style='height:600px'>";
    while($arr=mysqli_fetch_array($run_q))
   {
	   $i=$arr['product_id'];
   echo " 
  <div class='gallery'>
     
				<form action='updatevalues.php' method='post'>
                <div class='desc'><input type='hidden' name='name' value='$arr[product_title]'><button type='submit'>Name :'$arr[product_title]' </button></div>
	 <div class='desc'><input type='hidden' name='id' value='$arr[product_id]'>$arr[product_id] </div>
	<div class='desc'><input type='hidden' name='price' value='$arr[product_price]'>Rs.$arr[product_price]</div>
      <div class='desc'><input type='hidden' name='Category' value='$arr[cat_id]'>category id $arr[cat_id]</div>
          <div class='desc'><input type='hidden' name='sub' value='$arr[sub_cat_id]'>Sub Category id $arr[sub_cat_id]</div>
</form></div>";
   }	

?>
</body>