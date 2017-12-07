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
    <!--   <link rel="stylesheet" type="text/css" href="bootstrap/"> -->
      <!-- CUSTOM STYLE -->  
      <link rel="stylesheet" href="css/template-style.css">
      <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800&amp;subset=latin,latin-ext' rel='stylesheet' type='text/css'>
      <script type="text/javascript" src="js/jquery-1.8.3.min.js"></script>
      <script type="text/javascript" src="js/jquery-ui.min.js"></script>    
      <script type="text/javascript" src="js/modernizr.js"></script>
      <script type="text/javascript" src="js/responsee.js"></script> 

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
      <header>
         <nav>
            <div class="line">
               <div class="top-nav">              
                  <div class="logo hide-l">
                     <img src="img/logo.png">
                  </div>                  
                  <p class="nav-text">Custom menu text</p>
                  <div class="top-nav s-12 l-5">
                     <ul class="right top-ul chevron">
                        <li><a href="{{URL::Route('home')}}">Home</a>
                        </li>
                        <li>
                           <a>Rooms</a>           
                           <ul>
                              <li><a>Single Room</a>
                              </li>
                              <li><a>Family Room</a>
                              </li>
                              <li><a>Family Suite</a>             
                              </li>
                           </ul>
                        </li>
                        <li><a href="{{URL::Route('product')}}">About</a>
                        </li>
                       
                     </ul>
                  </div>
                  <ul class="s-12 l-2">
                     <li class="logo hide-s hide-m">
                        <img src="img/logo.png">
                     </li>
                  </ul>
                  <div class="top-nav s-12 l-5">
                     <ul class="top-ul chevron">
                        
                        
                        <li><a class="pull-right" data-toggle="modal" data-target="#myModal">Login</a>
                        </li>
                     </ul> 
                  </div>
               </div>
            </div>
         </nav>
      </header>
      <section>
                 <!-- Modal -->
        <div class="modal fade" id="myModal" role="dialog">
          <div class="modal-dialog">
          
            <!-- Modal content-->
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title"></h4>
              </div>
              <div class="modal-body">
                <div class="container">
                  <div class="card"></div>
                    <div class="card">
                      <h1 class="title">Login</h1>
                      <form>
                        <div class="input-container">
                          <input type="#{type}" id="#{label}" required="required"/>
                          <label for="#{label}">Username</label>
                          <div class="bar"></div>
                        </div>
                        <div class="input-container">
                          <input type="#{type}" id="#{label}" required="required"/>
                          <label for="#{label}">Password</label>
                          <div class="bar"></div>
                        </div>
                        <div class="button-container">
                          <button><span>Go</span></button>
                        </div>
                        <div class="footer"><a href="#">Forgot your password?</a></div>
                      </form>
                    </div>
                    <div class="card alt">
                      <div class="toggle"></div>
                      <h1 class="title">Register
                        <div class="close"></div>
                      </h1>
                      <form id="signup" method="POST">
                        <div class="input-container col-lg-4">
                          <input type="text" id="firstname" name="firstname"/>
                          <label for="firstname">First Name *</label>
                          <div class="bar"></div>
                        </div>
                        <div class="input-container col-lg-4">
                          <input type="text" id="lastname" name="lastname"/>
                          <label for="lastname">Last Name *</label>
                          <div class="bar"></div>
                        </div>
                        <div class="input-container  col-lg-4">
                          <input type="text" id="emailaddress" name="emailaddress"/>
                          <label for="email">Email *</label>
                          <div class="bar"></div>
                        </div>
                        <div class="input-container col-lg-4">
                          <input type="text" id="username" name="username" />
                          <label for="username">Username *</label>
                          <div class="bar"></div>
                        </div>
                        <div class="input-container col-lg-4">
                          <input type="password" id="password" name="password"/>
                          <label for="password">Password *</label>
                          <div class="bar"></div>
                        </div>
                        <div class="input-container col-lg-4">
                          <input type="password" id="repeatpassword" name="repeatpassword"/>
                          <label for="repeatpassword">Repeat Password *</label>
                          <div class="bar"></div>
                        </div>
                        <div class="button-container">
                          <button type="submit"><span>Submit</span></button>
                        </div>
                      </form>
                    </div>
                  </div>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
              </div>
            </div>
            
          </div>
        </div>
         <!-- CAROUSEL -->  	
         <div id="carousel">
            <div id="owl-demo" class="owl-carousel owl-theme">
               <div class="item">
                  <img src="img/first.jpg" alt="">      
                  <div class="carousel-text">
                     <div class="line">
                        <div class="s-12 l-9">
                           <h2>Theme based on Responsee framework</h2>
                        </div>
                        <div class="s-12 l-9">
                           <p>With amazing responsive carousel
                           </p>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="item">
                  <img src="img/second.jpg" alt="">      
                  <div class="carousel-text">
                     <div class="line">
                        <div class="s-12 l-9">
                           <h2>Build new layout in 10 minutes!</h2>
                        </div>
                        <div class="s-12 l-9">
                           <p>Lightweight, more intuitive and useful responsive CSS framework
                           </p>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="item">
                  <img src="img/third.jpg" alt="">      
                  <div class="carousel-text">
                     <div class="line">
                        <div class="s-12 l-9">
                           <h2>Design theme is under the MIT license</h2>
                        </div>
                        <div class="s-12 l-9">
                           <p>Best theme based on Responsee framework
                           </p>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <!-- FIRST BLOCK --> 	
         <div id="first-block">
            <div class="line">
               <h2>Some awesome blocks</h2>
               <p class="subtitile">Lorem ipsum dolor sit amet, consectetuer adipiscing elit.
               </p>
               <div class="margin">
                  <div class="s-12 m-6 l-3 margin-bottom">
                     <i class="icon-paperplane_ico icon2x"></i>
                     <h3>About</h3>
                     <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.
                     </p>
                  </div>
                  <div class="s-12 m-6 l-3 margin-bottom">
                     <i class="icon-star icon2x"></i>
                     <h3>Company</h3>
                     <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.
                     </p>
                  </div>
                  <div class="s-12 m-6 l-3 margin-bottom">
                     <i class="icon-message icon2x"></i>
                     <h3>Services</h3>
                     <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.
                     </p>
                  </div>
                  <div class="s-12 m-6 l-3 margin-bottom">
                     <i class="icon-mail icon2x"></i>
                     <h3>Contact</h3>
                     <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.
                     </p>
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
                        <h1>Amazing title</h1>
                        <p class="margin-bottom">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat.
                        </p>
                        <a class="button s-12 l-4 center" href="product.html">Read more</a>  			
                     </article>
                  </div>
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
                     <img src="img/first-small.jpg" alt="alternative text">      
                     <p class="subtitile">Lorem ipsum dolor sit amet, consectetuer adipiscing elit.
                     </p>
                  </div>
                  <div class="s-12 m-6 l-3">
                     <img src="img/second-small.jpg" alt="alternative text">      
                     <p class="subtitile">Lorem ipsum dolor sit amet, consectetuer adipiscing elit.
                     </p>
                  </div>
                  <div class="s-12 m-6 l-3">
                     <img src="img/third-small.jpg" alt="alternative text">      
                     <p class="subtitile">Lorem ipsum dolor sit amet, consectetuer adipiscing elit.
                     </p>
                  </div>
                  <div class="s-12 m-6 l-3">
                     <img src="img/fourth-small.jpg" alt="alternative text">      
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
                     <p class="s-12 m-12 l-8 center">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit  lobortis nisl ut aliquip ex ea commodo consequat.
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
      <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
      <script  src="js/index.js"></script>
      <script type="text/javascript" src="owl-carousel/owl.carousel.js"></script> 
      <script src="http://formvalidation.io/vendor/formvalidation/js/formValidation.min.js"></script>
      <script src="http://formvalidation.io/vendor/formvalidation/js/framework/bootstrap.min.js"></script>  
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

        $('document').ready(function(){
            $('#signup').formValidation({
                framework: 'bootstrap',
                fields: {
                    firstname: {
                        validators: {
                            notEmpty: {
                                message: 'First name is required'
                            }
                        }
                    },
                    lastname: {
                        validators: {
                            notEmpty: {
                                message: 'Last name is required'
                            }
                        }
                    },
                    emailaddress: {
                        validators: {
                            notEmpty: {
                                message: 'Email address is required'
                            }
                        }
                    },
                    username: {
                        validators: {
                            notEmpty: {
                                message: 'Username is required'
                            }
                        }
                    },
                    repeatpassword: {
                        validators: {
                            notEmpty: {
                                message: 'Password is required'
                            },
                            identical: {
                                field: 'password',
                                message: 'The password and its confirm are not the same'
                            }
                        }
                    },
                }
            })
            .on('success.form.fv', function(e) {
              // Prevent form submission
              e.preventDefault();

              var $form = $(e.target),
                  fv    = $form.data('formValidation');
                  swal({
                    title: "Are you sure?",
                    text: "You are trying to save this data!",
                    icon: "warning",
                    buttons: true,
                    dangerMode: true,
                  })
                  .then((save) => {
                    if (save) {
                      swal("Success! Your information has been saved!", {
                        icon: "success",
                      });
                    } else {
                      swal("Error!");
                    }
                  });
              // Use Ajax to submit form data
              // $.ajax({
              //     url: $form.attr('action'),
              //     type: 'POST',
              //     data: $form.serialize(),
              //     success: function(result) {
              //         // ... Process the result ...
              //     }
              // });
            });
        });
      </script>
   </body>
</html>