<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Join Us</title>
  <link rel="icon"  type="image/gif" href="images.jpg" />
  <link href='https://fonts.googleapis.com/css?family=Titillium+Web:400,300,600' rel='stylesheet' type='text/css'>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">


      <link rel="stylesheet" href="css/style.css">

</head>

<body>

<script>
       document.addEventListener('contextmenu', event => event.preventDefault());
       </script>


  <div class="form">

      <ul class="tab-group">
        <li class="tab active"><a href="#signup">Sign Up</a></li>
        <li class="tab"><a href="#login">Log In</a></li>
      </ul>

      <div class="tab-content">
        <div id="signup">
          <h1><font color="white">Sign Up For Ansari Hotel</font></h1>

          <form action="reg.php" method="post">

          <div class="top-row">
            <div class="field-wrap">
              <label>
                First Name<span class="req">*</span>
              </label>
              <input type="text" required autocomplete="off" name="fname"/>
            </div>

            <div class="field-wrap">
              <label>
                Last Name<span class="req">*</span>
              </label>
              <input type="text"required autocomplete="off" name="lname" />
            </div>
          </div>

          <div class="field-wrap">
            <label>
              Email Address<span class="req">*</span>
            </label>
            <input type="email"required autocomplete="off" name="email" />
          </div>

          <div class="field-wrap">
            <label>
              Set A Password<span class="req">*</span>
            </label>
            <input type="password"required autocomplete="off" name="pass" />
          </div>

           <div class="field-wrap">
            <label>
              Confirm Your Password<span class="req">*</span>
            </label>
            <input type="password"required autocomplete="off" name="cpass" />
          </div>

          <div class="field-wrap">
              <label>
                YYYY-MM-DD<span class="req">*</span>
              </label>
              <input type="text"required autocomplete="off" name="dob" />
            </div>

          <button type="submit" class="button button-block">Get Started</button>

          </form>

        </div>

        <br>


        
        <meta name="google-signin-client_id" content="1014439646481-m3gn612mallecn24vfa93l7s3d8njcsr.apps.googleusercontent.com">
  <script src="https://apis.google.com/js/platform.js" async defer></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script type="text/javascript" src="gscript.js"></script>
  <style>
    .data{
      display: none;
    }
  </style><div class="g-signin2" data-onsuccess="onSignIn" align="center"></div>
  


        <div id="login">
          <h1>Login To Ansari Hotel</h1>

          <form action="log.php" method="post">

            <div class="field-wrap">
            <label>
              Email Address<span class="req">*</span>
            </label>
            <input type="text"required autocomplete="off" name="email" />
          </div>

          <div class="field-wrap">
            <label>
              Password<span class="req">*</span>
            </label>
            <input type="password"required autocomplete="off" name="pass" />
          </div>

          <p class="forgot"><a href="#">Forgot Password?</a></p>

         <button class="button button-block"/>Log In</button>

          </form>

        </div>

      </div>

</div>
  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

    <script  src="js/index.js"></script>

    

</body>
</html>
