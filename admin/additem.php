<?php

session_start();
if(isset($_POST['submit']))
{
$product_name=$_POST['product_name'];
$details=$_POST['details'];
$price=$_POST['price'];
$c_price=$_POST['c_price'];
$product_type=$_POST['product_type'];
$brand=$_POST['brand'];
$pic_name=$_POST['picture'];

mysqli_close($con);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>

<title>Admin Panel</title>
<link href="style/css/bootstrap.min.css" rel="stylesheet">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>

</head>
<body>
 
   	
   
  	
	<div  style="background-color:#c4e17f">
	<h1>  Add Product  </h1></div><br>
	<div  style="background-color:#E6EEEE;">
		<div >
        <div >
        <form action="add_product.php" method="post" name="form" enctype="multipart/form-data">
        <p>Title</p>
        <input  type="text" name="product_name" id="product_name" autofocus style="width:100%" placeholder="Item Name">
<p>Description</p>
<textarea  name="details" id="details" style="width:100%; height:100px" placeholder="Describe the item" required></textarea>
<p>Paste Image URL</p>
<div style="background-color:#CCC">
<input type="text" style="width:100%" name="picture"  id="picture" >

</div>
</div>
<div class="well">
<p>Price</p>
<div class="input-group">
      <input type="text"  name="price" id="price"  placeholder="0.00" >
    </div><br>


    </div>
        </div>  
        
        
<h3>Choose Category</h3>  
<p>Main Category type type</p>
<input type="number" name="product_type" id="product_type" class="form-control" placeholder="1 ancient art,2 modern Art">
<br>
<p>Sub_Category Type</p>
<input type="number" name="brand" id="brand" class="form-control" placeholder="1,2,3,4">
<br>
         


<div align="center">
    <button type="submit" name="submit" id="submit"  style="width:100px; height:60px"> Cancel</button>
    <button type="submit" name="submit" id="submit"  style="width:150px; height:60px""> Add Product</button>
    </div>
        </form>
 
	</div>

</div>

</body>
</html>