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
      <style>
         .newline{
            padding-bottom: 20px;
            padding-top: 10px
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
            <div class="line">
               <h2>ATTRACTIONS</h2><p>
               <div class="newline"></div>
               </p>
               <div class="margin">
                  <div class="s-12 m-6 l-3 margin-bottom">
                     <i class="fa fa-beer fa-2x"></i>
                     <h3>Restobar</h3>
                     <p>INSERT TEXT</p>
                  </div>
                  <div class="s-12 m-6 l-3 margin-bottom">
                     <i class="fa fa-music fa-2x"></i>
                     <h3>Live Band</h3>
                     <p>INSERT TEXT</p>
                  </div>
                  <div class="s-12 m-6 l-3 margin-bottom">
                     <i class="fa fa-tint fa-2x"></i>
                     <h3>Pool</h3>
                     <p>INSERT TEXT</p>
                  </div>
                  <div class="s-12 m-6 l-3 margin-bottom">
                     <i class="fa fa-cutlery fa-2x"></i>
                     <h3>Catering</h3>
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
                      
      <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
      <script  src="js/index.js"></script>
      <script type="text/javascript" src="owl-carousel/owl.carousel.js"></script> 
      <script src="http://formvalidation.io/vendor/formvalidation/js/formValidation.min.js"></script>
      <script src="http://formvalidation.io/vendor/formvalidation/js/framework/bootstrap.min.js"></script>  
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
                    mobile: {
                        validators: {
                            notEmpty: {
                                message: 'Phone number is required'
                            },
                            regexp: {
                              message: 'The phone number can only contain the digits, spaces, -, (, ), + and .',
                              regexp: /^[0-9\s\-()+\.]+$/
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
      
      
   </body>
</html>