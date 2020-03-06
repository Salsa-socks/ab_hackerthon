<?php
session_start();
?>

<!doctype html>
<html lang="en">
  <head>
    <title>AB HaCkeRthon</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    
    <link rel="stylesheet" href="css/custom-bs.css">
    <link rel="stylesheet" href="css/jquery.fancybox.min.css">
    <link rel="stylesheet" href="css/bootstrap-select.min.css">
    <link rel="stylesheet" href="fonts/icomoon/style.css">
    <link rel="stylesheet" href="fonts/line-icons/style.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/animate.min.css">
    <link rel="stylesheet" href="css/quill.snow.css">
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
                  <li><a href="index.html">Home</a></li>
                  <li><a href="challenges.html">Challenges</a></li>
                  <li><a href="register.php" class="nav-link active">Sign Up</a></li>
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
    <section class="pt-5 fixed overlay-primary bg-image overlay" style="background-image: url('images/hero_1.jpg');" id="home-section">
      <div class="container">

      <?php
        if (isset($_SESSION['error']))
        {?>
          <div class="row mb-5 justify-content-center" style="color: green; font-size: 35px;">
            <?php echo $_SESSION['error'];
            $_SESSION['error'] = null; ?>
          </div>
        <?php
        }
        ?>
        <h1 class="text-white font-weight-bold">Sign Your Team Up</h1>
        <div class="row">
          <div class="col-lg-6 mb-5 mb-lg-0">
            <form method="post" action="back_end/register_info-check.php" class="">

              <div class="row form-group">
                <div class="col-md-12">
                  <label class="text-white" for="fname">Team Name</label>
                  <input type="text" id="Tname" class="form-control" placeholder="Team Name" name="Team_name" required>
                </div>
              </div>

              <div class="row form-group">
                <div class="col-md-6 mb-3 mb-md-0">
                  <label class="text-white" for="fname">1st Member</label>
                  <input type="text" id="fname" class="form-control" placeholder="First name" name="1st_name" required>
                  <input type="text" id="sname" class="form-control" placeholder="Surname" name="1st_surname" required>
                  <input type="text" id="email" class="form-control" placeholder="Email" name="1st_email" required>
                </div>
                <div class="col-md-6 mb-3 mb-md-0">
                  <label class="text-white" for="fname">2nd Member</label>
                  <input type="text" id="fname" class="form-control" placeholder="First name" name="2nd_name" required>
                  <input type="text" id="sname" class="form-control" placeholder="Surname" name="2nd_surname" required>
                  <input type="text" id="email" class="form-control" placeholder="Email" name="2nd_email" required>
                </div>
              </div>

              <div class="row form-group">
                <div class="col-md-6 mb-3 mb-md-0">
                  <label class="text-white" for="fname">3rd Member</label>
                  <input type="text" id="fname" class="form-control" placeholder="First name" name="3rd_name" required>
                  <input type="text" id="sname" class="form-control" placeholder="Surname" name="3rd_surname" required>
                  <input type="text" id="email" class="form-control" placeholder="Email" name="3rd_email" required>
                </div>
                <div class="col-md-6 mb-3 mb-md-0">
                  <label class="text-white" for="fname">4th Member (Optional)</label>
                  <input type="text" id="fname" class="form-control" placeholder="First name" name="4th_name">
                  <input type="text" id="sname" class="form-control" placeholder="Surname" name="4th_surname">
                  <input type="text" id="email" class="form-control" placeholder="Email" name="4th_email">
                </div>
              </div>

              <div class="row form-group">
                <div class="col-md-6 mb-3 mb-md-0">
                  <label class="text-white" for="fname">5th Member (Optional)</label>
                  <input type="text" id="fname" class="form-control" placeholder="First name" name="5th_name">
                  <input type="text" id="sname" class="form-control" placeholder="Surname" name="5th_surname">
                  <input type="text" id="email" class="form-control" placeholder="Email" name="5th_email">
                </div>
              </div>

              <div class="row form-group">
                <div class="col-md-12">
                  <input type="submit" value="Sign Up" class="sendmsg-btn px-4 btn-primary text-white">
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </section>
    
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
    <script src="js/quill.min.js"></script>
    
    
    <script src="js/bootstrap-select.min.js"></script>
    
    <script src="js/custom.js"></script>
   
   
     
  </body>
</html>