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
  </head>

    <!-- COSTUM CSS -->
    <link rel="stylesheet" href="admin.css" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">

    <script src="https://cdn.lordicon.com/ritcuqlt.js"></script>
</head>
<body>
  <header>
    <hgroup>
      <h1>Example Client Website Name</h1>
      <a href="/siteweb/index.php">&larr; visit website</a>
    </hgroup>
  </header>

  <nav>
    <ul>
      <li><a class="brick dashboard" href="#"><span class='icon'>S</span>Dashboard</a></li>
      <li><a class="brick pages" href="#"><span class='icon'>K</span>Pages</a></li>
      <li><a class="brick navigation" href="#"><span class='icon'>4</span>Navigation</a></li>
      <li><a class="brick users" href="#"><span class='icon'>f</span>Users</a></li>
      <li><a class="brick settings" href="#"><span class='icon'>w</span>Website Settings</a></li>
    </ul>
  </nav>

  <div id="content" class="pages">

    <header>
      <div class="brick identify">
        <span class="icon page">K</span>
      </div>

      <div class="brick title">
        <h2>Home Page</h2>
      </div>

      <div class="brick close">
        <span class="text">Close</span>
        <span class="icon page">u</span>
      </div>


      <div class="brick save">
        <span class="text">Save</span>
        <span class="icon page">%</span>
      </div>

    </header>



    <div class="brick closed">
      <hgroup>
        <h2>Main Headline</h2>
        <a href="#" class="icon close">u</a>
        <form>
          <input type="text" />
        </form>
      </hgroup>
    </div>

    <div class="brick closed">
      <hgroup>
        <h2>About Me</h2>
        <a href="#" class="icon close">u</a>
        <form>
          <textarea></textarea>
        </form>
      </hgroup>
    </div>

    <div class="brick closed">
      <hgroup>
        <h2>Gallery</h2>
        <a href="#" class="icon close">u</a>
        <form>
          <textarea></textarea>
        </form>
      </hgroup>
    </div>

    <div class="brick closed">
      <hgroup>
        <h2>Page Settings</h2>
        <a href="#" class="icon close">u</a>
        <form>
          <textarea></textarea>
        </form>
      </hgroup>
    </div>


  </div>

  <footer>

  </footer>
  <script>
    $(function(){

$(document).on('click touchstart', '.brick.closed', function(event){
  var _this = $(this)
  _this.animate({'width': '100%'}, 'fast', function(){
    _this.removeClass('closed');
    _this.addClass('open');
  })
});

$(document).on('click touchstart', '.brick a.close', function(event){
  var _brick = $(this).closest('.brick');
  // console.log(_brick);
  _brick.animate({'width': '120px'}, 'fast', function(){
    _brick.removeClass('open');
    _brick.addClass('closed');
  })
});


});
    </script>
</body>
</html>
