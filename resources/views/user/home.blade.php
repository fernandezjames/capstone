<!DOCTYPE html>
<html lang="en-US">
   <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width" />
      <title>Responsive Design website template</title>
      @include('plugins')
    <!--   <link rel="stylesheet" type="text/css" href="bootstrap/"> -->
      <!-- CUSTOM STYLE -->  
      <link rel="stylesheet" href="css/template-style.css">
      <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800&amp;subset=latin,latin-ext' rel='stylesheet' type='text/css'>

      <!--modal-->
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

      <style>
         .newline{
            padding-bottom: 20px;
            padding-top: 10px
         }
         @font-face {
        font-family: Rise;
        src: url("font/Rise of Kingdom.ttf");
    }

      .name label {
        text-shadow: 2px 0 0 #fff, -2px 0 0 #fff, 0 2px 0 #fff, 0 -2px 0 #fff, 1px 1px #fff, -1px -1px 0 #fff, 1px -1px 0 #fff, -1px 1px 0 #fff;
      }
      </style>
      
   </head>
<!--    <style type="text/css">
     @media (min-width: 768px) {
  .modal-dialog {
    width: 100% !important;    // by default its 600px.
    margin: 30px auto !important;
  }
   </style> -->
   <body class="size-1140">
      <!-- TOP NAV WITH LOGO -->  
      @include('user/nav')
      <section>

         <!-- CAROUSEL -->  	
         <div id="carousel">
            <div id="owl-demo" class="owl-carousel owl-theme">
               <div class="item">
                  <img src="img/front.jpg" alt="">
               </div>
               <div class="item">
                  <img src="img/room.jpg" alt="">
               </div>
               <div class="item">
                  <img src="img/room1.jpg" alt="">
               </div>
            </div>
         </div>
         <!-- FIRST BLOCK --> 	
         <div id="first-block">
            <div class="line name">
               <label style="font-size: 40px; font-family: Rise;">ATTRACTIONS</label><p>
               <div class="newline"></div>
               </p>
               <div class="margin">
                  <div class="s-12 m-6 l-3 margin-bottom">
                     <i class="fa fa-beer fa-2x"></i>
                     <h3 style="font-family: Rise">Restobar</h3>
                     <p>INSERT TEXT</p>
                  </div>
                  <div class="s-12 m-6 l-3 margin-bottom">
                     <i class="fa fa-music fa-2x"></i>
                     <h3 style="font-family: Rise" style="font-family: Rise" style="font-family: Rise">Live Band</h3>
                     <p>INSERT TEXT</p>
                  </div>
                  <div class="s-12 m-6 l-3 margin-bottom">
                     <i class="fa fa-tint fa-2x"></i>
                     <h3 style="font-family: Rise" style="font-family: Rise">Pool</h3>
                     <p>INSERT TEXT</p>
                  </div>
                  <div class="s-12 m-6 l-3 margin-bottom">
                     <i class="fa fa-cutlery fa-2x"></i>
                     <h3 style="font-family: Rise">Catering</h3>
                     <p>INSERT TEXT</p>
                  </div>
               </div>
            </div>
         </div>
         <!-- SECOND BLOCK --> 	
         <div id="second-block">
            <div class="line">
               <div class="margin-bottom">
                  <div class="margin">
                     <article class="s-12 l-8 center">
                     </article>
                  </div>
               </div>
            </div>
      </section>
      <!-- FOOTER -->   
      <footer>
         <div class="line">
            <div class="s-12 l-6">

            </div>
            <div class="s-12 l-6">
               <p class="right">
                  <a class="right" style="" href="http://www.myresponsee.com" title="Responsee - lightweight responsive framework">Maharlika Suites</a>
               </p>
            </div>
         </div>
      </footer>
                      
     
      <script  src="js/index.js"></script>
      <script type="text/javascript" src="owl-carousel/owl.carousel.js"></script> 
           <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
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
        $('#myModal').on('show.bs.modal', function () {
          $('.modal .modal-body').css('overflow-y', 'auto'); 
          $('.modal .modal-body').css('max-height', $(window).height() * 0.7);
        });
      </script>
      
      
   </body>
</html>