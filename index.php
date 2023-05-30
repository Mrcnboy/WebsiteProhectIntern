
<?php 
include('aio.php')?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <meta name="description" content="" />
  <meta name="viewport" content="width=device-width,initial-scale=1" />
    <script src="https://kit.fontawesome.com/64d58efce2.js" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/49ed63a2d9.js" crossorigin="anonymous"></script>
    <!-- FONT AWESOME-->
    <script src="https://kit.fontawesome.com/0c87a70838.js"></script>
    <!-- FONT CSS -->
    <link href="//db.onlinewebfonts.com/c/c203253973e905e4e88b5ccd5728cce4?family=Replica-Bold" rel="stylesheet" type="text/css" />
    <!-- js -->
    <script defer src="index.js"></script>

    <!-- Swiper CSS -->
    <link rel="stylesheet" href="css/swiper-bundle.min.css">
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
  </head>

    <!-- COSTUM CSS -->
    <link rel="stylesheet" href="style.css" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">

    <script src="https://cdn.lordicon.com/ritcuqlt.js"></script>
</head>
<?php require("header.php"); ?>
</html>
<body>


    <section id="acceuil">
        <div class="sec1">
            <div class="container">
                <h1 data-text="CYBERS">CYBERS </h1>
                <h1 data-text="CONSULTING">CONSULTING </h1>
                <h2 style="margin-left: 30px; margin-top: 10px;" data-aos="fade-right" data-aos-duration="1000" data-aos-once="true"> <?php echo $lang['1']; ?> <br> <?php echo $lang['2']; ?></h2>
                <a href="#bienvenue" data-aos="fade-right" data-aos-duration="1600" data-aos-once="true">
                    <button href="" style="   font-family: 'Gemunu Libre', sans-serif;
         font-weight: bold; font-size: 1.6em; margin-left: 25px; margin-top: -13px; "><?php echo $lang['b1']; ?>
            <i class="fas fa-long-arrow-alt-right" aria-hidden="true"></i>
        </button>
                </a>

                <div class="bg2">
                    <img src="img/3.jpeg" alt="" style="margin-bottom: 40px">
                </div>

            </div>
        </div>
    </section>

    <div class="sec2" id="bienvenue">
        <div class="container">
            <div class="big-card">
                <div class="left">
                    <img src="img/15.png">
                </div>
                <div class="right" data-aos="fade-right" data-aos-duration="1000" data-aos-once="true">
                    <h4><?php echo $lang['3']; ?></h4>
                    <h1>CYBERS CONSULTING</h1>
                    <P> <?php echo $lang['4']; ?></P>
                </div>
                <a href="#savoirfaire" class="arrow"></a>
            </div>
        </div>
    </div>

    <script src="index.js"></script>
    <div class="sec3" id="nos-services">
        <h1 class="titre1"><?php echo $lang['5']; ?><?php echo $lang['5b']; ?>
        </h1>
        <div class="container">

        <div class="box" data-aos="flip-up" data-aos-duration="800" data-aos-once="true" style="--clr:#01142c;">
    <div class="content">
        <div class="icon">
            <ion-icon name="finger-print-outline"></ion-icon>
        </div>
        <div class="text">
            <h2>01</h2>
            <h3><?php echo $lang['6']; ?></h3>
            <p><?php echo $lang['7']; ?></p>
            <a href="/siteweb/nosservices.php"><?php echo $lang['8']; ?></a>
        </div>
    </div>
</div>

<div class="box" data-aos="flip-up" data-aos-duration="1300" data-aos-once="true" style="--clr:#01142c;">
    <div class="content">
        <div class="icon">
            <ion-icon name="globe-outline"></ion-icon>
        </div>
        <div class="text">
            <h2>02</h2>
            <h3><?php echo $lang['9']; ?></h3>
            <p><?php echo $lang['10']; ?></p>
            <a href="/siteweb/nosservices.php"><?php echo $lang['11']; ?></a>
        </div>
    </div>
