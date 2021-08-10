@extends('layout')

@section('content')
    

<!DOCTYPE html>

<html lang="en">
<head>
<!-- Meta Data -->
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>WEB LARAVEL</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">

<!-- Stlylesheet -->
<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" type="text/css" />
<link rel="stylesheet" href="css/font-awesome/css/font-awesome.css" type="text/css" />
<link rel="stylesheet" href="css/style.css" type="text/css" />
<link rel="stylesheet" href="css/no-ui-slider/jquery.nouislider.css" type="text/css" />

<!-- Skin Color -->
<link rel="stylesheet" href="css/colors/green.css" id="color-skins"/>
</head>
<body>

<!-- Start Header -->
<header>
   <nav class="navbar navbar-default navbar-alt" role="navigation">
      <div class="container">
         <!-- Brand and toggle get grouped for better mobile display -->
         <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#main-nav">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            </button>
         </div>
         
         <!-- Collect the nav links, forms, and other content for toggling -->
         <div class="collapse navbar-collapse" id="main-nav">
            <ul class="nav navbar-nav  navbar-right">
               <li>
                  <a class="to-top">
                    <a href="{{route ('home')}}">
                     Home
                  </a>
               </li>
               <li class="to-section">
                  <a href="{{route ('profil')}}">
                    Profil
                  </a>
               </li>
               <li class="to-section">
                  <a href="{{route ('galeri')}}">
                     Galeri
                  </a>
               </li>
            </ul>
         </div>
         <!-- /.navbar-collapse -->
      </div>
      <!-- /.container -->
   </nav>
</header>
<!-- End Header -->

<!-- Start Home Revolution Slider Parallax Section -->
<section id="home-revolution-slider">
   <div class="hero">
      <div class="tp-banner-container">
         <div class="tp-banner">
            <ul>
               <!-- SLIDE 1 -->
               <li data-transition="fade" data-slotamount="7" data-masterspeed="2000" data-thumb="./assets/images/slider11.jpg" data-delay="10000" data-saveperformance="on" data-title="Home">
                  <img src="./assets/images/slider11.jpg" alt="slidebg1" data-bgposition="center top" data-bgfit="cover" data-bgrepeat="no-repeat">
                  
                  <!-- Home Heading -->
                  <div class="tp-caption sft"
                                        data-x="center"  
                                        data-y="260"
                                        data-speed="1200"
                                        data-start="1100"
                                        data-easing="Power3.easeInOut"
                                        data-splitin="none"
                                        data-splitout="none"
                                        data-elementdelay="0.1"
                                        data-endelementdelay="0.1"
                                        data-endspeed="300"
                                        style="z-index: 4; max-width: auto; max-height: auto; white-space:normal;">
                     <h2 class="home-heading op-1">Selamat Datang di Beranda!</h2>
                  </div>
                  <!-- Home Subheading -->
                  <div class="tp-caption home-subheading sft "
                                        data-x="center" 
                                        data-y="360" 
                                        data-speed="1200"
                                        data-start="1350"
                                        data-easing="Power3.easeInOut"
                                        data-splitin="none"
                                        data-splitout="none"
                                        data-elementdelay="0.1"
                                        data-endelementdelay="0.1"
                                        data-endspeed="300"
                                        style="z-index: 4; max-width: auto; max-height: auto; white-space:normal;">
                     <div class="op-1">Hai nama saya Dian Anggraini</div>
                  </div>
               </li>
               
               <!-- SLIDE 2 -->
               <li data-transition="fade" data-slotamount="7" data-masterspeed="2000" data-thumb="./assets/images/slider22.jpg" data-delay="10000"  data-saveperformance="on" data-title="Profil Lengkap">
                  <img src="./assets/images/slider22.jpg" alt="slidebg1" data-bgposition="center top" data-bgfit="cover" data-bgrepeat="no-repeat">
                  
                  <!-- Home Heading -->
                  <div class="tp-caption sft"
                                        data-x="center"  
                                        data-y="260"
                                        data-speed="1200"
                                        data-start="1100"
                                        data-easing="Power3.easeInOut"
                                        data-splitin="none"
                                        data-splitout="none"
                                        data-elementdelay="0.1"
                                        data-endelementdelay="0.1"
                                        data-endspeed="300"
                                        style="z-index: 4; max-width: auto; max-height: auto; white-space:normal;">
                     <h2 class="home-heading op-2">Profil Saya</h2>
                  </div>
                  <!-- Home Subheading -->
                  <div class="tp-caption home-subheading sft fadeout"
                                        data-x="center" 
                                        data-y="360" 
                                        data-speed="1200"
                                        data-start="1350"
                                        data-easing="Power3.easeInOut"
                                        data-splitin="none"
                                        data-splitout="none"
                                        data-elementdelay="0.1"
                                        data-endelementdelay="0.1"
                                        data-endspeed="300"
                                        style="z-index: 4; max-width: auto; max-height: auto; white-space:normal;">
                     <div class="op-2">Ini adalah termasuk biodata lengkap saya</div>
                  </div>
                  <!-- Home Button -->
                  <div class="tp-caption home-button sft fadeout"
                                        data-x="center" 
                                        data-y="400" 
                                        data-speed="1200"
                                        data-start="1550"
                                        data-easing="Power3.easeInOut"
                                        data-splitin="none"
                                        data-splitout="none"
                                        data-elementdelay="0.1"
                                        data-endelementdelay="0.1"
                                        data-endspeed="300"
                                        style="z-index: 4; max-width: auto; max-height: auto; white-space:normal;">
                  </div>
               </li>
               
               <!-- SLIDE 3 -->
               <li data-transition="fade" data-slotamount="7" data-masterspeed="2000" data-thumb="./assets/images/slider333.jpg" data-delay="10000"  data-saveperformance="on" data-title="Galeri">
                  <img src="./assets/images/slider333.jpg" alt="slidebg1" data-bgposition="center top" data-bgfit="cover" data-bgrepeat="no-repeat">
                  
                  <!-- Home Heading -->
                  <div class="tp-caption sft"
                                        data-x="center"  
                                        data-y="260"
                                        data-speed="1200"
                                        data-start="1100"
                                        data-easing="Power3.easeInOut"
                                        data-splitin="none"
                                        data-splitout="none"
                                        data-elementdelay="0.1"
                                        data-endelementdelay="0.1"
                                        data-endspeed="300"
                                        style="z-index: 4; max-width: auto; max-height: auto; white-space:normal;">
                     <h2 class="home-heading op-3">Galeri</h2>
                  </div>
                  <!-- Home Subheading -->
                  <div class="tp-caption home-subheading sft fadeout"
                                        data-x="center" 
                                        data-y="360" 
                                        data-speed="1200"
                                        data-start="1350"
                                        data-easing="Power3.easeInOut"
                                        data-splitin="none"
                                        data-splitout="none"
                                        data-elementdelay="0.1"
                                        data-endelementdelay="0.1"
                                        data-endspeed="300"
                                        style="z-index: 4; max-width: auto; max-height: auto; white-space:normal;">
                     <div class="op-3">Halaman ini berisi tentang berbagai moment yang sempat saya abadikan</div>
                  </div>
                  <!-- Home Button -->
                  <div class="tp-caption home-button sft fadeout"
                                        data-x="center" 
                                        data-y="400" 
                                        data-speed="1200"
                                        data-start="1550"
                                        data-easing="Power3.easeInOut"
                                        data-splitin="none"
                                        data-splitout="none"
                                        data-elementdelay="0.1"
                                        data-endelementdelay="0.1"
                                        data-endspeed="300"
                                        style="z-index: 4; max-width: auto; max-height: auto; white-space:normal;">
                  </div>
               </li>
            </ul>
            <div class="tp-bannertimer"></div>
         </div>
         <div class="home-bottom">
            <div class="container text-center">
               <div class="move bounce">
                  </a>
               </div>
            </div>
         </div>
      </div>
   </div>
