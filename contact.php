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

    <!-- COSTUM CSS -->
    <link rel="stylesheet" href="contact.css" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">


</head>
<?php include("header2.php"); ?>
<?php require("contactform.php"); ?>
<?php require("footer.php"); ?>
<script>
    const menuHamburger = document.querySelector(".menu-hamburger")
    const navLinks = document.querySelector(".nav-links")

    menuHamburger.addEventListener('click', () => {
        navLinks.classList.toggle('mobile-menu')
    })
</script>