</div>

            <div class="box" data-aos="flip-up" data-aos-duration="1800" data-aos-once="true" style="--clr:#01142c;">
                <div class="content">
                    <div class="icon">
                        <ion-icon name="cloud-upload-outline"></ion-icon>
                    </div>
                    <div class="text">
                        <h2>03</h2>
                        <h3><?php echo $lang['12']; ?></h3>
                        <p><?php echo $lang['13']; ?></p>
                        <a href="/siteweb/nosservices.php"><?php echo $lang['14']; ?></a>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    
    <h1 class="par"> OUR PARTNERS</h1>
    <div class="slider">
        <div class="slide-track">
            <div class="slide">
            <img src="img/activ.png"/>
        </div>
        <div class="slide">
            <img src="img/maguen.png"/>
        </div>
        <div class="slide">
            <img src="img/amd.png"/>
        </div>
        <div class="slide">
            <img src="img/activ.png"/>
        </div>
        <div class="slide">
            <img src="img/maguen.png"/>
        </div>
        <div class="slide">
            <img src="img/amd.png"/>
        </div>
        </div>

    </div>

    <div class="sec4">
        <div class="wrapper">
            <div class="wrap">
                <div class="counter-item" data-aos="fade-up" data-aos-duration="800" data-aos-once="true">
                    <img src="img/1111" alt="">
                    <h2><?php echo $lang['15']; ?></h2>
                    <h3><?php echo $lang['16']; ?></h3>
                </div>
                <div class="counter-item" data-aos="fade-up" data-aos-duration="1000" data-aos-once="true">
                    <img src="img/2222.png" alt="">
                    <h2><?php echo $lang['17']; ?></h2>
                    <h3><?php echo $lang['18']; ?></h3>
                </div>
                <div class="counter-item" data-aos="fade-up" data-aos-duration="1200" data-aos-once="true">
                    <img src="img/3333.png" alt="">
                    <h2><?php echo $lang['19']; ?></h2>
                    <h3><?php echo $lang['20']; ?></h3>
                </div>
                <div class="counter-item" data-aos="fade-up" data-aos-duration="1400" data-aos-once="true">
                    <img src="img/4444.png" alt="">
                    <h2><?php echo $lang['21']; ?></h2>
                    <h3><?php echo $lang['22']; ?></h3>
                </div>
                <div class="counter-item" data-aos="fade-up" data-aos-duration="1600" data-aos-once="true">
                    <img src="img/5555.png" alt="">
                    <h2><?php echo $lang['23']; ?></h2>
                    <h3><?php echo $lang['24']; ?></h3>
                </div>
            </div>
        </div>
    </div>



    <div class="icon-bar">
        <a  href="https://facebook.com" target="_blank" class="facebook">
            <i class="fab fa-facebook"></i>
        </a>
        <a href="https://twitter.com" target="_blank" class="twitter">
            <i class="fab fa-twitter"></i>
        </a>
        <a href="https://google.com" target="_blank" class="google">
            <i class="fab fa-google"></i>
        </a>
        <a href="https://linkedin.com" target="_blank" class="linkedin">
            <i class="fab fa-linkedin"></i>
        </a>
        <a href="https://youtube.com" target="_blank" class="youtube">
            <i class="fab fa-youtube"></i>
        </a>
    </div>
    </div>
    <section class="sec8">
        <h1 class="titre2"><?php echo $lang['25']; ?><?php echo $lang['25b']; ?>
        </h1>
        <div class="container">
            
            <div class="contact-box">
                <div class="left">
                    <h1 class="stitre"style="font-family: 'Gemunu Libre', sans-serif;"><?php echo $lang['26']; ?></h1>
                    <section>
                        <i class="fa fa-map-marker fa-2x" aria-hidden="true"></i>
                        <h2><?php echo $lang['27']; ?></h2>
                        <p><?php echo $lang['28']; ?>
                             <br> <?php echo $lang['29']; ?> <br> <?php echo $lang['30']; ?>
                        </p>
                    </section>

                    <section>
                        <i class="fa fa-phone fa-2x" aria-hidden="true"></i>
                        <h2><?php echo $lang['31']; ?></h2>
                        <p>123-456-78901548</p>
                    </section>

                    <section>
                        <i class="fa fa-envelope fa-2x" aria-hidden="true"></i>
                        <h2><?php echo $lang['32']; ?></h2>
                        <p>dghdgqd@temporary.net</p>
                        <h3>CYBERSCONSULTING</h3>

                    </section>

                </div>
                <div class="right">
                    <h2 class="contactus" id="contact"><?php echo $lang['33']; ?></h2>
                <form action="<?php echo $_SERVER['PHP_SELF']?>" method="POST">
                    <table>
                    <input class="field" type="text" name="name" placeholder="<?php echo $lang['34']; ?>"  required>
                    <br>
                    
                    <input class="field" type="email" name="email"placeholder="<?php echo $lang['35']; ?>"  required>
                    <br>
                    
                    <input class="field" type="tel" name="phone" placeholder="<?php echo $lang['36']; ?>"  required>
                    <br>
                    
                    <textarea class="field" type="text "name="message"placeholder="Message"   required></textarea>
                    <br>
                    <input type="hidden" name="proteger">
                    <input class="btn" name="submit" type="submit" value="<?php echo $lang['37']; ?>">
</table>
                </form>

                    <!--<input type="text" class="field" placeholder="Your Name">
                    <input type="text" class="field" placeholder="Your Email">
                    <input type="text" class="field" placeholder="Phone">
                    <textarea placeholder="Message" class="field"></textarea>
                    <button class="btn">Send</button>-->
                </div>
                <?php 
                $host="localhost";
                $user="root";
                $pw="";
                $ndb="contactus";

                $con=mysqli_connect($host,$user,"",$ndb);

                /*if($con){
                    echo "connected";
                }else{
                    echo "no connected";
                }*/
                if(isset($_POST['submit'])){
                    $name = strip_tags(htmlspecialchars(strtolower(trim($_POST['name']))));
                    $email = strip_tags(htmlspecialchars(strtolower(trim($_POST['email']))));
                    $phone = strip_tags(htmlspecialchars(strtolower(trim($_POST['phone']))));
                    $message = strip_tags(htmlspecialchars(strtolower(trim($_POST['message']))));
                    $query = "INSERT INTO contact(name,email,phone,message)value('$name','$email','$phone','$message')";
                    mysqli_query($con,$query);

                }
                ?>
               

            </div>
        </div>
    </section>


    <script src="index.js"></script>

  


</body>
<script>
    const menuHamburger = document.querySelector(".menu-hamburger")
    const navLinks = document.querySelector(".nav-links")

    menuHamburger.addEventListener('click', () => {
        navLinks.classList.toggle('mobile-menu')
    })
</script>
<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
      AOS.init({
        duration: 3000,
        once: true,
      });
    </script>


<?php require("footer.php"); ?>

</html>