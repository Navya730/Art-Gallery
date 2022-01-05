<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
* {
  box-sizing: border-box;
}
h1 {
  text-shadow: 3px 3px 5px pink;
}
h2 {
  text-shadow: 3px 3px 5px black;
}

h3{
color:black;
}
body {
  font-family: Charm;
  padding: 10px;
  background-color: grey;
}



/* Header/Blog Title */
.header {
  padding: 30px;
  text-align: center;
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

.topnav {
  overflow: hidden;
  background-color: #333;
}

.topnav a {
  float: left;
  display: block;
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

body, html {
  height: 100%;
}


/* Footer */
.footer {
  padding: 20px;
  text-align: center;
  background: #ddd;
  margin-top: 20px;
  opacity:0.5;
}



</style>
<style>
body, html {
  height: 100%;
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
}

* {
  box-sizing: border-box;
}

.bg-image {
  /* The image used */
  background-image: url("https://images.unsplash.com/photo-1552355757-f3e12728818f?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxleHBsb3JlLWZlZWR8MTQxfHx8ZW58MHx8fHw%3D&auto=format&fit=crop&w=500&q=60");
  
  /* Add the blur effect */
  filter: blur(8px);
  -webkit-filter: blur(8px);
  
  /* Full height */
  height: 100%; 
  
  /* Center and scale the image nicely */
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
}

/* Position text in the middle of the page/image */
.bg-text {
  background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0, 0.4); /* Black w/opacity/see-through */
  color: white;
  font-weight: bold;
  border: 3px solid #f1f1f1;
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  z-index: 2;
  width: 80%;
  padding: 20px;
  text-align: center;
}
</style>
<style>
* {box-sizing: border-box;}
body {font-family: Charm;}
.mySlides {display: none;}
img {vertical-align: bottom;}

/* Slideshow container */
.slideshow-container {
  max-width: 1000px;
  position: relative;
  margin: auto;
}

/* Caption text */
.text {
  color: #f2f2f2;
  font-size: 15px;
  padding: 8px 12px;
  position: absolute;
  bottom: 8px;
  width: 100%;
  text-align: center;
}

/* Number text (1/3 etc) */
.numbertext {
  color: #f2f2f2;
  font-size: 12px;
  padding: 8px 12px;
  position: absolute;
  top: 0;
}

/* The dots/bullets/indicators */
.dot {
  height: 15px;
  width: 15px;
  margin: 0 2px;
  background-color: #bbb;
  border-radius: 50%;
  display: inline-block;
  transition: background-color 0.6s ease;
}

.active {
  background-color: #717171;
}

/* Fading animation */
.fade {
  -webkit-animation-name: fade;
  -webkit-animation-duration: 1.5s;
  animation-name: fade;
  animation-duration: 1.5s;
}

@-webkit-keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

@keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

/* On smaller screens, decrease text size */
@media only screen and (max-width: 300px) {
  .text {font-size: 11px}
}
</style>
</head>
<body>

<div class="bg-image"></div>

<div class="bg-text">
<h2 style="font-size:40px">CLOVER ART GALLERY</h2>
  <h1>Hello and Welcome!</h1>
  
  <p><strong>Art depicts aesthetic enjoyment, cultural enrichment, or for marketing purposes.Art is displayed not only for aesthetic enjoyment, but also as evidence of status and wealth, and for religious art as objects of ritual or the depiction of narratives.
Painting is an important form in the visual arts, bringing in elements such as drawing, composition, gesture , narration , and abstraction . Paintings can be naturalistic and representational , photographic, abstract, narrative, symbolistic , emotive or political in nature.

A portion of the history of painting in both Eastern and Western art is dominated by religious art. Examples of this kind of painting range from artwork depicting mythological figures on pottery, to Biblical scenes on the Sistine Chapel ceiling, to scenes from the life of Buddha.Here we have various categories of art, we welcome you to enjoy our world of art. Hope your mind is blown!!</strong></p>
</div>
<div class="topnav">
  <a href="#">Home</a>
  <a href="register.php">Register</a>
  <a href="login.php">Login</a>
</div>
<div class="slideshow-container">

<div class="mySlides fade">
  <div class="numbertext">1 / 4</div>
  <img src="https://wallpapercave.com/wp/wp4071556.jpg" style="width:100%">
  <div class="text">Estonishing</div>
</div>

<div class="mySlides fade">
  <div class="numbertext">2 / 4</div>
  <img src="https://wallpapercave.com/wp/wp5025558.jpg" style="width:100%">
  <div class="text">Mind Blowing</div>
</div>

<div class="mySlides fade">
  <div class="numbertext">3 / 4</div>
  <img src="https://wallpapercave.com/wp/G6jOCAw.jpg" style="width:100%">
  <div class="text">Amazing</div>
</div>
<div class="mySlides fade">
  <div class="numbertext">4 / 4</div>
  <img src="https://wallpapercave.com/wp/wp5025584.jpg" style="width:100%">
  <div class="text">Divine</div>
</div>

</div>
<br>

<div style="text-align:center">
  <span class="dot"></span> 
  <span class="dot"></span> 
  <span class="dot"></span> 
</div>

<script>
var slideIndex = 0;
showSlides();

function showSlides() {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";  
  }
  slideIndex++;
  if (slideIndex > slides.length) {slideIndex = 1}    
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
  setTimeout(showSlides, 2000); // Change image every 2 seconds
}
</script>

</body>
</html>