<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>M-SEND | Mang-Jek</title>

  <link rel="shortcut icon" href="<?php echo base_url() ?>asset/images/logo.jpg">
  <link rel="apple-touch-icon-precomposed" sizes="144x144" href="<?php echo base_url() ?>asset/images/ico/apple-touch-icon-144-precomposed.png">
  <link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?php echo base_url() ?>asset/images/ico/apple-touch-icon-114-precomposed.png">
  <link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?php echo base_url() ?>asset/images/ico/apple-touch-icon-72-precomposed.png">
  <link rel="apple-touch-icon-precomposed" href="<?php echo base_url() ?>asset/images/ico/apple-touch-icon-57-precomposed.png">

  <link href="<?php echo base_url() ?>/asset/css/mislider.css" rel="stylesheet">
  <link href="<?php echo base_url() ?>/asset/css/mislider-skin-cameo.css" rel="stylesheet">

  <link href="<?php echo base_url() ?>asset/css/bootstrap.min.css" rel="stylesheet">
  <link href="<?php echo base_url() ?>asset/css/font-awesome.min.css" rel="stylesheet">
  <link href="<?php echo base_url() ?>asset/css/main.css" rel="stylesheet">
  <!-- <link href="<?php echo base_url() ?>asset/css/style_kelebihan_animate.css" rel="stylesheet">   -->
  <link href="<?php echo base_url() ?>asset/css/style.css" rel="stylesheet">

  <link href="<?php echo base_url() ?>asset/css/style3.css" rel="stylesheet">
  <link href="<?php echo base_url() ?>asset/css/responsive_new.css" rel="stylesheet">
  <link href="<?php echo base_url() ?>asset/css/simple-sidebar.css" rel="stylesheet">
  <link href="<?php echo base_url() ?>asset/css/style_fitur.css" rel="stylesheet">
  <!--   <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>asset/css/style_drop_down.css" media="all" />  -->
  <!--   <link href="<?php echo base_url() ?>asset/css/style_kelebihan.css" rel="stylesheet"> -->
  <link rel="stylesheet" type="text/css" href="<?php echo base_url()?>asset/css/jquery.fullPage.css" />
  

  
  <!-- <link rel="stylesheet" type="text/css" href="<?php echo base_url()?>asset/css/examples.css" /> -->

    <!--[if IE]>
        <script type="text/javascript">
             var console = { log: function() {} };
        </script>
        <![endif]-->

        <script src="<?php echo base_url() ?>/asset/js/jquery-3.1.1.js"></script>
        <!-- <script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.9.1/jquery-ui.min.js"></script> -->

        <script type="text/javascript" src="<?php echo base_url()?>asset/js/scrolloverflow.js"></script>

        <script type="text/javascript" src="<?php echo base_url()?>asset/js/jquery.fullPage.js"></script>
        <!-- <script type="text/javascript" src="<?php echo base_url()?>asset/js/examples.js"></script> -->

        <script type="text/javascript">
          $(document).ready(function() {
            $('#fullpage').fullpage({
              verticalCentered: true,
              
              menu: '#menu'
              
            });
          });
        </script>

        <style>
          .myContent{
            height: 130px;
          }
        </style>

      </head>
      <body>
        <header id="header" role="banner">    
         
          
          <div class="main-nav fixed-menu">
            
            <div class="row">
              <div class="col-md-4 col-xs-2">             
                <div class="navbar-header">
                   <!--  <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                      </button> -->
                      <div>

                        <div id="wrapper" class="toggled">

                         <!-- slider jadi satu, -->
                         <?php
                         include 'application/views/slider.php';
                         ?> 


                         <button onclick="#menu-toggle" class="hamburger is-closed" id="menu-toggle">
                          
                          <span class="hamb-top"></span>
                          <span class="hamb-middle"></span>
                          <span class="hamb-bottom"></span>

                        </button>
                      </div>
                      <!-- /#sidebar-wrapper -->
                      
                    </div>
                    
                    <!-- <a class="navbar-brand" href="index.html">
                      <img class="img-responsive" src="<?php echo base_url() ?>asset/images/mangjek-logo.png" alt="logo">
                    </a>  --> 
                  </div>                  
                </div>
                   <!-- logo -->
            <div class="col-md-2 col-xs-6 col-xs-push-1 col-md-push-1 text-center">
                <img src="<?= base_url() ?>asset/images/logo_header/msend.png" width="60%" style="margin-top:20px">
            </div>
             <div class="col-md-4 col-xs-4 pull-right hidden-md-down">
               <div class="top-bar-right hidden-sm hidden-xs">
                <ul class="nav navbar-nav navbar-right">
                  <li>
                    <a class="top-download ios" href="#">
                      <img src="<?php echo base_url() ?>asset/images/app-store.png" width="118px" height="35px">
                      <div class="ripple-wrapper"></div>
                    </a>
                  </li>
                  <li>
                    <a class="top-download android" href="#">
                      <img src="<?php echo base_url() ?>asset/images/google-play.png" width="118px" height="35px">
                      <div class="ripple-wrapper"></div>
                    </a>
                  </li>
                </ul>
              </div>
              <!-- /.top-bar-right -->
            </div>
            
          </div>
          
        </div>                    
        

        
      </header>
      <!--/#header-->
      
      <div class="overlay"></div>

      <div class="section fp-auto-height trigger_fullpage" id="fullpage">

        <section class="section" id="layanan_isi">	
