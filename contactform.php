
<!DOCTYPE html>
<html lang="en">
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

<section class="sec8">
        <h1 class="titre1"><?php echo $lang['25']; ?>
        </h1>
        <div class="container">
            
            <div class="contact-box">
                <div class="left">
                    <h1 class="stitre" style="font-family: 'Gemunu Libre', sans-serif;"><?php echo $lang['26']; ?></h1>
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
                    <h2 class="contactus" id="contact">Contact Us</h2>
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

                $con=mysqli_connect($host,$user,$pw,$ndb);

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
                <div class="icon-bar">
        <a href="https://facebook.com" target="_blank" class="facebook">
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
               

           