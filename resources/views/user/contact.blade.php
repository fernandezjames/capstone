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
            <link rel="stylesheet" href="css/style.css">
            <link rel="stylesheet" href="css/contact.css">
            <link rel="stylesheet" type="text/css" href="fa/css/font-awesome.css">
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

<style type="text/css">
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
            <div class="line" style="font-size: 25px">
               <h1>Contacts</h1>
            </div>
         </div>
         <div id="content">
            <div class="line">
              <div class="col-lg-12">
                     <div class="contact-details2">
                         <div style="font-size: 17px">
                        <h2>Our Address</h2></div>
                        <h3 class="fa fa-map-marker"> Address: Maharlika Highway, Brgy.Caanawan, San Jose City, Nueva Ecija 3121 </h3>
                        <div><h3 class="fa fa-mobile"> Mobile No. 09124800941</h3></div>
                     </div>
                    <div class="col-lg-6">
                     <div class="contact-details">
                       Opening Hours:
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
                       Opening Hours:
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