<!-- <div id="main-slider" class="carousel slide" data-ride="carousel">
      <ol class="carousel-indicators">
        <li data-target="#main-slider" data-slide-to="0" class="active"></li>
        <li data-target="#main-slider" data-slide-to="1"></li>
        <li data-target="#main-slider" data-slide-to="2"></li>
      </ol>
    <div class="carousel-inner">
        <div class="item active">
          <img class="img-responsive" src="<?php echo base_url() ?>asset/images/slider/banner1(b).png" alt="slider">              
    	</div>

    	<div class="item">
          <img class="img-responsive" src="<?php echo base_url() ?>asset/images/slider/nf.Banner2.png" alt="slider">  
          
    	</div>

    	<div class="item">
          <img class="img-responsive" src="<?php echo base_url() ?>asset/images/slider/banner1(b).png" alt="slider">  
          
    	</div>
    </div> 
			
  </div> -->
  <div id="main-slider" class="carousel slide" data-ride="carousel"  style="height: 100vh">
    <ol class="carousel-indicators">
      <li data-target="#main-slider" data-slide-to="0" class="active"></li>
      <!-- <li data-target="#main-slider" data-slide-to="1"></li> -->
      <!-- <li data-target="#main-slider" data-slide-to="2"></li> -->
    </ol>
    <div class="carousel-inner">
      <div class="item active">
        <img class="img-responsive" src="<?php echo base_url() ?>asset/images/slider/msend/s1.jpg" alt="slider" style="height: 100vh">            
        
      </div>
      <!-- <div class="item">
        <img class="img-responsive" src="<?php echo base_url() ?>asset/images/slider/nf.Banner2.png" alt="slider">  
        
      </div>
      <div class="item">
        <img class="img-responsive" src="<?php echo base_url() ?>asset/images/slider/banner1(b).png" alt="slider">  
        
      </div>   -->      
    </div>
  </div>  

</section>

<section class="section" id="layanan_isi_detail1_msend">
  <div class="trigger myContent">
    <div class="container animated">
      <div class="section-title" >
        <h2 ><font color="white">MENGAPA MENGGUNAKAN M-SEND</font></h2>
      </div>

      <br>
      <br>
      <br>
      <br>      
      <div class="col-sm-6 col-md-3 col-xs-6">
        <div class="card cart-block">
          <div style="padding: 50px"><img src="<?php echo base_url() ?>asset/images/kelebihan/msend/1.png" class="card-img-top"></div>
          <div class="card-block">
            <center><h3>Barang Aman</h3>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit,  .</p>
            </center>       
          </div>
        </div>
      </div>
      <div class="col-sm-6 col-md-3 col-xs-6">
        <div class="card cart-block">
          <div style="padding: 50px"><img src="<?php echo base_url() ?>asset/images/kelebihan/msend/2.png" class="card-img-top"></div>
          <div class="card-block">
            <center><h3>Cek Lokasi</h3>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit,  .</p>
            </center>  
          </div>
        </div>
      </div>
      <div class="col-sm-6 col-md-3 col-xs-6">
        <div class="card cart-block">
          <div style="padding: 50px"><img src="<?php echo base_url() ?>asset/images/kelebihan/msend/3.png" class="card-img-top"></div>
          <div class="card-block">
            <center><h3>Harga Transparant</h3>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit,  .</p>
            </center>  
            
            
          </div>
        </div>
      </div>
      <div class="col-sm-6 col-md-3 col-xs-6">
        <div class="card cart-block">
          <div style="padding: 50px"><img src="<?php echo base_url() ?>asset/images/kelebihan/msend/4.png" class="card-img-top"></div>
          <div class="card-block">
            <center><h3>Respon Cepat</h3>
              <p >Lorem ipsum dolor sit amet, consectetur adipisicing elit,  .</p>
            </center>  
            
            
          </div>
        </div>
      </div>
    </div>
  </div>
