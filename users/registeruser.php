<?php
session_start();
$servername = "localhost";
$username = "root";
$password = "2234";
$database="navya";

$con = mysqli_connect($servername, $username, $password, $database);

if ($con) {
    echo("Connection ");
}
if(isset($_POST["first_name"]))
{
	$first_name = $_POST['first_name'];
	$last_name = $_POST['last_name'];
	$age=$_POST['age'];
	$gender=$_POST['gender'];
	$email = $_POST['email'];
	$password = $_POST['password'];
	$phone = $_POST['phone'];
	$address = $_POST['address'];
	$state= $_POST['state'];
	$city=$_POST['city'];
	$zip=$_POST['zip'];
	$emailValidation = "/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9]+(\.[a-z]{2,4})$/";
	$number = "/^[0-9]+$/";
	if(!preg_match($emailValidation,$email)){
		echo "<alert>this $email is not valid..!</alert>";
		exit();
	}
	
		if(strlen($password) <5 ){
		echo "<alert>Password is weak</alert>";

		exit();
	}
		if(!preg_match($number,$phone)){
		echo "<b>Mobile number $phone is not valid</b>";
		exit();
	}
	if(!(strlen($phone) == 10)){
		echo "<b>Mobile number must be 10 digit</b>";

		exit();
	}
$ran= rand();
 {
		
$sql = "INSERT INTO user_info(first_name,last_name,age,gender,email,password,mobile,address,city,state1,zip) VALUES ('$first_name', '$last_name','$age','$gender', '$email', 
		'$password', '$phone', '$address', '$city','$state','$zip')";

                if (mysqli_query($con, $sql)) {
                            echo '<script>alert("registered Successfully")</script>';
                            header("location:login.php");	
			    
              } else{
                        echo "Error: " . $sql . "<br>" . mysqli_error($con);
                     }
		 
		
		
		
	}
	
}
?>