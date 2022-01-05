
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


if(isset($_POST['submit']))
{
$product_name=$_POST['product_name'];
$details=$_POST['details'];
$price=$_POST['price'];
$product_type=$_POST['product_type'];
$brand=$_POST['brand'];
$pic_name=$_POST['picture'];		
mysqli_query($con,"insert into products (cat_id,sub_cat_id,product_title,product_price,product_desc,product_image)values($product_type,$brand,'$product_name',$price,'$details','$pic_name') ") or die ("query incorrect");
{
    print "<alert>item added successfully</alert>";
}



}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Admin Panel</title>
 <meta name="viewport" content="width=device-width, initial-scale=1">
<link href="style/css/bootstrap.min.css" rel="stylesheet">
<link href="style/css/k.css" rel="stylesheet">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>

</head>
<body>
 
   	 
   	
<div align="center">
 
    <button type="submit" name="submit" id="submit" onlick="additem.php"  style="width:100px; height:60px"> Add another Item</button>
    <button type="submit" name="submit" id="submit" onclick="location.href='admin.php';"   style="width:150px; height:60px""> Back to Admin Home Page</button>
    </div>
        </form>
 
	</div>
</div></div></div>

</body>
</html>
