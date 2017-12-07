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
       <link rel="stylesheet" type="text/css" href="fa/css/font-awesome.min.css">
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
      @include('nav')
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
            <div class="line">
               <h2>ATTRACTIONS</h2><p>
               </p>
               <div class="margin">
                  <div class="s-12 m-6 l-3 margin-bottom">
                     <i class="fa fa-beer fa-2x"></i>
                     <h3>Restobar</h3>
                     <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.
                     </p>
                  </div>
                  <div class="s-12 m-6 l-3 margin-bottom">
                     <i class="fa fa-music fa-2x"></i>
                     <h3>Live Band</h3>
                     <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.
                     </p>
                  </div>
                  <div class="s-12 m-6 l-3 margin-bottom">
                     <i class="fa fa-tint fa-2x"></i>
                     <h3>Pool</h3>
                     <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.
                     </p>
                  </div>
                  <div class="s-12 m-6 l-3 margin-bottom">
                     <i class="fa fa-cutlery fa-2x"></i>
                     <h3>Catering Services</h3>
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
                     </article>
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

            </div>
            <div class="s-12 l-6">
               <p class="right">
                  <a class="right" href="http://www.myresponsee.com" title="Responsee - lightweight responsive framework">Maharlika Suites</a>
               </p>
            </div>
         </div>
      </footer>
                       <!-- Modal -->
        <div class="modal fade" id="myModal" role="dialog">
          <div class="modal-dialog"  style="width:500px;">
          
            <!-- Modal content-->
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title"></h4>
              </div>
              <div class="modal-body">
                <div class="container">
                  <div class="row">
                  <div class="col-md-12">
                    <div class="panel panel-login">
                      <div class="panel-heading">
                        <div class="row">
                          <div class="col-xs-6">
                            <a href="#" class="active" id="login-form-link">Login</a>
                          </div>
                          <div class="col-xs-6">
                            <a href="#" id="register-form-link">Register</a>
                          </div>
                        </div>
                        <hr>
                      </div>
                      <div class="panel-body">
                        <div class="row">
                          <div class="col-lg-12">
                            <form id="login-form" action="https://phpoll.com/login/process" method="post" role="form" style="display: block;">
                              <div class="form-group">
                                <input type="text" name="username" id="username" tabindex="1" class="form-control" placeholder="Username" value="">
                              </div>
                              <div class="form-group">
                                <input type="password" name="password" id="password" tabindex="2" class="form-control" placeholder="Password">
                              </div>
                              <div class="form-group text-center">
                                <input type="checkbox" tabindex="3" class="" name="remember" id="remember">
                                <label for="remember"> Remember Me</label>
                              </div>
                              <div class="form-group">
                                <div class="row">
                                  <div class="col-sm-6 col-sm-offset-3">
                                    <input type="submit" name="login-submit" id="login-submit" tabindex="4" class="form-control btn btn-login" value="Log In">
                                  </div>
                                </div>
                              </div>
                              <div class="form-group">
                                <div class="row">
                                  <div class="col-lg-12">
                                    <div class="text-center">
                                      <a href="https://phpoll.com/recover" tabindex="5" class="forgot-password">Forgot Password?</a>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </form>
                            <form id="signup"  method="POST" role="form" style="display: none;">
                              <div class="form-group">
                                <input type="text" name="firstname" id="firstname" tabindex="1" class="form-control" placeholder="First Name" value="">
                              </div>
                               <div class="form-group">
                                <input type="text" name="lastname" id="lastname" tabindex="1" class="form-control" placeholder="Last Name" value="">
                              </div>
                               <div class="form-group">
                                <input type="text" name="mobile" id="mobile" tabindex="1" class="form-control" placeholder="Phone Number" value="">
                              </div>
                              <div class="form-group">
                                <input type="text" name="username" id="username" tabindex="1" class="form-control" placeholder="Username" value="">
                              </div>
                              <div class="form-group">
                                <input type="email" name="emailaddress" id="emailaddress" tabindex="1" class="form-control" placeholder="Email Address" value="">
                              </div>
                              <div class="form-group">
                                <input type="password" name="password" id="password" tabindex="2" class="form-control" placeholder="Password">
                              </div>
                              <div class="form-group">
                                <input type="password" name="repeatpassword" id="repeatpassword" tabindex="2" class="form-control" placeholder="Confirm Password">
                              </div>
                              <div class="form-group">
                                <div class="row">
                                  <div class="col-sm-6 col-sm-offset-3">
                                   <input type="submit" name="register-submit" id="register-submit" tabindex="4" class="form-control btn btn-register" value="Register Now" style="width:150px;">
                                  </div>
                                </div>
                              </div>
                            </form>
                          </div>
                        </div>
                      </div>
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
                            },
                            emailAddress: {
                              message: 'The input is not a valid email address'
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
                      $.ajax({
                        headers:{'X-CSRF-Token': $('input[name="_token"]').val()},
                        url: "{{URL::Route('register')}}",
                        type: 'POST',
                        data: $form.serialize(),
                        success: function(result) {
                          console.log(result);
                          if(result.success == 'yes'){
                            swal("Saved!", "Data has been approved", "success");
                          }
                        }
                      });
                    } else {
                      swal("Error!");
                    }
                  });
              
            });
        });
      </script>
      <script type="text/javascript">
        $(function() {

    $('#login-form-link').click(function(e) {
    $("#login-form").delay(100).fadeIn(100);
    $("#signup").fadeOut(100);
    $('#register-form-link').removeClass('active');
    $(this).addClass('active');
    e.preventDefault();
  });
  $('#register-form-link').click(function(e) {
    $("#signup").delay(100).fadeIn(100);
    $("#login-form").fadeOut(100);
    $('#login-form-link').removeClass('active');
    $(this).addClass('active');
    e.preventDefault();
  });

});

      </script>
      
   </body>
</html>