</section>


<section class="section" id="layanan_isi_detail3_msend" style="background: #F6FBF0; height: 400px; padding-bottom: 50px">
  <div class="trigger myContent">
    <div class="animated container">
      

      
      <!-- <div class="col-md-2"></div> -->
      <div class="col-md-9" style="margin-left:0px;height: 100vh">

        <!-- trucks -->
                    <!-- <ul class="truck-slide">
                        <li><img src="/assets/gobox/img/truk1.png" alt=""></li>
                      </ul> -->

                      <div id="how-to-slide1" class="carousel slide " data-interval="0">

                        <!-- Wrapper for slides -->
                        <div class="carousel-inner" role="listbox">
                          <div class="item truknya active">
                            <img src="<?php echo base_url() ?>asset/images/workflow/msend/1.png"  alt="Truk">
                          </div>
                          <div class="item truknya ">
                            <img src="<?php echo base_url() ?>asset/images/workflow/msend/2.png"  alt="Truk">
                          </div>
                           <div class="item truknya ">
                            <img src="<?php echo base_url() ?>asset/images/workflow/msend/3.png"  alt="Truk">
                          </div>
                           <div class="item truknya ">
                            <img src="<?php echo base_url() ?>asset/images/workflow/msend/4.png"  alt="Truk">
                          </div>
                           <div class="item truknya ">
                            <img src="<?php echo base_url() ?>asset/images/workflow/msend/5.png"  alt="Truk">
                          </div>


                        </div>

                        <!-- Nav tabs -->
                        <ul class="nav nav-tabs" role="tablist">
                          <li role="presentation" class="active" data-target="#how-to-slide1" data-slide-to="0">
                            <a href="#home" aria-controls="home" role="tab" data-toggle="tab" target="_top" aria-expanded="true">1<div class="ripple-wrapper"></div></a>
                          </li>
                          <li role="presentation" data-target="#how-to-slide1" data-slide-to="1" class="">
                            <a href="#profile" aria-controls="profile" role="tab" data-toggle="tab" target="_top" aria-expanded="false">2
                              <div class="ripple-wrapper"></div></a>
                            </li>
                            <li role="presentation" data-target="#how-to-slide1" data-slide-to="2" class="">
                              <a href="#messages" aria-controls="messages" role="tab" data-toggle="tab" target="_top" aria-expanded="false">3
                                <div class="ripple-wrapper"></div></a>
                              </li>
                              <li role="presentation" data-target="#how-to-slide1" data-slide-to="3" class="">
                              <a href="#4" aria-controls="messages" role="tab" data-toggle="tab" target="_top" aria-expanded="false">3
                                <div class="ripple-wrapper"></div></a>
                              </li>
                              <li role="presentation" data-target="#how-to-slide1" data-slide-to="4" class="">
                              <a href="#5" aria-controls="messages" role="tab" data-toggle="tab" target="_top" aria-expanded="false">3
                                <div class="ripple-wrapper"></div></a>
                              </li>
                            </ul>

                            <!-- Tab panes -->
                            <div class="tab-content">
                              <div role="tabpanel" class="box-desc tab-pane active" id="home">
                                <div class="row">
                                  <div class="col-md-8">
                                    <div class="info-kendaraan">
                                      <h3 class="normal-font">Pilih Layanan M-RIDE</h3>

                                      <h5 class="normal-font">Lorem ipsum dolor sit amet, conse asvuqubs</h5>
                                    </div>
                                  </div>
                                  
                                </div>
                              </div>
                              <div role="tabpanel" class="box-desc tab-pane" id="profile">
                                <div class="row">
                                  <div class="col-md-8">
                                    <div class="info-kendaraan">
                                      <h3 class="normal-font">Pilih Layanan M-RIDE</h3>

                                      <h5 class="normal-font">Lorem ipsum dolor sit amet, conse asvuqubs</h5>
                                    </div>
                                  </div>
                                  
                                </div>
                              </div>
                              <div role="tabpanel" class="box-desc tab-pane" id="messages">
                                <div class="row">
                                  <div class="col-md-8">
                                    <div class="info-kendaraan">
                                      <h3 class="normal-font">Pilih Layanan M-RIDE</h3>

                                      <h5 class="normal-font">Lorem ipsum dolor sit amet, conse asvuqubs</h5>
                                    </div>
                                  </div>
                                  
                                </div>
                              </div>
                              <div role="tabpanel" class="box-desc tab-pane" id="4">
                                <div class="row">
                                  <div class="col-md-8">
                                    <div class="info-kendaraan">
                                      <h3 class="normal-font">Pilih Layanan M-RIDE</h3>

                                      <h5 class="normal-font">Lorem ipsum dolor sit amet, conse asvuqubs</h5>
                                    </div>
                                  </div>
                                  
                                </div>
                              </div>
                              <div role="tabpanel" class="box-desc tab-pane" id="5">
                                <div class="row">
                                  <div class="col-md-8">
                                    <div class="info-kendaraan">
                                      <h3 class="normal-font">Pilih Layanan M-RDE</h3>

                                      <h5 class="normal-font">Lorem ipsum dolor sit amet, conse asvuqubs</h5>
                                    </div>
                                  </div>
                                  
                                </div>
                              </div>
                           
                            
                          </div>

                        </div>
                      </div>
                      
                      

                      <div class="col-md-3" style="margin-top: 0px;height: 100vh">
                        <h2>Cara Menggunakan M-SEND</h2>
                      </div>
                    </div>
                  </div>
                </section>

                <section class="section fp-auto-height" style="background: transparent;">
                  <div class="trigger myContent">
                    <div class="container animated">
                      <div class="text-center ">
                        <div class="col-xs-12  section-top-align">
                         
                        </div>
                        <div class="col-xs-12">
                          <p style="font-size:30px; ">BERGABUNGLAH DENGAN M-SEND</p>
                          <p>Jadilah driver M-JEK dan dapaatkan penghasilan tambahan</p>
                        </div>
                        <div class="col-xs-12  see_full_align wow fadeInRight" data-wow-duration="1s" data-wow-delay="0.2s" style="visibility: visible; animation-duration: 1s; animation-delay: 0.2s;">
                          <a href="<?php echo base_url()?>index.php/c_utama/join_mangride" class="btn btn-info btn btn-lg  Seo_section_testbtn">JOIN US</a>
                        </div>
                      </div>
                    </div>
                  </div>

                </section>

                <section class="section" id="layanan_isi_download" style="
                color: #000; background: #FFF;
                ">
                <div class="trigger myContent">
                 <div class="container animated">
                  <div class="col-md-6 col-xs-12 foto_download" style="margin-top:50px;">
                    <img class="img-responsive animated slideInLeft" src="<?php echo base_url() ?>asset/images/hp1.png" alt="member-1">
                  </div>
                  <div class="col-md-6 col-xs-12" style="margin-top:80px;">
                    <div class="layanan_isi-download1">
                      <p>Download MANG-JEK <font color='#FFCC00'>Mobile App</font> today</p>
                    </div>
                    
                    <div class="layanan_isi-download1_detail">
                              
                    </div>
                   
                  </div>
                </section>


                
                
   <!--  <section class="section fp-auto-height wow fadeInUp animated" id="footer" data-wow-duration="2s" style="visibility: visible; animation-duration: 2s; animation-name: fadeInUp;">
        <div class="trigger myContent">
         <div class="animated container">
       
          <div class="brand">
                <h1 class="brand_name">
                    <a href="./" style="color:#fff;">MANG-JEK</a>
                </h1>
                    <span class="brand_slogan">
                        MANG-JEK Indonesia
                    </span>
                    <p class="copyright">?? <span id="copyright-year">2016</span> |
                    <a href="" style="color:#a1a194;">Privacy Policy</a></p><p>
            </p></div>

            <div class="mg-add3 mod-position2">
                <h4 class="color-1" style="font-size:30px; margin-left:40px; margin-bottom:15px; letter-spacing:3px;">Follow US</h4>

                <ul class="inline-list">
                    <li><a class="fa fa-facebook" href="#"></a></li>
                    <li><a class="fa fa-twitter" href="#"></a></li>
                    <li><a class="fa fa-google-plus" href="#"></a></li>
                    <li><a class="fa fa-instagram" href="#"></a></li>
                </ul>
            </div>
       	
       	</div>     
	  </div>
		
        
        
       
       

  </section> -->

