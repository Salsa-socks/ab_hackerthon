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
    

    <!-- MAIN CSS -->
    <link rel="stylesheet" href="css/style.css">    
  </head>
  <body id="top">

  <div id="overlayer"></div>
  <div class="loader">
    <div class="spinner-border text-primary" role="status">
      <span class="sr-only">Loading...</span>
    </div>
  </div>
    

<div class="site-wrap">

    <div class="site-mobile-menu site-navbar-target">
      <div class="site-mobile-menu-header">
        <div class="site-mobile-menu-close mt-3">
          <span class="icon-close2 js-menu-toggle"></span>
        </div>
      </div>
      <div class="site-mobile-menu-body"></div>
    </div> 
  
    <!-- NAVBAR -->
    <header class="site-navbar mt-3">
      <div class="container-fluid">
        <div class="row align-items-center">
          <div class="site-logo col-6"><a href="index.html"><img src="images\cac_logo_words.png" style="width: 40%"></a></div>

          <nav class="mx-auto site-navigation">
            <ul class="site-menu js-clone-nav d-none d-xl-block ml-0 pl-0">
              <li><a href="index.html" >Home</a></li>
              <li><a href="challenges.html">Challenges</a></li>
              <li><a href="contact.html">Contact</a></li>
              <!-- <li><a href="about.html">About</a></li> -->
              <li class="d-lg-none"><a href="scoreboard.html"><span class="mr-2"></span>Scoreboard</a></li>
              <li class="d-lg-none"><a href="register.php" class="nav-link active"><span class="mr-2"></span>Sign Up</a></li>
            </ul>
          </nav>
          
          <div class="right-cta-menu text-right d-flex aligin-items-center col-6">
            <div class="ml-auto">
              <a href="scoreboard.html" class="btn btn-outline-white border-width-2 d-none d-lg-inline-block"><span class="mr-2 icon-add"></span>Scoreboard</a>
            </div>
            <a href="#" class="site-menu-toggle js-menu-toggle d-inline-block d-xl-none mt-lg-2 ml-3"><span class="icon-menu h3 m-0 p-0 mt-2"></span></a>
          </div>
        </div>
      </div>
    </header>

    <!-- HOME -->
    <section class="section-hero overlay inner-page bg-image" style="background-image: url('images/hero_1.jpg');" id="home-section">
      <div class="container">
        <div class="row">
          <div class="col-md-7">
          </div>
        </div>
      </div>
    </section>

    <section class="site-section">
      <div class="container">
<<<<<<< HEAD
=======
<<<<<<<< HEAD:register.php
>>>>>>> 8101c0a5a9dff5f5a73f6191a1bf3f14c93f27e5
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
        <div class="row mb-5 justify-content-center">
          <div class="col-lg-6 mb-5">
            <h2 class="mb-4">Sign Your Team Up</h2>
            <form method="post" action="back_end/register_info-check.php" class="p-4 border rounded">
<<<<<<< HEAD
=======
========
        <div class="row mb-5 justify-content-center">
          <div class="col-lg-6">
            <h2 class="mb-4">Log in</h2>
            <form action="#" class="p-4 border rounded">
>>>>>>>> 8101c0a5a9dff5f5a73f6191a1bf3f14c93f27e5:login.html
>>>>>>> 8101c0a5a9dff5f5a73f6191a1bf3f14c93f27e5

              <div class="row form-group">
                <div class="col-md-12 mb-3 mb-md-0">
                  <label class="text-black" for="fname">Team Name</label>
                  <input type="text" id="Tname" class="form-control" placeholder="Team Name" name="Team_name" required>
                </div>
              </div>
<<<<<<< HEAD

              <div class="row form-group">
=======
<<<<<<<< HEAD:register.php

              <div class="row form-group">
========
              <div class="row form-group mb-4">
>>>>>>>> 8101c0a5a9dff5f5a73f6191a1bf3f14c93f27e5:login.html
>>>>>>> 8101c0a5a9dff5f5a73f6191a1bf3f14c93f27e5
                <div class="col-md-12 mb-3 mb-md-0">
                  <label class="text-black" for="fname">1st Member</label>
                  <input type="text" id="fname" class="form-control" placeholder="First name" name="1st_name" required>
                  <input type="text" id="sname" class="form-control" placeholder="Surname" name="1st_surname" required>
                  <input type="text" id="email" class="form-control" placeholder="Email" name="1st_email" required>
                </div>
              </div>
<<<<<<< HEAD
=======
<<<<<<<< HEAD:register.php
>>>>>>> 8101c0a5a9dff5f5a73f6191a1bf3f14c93f27e5

              <div class="row form-group">
                <div class="col-md-12 mb-3 mb-md-0">
                  <label class="text-black" for="fname">2nd Member</label>
                  <input type="text" id="fname" class="form-control" placeholder="First name" name="2nd_name" required>
                  <input type="text" id="sname" class="form-control" placeholder="Surname" name="2nd_surname" required>
                  <input type="text" id="email" class="form-control" placeholder="Email" name="2nd_email" required>
                </div>
              </div>

              <div class="row form-group">
                <div class="col-md-12 mb-3 mb-md-0">
                  <label class="text-black" for="fname">3rd Member</label>
                  <input type="text" id="fname" class="form-control" placeholder="First name" name="3rd_name" required>
                  <input type="text" id="sname" class="form-control" placeholder="Surname" name="3rd_surname" required>
                  <input type="text" id="email" class="form-control" placeholder="Email" name="3rd_email" required>
                </div>
              </div>

              <div class="row form-group">
                <div class="col-md-12 mb-3 mb-md-0">
                  <label class="text-black" for="fname">4th Member (Optional)</label>
                  <input type="text" id="fname" class="form-control" placeholder="First name" name="4th_name">
                  <input type="text" id="sname" class="form-control" placeholder="Surname" name="4th_surname">
                  <input type="text" id="email" class="form-control" placeholder="Email" name="4th_email">
                </div>
              </div>

              <div class="row form-group">
                <div class="col-md-12 mb-3 mb-md-0">
                  <label class="text-black" for="fname">5th Member (Optional)</label>
                  <input type="text" id="fname" class="form-control" placeholder="First name" name="5th_name">
                  <input type="text" id="sname" class="form-control" placeholder="Surname" name="5th_surname">
                  <input type="text" id="email" class="form-control" placeholder="Email" name="5th_email">
                </div>
              </div>

              <div class="row form-group">
                <div class="col-md-12">
                  <input type="submit" value="Sign Up" class="btn px-4 btn-primary text-white">
<<<<<<< HEAD
                </div>
              </div>

=======
========

              <div class="row form-group">
                <div class="col-md-12">
                  <input type="submit" value="Log In" class="btn px-4 btn-primary text-white">
                </div>
              </div>
            </form>
            <form action="register.html" class="p-4 border rounded">
              <div class="row form-group">
                <div class="col-md-12">
                  <label class="text-black">Don't have an account?</label>
                  <a href="register.html">
                    <button class="btn px-4 btn-primary text-white">Register</button>
                  </a>
>>>>>>>> 8101c0a5a9dff5f5a73f6191a1bf3f14c93f27e5:login.html
                </div>
              </div>
>>>>>>> 8101c0a5a9dff5f5a73f6191a1bf3f14c93f27e5
            </form>
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