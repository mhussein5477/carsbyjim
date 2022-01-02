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

$carname = $_POST['entry'];
$sql1 = $db->query("SELECT * FROM cars WHERE carname like '$carname' or description like '$carname'  ");
 
$sql = $db->query("SELECT * FROM cars WHERE carname like '$carname' or description like '$carname'  ");
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
    <br>
    <br>
<h1 class="heading"><span>contact</span> us</h1>
<div style="background-color: #F1F1F1; padding-left:  5%; padding-bottom: 1%; padding-top: 1%; margin-left: 5%; margin-right: 5%">
		<h3><a href="index.php" style="text-decoration: none;color: black">Home </a>  / 
			<a href=" " style='text-decoration: none;color: black'><?php echo $carname  ?></a>  

		 


		</h3>
		
		
	</div>

    <section class="featured" id="featured">

    <h1 class="heading"> <span>Search</span> Result </h1>

    <div class="swiper featured-slider">

       <div class="swiper-wrapper">

       <?php  while ($car = mysqli_fetch_assoc($sql1)): ?> 
        <a href="carsingle.php?info=<?= $car['id'] ?>" >
            <div class="swiper-slide box">
                <img src="uploads/<?= $car['image'] ?>" alt="">
                <div class="content">
                    <h3><?= $car['carname'] ?></h3>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                    <div class="price">ksh <?= $car['price'] ?></div>
                    <a href="carsingle.php?info=<?= $car['id'] ?>" class="btn">check out</a>
                </div>
            </div>
            <?php endwhile; ?>

       </div>

       <div class="swiper-pagination"></div>

    </div>

    

</section>
     
</div>
<br>
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



  
<script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>

<script src="js/script.js"></script>  
</body>
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
   }
}
</style>

</html>