</div>

<script>
 $(function() {

  $( '#mi-slider' ).catslider();

});
</script>

<script src="<?php echo base_url() ?>asset/js/modernizr.custom.63321.js"></script>
<script src="<?php echo base_url() ?>asset/js/jquery.catslider.js"></script>



<script type="text/javascript" src="<?php echo base_url() ?>asset/js/bootstrap.min.js"></script>
<script type="text/javascript" src="<?php echo base_url() ?>asset/js/smoothscroll.js"></script>
<script type="text/javascript" src="<?php echo base_url() ?>asset/js/jquery.parallax.js"></script>
<script type="text/javascript" src="<?php echo base_url() ?>asset/js/jquery.scrollTo.js"></script>
<script type="text/javascript" src="<?php echo base_url() ?>asset/js/jquery.nav.js"></script>
<!-- <script type="text/javascript" src="<?php echo base_url() ?>asset/js/main.js"></script>  -->
<script src="<?php echo base_url() ?>asset/js/mislider.js"></script>


<script>

  var trigger = $('.hamburger'),
  overlay = $('.overlay'),
  isClosed = false;

  trigger.click(function () {
    hamburger_cross();      
  });

  function hamburger_cross() {

    if (isClosed == true) {          
     overlay.hide();
     trigger.removeClass('is-open');
     trigger.addClass('is-closed');
     isClosed = false;
   } else {   
     overlay.show();
     trigger.removeClass('is-closed');
     trigger.addClass('is-open');
     isClosed = true;
   }
 }
 $("#menu-toggle").click(function(e) {
  e.preventDefault();
  $("#wrapper").toggleClass("toggled");
});
</script>


