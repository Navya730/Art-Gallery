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
$uid= $_SESSION['uid'];
$em= $_SESSION['eid'];
extract ($_REQUEST);

	if(isset($submit))
{
	$pid = $_REQUEST['id'];
	$quant = $_REQUEST['quantity'];
	$desc = $_REQUEST['name'];
	$price = $_REQUEST['price'];
	$q = "select product_id from cart where userid= $uid";
	$run = mysqli_query($con,$q);
		while($arr = mysqli_fetch_array($run))
		{
			$id = $arr['product_id'];
			$q2 = "insert into orders(userid,f_name,email,address,city,state1,zip,product_id,cardname,cardnumber,expdate,cvv) values ($uid,'$fname','$em','$add','$city','$state',$zip,$id,'$cardname',$cardnumber,'$exp',$cvv)";
			$myq = mysqli_query($con,$q2);
			if($myq)
			{
				echo "<script>alert('order placed successfully')</script>";
                                $q3="delete from cart where userid=$uid and product_id=$id";
                                mysqli_query($con,$q3);
                                header('location:thankyou.php');
			}
                        
		}
	
}
?>
