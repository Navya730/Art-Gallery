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
  background-image : url("https://cdn.pixabay.com/photo/2016/05/06/12/07/painting-1375771__340.jpg");
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
/* Style the top navigation bar */
.topnav {
  overflow: hidden;
  background-color: #333;
}
/* Style the topnav links */
.topnav a {
  float: left;
  display: inline-block;
  color: #f2f2f2;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}
/* Change color on hover */
.topnav a:hover {
  background-color: #ddd;
  color: black;
}


.fakeimg {
  width: 100%;
  padding: 20px;
}
.fakeimg1 {
  width: 100%;
  padding: 10px;
  margin-right: 80px;
}
.card {
width:100%;
  background-color: #ffc299;
  padding: 10px;
  margin-top: 20px;
  height:750px;
}

.container {
  position: relative;
  width: 500px;
  height: 300px;
  display: inline;
}
.image {
  opacity: 1;
  display: inline;
  width: 351px;
  height: 500px;
 
 
}
.middle {
  
  opacity: 0;
  position: absolute;
  top: 20%;
  left: 20%;
 
  
}

.container:hover .middle {
  opacity: 0.9;
}
.text a{
  background-color:tomato;
  color: white;
  font-size: 16px;
  padding: 16px 32px;
}
.row:after {
  content: "";
  display: table;
  clear: both;
}
.footer {
  padding: 20px;
  text-align: center;
  background: #ddd;
  margin-top: 20px;
  opacity:0.5;
}


</style>
</head>
<body>
<div class="header">
  <h1>Art Gallery</h1>
  <p><b>Hello and Welcome!</b></p>
</div>

<div class="topnav">
  <a href="index1.php">Home</a>
  <a href="myprofile.php">My Profile</a>
    <a href="cart.php">My cart</a>
  <a href="ancient.php">Ancient Art</a>
  <a href="mordern.php">Mordern Art</a>
  <a href="eview.php">Reviews</a>

</div>
<div class='row'>
  <div class='leftcolumn'>
    <div class='card'>
      <div class='fakeimg' style='height:300px;'><h2 style="text-align:center;">What do you wish to buy today?</h2><br>
	  <div class="container">
	  <img src="https://i.pinimg.com/236x/80/dc/12/80dc12985fea04631bc18585d59036b4.jpg" class="image">
	    <div class="middle">
    <div class="text"><a href="decoart.php">Deco Art</a></div>
  </div>
</div>
<div class="container">
	  <img src="https://i.pinimg.com/236x/5b/a9/16/5ba9163b2dd3969fbd570b4e23f630e1.jpg" class="image">
	    <div class="middle">
    <div class="text"><a href="abstract.php">Abstract Art</a></div>
  </div>
</div>
<div class="container">
	  <img src="https://i.pinimg.com/236x/f6/e0/d6/f6e0d6e87b2351a1a2b7444e5ec15f2d.jpg" class="image">
	    <div class="middle">
    <div class="text"><a href="illustration.php">Illustration Art</a></div>
  </div>
</div>
<div class="container">
	  <img src="https://i.pinimg.com/236x/12/12/6e/12126e520f29d155df090d76205989c8.jpg" class="image">
	    <div class="middle">
    <div class="text"><a href="canvas.php">Canvas Art</a></div>
  </div>
</div>
	  </div>
	  </div>
	  </div>
	  
	</div>
	<div class="footer">
  <h2>&copy; Art Gallery Private Limited 2021</h2>
  <p style="text-align:center; font-size: 20px;">Project made by Navya and Meghana</p>
</div>
</body>
