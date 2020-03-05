<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>scoreboard</title>
    <link rel="shortcut icon" href="ftco-32x32.png">
    
    <link rel="stylesheet" href="css/custom-bs.css">
    <link rel="stylesheet" href="css/jquery.fancybox.min.css">
    <link rel="stylesheet" href="css/bootstrap-select.min.css">
    <link rel="stylesheet" href="fonts/icomoon/style.css">
    <link rel="stylesheet" href="fonts/line-icons/style.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/animate.min.css">
    <link rel="stylesheet" href="css/navbar.css">
    <!-- MAIN CSS -->
    <link rel="stylesheet" href="css/style.css"> 
</head>
<body id="top">
  <div class="site-wrap">
       <!-- SIDE-MENU BAR -->
      <div class="site-mobile-menu site-navbar-target">
        <div class="site-mobile-menu-header" style="background-color: #002b60;height: 60px;">
          <div style="display: flex; margin:0px;">
            <div class="mt-3" style="float:right; width:50%;"><img src="images\cac_logo_words.png" style="width: 200px;"></div>
            <div class="site-mobile-menu-close mt-3" style="float:right; width:50%;">
              <span class="icon-close2 js-menu-toggle" style="float:right;">
              </span>
            </div>
          </div>
        </div>
        <div class="mobile-menu-body">
          <ul class="mobile-side-menu">
            <li class="side-menu-links"><a href="index.html">Home</a></li>
            <li class="side-menu-links"><a href="challenges.html">Challenges</a></li>
            <li class="side-menu-links"><a href="contact.html">Contact</a></li>
            <li class="side-menu-links"><a href="scoreboard.php">Scoreboard</a></li>
            <li class="side-menu-links"><a href="register.php">Sign Up</a></li>
          </ul>
        </div>
      </div>
      <!-- END OF SIDE-MENU BAR -->
      
      <!-- NAVBAR -->
      <div class="navBar">

        <div id="overlayer"></div>
        <div class="loader">
          <div class="spinner-border text-primary" role="status">
            <span class="sr-only">Loading...</span>
          </div>
        </div>

        <header class="site-navbar mt-3">
          <div class="container-fluid">
            <div class="row align-items-center">
              <div class="site-logo col-6"><a href="index.html"><img src="images\cac_logo_words.png" class="ab_logo"></a></div>

              <nav class="mx-auto site-navigation">
                <ul class="site-menu js-clone-nav d-none d-xl-block ml-0 pl-0">
                  <li><a href="index.html" class="nav-link active">Home</a></li>
                  <li><a href="challenges.html">Challenges</a></li>
                  <li><a href="contact.html">Contact</a></li>
                  <!-- <li><a href="about.html">About</a></li> -->
                  <li class="d-lg-none"><a href="scoreboard.php"><span class="mr-2"></span>Scoreboard</a></li>
                  <li class="d-lg-none"><a href="register.php"><span class="mr-2"></span>Sign Up</a></li>
                </ul>
              </nav>
              
              <div class="right-cta-menu text-right d-flex aligin-items-center col-6">
                <div class="ml-auto">
                  <a href="scoreboard.php" class="scoreboard-btn btn-outline-white border-width-2 d-none d-lg-inline-block"><span class="mr-2 icon-add"></span>Scoreboard</a>
                  <button class="signup-btn"><a href="register.php" style="color: whitesmoke;"><span class="mr-2"></span>Sign Up</a></button>
                </div>
                <a href="#" class="site-menu-toggle js-menu-toggle d-inline-block d-xl-none mt-lg-2 ml-3"><span class="icon-menu h3 m-0 p-0 mt-2"></span></a>
              </div>

            </div>
          </div>
        </header>
      </div>
      <!-- END OF NAVBAR -->
  
      <!-- HOME -->
      <section class="section-hero overlay inner-page bg-image overlay-primary" style="background-image: url('images/hero_1.jpg');" id="home-section">
        <div class="container">
          <div class="row mb-5 justify-content-center">
            <div class="col-md-7">
                <div class="p-5 mb-3 bg-white" style="min-height:300px;min-width:500px; border-radius: 6px;box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2), 0 6px 20px 0 rgba(0,0,0,0.19);">
                  <div class="container" id="live_score"></div>
                </div>
            </div>
          </div>
        </div>
      </section>

      <!-- FOOTER -->
      <footer class="site-footer">   
        <a href="#top" class="smoothscroll scroll-top">
          <span class="icon-keyboard_arrow_up"></span>
        </a>
        <div class="row text-center">
          <div class="col-12">
            <p class="copyright"><small>
              Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This website is made by <a href="https://www.africanbank.co.za/" target="_blank" >African Bank</a></small></p>
            </div>
          </div>
        </div>
      </footer>
      <!-- END OF FOOTER -->
    </div>
    <!-- SCRIPTS -->    
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/isotope.pkgd.min.js"></script>
    <script src="js/stickyfill.min.js"></script>
    <script src="js/jquery.fancybox.min.js"></script>
    <script src="js/jquery.easing.1.3.js"></script>
    
    <script src="js/jquery.waypoints.min.js"></script>
    <script src="js/jquery.animateNumber.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    
    <script src="js/bootstrap-select.min.js"></script>
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script> 
    <script type="text/javascript">
          $(document).ready( function(){
              $('#live_score').load('live_score.php');
              refresh();
          });

          function refresh()
          {
              setTimeout( function() {
              $('#live_score').load('live_score.php');
              refresh(); }, 2000);
          }
      </script>

    <script src="js/custom.js"></script>
    

<body>
</html>