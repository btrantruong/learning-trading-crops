<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>The Greatest Farmer</title>
    <meta name="description" content="Free Bootstrap Theme by uicookies.com">
    <meta name="keywords" content="free website templates, free bootstrap themes, free template, free bootstrap, free website template">

    <link href="https://fonts.googleapis.com/css?family=Abel" rel="stylesheet">
    <link rel="stylesheet" href="../css/styles-merged.css">
    <link rel="stylesheet" href="../css/style.min.css">
    <link rel="stylesheet" href="../css/custom.css">

    <script type="text/javascript" src="js/jquery.min.js"></script>
    <script type="text/javascript" src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.14.0/jquery.validate.min.js"></script>
    <script type="text/javascript" src="signup.js"></script>

  </head>
  <body>

  <!-- START: header -->

  <div class="probootstrap-loader"></div>

  <header role="banner" class="probootstrap-header">
    <div class="container">
        <a href="../index.html" class="probootstrap-logo">The Greatest Farmer<span>.</span></a>

        <a href="#" class="probootstrap-burger-menu visible-xs" ><i>Menu</i></a>
        <div class="mobile-menu-overlay"></div>

        <nav role="navigation" class="probootstrap-nav hidden-xs">
          <ul class="probootstrap-main-nav">
            <li><a href="../index.html">Home</a></li>
<!--            <li><a href="services.html">Services</a></li>-->
            <li><a href="login.php">Login</a></li>
            <li class="active"><a href="signup.php">Sign Up</a></li>
          </ul>
          <div class="extra-text visible-xs">
            <a href="#" class="probootstrap-burger-menu"><i>Menu</i></a>
            <h5>Address</h5>
            <p>198 West 21th Street, Suite 721 New York NY 10016</p>
            <h5>Connect</h5>
            <ul class="social-buttons">
              <li><a href="#"><i class="icon-twitter"></i></a></li>
              <li><a href="#"><i class="icon-facebook2"></i></a></li>
              <li><a href="#"><i class="icon-instagram2"></i></a></li>
            </ul>
          </div>
        </nav>
    </div>
  </header>
  <!-- END: header -->

  <section class="probootstrap-section">
    <div class="container">

      <div class="row">
          <h2>Sign Up</h2>
        <div class="col-md-8 probootstrap-animate">
          <form action="#" method="post" class="probootstrap-form mb60">
            <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                  <label for="fname">First Name</label>
                  <input type="text" class="form-control" id="first_name" name="fname">
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label for="lname">Last Name</label>
                  <input type="text" class="form-control" id="last_name" name="lname">
                </div>
              </div>
            <div class="col-md-6">
                <div class="form-group">
                  <label for="lname">Username</label>
                  <input type="text" class="form-control" id="user_name" name="username">
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                   <br>
                   <button type="submit" class="btn btn-primary" name = "check">Check</button>
                </div>
            </div>
            </div>


            <div class="form-group">
              <label for="email">Email</label>
              <input type="email" class="form-control" id="email" name="email">
            </div>
            <div class="form-group">
              <label for="password">Password</label>
              <input type="password" class="form-control" id="password" name="password">
            </div>
            <div class="form-group">
              <label for="phonenumber">Phone Number</label>
              <input type="phonenumber" class="form-control" id="phonenumber" name="phonenumber">
            </div>

            <div class="row">
              <div class="col-md-2">
                <div class="form-group">
                  <label for="fname">Farmer/Buyer: </label>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <select name="membertype">
                    <option value="farmer">Farmer</option>
                    <option value="buyer">Buyer</option>
                  </select>
                </div>
              </div>
            </div>

            <div class="form-group">
              <input type="submit" class="btn btn-primary" id="submit" name="submit" value="Submit">
            </div>
          </form>
        </div>

      </div>
    </div>
  </section>
<!--
  <div class="container probootstrap-animate">
    <div id="map"></div>
  </div>
-->
  <!-- END section -->
<!--

  <footer class="probootstrap-footer" role="contentinfo">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <p class="probootstrap-copyright">&copy; 2017 <a href="https://uicookies.com/">uiCookies:Explorer</a> All Rights Reserved.</p>
          <ul class="probootstrap-social">
            <li><a href="#"><i class="icon-twitter"></i></a></li>
            <li><a href="#"><i class="icon-facebook2"></i></a></li>
            <li><a href="#"><i class="icon-instagram2"></i></a></li>
            <li><a href="#"><i class="icon-google-plus"></i></a></li>
          </ul>
        </div>
      </div>
    </div>
  </footer>
-->

  <div class="gototop js-top">
    <a href="#" class="js-gotop"><i class="icon-chevron-thin-up"></i></a>
  </div>


  <script src="../js/scripts.min.js"></script>
  <script src="../js/main.min.js"></script>

  <!-- Google Map -->
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
  <script src="../js/google-map.js"></script>

  <script src="../js/custom.js"></script>
  </body>
</html>
