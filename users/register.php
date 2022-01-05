<style>
body {font-family: Arial, Helvetica, sans-serif;
		}
form {border: 3px solid #f1f1f1;}
.group
{
	padding : 16px;
	text-align: center;
}
input[type=text], input[type=password],input[type=email] {
  width: 50%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  box-sizing: border-box;
  color : red;
}
input[type=submit]{
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 50%;
}
input[type=submit]:hover {
  opacity: 0.8;
}
.heading{
	text-align:center;
	color : red;
}
h1 {
  text-shadow: 0 0 3px #FF0000, 0 0 5px #0000FF;
}
.register{
	background-image: url("https://wallpapercave.com/wp/wp5025526.jpg");
  width:100%;
  height: auto; 
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
}
</style>
<form action="registeruser.php" method="post" class="register">
<h1 class="heading"> REGISTER </h1>
<div class="group">
<label for="first_name"><b>First Name</b></label>
<br>
<input type="text" name="first_name" id="first_name" placeholder="First Name" required>
<br>
<label for="last_name"><b>Last Name</b></label>
<br>
<input type="text" name="last_name" id="last_name" placeholder="Last Name" required>
<br>
<label for="age"><b>Age</b></label>
<br>
<input type="text" name="age" id="age" placeholder="Age" required>
<br>
<label for="gender"><b>Gender</b></label>
<br>
<input type="text" name="gender" id="gender" placeholder="M/F" required>
<br>
<label for="email"><b>E-mail</b></label>
<br>
<input type="email" name="email" id="email" placeholder="E-mail" required>
<br>
<label for="password"><b>Password</b></label>
<br>
<input type="password" name="password" id="password" placeholder="Choose Password" required>
<br>
<label for="phone"><b>Phone Number</b></label>
<br>
<input type="text" name="phone" id="phone" placeholder="Phone Number" required>
<br>
<label for="address"><b>Address</b></label>
<br>
<input type="text" name="address" id="address" placeholder="Address" required>
<br>
<label for="city"><b>City</b></label>
<br>
<input type="text" name="city" id="city" placeholder="City" required>
<br>
<label for="state"><b>State</b></label>
<br>
<input type="text" name="state" id="state" placeholder="State" required>
<br>
<label for="zip"><b>Zip code</b></label>
<br>
<input type="text" name="zip" id="zip" placeholder="Zip code" required>
<br>
<input type="submit" onclick="myFunction();" name="Register" value="click here to register">


<script>
function myFunction() {
  alert("Thank you for registering");
}
</script>
</div>
</form>