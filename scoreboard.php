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
    <!-- MAIN CSS -->
    <link rel="stylesheet" href="css/style.css"> 
</head>
<body>
       <!-- NAVBAR -->
         <!-- NAVBAR -->
    <header class="site-navbar mt-3">
        <div class="container-fluid">
          <div class="row align-items-center">
            <div class="site-logo col-6"><a href="index.html"><img src="images\cac_logo_words.png" style="width: 40%"></a></div>
  
            <nav class="mx-auto site-navigation">
              <ul class="site-menu js-clone-nav d-none d-xl-block ml-0 pl-0">
                <li><a href="index.html" >Home</a></li>
                <li><a href="challenges.html" class="nav-link active">Challenges</a></li>
                <li><a href="contact.html">Contact</a></li>
                <li><a href="about.html">About</a></li>
                <li class="d-lg-none"><a href="scoreboard.html"><span class="mr-2"></span>Scoreboard</a></li>
                <li class="d-lg-none"><a href="login.html">Log In</a></li>
              </ul>
            </nav>
            
            <div class="right-cta-menu text-right d-flex aligin-items-center col-6">
              <div class="ml-auto">
                <a href="scoreboard.html" class="btn btn-outline-white border-width-2 d-none d-lg-inline-block"><span class="mr-2 icon-add"></span>Scoreboard</a>
                <a href="login.html" class="btn btn-primary border-width-2 d-none d-lg-inline-block"><span class="mr-2 icon-lock_outline"></span>Log In</a>
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
      <div  class="container" id="live_score"></div>
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
                refresh(); }, 3000);
            }
        </script>
<body>
</html>