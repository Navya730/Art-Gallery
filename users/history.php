<style>
div.gallery {
  margin-left: 120px;
  margin-right:40px;
  margin-top:40px;
  float: left;
  width: 300px;
}

div.gallery img {
  width: 360px;
  height: 400px;
}

div.desc {
  padding: 10px;
  text-align: center;
  background-color: tomato;
  width: 340px;
 
}
h1,h3{
   
    color:#FFFFF0;
}
input[type=submit]{
	  background-color: #4CAF50;
 
  padding: 14px 20px;
  margin: 8px 0;
  width: 50%;
}
	
.b{
    background-color: grey;
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
print "<h1 align='center' style = 'font-family:courier,arial,helvetica;'>Indian History Art</h1>";
print "<h3 align='center'>FACT :  The history of art in ancient India begins with prehistoric rock paintings. Such rock paintings can be seen in the Bhimbetaka paintings, belonging to the prehistoric age.</h3> ";

if ($con) {
    echo("Connection ");
}
session_start();
$q1="select * from products where cat_id=1 and sub_cat_id=2";
$run_q= mysqli_query($con,$q1);
    while($arr=mysqli_fetch_array($run_q))
   {
	   $i=$arr['product_id'];
   print "
  <div class='gallery'>
      <img src='$arr[product_image]'>
		<form action='cart.php' method='post'>
	  <div class='desc'><input type='hidden' name='id' value='$arr[product_id]'>$arr[product_id] </div>
    <div class='desc'><input type='hidden' name='name' value='$arr[product_desc]'>$arr[product_desc] </div>
	<div class='desc'><input type='hidden' name='price' value='$arr[product_price]'>Rs.$arr[product_price]</div>
  <div class='desc'><input type='text' name='quantity' value='1' placeholder='quantity'></div>
  <div class='desc'><input type='submit' value='add to cart' name='submit'></div>
</form></div>";
   }	  

?>
</body>