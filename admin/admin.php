<head>
<link href='https://fonts.googleapis.com/css?family=Charm' rel='stylesheet'>
<script src='https://kit.fontawesome.com/a076d05399.js'></script>
<style>
* {
  box-sizing: border-box;
}

body {
  font-family: Charm;
   background-image : url("https://images.unsplash.com/photo-1619726910901-6c8a215dab6f?ixid=MnwxMjA3fDB8MHxzZWFyY2h8MTV8fG1vZGVybiUyMGFydHxlbnwwfHwwfHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60");
  padding: 10px;
   background-repeat: no-repeat;
    background-size: cover;
  background-color: grey;
}
.header {
  padding: 30px;
  text-align: center;
 
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
    align-items: center;
  font-size: 22px;
  padding: 20px;
  margin-left:50px;
}



.card {

  background-color: #ffc299;
  padding: 20px;
  margin-top: 20px;
  height:650px;
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
.note{
    color:#ffffff;
    font-size: 30px;
    padding-top: 20px;
    padding-bottom: 2px;
}
div.box1{
    background-color: red;
    height:200px;
    width:400px;
    display:none;
    font-size: 20px;
    color:white;
}
div.box2 {
    background-color:green ;
     height:200px;
     display:none;
    width:400px;
   font-size: 20px;
   color:white;
   
}
div.box{
margin-left: 550px;
  margin-right:40px;
  margin-top:20px;
  float: left;
  width: 300px;
}
</style>
</head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script>
$(document).ready(function(){
 $("body").ready(function(){
   
 
    $(".box1").fadeIn(3000);
    $(".box2").fadeIn(4000);
    
});
});
</script>
<body>

<div class="header">
  <h1>Admin Panel</h1>
  <p><b>Hello and Welcome!</b></p>
  </div>
  

<div class="topnav">
    <a href="additem.php"> Add item</a>
    <a href="deleteitem.php">Delete item</a>
    <a href="stock.php"> Check stock</a>
    <a href="update.php"> Update Stock Values</a>
    <a href="userinfo.php">Check User Details</a>
    <a href="sales.php">Check The Orders and Sales</a>
</div>
    
    <div class="note"> 
        <center>Note to the Admin:</center> </br>
    </div>
        <div class='box'>
      <div class="box1">
      <ol>
      Sub Categories under Category 1:<!-- comment -->
      <li>Japanese Art</li><!-- comment -->
      <li>History Art</li>
      <li>Arabic Art </li>
      <li>Women in Art</li>
  </ol>
      </div>
        <div class="box2">
  <ol>
      Sub Categories under Category 2:<!-- comment -->
      <li>Deco Art</li><!-- comment -->
      <li>Abstract Art</li>
      <li>Illustration Art </li>
      <li>Canvas Art</li>
  </ol>
    </div>
    </div>