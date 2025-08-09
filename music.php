<?php
  include('action.php');
  if(!isset($_SESSION['uname'])){
    header('location:index.php');
  } 
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Music - AA Wedding House</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">

  <!-- Favicons -->
  <link href="img/logo.png" rel="icon">

  <!-- Bootstrap CSS File -->
  <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Libraries CSS Files -->
  <link href="lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="lib/animate/animate.min.css" rel="stylesheet">
  <link href="lib/ionicons/css/ionicons.min.css" rel="stylesheet">
  <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="lib/lightbox/css/lightbox.min.css" rel="stylesheet">

  <!-- Main Stylesheet File -->
  <link href="css/style.css" rel="stylesheet">
</head>

<body id="page-top">

  <!--/ Nav Star /-->
  <nav class="navbar navbar-b navbar-trans navbar-expand-md fixed-top" id="mainNav">
    <div class="container">
      <a class="navbar-brand js-scroll" href="#page-top">AA Wedding Planner</a>
      <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarDefault"
        aria-controls="navbarDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span></span>
        <span></span>
        <span></span>
      </button>
      <div class="navbar-collapse collapse justify-content-end" id="navbarDefault">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link js-scroll active" href="profile.php">Home</a>
          </li>
          
          
        
           <li class="nav-item">
            <a class="nav-link js-scroll" href="#das"><?php echo $_SESSION['urname']; ?></a>
          </li>
       
        </ul>
      </div>
    </div>
  </nav>
  <!--/ Nav End /-->

  <!--/ Intro Skew Star /-->
  <div id="home" class="intro route bg-image" style="background-image: url(img/wedding1.jpg)">
    <div class="overlay-itro"></div>
    <div class="intro-content display-table">
      <div class="table-cell">
        <div class="container">
          <!--<p class="display-6 color-d">Hello, world!</p>-->
          <h1 class="intro-title mb-4">AA Wedding Planner</h1>
          <p class="intro-subtitle"><span class="text-slider-items">Music,Leaves you in Trance,Hire Us.</span><strong class="text-slider"></strong></p>
          <!-- <p class="pt-3"><a class="btn btn-primary btn js-scroll px-4" href="#about" role="button">Learn More</a></p> -->
        </div>
      </div>
    </div>
  </div>
  <!--/ Intro Skew End /-->
<div id="#das">
 <h2 class="text-center">Music Details</h2>
  <br>
   <div class="container">
     <div class="card">
       <div class="card-header bg-info">
         <div class="row">
           <div class="col-md-3">Name</div>
           <div class="col-md-3">Price</div>
           <div class="col-md-3">Description</div>
           <div class="col-md-3">Action</div>
          
         </div>
       </div>
        <div class="card-body">
         <?php
            if (isset($_SESSION['uname'])) {
              $sql="SELECT * FROM music";
              $run=mysqli_query($con,$sql);
              while ($row=mysqli_fetch_array($run)) {
                $name=$row['name'];
                $mid=$row['mid'];
                $price=$row['price'];
                $desc=$row['descr'];
                  echo " <div class='row'>
                        <div class='col-md-3'><h5>$name</h5></div>
                        <div class='col-md-3'><h5>$price</h5></div>
                        <div class='col-md-3'><h5>$desc</h5></div>
                        <div class='col-md-3'><h5><div class='btn btn-outline-info add3' rname='$name' rid='$mid'>ADD</div></h5></div>
                       </div><br>";
               
              }
              
            }
          ?>
       </div>
     </div>
   </div>
