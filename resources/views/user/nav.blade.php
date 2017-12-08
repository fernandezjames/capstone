<link rel="stylesheet" href="{!! asset('assets/css/style.css') !!}">
<div>
   <header>
      <nav>
         <div class="line">
            <div class="top-nav">              
               <div class="logo hide-l">
                  <img src="img/logo.png">
               </div>                  
               <p class="nav-text">Custom menu text</p>
               <div class="top-nav s-12 l-5" style="height: 50px;">
                  <ul class="right top-ul chevron">
                     <li><a href="{{URL::Route('home')}}">Home</a>
                     </li>
                     <li><a href="{{URL::Route('rooms')}}">Rooms</a>
                     </li>
                     <li>
                        <a>About</a>           
                        <ul>
                           <li><a href="{{URL::Route('contact')}}">Contacts</a>
                           </li>
                           <li><a href="{{URL::Route('mission')}}">Mission&Vision</a>
                           </li>
                           <li><a href="{{URL::Route('history')}}">History</a>             
                           </li>
                        </ul>
                     </li>
                     
                    
                  </ul>
               </div>
               <ul class="s-12 l-2">
                  <li class="logo hide-s hide-m">
                     <img src="img/logo.png">
                  </li>
               </ul>
               <div class="top-nav s-12 l-5" style="height: 50px;">
                  <ul class="top-ul chevron">
                     
                     
                     <li><a data-toggle="modal" data-target="#myModal">Login</a>
                     </li>
                  </ul> 
               </div>
            </div>
         </div>
      </nav>
   </header>
</div>

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
                                <input type="email" name="email" id="email" tabindex="1" class="form-control" placeholder="Email Address" value="">
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
                              <input type="hidden" name="_token" value="{{ csrf_token() }}">
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
      </div>

<script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<script src="{!! asset('assets/formValidation/formValidation.min.js')!!}"></script>
<script src="{!! asset('assets/formValidation/bootstrap.min.js')!!}"></script>  

<script type="text/javascript">
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