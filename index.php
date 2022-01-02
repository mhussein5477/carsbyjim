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


    
<header class="header">

    <div id="menu-btn" class="fas fa-bars"></div>

    <a href="#" class="logo"> Cars <font style="color:orange"> by</font> Jim  </a>

    <nav class="navbar">
        <a href="#home">home</a>    
        <a href="#vehicles">vehicles</a>
        <a href="#services">services</a>
        <a href="#featured">featured</a>

       
        <a href="#contact">contact</a>
    </nav>

    <div id="login-btn" class="jim">
        <button class="btn">login</button>
        <i class="far fa-user"></i>
    </div>

</header> 
<?php
    $sql = $db->query("SELECT * FROM cars WHERE slider =  'Popular' ");
    $sql1 = $db->query("SELECT * FROM cars WHERE slider =  'Featured' ");
    $sql2 = $db->query("SELECT * FROM cars WHERE slider =  'Featured' ORDER BY id DESC;");
?>
 
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

<section class="home" id="home">

    <h3 data-speed="-2" class="home-parallax">find you a car</h3>

    <img data-speed="5" class="home-parallax" src="image/home-img.png" alt="">

    <a data-speed="7" href="#featured" class="btn home-parallax">explore cars</a>

</section>

<section class="icons-container">

    <div class="icons">
        <i class="fas fa-home"></i>
        <div class="content">
            <h3>2</h3>
            <p>branches</p>
        </div>
    </div>

    <div class="icons">
        <i class="fas fa-car"></i>
        <div class="content">
            <h3>498</h3>
            <p>cars sold</p>
        </div>
    </div>

    <div class="icons">
        <i class="fas fa-users"></i>
        <div class="content">
            <h3>498</h3>
            <p>happy clients</p>
        </div>
    </div>

    <div class="icons">
        <i class="fas fa-car"></i>
        <div class="content">
            <h3>150</h3>
            <p>news cars</p>
        </div>
    </div>

</section>

<section class="vehicles" id="vehicles">

    <h1 class="heading"> popular <span>vehicles</span> </h1>

    <div class="swiper vehicles-slider">

        <div class="swiper-wrapper">


        <?php  while ($car = mysqli_fetch_assoc($sql)): ?> 
            <div class="swiper-slide box">

                <img src="uploads/<?= $car['image'] ?>" alt="">
                <div class="content">
                    <h3><?= $car['carname'] ?></h3>
                    <div class="price"> <span>price : </span> ksh <?= $car['price'] ?> </div>
                    <p>
                    <?= $car['old_new'] ?>
                        <span class="fas fa-circle"></span> <?= $car['year'] ?>
                        <span class="fas fa-circle"></span> <?= $car['gearsystem'] ?>
                        <span class="fas fa-circle"></span> <?= $car['oil'] ?>
                     
                    </p>
                    <a href="tel://+2547 066 185 03 " class="btn">Contact</a>
                </div>
            </div>
            <?php endwhile; ?>
            



        </div>

        <div class="swiper-pagination"></div>

    </div>

</section>

<section class="services" id="services">

    <h1 class="heading"> our <span>services</span> </h1>

    <div class="box-container">

        <div class="box">
            <i class="fas fa-car"></i>
            <h3>car selling</h3>
            <p>We sale cars at a cheaper price and great deals for you.</p>
            <a href="#" class="btn"> read more</a>
        </div>

        <div class="box">
            <i class="fas fa-tools"></i>
            <h3>parts repair</h3>
            <p>We can get you any parts required by our customers either local or import.</p>
            <a href="#" class="btn"> read more</a>
        </div>

        <div class="box">
            <i class="fas fa-car-crash"></i>
            <h3>Car Trade  In</h3>
            <p>We help you trade in cars .</p>
            <a href="#" class="btn"> read more</a>
        </div>



        <div class="box">
            <i class="fas fa-gas-pump"></i>
            <h3>Bank Financing</h3>
            <p>We offer bank financing.</p>
            <a href="#" class="btn"> read more</a>
        </div>

        <div class="box">
            <i class="fas fa-headset"></i>
            <h3>24/7 support</h3>
            <p>Our support channel is 24/7 contact us and we are here for you.</p>
            <a href="#" class="btn"> read more</a>
        </div>

    </div>

