<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title> thank you page design in html with source code</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Anton&family=Righteous&display=swap" rel="stylesheet">
    <style>
        
        body
{
	font-family: 'Anton', sans-serif;
        font-family: 'Righteous', cursive;
	margin:0px;
	padding:0px;
	background:#ccc;
	overflow:hidden;
}

.box
{
	width:700px;
	height:400px;
         display:none;
	background:black;
	position:absolute;
	top:50%;
	left:50%;
	transform:translate(-50%,-50%)
}




h1,p
{
	margin:0px;
	padding:0px;
	color:#fff;
	text-align:center;
}

.box h1
{
	padding-top:150px;
	color:fff;
	font-size:50px;
	font-family: 'Anton', sans-serif;
}

.box p
{
	font-family: 'Righteous', cursive;
	margin:0px;
	padding:0px;
}

    </style>
    
   
</head>
    <head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script>
$(document).ready(function(){
 $("body").ready(function(){
   
 
    $(".box").fadeIn(2000);
});
});
</script>

<body id="body">

  
            <div class="box">
               <h1>Thank You</h1>
               <p>Thank you for the payment <br> We wish you have a Good Day !</br>Treat People With Kindness. Don't forget to Love Yourself <3</p>
               <div class="pyro">
                 <div class="before"></div>
                 <div class="after"></div>
               </div>
            </div>
        

</body>
</html>
