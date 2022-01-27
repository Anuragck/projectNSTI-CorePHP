

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>NSTI CALICUT</title>
        <link rel="icon" href="./favicon.ico" />
        <link
            rel="stylesheet"
            href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
            integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm"
            crossorigin="anonymous"
        />
        <link href="https://fonts.googleapis.com/css2?family=Open+Sans&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="./assets/css/style.css" >
    </head>

    <body>
        <div class="container-fluid" id="header-container">
            <div class="logo-images">
                <img src="./assets/images/test.png" class="img-fluid" alt="Responsive image" />
            </div>

            <!--navbar start-->

            <nav class="navbar navbar-expand-lg navbar-dark sticky-top">
                <button
                    class="navbar-toggler"
                    type="button"
                    data-toggle="collapse"
                    data-target="#navbarSupportedContent"
                    aria-controls="navbarSupportedContent"
                    aria-expanded="true"
                    aria-label="Toggle navigation"
                >
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="navbar-collapse justify-content-md-center collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link" href="index.php">HOME</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="./about.php">ABOUT US</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="./courses.php">COURSES OFFERED</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="./register.php">REGISTER</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="./login.php">LOGIN</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="contact.php">CONTACT US</a>
                        </li>
                        
                    </ul>
                </div>
                
            </nav>

            <!--navbar end-->
  <div class="container">
    <div class="row">
      <div class="col-md-4 offset-md-4">
        <div class="text-center mt-5">
          <img class="mb-2" src="./assets/images/login_logo.png" alt="" width="130" height="100">
        </div>
        <h1 class="text-center">User Login</h1>
        <hr>
        <form id="login_form">
          <span id="login_error_message"></span>
          <div class="mb-3">
            <label for="username">Username *</label>
            <input type="text" class="form-control" id="username" name="username" placeholder="Enter username"
              maxlength="50">
            <div id="username_error_message" class="text-danger"></div>
          </div>
          <div class="mb-3">
            <label for="password">Password *</label>
            <input type="password" class="form-control" id="password" name="password" placeholder="Enter password"
              maxlength="50">
            <div id="password_error_message" class="text-danger"></div>
          </div>
          <hr class="mb-4">
          <input type="hidden" name="action" id="action" value="login_user">
          <button class="btn btn-primary btn-lg btn-block" type="submit">Login</button>
          <div class="mt-2">
            <p><a href="register.php">Do not have an account yet? Register.</a></p>
          </div>
        </form>
        <p class="mt-5 mb-3 text-muted text-center">ADMIN <a target="blank"
            href="./admin/login.html">Login</p>
      </div>
      <div class="col-sm-4"></div>
    </div>
  </div>

  <!-- JQuery-3.4.1 -->
  <script src="vendor/jquery-3.4.1.min.js"></script>

  <script>
    $(document).ready(function () {

      $(document).keypress(function (e) {
        if (e.which == 13) {
          loginUser();
        }
      });

      $('#login_form').on('submit', function (event) {
        event.preventDefault();
        loginUser();
      });

      var error_username = false;
      var error_password = false;

      $("#username").focusout(function () {
        check_username();
      });
      $("#password").focusout(function () {
        check_password();
      });

      function check_username() {

        if ($.trim($('#username').val()) == '') {
          $("#username_error_message").html("Username is a required field.");
          $("#username_error_message").show();
          $("#username").addClass("is-invalid");
          error_username = true;
        } else {
          $("#username_error_message").hide();
          $("#username").removeClass("is-invalid");
        }
      }

      function check_password() {

        if ($.trim($('#password').val()) == '') {
          $("#password_error_message").html("Password is a required field.");
          $("#password_error_message").show();
          $("#password").addClass("is-invalid");
          error_password = true;
        } else {
          $("#password_error_message").hide();
          $("#password").removeClass("is-invalid");
        }
      }

      function loginUser() {

        error_username = false;
        error_password = false;

        check_username();
        check_password();

        if (error_username == false && error_password == false) {
          data = $('#login_form').serialize();
          $.ajax({
            type: "POST",
            data: data,
            url: "profile_action.php",
            dataType: "json",
            success: function (data) {
              if (data.status == 'inactive') {
                $('#login_error_message').html('<div class="alert alert-danger">' + data.error + '</div>');
              } else if (data.status == 'success') {
                window.location = "welcome.php";
              } else if (data.status == 'error') {
                $('#login_error_message').html('<div class="alert alert-danger">' + data.error + '</div>');
              }
            },
            error: function () {
              alert("Oops! Something went wrong.");
            }
          });
        } else {
          $('#login_error_message').html('<div class="alert alert-danger">Incorrect username or password.</div>');
        }
      }
    });
  </script>
       <!-- Site footer -->
       <footer class="site-footer">
    <div class="container-fluid footer-main">
      <div class="row">
        <div class="col-sm-12 col-md-4">
          <h6>ADDRESS</h6>
          <p class="text-justify">National Skill Training Institute (NSTI)<br>
            Govindapuram PO,<br>
            Calicut,<br>
            Pin:673016,<br>
            Kerala State
          </p>
        </div>

        <div class="col-xs-6 col-md-4 ">
            
          <h6 >CONTACT DETAILS</h6>
          <ul class="contact-footer">
            Mail: <a href="dirati.clt-mosde@gov.in">dirati.clt-mosde@gov.in</a><br>
            Phone: 0495 2742500
          </ul>
        </div>

        <div class="col-xs-6 col-md-4">
          <h6>GOOGLE MAP</h6>
          
            
                <div style="width: 100%"><iframe width="100%" height="150px" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?width=100%25&amp;height=300&amp;hl=en&amp;q=nsti%20calicut+(creators)&amp;t=k&amp;z=18&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"></iframe></div>
            
        </div>
      </div>
      <hr>
    </div>
    <div class="container-fluid footer-main">
      <div class="row">
        <div class="col-md-8 col-sm-6 col-xs-12">
          <p class="copyright-text">Copyright &copy; 2020 All Rights Reserved by 
       <a href="#">Team CREATORS</a>.
          </p>
        </div>

        <div class="col-md-4 col-sm-6 col-xs-12">
          <ul class="social-icons">
            <li><a class="facebook" href="#"><i class="fab fa-facebook-f"></i></a></li>
            <li><a class="youtube" href="#"><i class="fab fa-youtube"></i></a></li>
            <li><a class="twitter" href="#"><i class="fab fa-twitter"></i></a></li>
              
          </ul>
        </div>
      </div>
    </div>
</footer>

<!--footer end-->

        <script
            src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
            integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
            crossorigin="anonymous"
        ></script>
        <script defer src="https://use.fontawesome.com/releases/v5.0.0/js/all.js"></script>
</body>
</html>
</body>

</html>