</section>

<section class="featured" id="featured">

    <h1 class="heading"> <span>featured</span> cars </h1>

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

    <div class="swiper featured-slider">

        <div class="swiper-wrapper">
 
        <?php  while ($car1 = mysqli_fetch_assoc($sql2)): ?> 
            <a href="carsingle.php?info=<?= $car1['id'] ?>" >
            <div class="swiper-slide box">
                <img src="uploads/<?= $car1['image'] ?>" alt="">
                <div class="content">
                    <h3><?= $car1['carname'] ?></h3>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                    <div class="price">ksh <?= $car1['price'] ?></div>
                    <a href="carsingle.php?info=<?= $car1['id'] ?>" class="btn">View</a>
                </div>
            </div>
            </a>
            <?php endwhile; ?>
  
 
        </div>
 
        <div class="swiper-pagination"></div>
 
     </div>

</section>

<section class="newsletter" id="search" >
    
    <h3>Search</h3>
    <p>Search for a Car available in our inventory.</p>

     
   <form action="searchresult.php" method="post">

 
        <input  type="text" placeholder="Enter car model" name="entry">
        <div class="result"></div>
        
        <input type="submit" value="Search">
   </form>

</section>

 

<section class="contact" id="contact">
<h1 class="heading"><span>contact</span> us</h1>
            <div class="row">

    <div class="mapouter"><div class="gmap_canvas"><iframe width="600" height="500" id="gmap_canvas" src="https://maps.google.com/maps?q=nairobi&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe><a href="https://www.whatismyip-address.com"></a><br><style>.mapouter{position:relative;text-align:right;height:500px;width:600px;}</style><a href="https://www.embedgooglemap.net">google map link html</a><style>.gmap_canvas {overflow:hidden;background:none!important;height:500px;width:600px;}</style></div></div>
        <form action="">
            <h3>get in touch</h3>
           <h3 style="font-size:15px"><a href="#"> <i class="fas fa-phone"></i> +2547 066 185 03 </a></h3> 
           <h3 style="font-size:15px"> <a href="#"> <i class="fas fa-envelope"></i>  ccarsbyjim@gmail </a></h3> 
           <h3 style="font-size:15px"> <a href="#"> <i class="fas fa-map-marker-alt"></i> Nairobi , Kenya </a> </h3> <br>
           <a href="tel://+2547 066 185 03" class="btn"> Contact Us</a>
        </form>

    </div>

</section>

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
            <a href="tel://+2547 066 185 03"> <i class="fas fa-phone"></i> +2547 066 185 03 </a>
            <a href="#"> <i class="fas fa-envelope"></i>  ccarsbyjim@gmail </a>
            <a href="#"> <i class="fas fa-map-marker-alt"></i> Nairobi , Kenya </a>
        </div>

        <div class="box">
            <h3>contact info</h3>
            <a href="#"> <i class="fab fa-facebook-f"></i> facebook </a>
            <a href="#"> <i class="fab fa-twitter"></i> twitter </a>
            <a href="#"> <i class="fab fa-instagram"></i> instagram </a> 
        </div>

    </div>

    <div class="credit"> created by Mohammed Hussein Ali | all rights reserved </div>

</section>



<style>
    .newsletter form input[type="text"]{
    height: 100%;
    width:100%;
    padding:0 2rem;
    font-size: 1.6rem;
    color:var(--black);
    text-transform: none;
}
    @media screen and (max-width: 600px) {
   .logo {
       margin-left: -0%;
   }
   .jim{
    margin-right: 45%;
   }
}
</style>





<script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>

<script src="js/script.js"></script>

</body>
</html>