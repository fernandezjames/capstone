<!DOCTYPE html>
<html lang="en-US">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width" />
        <title>Responsive Design website template</title>
        @include('plugins')

        <!-- CUSTOM STYLE -->
        <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800&amp;subset=latin,latin-ext' rel='stylesheet' type='text/css'>
        <!--[if lt IE 9]>
        <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
        <script src="http://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js"></script>
        <![endif]-->
        <!--modal-->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <link rel="stylesheet" href="css/contact.css">
    </head>
   <style type="text/css">
        @font-face {
        font-family: Rise;
        src: url("font/Rise of Kingdom.ttf");
    }
      .thumbnail {
        height: 80px;
      }
      #first-block {
        text-align: center !important;
        padding: 0px !important;
       background: none !important;

      }
      #first-block i {
          background: none repeat scroll 0 0 #dd1313 !important;
          border-radius: 100px !important;
          color: #fff;
          line-height: 100px !important;
          margin: 0 auto !important;
          width: 100px !important;
          margin-bottom: 20px !important;
      }
      #first-block p {
         font-size: 17px !important;
      }
/*      #fourth-block {
        opacity: .2;
      }*/
      .name label {
        text-shadow: 2px 0 0 #fff, -2px 0 0 #fff, 0 2px 0 #fff, 0 -2px 0 #fff, 1px 1px #fff, -1px -1px 0 #fff, 1px -1px 0 #fff, -1px 1px 0 #fff;
      }
      .name2 label {
        text-shadow: 2px 0 0 #000000, -2px 0 0 #000000, 0 2px 0 #000000, 0 -2px 0 #000000, 1px 1px #000000, -1px -1px 0 #000000, 1px -1px 0 #000000, -1px 1px 0 #000000;
      }
       #map {
      height: 400px;
      width: 100%;
    }
   </style>
   </head>
   <body class="size-1140">
      <!-- TOP NAV WITH LOGO -->  
      @include('user/nav')
      <section>
         <div id="head">
            <div class="line name" style="font-size: 25px">
               <label style="font-size: 60px; color: #d80f0f; font-family: Rise;">Contacts</label>
            </div>
         </div>
         <div id="content">
            <div class="line">
              <div class="col-lg-12">
                     <div class="contact-details2">
                         <div style="font-size: 17px">
                        <label style="font-size: 40px; font-family: Rise;">Contacts</label></div>
                        <h3 class="fa fa-map-marker"> Address: Maharlika Highway, Brgy.Caanawan, San Jose City, Nueva Ecija 3121 </h3>
                        <div><h3 class="fa fa-mobile"> Mobile No. 09124800941</h3></div>
                     </div>
                    <div class="col-lg-6">
                     <div class="contact-details">
                       <label style="font-size: 40px; font-family: Rise;">Opening Hours:</label>
                       <p> Monday:24-Hours</p>
                       <p> Monday:24-Hours</p>
                       <p> Monday:24-Hours</p>
                       <p> Monday:24-Hours</p>
                       <p> Monday:24-Hours</p>
                       <p> Monday:24-Hours</p>
                       <p> Monday:24-Hours</p>
                       <p> Monday:24-Hours</p>
                       <p> Monday:24-Hours</p>
                      </div>
                    </div>
                    <div class="col-lg-6">
                     <div class="contact-details3">
                       <label style="font-size: 40px; font-family: Rise;">Opening Hours:</label>
                       <p> Monday:24-Hours</p>
                       <p> Monday:24-Hours</p>
                       <p> Monday:24-Hours</p>
                       <p> Monday:24-Hours</p>
                       <p> Monday:24-Hours</p>
                       <p> Monday:24-Hours</p>
                       <p> Monday:24-Hours</p>
                       <p> Monday:24-Hours</p>
                       <p> Monday:24-Hours</p>
                      </div>
                    </div>
              </div>
            </div>
        
            <div id="map">
            </div>
         </div>
      </section>
      <!-- FOOTER -->   
      <footer>
         <div class="line">
            <div class="s-12 l-6">
               <p>Copyright @2018
               </p>
            </div>
            <div class="s-12 l-6">
               <p class="right">
                  Maharlika Suite Reservation
               </p>
            </div>
         </div>
      </footer>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
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
      <!-- script for map -->
      <script>
        function initMap() {
          var uluru = {lat: 15.776771, lng: 120.9671684};
          var map = new google.maps.Map(document.getElementById('map'), {
            zoom: 15,
            center: uluru
          });
          var marker = new google.maps.Marker({
            position: uluru,
            map: map
          });
        }
      </script>
      <script async defer
        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB1wJL0bmkdupz-AH-TwVxiMnMMQDwPa9g&callback=initMap">
      </script>
   </body>
</html>