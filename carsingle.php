<?php
include 'helpers/dbconfig.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CarsByJim</title>
    <link rel = "icon" href = 
        "image/logo.jpeg" 
        type = "image/x-icon">
        <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />

        <!-- font awesome cdn link  -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

        <!-- custom css file link  -->
        <link rel="stylesheet" href="css/style.css">
</head>
<body>

<?php 

$carid = $_GET['info'];
$sql = $db->query("SELECT * FROM cars WHERE id =  '$carid' ");
$sql1 = $db->query("SELECT * FROM images WHERE carid =  '$carid' ");

$items_details = mysqli_fetch_assoc($sql);

?>

<header class="header">

    <div id="menu-btn" class="fas fa-bars"></div>

    <a href="index.php" class="logo"> Cars <font style="color:orange"> by</font> Jim  </a>

    <nav class="navbar">
        <a href="index.php">home</a>    
        <a href="index.php">vehicles</a>
        <a href="index.php">services</a>
        <a href="index.php">featured</a>
        <a href="index.php">contact</a>
    </nav>

    <div id="login-btn" class="jim">
        <button class="btn">login</button>
        <i class="far fa-user"></i>
    </div>

</header> 
<div class="login-form-container">

    <span id="close-login-form" class="fas fa-times"></span>

    <form action="actionpage.php?login" method="POST">
        <h3>user login</h3>
        <input type="text" placeholder="Username" class="box" name="username">
        <input type="password" placeholder="Password" name="password" class="box">
       
        <input type="submit" value="login" class="btn">
       
        
        <p> don't have an account <a href="signup.php">create one</a> </p>
    </form>

</div>
<div>
<h1 class="heading"><span>contact</span> us</h1>
    <center>
    <img class="carimage" src="uploads/<?= $items_details['image'] ?>" style="margin-top:5%; width:50%" alt="">

    <div class="slideshow-container" style="margin-top:3%">

    <?php  while ($car = mysqli_fetch_assoc($sql1)): ?> 
            <div class="mySlides fade">
            <img src="uploads/<?= $car['image'] ?>" class="manycarimages" style="width:50%%">
            </div>
<?php endwhile; ?>


<a class="prev" onclick="plusSlides(-1)">&#10094;</a>
<a class="next" onclick="plusSlides(1)">&#10095;</a>

</div>
<br>

<div style="text-align:center">
  <span class="dot" onclick="currentSlide(1)"></span> 
  <span class="dot" onclick="currentSlide(2)"></span> 
  <span class="dot" onclick="currentSlide(3)"></span> 
</div>

    <h1><?= $items_details['carname'] ?></h1>
                        
                         <h2 style="margin-top:1%">
                             <span class="fas fa-circle" style="color:orange; margin-right:0.5%"></span><font style="color:grey; margin-right:1%"> <?= $items_details['year'] ?> </font> 
                             <span class="fas fa-circle" style="color:orange; margin-right:0.5%" ></span> <font style="color:grey; margin-right:1%"> <?= $items_details['gearsystem'] ?></font> 
                        <span class="fas fa-circle"style="color:orange; margin-right:0.5%"></span> <font style="color:grey; margin-right:1%"><?= $items_details['oil'] ?></font>
                        <span class="fas fa-circle" style="color:orange; margin-right:0.5%"></span><font style="color:grey; margin-right:1%"> <?= $items_details['old_new'] ?> </font> 
                        <span class="fas fa-circle" style="color:orange; margin-right:0.5%"></span><font style="color:grey; margin-right:1%"> <?= $items_details['brand'] ?> </font> 
                    </h2>   
                    <br>
                    <p style="font-size:13px" ><?= $items_details['description'] ?></p> <br>
                    <a href="tel://+2547 066 185 03 " class="btn" style="margin-bottom:15%">Contact</a> <br>
                        
</center>
     
</div>

<section class="footer" id="footer">

    <div class="box-container">

        <div class="box">
            <h3>our branches</h3>
            <a href="#"> <i class="fas fa-map-marker-alt"></i> Nairobi </a>
            <a href="#"> <i class="fas fa-map-marker-alt"></i> Mombasa </a>
             
        </div>

        <div class="box">
            <h3>quick links</h3>
            <a href="#"> <i class="fas fa-arrow-right"></i> home </a>
            <a href="#"> <i class="fas fa-arrow-right"></i> vehicles </a>
            <a href="#"> <i class="fas fa-arrow-right"></i> services </a>
            <a href="#"> <i class="fas fa-arrow-right"></i> featured </a>
            <a href="#"> <i class="fas fa-arrow-right"></i> search </a>
            <a href="#"> <i class="fas fa-arrow-right"></i> contact </a>
        </div>

        <div class="box">
            <h3>contact info</h3>
            <a href="#"> <i class="fas fa-phone"></i> +2547 066 185 03 </a>
            <a href="#"> <i class="fas fa-envelope"></i>  ccarsbyjim@gmail </a>
            <a href="#"> <i class="fas fa-map-marker-alt"></i> Nairobi , Kenya </a>
        </div>

        <div class="box">
            <h3>contact info</h3>
            <a href="#"> <i class="fab fa-facebook-f"></i> facebook </a>
            <a href="#"> <i class="fab fa-twitter"></i> twitter </a>
            <a href="#"> <i class="fab fa-instagram"></i> instagram </a>
            <a href="#"> <i class="fab fa-linkedin"></i> linkedin </a>
            <a href="#"> <i class="fab fa-pinterest"></i> pinterest </a>
        </div>

    </div>

    <div class="credit"> created by Mohammed Hussein Ali | all rights reserved </div>

</section>


<script>
var slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
  showSlides(slideIndex += n);
}

function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
  if (n > slides.length) {slideIndex = 1}    
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";  
  }
  for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
}
</script>

  
<script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>

<script src="js/script.js"></script>  
</body>
<style>
* {box-sizing: border-box}
 
.mySlides {display: none}
img {vertical-align: middle;}

/* Slideshow container */
.slideshow-container {
  max-width: 1000px;
  position: relative;
  margin: auto;
}

/* Next & previous buttons */
.prev, .next {
  cursor: pointer;
  position: absolute;
  top: 50%;
  width: auto;
  padding: 16px;
  margin-top: -22px;
  color: white;
  font-weight: bold;
  font-size: 18px;
  transition: 0.6s ease;
  border-radius: 0 3px 3px 0;
  user-select: none;
}

/* Position the "next button" to the right */
.next {
  right: 0;
  border-radius: 3px 0 0 3px;
}

/* On hover, add a black background color with a little bit see-through */
.prev:hover, .next:hover {
  background-color: rgba(0,0,0,0.8);
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
  cursor: pointer;
  height: 15px;
  width: 15px;
  margin: 0 2px;
  background-color: #bbb;
  border-radius: 50%;
  display: inline-block;
  transition: background-color 0.6s ease;
}

.active, .dot:hover {
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
  .prev, .next,.text {font-size: 11px}
}
</style>
<style>
    @media screen and (max-width: 600px) {
   .logo {
       margin-left: -0%;
   }
   .jim{
    margin-right: 0%;
   }
   .carimage{
       margin-top:15%;
       width:80%;
   }.manycarimages{
    width:50%;
   }.prev, .next{
       margin-left:-50%;
   }
}
</style>

</html>