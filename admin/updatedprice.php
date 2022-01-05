<html><?php
$servername = "localhost";
$username = "root";
$password = "2234";
$database="navya";

$con = mysqli_connect($servername, $username, $password, $database);

if ($con) {
    echo("Connection ");
   
}
$pid=$_POST['pid'];
print "$pid";
$title=$_POST['title'];
$q="update products set product_price='$title' where product_id=$pid";
		
 if (mysqli_query($con, $q)) {
                            echo '<script>alert("Updated Successfully")</script>';
                           	
			    
              } else{
                        echo "Error: " . $q . "<br>" . mysqli_error($con);
                     }?>
</html>

