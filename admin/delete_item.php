<?php
    $pid=$_POST["product_id"];
    $catid=$_POST["cat"];
    $subcatid=$_POST["subcat"];
$servername = "localhost";
$username = "root";
$password = "2234";
$database="navya";

$con = mysqli_connect($servername, $username, $password, $database);

if ($con) {
    echo("Connection ");
}
$q="delete from products where product_id=$pid and cat_id=$catid and sub_cat_id=$subcatid";
		
$qu =mysqli_query($con,$q) or die ("Incorrect details .<br> Please check the stock");
if($qu){
    print "<h2><alert>item deleted successfully</alert></h2>";
}
 else {
print("Incorrect details .<br> Please check the stock");    
}
?>