<script>
  jQuery(function ($) {
    var slider = $('.mis-stage').miSlider({
                //  The height of the stage in px. Options: false or positive integer. false = height is calculated using maximum slide heights. Default: false
                //stageHeight: 380,
                //  Number of slides visible at one time. Options: false or positive integer. false = Fit as many as possible.  Default: 1
                stageHeight: 500,
                slidesOnStage: false,
                //  The location of the current slide on the stage. Options: 'left', 'right', 'center'. Defualt: 'left'
                slidePosition: 'center',
                //  The slide to start on. Options: 'beg', 'mid', 'end' or slide number starting at 1 - '1','2','3', etc. Defualt: 'beg'
                slideStart: 'mid',
                //  The relative percentage scaling factor of the current slide - other slides are scaled down. Options: positive number 100 or higher. 100 = No scaling. Defualt: 100
                slideScaling: 150,
                //  The vertical offset of the slide center as a percentage of slide height. Options:  positive or negative number. Neg value = up. Pos value = down. 0 = No offset. Default: 0
                offsetV: -5,
                //  Center slide contents vertically - Boolean. Default: false
                centerV: true,
                //  Opacity of the prev and next button navigation when not transitioning. Options: Number between 0 and 1. 0 (transparent) - 1 (opaque). Default: .5
                navButtonsOpacity: 1
              });
  });
</script>

<script src="<?php echo base_url() ?>asset/js/jquery.backstretch.js"></script>
<script>
  $.backstretch([
    
    "<?php echo base_url() ?>/asset/images/service4.png",
    ], {
      fade: 750,
      duration: 4000
    });
  </script> 

  <script type="text/javascript">
   
   var windowWidth = $(window).width();

   if(windowWidth <= 991 ){
     $('.trigger_fullpage').removeAttr('id');
     $('.trigger').removeClass('myContent');
     $('.trigger').addClass('container');
     $('.animated').removeClass('container');
     $('.animated').removeClass('slideInDown');
     $('.animated').addClass('row');
     
   }
   else{
    
    
    
   }

 </script>

</body>
</html>