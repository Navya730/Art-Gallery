<style>
body
 {
font-family: Arial, Helvetica, sans-serif;
}
form {border: 3px solid #f1f1f1;}
.group
{
	padding : 16px;
	text-align: center;
}
.b{
	background-image: url("https://i.pinimg.com/236x/f5/5b/c7/f55bc7aac8c9d893810b47a25236e2d4.jpg");
  width:100%;
  height: 800px; 
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
}
.h{
text-align:center;
color:red;
}
#email,#password{
  width: 50%;
  padding: 12px 20px;
  margin: 8px 0;
  border: 1px solid #ccc;
  box-sizing: border-box;
  color : black;
  }
  #submit{
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 50%;
}


</style>
<html>
<body>
<form method="post" class="b" action="">
<div class="group">
<br>
<br>
<br>
<h1 class="h">Hello Admin!<br> Login Here </h1>
<label for="email"><b>Enter your Email Address</b></label>
<br>
<input type="email"  name="email" id="email">
<br>
<label for="password"><b>Enter your Password</b></label>
<br>
<input type="password"  name="password" id="password">
<br>
<input type="submit" id="submit" value="submit" name="submit">
</div>
</form>
</body>
<?php
$servername = "localhost";
$username = "root";
$password = "2234";
$database="navya";

$con = mysqli_connect($servername, $username, $password, $database);

if ($con) {
    echo(" ");
}

session_start();
extract($_REQUEST);
if(isset($submit))
{
$email=$_REQUEST['email'];
$password=$_REQUEST['password'];
$_SESSION['eid']= $email;
$user=mysqli_query($con,"select adminid,first_name from admin_info where email='$email'");
$arr1=mysqli_fetch_array($user);
$_SESSION['uid']= $arr1['adminid'];
  $sel=mysqli_query($con,"select email,password from admin_info where email='$email'");
  $arr=mysqli_fetch_array($sel);

if(($arr['email']==$email) and( $arr['password']==$password))
  {
  header('location: admin.php');
  }
else
{
print '<script type="text/javascript">';
print ' alert("Id and Password do not match \n Please provide Correct credentials")';  
print '</script>';

}
}
?>
</html>