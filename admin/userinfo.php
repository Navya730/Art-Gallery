<head>
<link href='https://fonts.googleapis.com/css?family=Charm' rel='stylesheet'>
<script src='https://kit.fontawesome.com/a076d05399.js'></script>
<style>
* {
  box-sizing: border-box;
}

body {
  font-family: Charm;
  padding: 10px;
  background-color: grey;
}
.header {
  padding: 30px;
  text-align: center;
  background-image : url("bg3.png");
  width:100%;
  height:auto; 
    background-size: cover;
    background-position: center;
  background-repeat: no-repeat;
}

.header h1 {
  font-size: 50px;
}
.header p{
  font-size: 30px;
}





.leftcolumn {   
  align-content: center;
  width: 100%;
}




.card {
width:1459px;
  background-color: #ffc299;
  padding: 20px;
  margin-top: 20px;
  height: 2000px;
 
}




.row:after {
  content: "";
  display: table;
  clear: both;
}


table {
  border-collapse: collapse;
  width: 1400px;
}

th, td {
  text-align: center;
  padding: 8px;
  
}

tr:nth-child(even) {background-color: #f2f2f2;}
</style>
    <?php

$servername = "localhost";
$username = "root";
$password = "2234";
$database="navya";

$con = mysqli_connect($servername, $username, $password, $database);
$quer= "select * from User_info";
$rq= mysqli_query($con,$quer);
$total=0;
echo "<div class='row'>
  <div class='leftcolumn'>
    <div class='card'>
      <div style='height:200px;'><h1 style='margin-left:650px;'>User Information </h1><hr width='500px' style='margin-left:550px;'><br><br>
	  <table>
  <tr>
  <th>User ID</th>
  <th>First Name</th>
  <th>Email</th>
  <th>Phone Number</th>
  <th>Age</th>
  <th>City</th>
  <th>State</th>
  </tr>";
  if(mysqli_num_rows($rq) >0)
  {
while($arr= mysqli_fetch_array($rq))
{
	
echo "<tr>
  <th>$arr[userid]</th>
  <th>$arr[first_name]</th>
  <th>$arr[email]</th>
  <th>$arr[mobile]</th>
  <th>$arr[age]</th>
  <th>$arr[city]</th>
    <th>$arr[state1]</th> 
  </tr>";
}
  }
echo "</table>";
?>
