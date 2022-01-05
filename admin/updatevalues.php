<html>
    <head>
<link href='https://fonts.googleapis.com/css?family=Charm' rel='stylesheet'>
<script src='https://kit.fontawesome.com/a076d05399.js'></script>
<style>
* {
  box-sizing: border-box;
}

body {
  font-family: Charm;
  background-image: url("https://images.pexels.com/photos/556669/pexels-photo-556669.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500.jpg");
  padding: 10px;
   background-repeat: no-repeat;
    background-size: cover;
  background-color: grey;
}
    <body>
        <style>
          body{
           background-position: center;
           background-repeat: no-repeat;
           background-size: cover;
           align-items: center;
           font-size: 40px;   
        }
        
        .b{
            color:green;
            height:50px;
            font-size: 15px;
            margin-center: 20px;
        }
      
        .card{
            width: 800px;
            background-color: aqua;
           margin-left: 380px;
           height: 900px;
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

    echo" <h3 style='background-color':'powderblue'><center> Product Details</center></h3><!-- comment -->
       <div class='card'> 
  <div><input type='hidden' name='pid' value='$pid' >Product id=$pid</div><br>
      <input type='hidden' name='name' value='$name'>Product Name=$name</p><nr>
          
              <p name='sub' value='$sub'>Product Sub Category=$sub</p><br>
              <h3 style='margin-left':'50px'>Click On the Value you Want to update</h3>
              <form action='updatename.php' method='post'>
                  <input type='hidden' name='id' value=$pid></input>
                      <input type='hidden' name='name' value=$name></input>
                          
                              <input type='hidden' name='sub' value=$sub></input>
                  <span><pre>    Update Name</pre><button class='b' type='submit'>Click to Update Name</button></span>
               </form>       
                 <form action='updatedesc.php' method='post'>
                  <input type='hidden' name='id' value=$pid></input>
                      <input type='hidden' name='name' value=$name></input>
                          
                              <input type='hidden' name='sub' value=$sub></input>
                   <span><pre>    Update Description</pre><button class='b' type='submit'>Click to Update Description</button></span>
               </form> 
               <form action='updateprice.php' method='post'>
                  <input type='hidden' name='id' value=$pid></input>
                      <input type='hidden' name='name' value=$name></input>
                          
                              <input type='hidden' name='sub' value=$sub></input>
                   <span><pre>    Update Price</pre><button class='b' type='submit'>Click to Update Price</button></span>
               </form> 
                <form action='updateimage.php' method='post'>
                  <input type='hidden' name='id' value=$pid></input>
                      <input type='hidden' name='name' value=$name></input>
                          
                              <input type='hidden' name='sub' value=$sub></input>
                   <span><pre>    Update Image URL</pre><button class='b' type='submit'>Click to Update Image URL</button></span>
                  </div>
               </form> 
                  
  
 
    
    
    ";
    ?>
        </body>
</html>