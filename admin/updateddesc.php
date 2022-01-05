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
$title=$_POST['details'];
$q="update products set product_desc='$title' where product_id=$pid";
		
 if (mysqli_query($con, $q)) {
                            echo '<script>alert("Updated Successfully")</script>';
                           	
			    
              } else{
                        echo "Error: " . $q . "<br>" . mysqli_error($con);
                     }?>
</html>


