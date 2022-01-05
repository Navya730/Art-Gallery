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
   
  <form action='updateddesc.php' method='post'>
  <input type='hidden' name='pid'value='$pid' >Product id=$pid</div><br>
      <input type='hidden' name='name' value='$name'>Product Name=$name</p>
         
              <p name='sub' value='$sub'>Product Sub Category=$sub</p>
<p>Enter the Updated name</p>
<div class='input-group'>
      <p> Enter Description</p>
    <p>Description</p>
<textarea  name='details' style='width:100%; height:100px' placeholder='Describe the item' required></textarea>

    </div>
    <button type='submit'>Click to Update Description</button>
    </form>
    </div>
    ";

?>
    </body>
</html>