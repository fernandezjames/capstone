<!DOCTYPE html>
<html lang="en-US">
   <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width" />
      <title>Responsive Design website template</title>
      <link rel="stylesheet" href="css/components.css">
      <link rel="stylesheet" href="css/responsee.css">
      <link rel="stylesheet" href="owl-carousel/owl.carousel.css">
      <link rel="stylesheet" href="owl-carousel/owl.theme.css">
      <link rel="stylesheet" href="bootstrap/dist/css/bootstrap.css">
      <link rel="stylesheet" type="text/css" href="css/main.css">
      <link rel="stylesheet" href="css/style.css">

      <!-- CUSTOM STYLE -->  
      <link rel="stylesheet" href="css/template-style.css">
      <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800&amp;subset=latin,latin-ext' rel='stylesheet' type='text/css'>
      <script type="text/javascript" src="js/jquery-1.8.3.min.js"></script>
      <script type="text/javascript" src="js/jquery-ui.min.js"></script>    
      <script type="text/javascript" src="js/modernizr.js"></script>
      <script type="text/javascript" src="js/responsee.js"></script>   
      <!--[if lt IE 9]>
	      <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
        <script src="http://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js"></script>
      <![endif]-->
       <!--modal-->
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>  


   </head>
   <style type="text/css">
      .carousel {
          position: relative;
          height: 500px;
      }
      .carousel img {
          
          height: 500px !important;
      }
      .carousel-inner>.item>a>img, .carousel-inner>.item>img, .img-responsive, .thumbnail a>img, .thumbnail>img {
          display: block;
          width: 100%;
          height: 100%;
      }
      .thumbnail {
        height: 80px;
      }
   </style>
   <body class="size-1140">
      <!-- TOP NAV WITH LOGO -->  
      @include('user/nav')
      <section>
         <div id="head">
            <div class="line">
               <h1>Welcome to Maharlika Suites</h1>
            </div>
         </div>
         <div id="content">
            <div class="line">
               <div class="margin">
                  <center><div class="col-lg-6 col-md-6">
                     <div class="content-block margin-bottom" style="height: 240px; width: 450px; border-radius: 10px;">
                      <img src="img/logo.png" data-toggle="modal" data-target="#single">
                     </div>
                  </div></center>
                  <center><div class="col-lg-6 col-md-6">
                     <div class="content-block margin-bottom" style="height: 240px; width: 450px; border-radius: 10px;">
                       <img src="img/logo.png" data-toggle="modal" data-target="#family">
                     </div>
                  </div></center>
                  <center><div class="col-lg-12 col-md-12">
                     <div class="content-block margin-bottom" style="height: 240px; width: 450px; border-radius: 10px;">
                      <img src="img/logo.png" data-toggle="modal" data-target="#familysuite">
                     </div>
                  </div></center>
               </div>
            </div>
         </div>
         

         <!-- GALLERY -->	
         <div id="third-block">
            <div class="line">
               <h2>Responsive gallery</h2>
               <p class="subtitile">Lorem ipsum dolor sit amet, consectetuer adipiscing elit.
               </p>
               <div class="margin">
                  <div class="s-12 m-6 l-3">
                     <img src="img/first-small.jpg">      
                     <p class="subtitile">Lorem ipsum dolor sit amet, consectetuer adipiscing elit.
                     </p>
                  </div>
                  <div class="s-12 m-6 l-3">
                     <img src="img/second-small.jpg">      
                     <p class="subtitile">Lorem ipsum dolor sit amet, consectetuer adipiscing elit.
                     </p>
                  </div>
                  <div class="s-12 m-6 l-3">
                     <img src="img/third-small.jpg">      
                     <p class="subtitile">Lorem ipsum dolor sit amet, consectetuer adipiscing elit.
                     </p>
                  </div>
                  <div class="s-12 m-6 l-3">
                     <img src="img/fourth-small.jpg">      
                     <p class="subtitile">Lorem ipsum dolor sit amet, consectetuer adipiscing elit.
                     </p>
                  </div>
               </div>
            </div>
         </div>
         <div id="fourth-block">
            <div class="line">
               <div id="owl-demo2" class="owl-carousel owl-theme">
                  <div class="item">
                     <h2>Amazing responsive template</h2>
                     <p class="s-12 m-12 l-8 center">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat.
                     </p>
                  </div>
                  <div class="item">
                     <h2>Responsive components</h2>
                     <p class="s-12 m-12 l-8 center">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat.
                     </p>
                  </div>
                  <div class="item">
                     <h2>Retina ready</h2>
                     <p class="s-12 m-12 l-8 center">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat.
                     </p>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!-- FOOTER -->   
      <footer>
         <div class="line">
            <div class="s-12 l-6">
               <p>Copyright 2015, Vision Design - graphic zoo
               </p>
            </div>
            <div class="s-12 l-6">
               <p class="right">
                  <a class="right" href="http://www.myresponsee.com" title="Responsee - lightweight responsive framework">Design and coding by Responsee Team</a>
               </p>
            </div>
         </div>
      </footer>
        <!-- Modal -->
        <div id="single" class="modal fade" role="dialog">
           <div class="modal-dialog modal-lg">

             <!-- Modal content-->
             <div class="modal-content">
               <div class="modal-header">
                 <button type="button" class="close" data-dismiss="modal">&times;</button>
                 <h4 class="modal-title">Single Room</h4>
               </div>
               <div class="modal-body">
               
                  <div class="container">
                       <div id="main_area">
                               <!-- Slider -->
                               <div class="row">
                                   <div class="col-xs-12" id="slider">
                                       <!-- Top part of the slider -->
                                       <div class="row">
                                           <div class="col-sm-9" id="carousel-bounding-box">
                                               <div class="carousel slide" id="myCarousel">
                                                   <!-- Carousel items -->
                                                   <div class="carousel-inner">
                                                       <div class="active item" data-slide-number="0">
                                                       <img src="img/rooms/single.jpg"></div>

                                                       <div class="item" data-slide-number="1">
                                                       <img src="img/rooms/single1.jpg"></div>

                                                       <div class="item" data-slide-number="2">
                                                       <img src="img/rooms/single2.jpg"></div>

                                                       <div class="item" data-slide-number="3">
                                                       <img src="img/rooms/single3.jpg"></div>

                                                       <div class="item" data-slide-number="4">
                                                       <img src="img/rooms/suites2.jpg"></div>

                                                       <div class="item" data-slide-number="5">
                                                       <img src="img/rooms/family3.jpg"></div>
                                                   </div><!-- Carousel nav -->
                                                   <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
                                                       <span class="glyphicon glyphicon-chevron-left"></span>                                       
                                                   </a>
                                                   <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
                                                       <span class="glyphicon glyphicon-chevron-right"></span>                                       
                                                   </a>                                
                                                   </div>
                                           </div>

                                           <div class="col-sm-3" id="carousel-text"></div>
                                          <!-- slide content 1 -->
                                           <div id="qwerty" style="display: none;">
                                               <div id="slide-content-0">
                                                   <h2>Single Room</h2>
                                                   <p>2 Beds</p>
                                                   
                                               </div>

                                               <div id="slide-content-1">
                                                   <h2>Single Room</h2>
                                                   <p>Aircon</p>
                                                   
                                               </div>

                                               <div id="slide-content-2">
                                                   <h2>Single Room</h2>
                                                   <p>T.V</p>
                                                   
                                               </div>

                                               <div id="slide-content-3">
                                                   <h2>Single Room</h2>
                                                   <p>C.R</p>
                                                   
                                               </div>

                                               <div id="slide-content-4">
                                                   <h2>Single Room</h2>
                                                   <p>Bathtub</p>
                                                   
                                               </div>

                                               <div id="slide-content-5">
                                                   <h2>Single Room</h2>
                                                   <p>awdawd</p>
                                                   
                                               </div>
                                           </div>
                                       </div>
                                   </div>
                               </div><!--/Slider-->

                               <div class="row hidden-xs" id="slider-thumbs">
                                       <!-- Bottom switcher of slider -->
                                       <ul class="hide-bullets">
                                           <li class="col-sm-2">
                                               <a class="thumbnail" id="carousel-selector-0"><img src="img/rooms/single.jpg"></a>
                                           </li>

                                           <li class="col-sm-2">
                                               <a class="thumbnail" id="carousel-selector-1"><img src="img/rooms/single1.jpg"></a>
                                           </li>

                                           <li class="col-sm-2">
                                               <a class="thumbnail" id="carousel-selector-2"><img src="img/rooms/single2.jpg"></a>
                                           </li>

                                           <li class="col-sm-2">
                                               <a class="thumbnail" id="carousel-selector-3"><img src="img/rooms/single3.jpg"></a>
                                           </li>

                                           <li class="col-sm-2">
                                               <a class="thumbnail" id="carousel-selector-4"><img src="img/rooms/suites2.jpg"></a>
                                           </li>

                                           <li class="col-sm-2">
                                               <a class="thumbnail" id="carousel-selector-5"><img src="img/rooms/family3.jpg"></a>
                                           </li>
                                       </ul>                 
                               </div>
                       </div>
                  </div>

               </div>
               <div class="modal-footer">
                 <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
               </div>
             </div>

           </div>
         </div>
        <!--end of Modal-->       
         <!-- Modal -->
         <div id="family" class="modal fade" role="dialog">
           <div class="modal-dialog modal-lg">

             <!-- Modal content-->
             <div class="modal-content">
               <div class="modal-header">
                 <button type="button" class="close" data-dismiss="modal">&times;</button>
                 <h4 class="modal-title">Family Room</h4>
               </div>
               <div class="modal-body">
                 
                  <div class="container">
                       <div id="main_area">
                               <!-- Slider -->
                               <div class="row">
                                   <div class="col-xs-12" id="slider">
                                       <!-- Top part of the slider -->
                                       <div class="row">
                                           <div class="col-sm-9" id="carousel-bounding-box">
                                               <div class="carousel slide" id="myCarousel2">
                                                   <!-- Carousel items -->
                                                   <div class="carousel-inner">
                                                       <div class="active item" data-slide-number="0">
                                                       <img src="img/rooms/family.jpg"></div>

                                                       <div class="item" data-slide-number="1">
                                                       <img src="img/rooms/family2.jpg"></div>

                                                       <div class="item" data-slide-number="2">
                                                       <img src="img/rooms/family3.jpg"></div>

                                                       <div class="item" data-slide-number="3">
                                                       <img src="img/rooms/family4.jpg"></div>

                                                       <div class="item" data-slide-number="4">
                                                       <img src="img/rooms/family5.jpg"></div>

                                                       <div class="item" data-slide-number="5">
                                                       <img src="img/rooms/single.jpg"></div>
                                                   </div><!-- Carousel nav -->
                                                   <a class="left carousel-control" href="#myCarousel2" role="button" data-slide="prev">
                                                       <span class="glyphicon glyphicon-chevron-left"></span>                                       
                                                   </a>
                                                   <a class="right carousel-control" href="#myCarousel2" role="button" data-slide="next">
                                                       <span class="glyphicon glyphicon-chevron-right"></span>                                       
                                                   </a>                                
                                                   </div>
                                           </div>

                                           <div class="col-sm-3" id="carousel-text2"></div>
                                           <!-- slide content 2 -->
                                           <div id="slide-content" style="display: none;">
                                               <div id="slide-content2-0">
                                                   <h2>Slider One</h2>
                                                   <p>Lorem Ipsum Dolor</p>
                                                   <p class="sub-text">October 24 2014 - <a href="#">Read more</a></p>
                                               </div>

                                               <div id="slide-content2-1">
                                                   <h2>Slider Two</h2>
                                                   <p>Lorem Ipsum Dolor</p>
                                                   <p class="sub-text">October 24 2014 - <a href="#">Read more</a></p>
                                               </div>

                                               <div id="slide-content2-2">
                                                   <h2>Slider Three</h2>
                                                   <p>Lorem Ipsum Dolor</p>
                                                   <p class="sub-text">October 24 2014 - <a href="#">Read more</a></p>
                                               </div>

                                               <div id="slide-content2-3">
                                                   <h2>Slider Four</h2>
                                                   <p>Lorem Ipsum Dolor</p>
                                                   <p class="sub-text">October 24 2014 - <a href="#">Read more</a></p>
                                               </div>

                                               <div id="slide-content2-4">
                                                   <h2>Slider Five</h2>
                                                   <p>Lorem Ipsum Dolor</p>
                                                   <p class="sub-text">October 24 2014 - <a href="#">Read more</a></p>
                                               </div>

                                               <div id="slide-content2-5">
                                                   <h2>Slider Six</h2>
                                                   <p>Lorem Ipsum Dolor</p>
                                                   <p class="sub-text">October 24 2014 - <a href="#">Read more</a></p>
                                               </div>
                                           </div>
                                       </div>
                                   </div>
                               </div><!--/Slider-->

                               <div class="row hidden-xs" id="slider-thumbs">
                                       <!-- Bottom switcher of slider -->
                                       <ul class="hide-bullets">
                                           <li class="col-sm-2">
                                               <a class="thumbnail" id="carousel-selector-0"><img src="http://placehold.it/170x100&text=one"></a>
                                           </li>

                                           <li class="col-sm-2">
                                               <a class="thumbnail" id="carousel-selector-1"><img src="http://placehold.it/170x100&text=two"></a>
                                           </li>

                                           <li class="col-sm-2">
                                               <a class="thumbnail" id="carousel-selector-2"><img src="http://placehold.it/170x100&text=three"></a>
                                           </li>

                                           <li class="col-sm-2">
                                               <a class="thumbnail" id="carousel-selector-3"><img src="http://placehold.it/170x100&text=four"></a>
                                           </li>

                                           <li class="col-sm-2">
                                               <a class="thumbnail" id="carousel-selector-4"><img src="http://placehold.it/170x100&text=five"></a>
                                           </li>

                                           <li class="col-sm-2">
                                               <a class="thumbnail" id="carousel-selector-5"><img src="http://placehold.it/170x100&text=six"></a>
                                           </li>
                                       </ul>                 
                               </div>
                       </div>
                  </div>

               </div>
               <div class="modal-footer">
                 <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
               </div>
             </div>

           </div>
         </div>
        <!--end of Modal-->     
         <!-- Modal -->
         <div id="familysuite" class="modal fade" role="dialog">
           <div class="modal-dialog modal-lg">

             <!-- Modal content-->
             <div class="modal-content">
               <div class="modal-header">
                 <button type="button" class="close" data-dismiss="modal">&times;</button>
                 <h4 class="modal-title">Family Suite</h4>
               </div>
               <div class="modal-body">
                
                  <div class="container">
                       <div id="main_area">
                               <!-- Slider -->
                               <div class="row">
                                   <div class="col-xs-12" id="slider">
                                       <!-- Top part of the slider -->
                                       <div class="row">
                                           <div class="col-sm-9" id="carousel-bounding-box">
                                               <div class="carousel slide" id="myCarousel3">
                                                   <!-- Carousel items -->
                                                   <div class="carousel-inner">
                                                       <div class="active item" data-slide-number="0">
                                                       <img src="img/rooms/suites.jpg"></div>

                                                       <div class="item" data-slide-number="1">
                                                       <img src="img/rooms/suites1.jpg"></div>

                                                       <div class="item" data-slide-number="2">
                                                       <img src="img/rooms/suites2.jpg"></div>

                                                       <div class="item" data-slide-number="3">
                                                       <img src="img/rooms/suites3.jpg"></div>

                                                       <div class="item" data-slide-number="4">
                                                       <img src="img/rooms/suites5.jpg"></div>

                                                       <div class="item" data-slide-number="5">
                                                       <img src="img/rooms/family2.jpg"></div>
                                                   </div><!-- Carousel nav -->
                                                   <a class="left carousel-control" href="#myCarousel3" role="button" data-slide="prev">
                                                       <span class="glyphicon glyphicon-chevron-left"></span>                                       
                                                   </a>
                                                   <a class="right carousel-control" href="#myCarousel3" role="button" data-slide="next">
                                                       <span class="glyphicon glyphicon-chevron-right"></span>                                       
                                                   </a>                                
                                                   </div>
                                           </div>

                                           <div class="col-sm-3" id="carousel-text3"></div>
                                           <!-- slide content 3 -->
                                           <div id="slide-content" style="display: none;">
                                               <div id="slide-content3-0">
                                                   <h2>Slider One</h2>
                                                   <p>Lorem Ipsum Dolor</p>
                                                   <p class="sub-text">October 24 2014 - <a href="#">Read more</a></p>
                                               </div>

                                               <div id="slide-content3-1">
                                                   <h2>Slider Two</h2>
                                                   <p>Lorem Ipsum Dolor</p>
                                                   <p class="sub-text">October 24 2014 - <a href="#">Read more</a></p>
                                               </div>

                                               <div id="slide-content3-2">
                                                   <h2>Slider Three</h2>
                                                   <p>Lorem Ipsum Dolor</p>
                                                   <p class="sub-text">October 24 2014 - <a href="#">Read more</a></p>
                                               </div>

                                               <div id="slide-content3-3">
                                                   <h2>Slider Four</h2>
                                                   <p>Lorem Ipsum Dolor</p>
                                                   <p class="sub-text">October 24 2014 - <a href="#">Read more</a></p>
                                               </div>

                                               <div id="slide-content3-4">
                                                   <h2>Slider Five</h2>
                                                   <p>Lorem Ipsum Dolor</p>
                                                   <p class="sub-text">October 24 2014 - <a href="#">Read more</a></p>
                                               </div>

                                               <div id="slide-content3-5">
                                                   <h2>Slider Six</h2>
                                                   <p>Lorem Ipsum Dolor</p>
                                                   <p class="sub-text">October 24 2014 - <a href="#">Read more</a></p>
                                               </div>
                                           </div>
                                       </div>
                                   </div>
                               </div><!--/Slider-->

                               <div class="row hidden-xs" id="slider-thumbs">
                                       <!-- Bottom switcher of slider -->
                                       <ul class="hide-bullets">
                                           <li class="col-sm-2">
                                               <a class="thumbnail" id="carousel-selector-0"><img src="http://placehold.it/170x100&text=one"></a>
                                           </li>

                                           <li class="col-sm-2">
                                               <a class="thumbnail" id="carousel-selector-1"><img src="http://placehold.it/170x100&text=two"></a>
                                           </li>

                                           <li class="col-sm-2">
                                               <a class="thumbnail" id="carousel-selector-2"><img src="http://placehold.it/170x100&text=three"></a>
                                           </li>

                                           <li class="col-sm-2">
                                               <a class="thumbnail" id="carousel-selector-3"><img src="http://placehold.it/170x100&text=four"></a>
                                           </li>

                                           <li class="col-sm-2">
                                               <a class="thumbnail" id="carousel-selector-4"><img src="http://placehold.it/170x100&text=five"></a>
                                           </li>

                                           <li class="col-sm-2">
                                               <a class="thumbnail" id="carousel-selector-5"><img src="http://placehold.it/170x100&text=six"></a>
                                           </li>
                                       </ul>                 
                               </div>
                       </div>
                  </div>

               </div>
               <div class="modal-footer">
                 <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
               </div>
             </div>

           </div>
         </div>
        <!--end of Modal-->                
      <script type="text/javascript" src="owl-carousel/owl.carousel.js"></script>   
      <script type="text/javascript">
         jQuery(document).ready(function($) {  
           $("#owl-demo").owlCarousel({
         	slideSpeed : 300,
         	autoPlay : true,
         	navigation : false,
         	pagination : false,
         	singleItem:true
           });
           $("#owl-demo2").owlCarousel({
         	slideSpeed : 300,
         	autoPlay : true,
         	navigation : false,
         	pagination : true,
         	singleItem:true
           });
         });	
          
      </script> 
      <script type="text/javascript">
           jQuery(document).ready(function($) {
          
                 $('#myCarousel').carousel({
                         interval: 5000
                 });
          
                 $('#carousel-text').html($('#slide-content-0').html());
          
                 //Handles the carousel thumbnails
                $('[id^=carousel-selector-]').click( function(){
                     var id = this.id.substr(this.id.lastIndexOf("-") + 1);
                     var id = parseInt(id);
                     $('#myCarousel').carousel(id);
                 });
          
          
                 // When the carousel slides, auto update the text
                 $('#myCarousel').on('slid.bs.carousel', function (e) {
                          var id = $('.item.active').data('slide-number');
                         $('#carousel-text').html($('#slide-content-'+id).html());
                 });
         });
      </script>
      <script type="text/javascript">
           jQuery(document).ready(function($) {
          
                 $('#myCarousel2').carousel({
                         interval: 5000
                 });
          
                 $('#carousel-text2').html($('#slide-content2-0').html());
          
                 //Handles the carousel thumbnails
                $('[id^=carousel-selector-]').click( function(){
                     var id = this.id.substr(this.id.lastIndexOf("-") + 1);
                     var id = parseInt(id);
                     $('#myCarousel2').carousel(id);
                 });
          
          
                 // When the carousel slides, auto update the text
                 $('#myCarousel2').on('slid.bs.carousel', function (e) {
                          var id = $('.item.active').data('slide-number');
                         $('#carousel-text2').html($('#slide-content2-'+id).html());
                 });
         });
      </script>
      <script type="text/javascript">
           jQuery(document).ready(function($) {
          
                 $('#myCarousel3').carousel({
                         interval: 5000
                 });
          
                 $('#carousel-text3').html($('#slide-content3-0').html());
          
                 //Handles the carousel thumbnails
                $('[id^=carousel-selector-]').click( function(){
                     var id = this.id.substr(this.id.lastIndexOf("-") + 1);
                     var id = parseInt(id);
                     $('#myCarousel3').carousel(id);
                 });
          
          
                 // When the carousel slides, auto update the text
                 $('#myCarousel3').on('slid.bs.carousel', function (e) {
                          var id = $('.item.active').data('slide-number');
                         $('#carousel-text3').html($('#slide-content3-'+id).html());
                 });
         });
      </script>
   </body>
</html>