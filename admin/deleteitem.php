<html>
    <div  style="background-color:#c4e17f">
	<h1>  Delete Item </h1></div><br>
	<div  style="background-color:#E6EEEE;">
		<div >
        <div >
    <form action="delete_item.php" method="post" name="form" enctype="multipart/form-data">

        <p>Enter the product id</p>
<input type="number" name="product_id" id="product_id" class="form-control" placeholder="">
<br>
<h3>Enter the Categories of the item</h3>  
<p>Main Category type</p>
<input type="number" name="cat" id="product_type" class="form-control" placeholder="1 ancient art,2 modern Art">
<br>
<p>Sub_Category Type</p>
<input type="number" name="subcat" id="brand" class="form-control" placeholder="1,2,3,4">
<br>
 <style>
body {
  background-image: url('https://images.unsplash.com/photo-1541580621-39f717ce77cd?ixid=MnwxMjA3fDB8MHxzZWFyY2h8MzN8fGFic3RyYWN0JTIwYXJ0fGVufDB8fDB8fA%3D%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60.jpg');
  width:100%;
  height: 800px; 
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
}
</style>        


<div align="center">
    <button type="submit" name="submit" id="submit"  style="width:100px; height:60px"> Cancel</button>
    <button type="submit" name="submit" id="submit"  style="width:150px; height:60px""> Delete Product</button>
    </div>
        </form>   
    
    
</html>