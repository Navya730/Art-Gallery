<html>
    <body>
    <style>
       body{
            background-image: url("https://i.pinimg.com/564x/fa/3d/9d/fa3d9d155a1de3580c4c0cb4a2b2d77c.jpg");
         background-position: center;
         background-repeat: no-repeat;
           background-size: cover;
           align-items: center;
           font-size: 30px;
        }
        button{
            color:green;
        }
    </style>
<?php

$servername = "localhost";
$username = "root";
$password = "2234";
$database="navya";

$con = mysqli_connect($servername, $username, $password, $database);

if ($con) {
    echo("Connection ");
}
$pid=$_POST["id"];
$name=$_POST['name'];

$sub=$_POST['sub'];
print "

  <form action='updatedimage.php' method='post'>
  <input type='hidden' name='pid'value='$pid' >Product id=$pid</div><br>
      <input type='hidden' name='name' value='$name'>Product Name=$name</p>
         
              <p name='sub' value='$sub'>Product Sub Category=$sub</p>
<p>Enter the Updated image URL</p>
<div class='input-group'>
      <input type='textarea' style='width:1000px'  name='title' id='price'  >
    </div>
    <button type='submit'>Click to Update</button>
    </form>
    ";

?>
    </body>
</html>