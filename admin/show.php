<style>
div.gallery {
  margin-left: 500px;
  margin-right:40px;
  margin-top:40px;
  align-self: center;
  width: 300px;
}

div.gallery img {
  width: 415px;
  height: 450px;
}

div.desc {
  padding: 10px;
  text-align: center;
  background-color: #c4e17f;
  width: 395px;
  height: 90px;
 
}

	
.b{
    background-color: #E6EEEE;;
  width:100%;
  height: auto; 
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
}
</style>
<body class="b">
    <?php

$servername = "localhost";
$username = "root";
$password = "2234";
$database="navya";

$con = mysqli_connect($servername, $username, $password, $database);

if ($con) {
    echo("Connection ");
}

$id=$_POST['id'];
$q1="select * from products where product_id=$id";
$run_q= mysqli_query($con,$q1);
    while($arr=mysqli_fetch_array($run_q))
   {
	 
   echo "
  <div class='gallery'>
      <img src='$arr[product_image]'>
		<form>
	  <div class='desc'><input type='hidden' name='id' value='$arr[product_id]'>Product id:$arr[product_id] </div>
    <div class='desc'><input type='hidden' name='name' value='$arr[product_desc]'>Product Descrition :$arr[product_desc] </div>
	<div class='desc'><input type='hidden' name='price' value='$arr[product_price]'>Cost :Rs.$arr[product_price]</div>
         <div class='desc'><input type='hidden' name='price' value='$arr[cat_id]'>Category id: $arr[cat_id]</div>
             <div class='desc'><input type='hidden' name='price' value='$arr[sub_cat_id]'>Sub Category id: $arr[sub_cat_id]</div>
</form></div>";
   }	  

?>
</body>
