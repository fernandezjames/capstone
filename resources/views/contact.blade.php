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

      <!--login template-->
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">
      <link rel='stylesheet prefetch' href='https://fonts.googleapis.com/css?family=Roboto:400,100,300,500,700,900|RobotoDraft:400,100,300,500,700,900'>
      <link rel='stylesheet prefetch' href='https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css'>
      <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
      <!--[if lt IE 9]>
         <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
        <script src="http://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js"></script>
      <![endif]-->
   </head>
   <body class="size-1140">
      <!-- TOP NAV WITH LOGO -->  
      @include('nav')
      <section>
         <div id="head">
            <div class="line">
               <h1>Contacts</h1>
            </div>
         </div>
         <div id="content">
            <div class="line">
               
                  
             
        
                  <div class="col-lg-12">
                     <div class="contact-details2">
                        <h2>Our Address:</h2>
                        <p>Address: Caanawan, San Jose City, 3121 Nueva Ecija</p> 
                        <p>Phone: (044) 511 3918</p>
                     </div>
                     <div class="col-lg-4">
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
        
         <div id="fourth-block">
            <div class="line">
               
                  MAP

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
   </body>
</html>