</section>
<!-- End Home Revolution Slider Parallax Section -->

<div class="site-wrapper content">
   <!-- Start Google Map Section -->
   <div id="map"></div>
   <!-- End Google Map Section -->
   
   <!-- Start Footer 1 -->
   <footer id="footer">
      <!-- End Footer Widgets -->
      
      <div class="footer-copyright">
         <div class="container">
            <div class="row">
               <div class="col-md-12 text-center">
                  <h3 class="section-title wow fadeInUp">Website Laravel</h3>
                  <p class="wow fadeInUp"> All Rights Reserved. Copyright © 2021 
                  </p>
                  <ul class="social-icons subheading">
                     <li>
                        <a href="https://twitter.com/_">
                           <i class="icon ion-social-twitter"></i>
                        </a>
                     </li>
                     <li>
                        <a href="https://web.facebook.com/">
                           <i class="icon ion-social-facebook"></i>
                        </a>
                     </li>
                     <li>
                        <a href="https://www.instagram.com/">
                           <i class="icon ion-social-instagram-outline"></i>
                        </a>
                     </li>
                  </ul>
               </div>
            </div>
         </div>
      </div>
      <!-- End Footer Copyright -->
      
   </footer>
   <!-- End Footer 1 -->
   
</div>
<!-- End Site Wrapper -->
<!-- jQuery -->
<script type="text/javascript" src="js/plugins/jquery.min.js"></script>
<script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
<script type="text/javascript" src="js/plugins/moderniz.min.js"></script>
<script type="text/javascript" src="js/plugins/smoothscroll.min.js"></script>
<script type="text/javascript" src="js/no-ui-slider/jquery.nouislider.all.min.js"></script>
<script type="text/javascript" src="js/plugins/revslider.min.js"></script>
<script type="text/javascript" src="js/plugins/waypoints.min.js"></script>
<script type="text/javascript" src="js/plugins/parallax.min.js"></script>
<script type="text/javascript" src="js/plugins/easign1.3.min.js"></script>
<script type="text/javascript" src="js/plugins/cubeportfolio.min.js"></script>
<script type="text/javascript" src="js/plugins/owlcarousel.min.js"></script>
<script type="text/javascript" src="js/plugins/tweetie.min.js"></script>
<script type="text/javascript" src="http://maps.googleapis.com/maps/api/js"></script>
<script type="text/javascript" src="js/plugins/gmap3.min.js"></script>
<script type="text/javascript" src="js/plugins/wow.min.js"></script>
<script type="text/javascript" src="js/plugins/counterup.min.js"></script>
<script type="text/javascript" src="js/scripts.js"></script>
</body>
</html>


@endsection