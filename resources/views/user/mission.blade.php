<!DOCTYPE html>
<html lang="en-US">
   <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width" />
      <title>Maharlika Suite Reservation</title>
      <link rel="icon" href="img/icon.png">
      @include('plugins')

      <!-- CUSTOM STYLE -->  
      <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800&amp;subset=latin,latin-ext' rel='stylesheet' type='text/css'>
      <!--[if lt IE 9]>
         <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
        <script src="http://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js"></script>
      <![endif]-->
       <!--modal-->
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">


   </head>
   <style type="text/css">
        @font-face {
        font-family: Rise;
        src: url("font/Rise of Kingdom.ttf");
    }
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
   </style>
   <body class="size-1140">
      <!-- TOP NAV WITH LOGO -->  
      @include('user/nav')
      <section>
         <div id="head">
            <div class="line name" style="font-size: 25px">
               <label style="font-size: 60px; color: #d80f0f; font-family: Rise;">Mission & Vision</label>
            </div>
         </div>
         <div id="content">
            <div class="line" style="font-size: 35px">
               <label style="font-size: 50px; font-family: Rise;">Mission</label>
               <p class="s-12 m-12 l-8 center" style="font-size:25px;">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi. Nam liber tempor cum soluta nobis eleifend option congue nihil.
               </p>
               <label style="font-size: 50px; font-family: Rise;">Vision</label>
               <p class="s-12 m-12 l-8 center" style="font-size:25px;">Imperdiet doming id quod mazim placerat facer possim assum. Typi non habent claritatem insitam; est usus legentis in iis qui facit eorum claritatem. Investigationes demonstraverunt lectores legere me lius quod ii legunt saepius. Claritas est etiam processus dynamicus, qui sequitur mutationem consuetudium lectorum. Mirum est notare quam littera gothica, quam nunc putamus parum claram, anteposuerit litterarum formas humanitatis per seacula quarta decima et quinta decima. Eodem modo typi, qui nunc nobis videntur parum clari, fiant sollemnes in futurum.
               </p>
            </div>
         </div>
        
         <div id="fourth-block">
            <div class="line">
               <div id="owl-demo2" class="owl-carousel owl-theme">
                  
                  <div class="item">
                    <div id="first-block">
                       <i class="fa fa-beer fa-2x"></i>
                       <h2>Restobar</h2>
                       <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat.
                     </p>
                    </div>
                  </div>
                  <div class="item">
                     <div id="first-block">
                         <i class="fa fa-music fa-2x"></i>
                       <h2>Live Band</h2>
                       <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat.
                     </p>
                    </div>
                  </div>
                  <div class="item">
                     <div id="first-block">
                         <i class="fa fa-tint fa-2x"></i>
                       <h2>Pool</h2>
                       <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat.
                     </p>
                    </div>
                  </div>
                  <div class="item">
                     <div id="first-block">
                       <i class="fa fa-cutlery fa-2x"></i>
                       <h2>Catering</h2>
                       <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat.
                     </p>
                    </div>
                  </div>
               </div>
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
                  <a class="right" href="http://www.myresponsee.com" title="Responsee - lightweight responsive framework">Maharlika Suite Reservation</a>
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
   </body>
</html>