
<?php 
include('aio.php')

?>


<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <title>Cybersconsulting</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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

    <!-- COSTUM CSS -->
    <link rel="stylesheet" href="nosservices.css" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">

    <script src="https://cdn.lordicon.com/ritcuqlt.js"></script>
</head>
<?php include("header3.php"); ?>
<body>

<section class="services">
     <div class="container1">
       <h2 class="section-title">
       <?php echo $lang['47']; ?> <br/> <?php echo $lang['48']; ?>
       </h2>
       
       <div class="list-services">
         <div class="service-box" data-aos="fade-right" data-aos-duration="1000" data-aos-once="true">
         <i class="fas fa-light fa-fingerprint fa-2x icon"></i>
           <p class="text">
           <?php echo $lang['49']; ?>
           </p>
           <h3 class="title"><?php echo $lang['50']; ?></h3>
         </div>
         <div class="service-box" data-aos="fade-right" data-aos-duration="1500" data-aos-once="true">
         <i class="fas fa-light fa-globe fa-2x icon"></i>
           <p class="text">
           <?php echo $lang['51']; ?>
           </p>
           <h3 class="title"><?php echo $lang['52']; ?></h3>
         </div>
         <div class="service-box" data-aos="fade-right" data-aos-duration="2000" data-aos-once="true">
         <i class="fas fa-light fa-cloud-arrow-up fa-2x icon"></i>
           <p class="text">
           <?php echo $lang['53']; ?>
           </p>
           <h3 class="title"><?php echo $lang['54']; ?></h3>
         </div>
       </div>
     </div>
  </section>
</body>
<?php require("footer.php"); ?>
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
</html>