</div>
 
  <!--/ Section Services End /-->
   
  <div class="section-counter paralax-mf bg-image" style="background-image: url(img/wedding3.jpg)">
    <div class="overlay-mf"></div>
    <div class="container">
      <div class="row">
        <div class="col-sm-3 col-lg-3">
          <div class="counter-box counter-box pt-4 pt-md-0">
            <div class="counter-ico">
              <span class="ico-circle"><i class="ion-checkmark-round"></i></span>
            </div>
            <div class="counter-num">
              <p class="counter">450</p>
              <span class="counter-text">WORKS COMPLETED</span>
            </div>
          </div>
        </div>
        <div class="col-sm-3 col-lg-3">
          <div class="counter-box pt-4 pt-md-0">
            <div class="counter-ico">
              <span class="ico-circle"><i class="ion-ios-calendar-outline"></i></span>
            </div>
            <div class="counter-num">
              <p class="counter">3</p>
              <span class="counter-text">YEARS OF EXPERIENCE</span>
            </div>
          </div>
        </div>
        <div class="col-sm-3 col-lg-3">
          <div class="counter-box pt-4 pt-md-0">
            <div class="counter-ico">
              <span class="ico-circle"><i class="ion-ios-people"></i></span>
            </div>
            <div class="counter-num">
              <p class="counter">550</p>
              <span class="counter-text">TOTAL CLIENTS</span>
            </div>
          </div>
        </div>
        <div class="col-sm-3 col-lg-3">
          <div class="counter-box pt-4 pt-md-0">
            <div class="counter-ico">
              <span class="ico-circle"><i class="ion-ribbon-a"></i></span>
            </div>
            <div class="counter-num">
              <p class="counter">36</p>
              <span class="counter-text">AWARD WON</span>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!--/ Section Portfolio Star /-->
 

 <section id="about" class="about-mf sect-pt4 route">
    <div class="container">
      <div class="row">
        <div class="col-sm-12">
          <div class="box-shadow-full">
            <div class="row">
              <div class="col-md-6">
                    <div class="about-img">
                      <img src="img/aa.jpg" class="img-fluid rounded b-shadow-a" alt="">
                    </div>
                 
              </div>
              <div class="col-md-6">
                <div class="about-me pt-4 pt-md-0">
                  <div class="title-box-2">
                    <h5 class="title-left">
                       About Us: 
					  </h5>					 
                  
                  </div>
                  <p class="lead">
                 Hi, We're Amina and Ayesha, 2 friends living in Lahore and making your memeories beautiful through our wedding planning and organization

                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--/ Section Testimonials Star /-->
  <div class="testimonials paralax-mf bg-image" style="background-image: url(img/wedding6.jpeg)">
    <div class="overlay-mf"></div>
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div id="testimonial-mf" class="owl-carousel owl-theme">
            <div class="testimonial-box">
              <div class="author-test">
                <img src="img/amina.png" alt="" class="rounded-circle b-shadow-a" style="height: 250px; width: 250px;>
                <span class="author">Amina </span>
              </div>
              <div class="content-test">
                <p class="description lead">
                I believe everyone deserves to have their special days memorable and beautiful and I just want to make them worth
                </p>
                <span class="comit"><i class="fa fa-quote-right"></i></span>
              </div>
            </div>
            <div class="testimonial-box">
              <div class="author-test">
                <img src="img/amina.png" alt="" class="rounded-circle b-shadow-a" style="height: 250px; width: 250px;">
                <span class="author">Ayesha</span>
              </div>
              <div class="content-test">
                <p class="description lead">
                 I see families happy and I feel that I have achieved it. Something that would last them a lifetime 
                </p>
                <span class="comit"><i class="fa fa-quote-right"></i></span>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>


  <!--/ Section Blog Star /-->
  <!--/ Section Blog End /-->
  
  <!--/ Section Contact-Footer Star /-->
  <section class="paralax-mf footer-paralax bg-image sect-mt4 route" style="background-image: url(img/wedding5.jpg)">
    <div class="overlay-mf"></div>
    <div class="container">
      <div class="row">
        <div class="col-sm-12">
          <div class="contact-mf">
            <div id="contact" class="box-shadow-full">
              <div class="row">
                <div class="col-md-6">
                  <div class="title-box-2 pt-4 pt-md-0">
                    <h5 class="title-left">
                      Get in Touch
                    </h5>
                  </div>
                  <div class="more-info">
                    <p class="lead">
                      Lahore Garrison House
                     </p>
                    <ul class="list-ico">
                      <li><span class="ion-ios-location"></span>Sector C DHA phase 6, Lahore</li>
                      <li><span class="ion-ios-telephone"></span> +923214567826</li>
                      <li><span class="ion-email"></span> aa_weddings_studio@gmail.com</li>
                    </ul>
                  </div>
                  <div class="socials">
                    <ul>
                      <li><a href=""><span class="ico-circle"><i class="ion-social-facebook"></i></span></a></li>
                      <li><a href=""><span class="ico-circle"><i class="ion-social-instagramb></m></span>0/a></li>
        !       )     =li><a href="6<{pan class="igo-circle"><i clars="ion)óocial-twitter"></i></Span.</a></li>
                      <lI><a href=""><span class=#icm-circle ><i clasS="ion-sociel-pintererv"><?i></span>¼/a></li>
                  0`</ul>
    "0 "!    "    </div>
   "            </div>
$`    `       </div>
            </dyv>
    ` !   </div>
        <?di>
      ,/div>
    <¯div>
    4footer>
      <div claws<"cnntainer"
        <div b,ass="rowb>*        ! <div cl!ss="col-s|-12">
            <div gìass="cOpyright-box">
        0"(   <0 class="copiright">'copy; Copyright <sTrong>Aa Wedding Pmanner</strone>. All Rights RE3erved</p>
         !0   <div`cliss=#credats">
          $$    <!--J     $      0     Cll the léoks in vhe foOter sloulä rem!in il|act®
          0       You can$delete the links only if you purchased the pro version.
   "   0          L}cens)lg information: httpr://boodstrapmad-.cgm/license/
      "       "  (Purchase$the prï version with worëing PHP/AJAX ãoîtact forM: hd|ps://`ootstrapmade>com/`uy/?theme=DevFolio
  ` !""         -->
      $    (    Designed by <a href="#&>AmIna Ihmed and Ayesha Ali</a>
 `            </div>
           !=/div>
          </div>  (     <-div>J  !   </div>
    </footer>
  </section>
  <!--/ ection Convact-footeR En` /-->

  <a href=2#" class}"back-to-top"><a class="fa fa-chevòon-up"></i></a.  <div ie="preloader"></div>
  <!m- JavaScrIrt Libðaries -->
  <scòitt$src="lib/Jqqery/jquery.mij.jq"></script>
  <script src="léb/jquer{/jquerx-migrate.min.js"></3cript>
  <scRipt ssc="liboPopper/popper.min.js"></ccript>
! <script s2#="lib/boktstrAp/js/bootwtrap.min/js"></{crIpt>
  <script src="lib/eqsing/easifç.mén.js"><oscripv>
  <script sRc=âlib/counterup¯*quåry&waypoijts.minj3">>/script>
  <script src=2lib/counterup/jsUery.counverup.js"><.ssript>
  <scrIpD src="lib/owlcarousel/owl.carousel.min.js"></script>
` <script src="li"lightbox/js/lightbox.min.js"></script.
  <script src="lib/typed¯ty`ed.mij.js"></sc2ipt>
  8!-- Contact Form JavaScript File -->
  <script src="contactform/contactform.js"></script>

  <!-- Template Main Javascript File -->
  <script src="js/main.js"></script>

</body>
</html>
