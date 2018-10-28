<!DOCTYPE HTML>
<html>
	<head>
		<title>Contact Us</title>
<link rel="icon"  type="image/gif" href="images.jpg" />
		<link href="css/style1.css" rel="stylesheet" type="text/css"  media="all" />
		<link href='http://fonts.googleapis.com/css?family=PT+Sans+Narrow' rel='stylesheet' type='text/css'>
		  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

	</head>
	<body>
     
     <script>
       document.addEventListener('contextmenu', event => event.preventDefault());
       </script>

		<nav class="navbar navbar-inverse">
		  <div class="container-fluid">
		    <div class="navbar-header">
		      <a class="navbar-brand" href="index.php"><font-family: 'Satisfy'>ANSARI HOTEL</font></a>
		    </div>
		    <ul class="nav navbar-nav navbar-right">
		      <li><a href="index.php">Home</a></li>
		      <li class="active"><a href="#">Contact Us</a></li>
		      <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Tour Plans<span class="caret"></span></a>
		        <ul class="dropdown-menu">
		        	 <li><a href="restaurent">Food</a></li>
                     <li><a href="Hotel">Hotels</a></li>
                   
		        </ul>
		      </li>



<li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Account<span class="caret"></span></a>
 <ul class="dropdown-menu">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <meta name="google-signin-client_id" content="1014439646481-m3gn612mallecn24vfa93l7s3d8njcsr.apps.googleusercontent.com">
  <script src="https://apis.google.com/js/platform.js" async defer></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script type="text/javascript" src="gscript.js"></script>
<style>
    .data{
      display: none;
    }
  </style>
</head>
<body>
  <div class="g-signin2" data-onsuccess="onSignIn"></div>
  <div class="data">
    <li><p>Email Address</p>
    <p id="email" class="alert alert-danger"></p></li>
    <button onclick="signOut()" class="btn btn-danger">SignOut</button>
  </div>

  </ul>
 </li>



		        <li><a href="account.php"><span class="glyphicon glyphicon-user"></span> Join Us</a></li>
		  </div>
		</nav>


		<!-------start-Map------>
		<style>
      #map {
        width: 100%;
        height: 400px;
        background-color: grey;
      }
    </style>
  </head>
  <body>
    <div id="map"></div>
    <script>
      function initMap() {
        var uluru = {lat:  21.7679, lng: 78.8718};
        var map = new google.maps.Map(document.getElementById('map'), {
          zoom: 4,
          center: uluru
        });
        var marker = new google.maps.Marker({
          position: uluru,
          map: map
        });
      }
    </script>
    <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAuFlmesVGPaQJM2EtwGSlVsw8AS_2DSSI&callback=initMap">
    </script>

		<!-------start-contatct------>
					<div class="contact">
				<div class="section group">
				<div class="col span_1_of_3">
					<div class="contact_info">

      				</div>
      			<div class="company_address">
				     	<h3>Company Information :</h3>
						    	<p>Address:-</p>
						   		<p>Lovely Professional University,</p>
						   		<p>Jalandhar - Delhi G.T. Road(NH-1),Punjab(India)</p>
				   		<p>Phone:(062) 5XXXXX</p>
				   		<p>Fax: (000) 00000000</p>
				 	 	<p>Email: <span>mdashique2208@gmail.com</span></p>
				   		<p>Follow us on: <img src="facebook.gif" height="70" width="80"/></span>,<span><img src="95325b17795353.562bfbca60354.gif"height="70" width="80"/></span></p>
				   </div>
				</div>
				<div class="col span_2_of_3">
				  <div class="contact-form">
				  	<h3>Contact Us</h3>
					    <form action="conreg.php" method="post">
					    	<div>
						    	<span><label>FULL NAME</label></span>
						    	<span><input  type="text" class="textbox" name="naam" required></span>
						    </div>
						    <div>
						    	<span><label>E-MAIL ID</label></span>
						    	<span><input type="text" class="textbox" name="mail" required></span>
						    </div>
						    <div>
						     	<span><label>MOBILE NUMBER</label></span>
						    	<span><input  type="text" class="textbox" name="mob" required></span>
						    </div>
						    <div>
						    	<span><label>MESSAGE</label></span>
						    	<span><textarea  name="sub" required></textarea></span>
						    </div>

						   <div>
						   		<span><input type="submit" value="Submit"></span>
						  </div>

					    </form>

				    </div>
  				</div>
			  </div>
			</div>
					<!-------start-contatct------>
				</div>
				<div class="clear"> </div>
				<div class="boxs">
				<div class="wrap">
				<div class="box">

				</div>
			<!---start-box---->
		</div>
		<!---start-copy-Right----->
		<div class="copy-right">
			<p>PRIVACY POLICY  | SITE MAP  | &copy 2018 Ansari Hotel</p>
		</div>
		<!---End-copy-Right----->
			</div>
			<!---End-content----->
		</div>
		<!---End-Wrap--->
	</body>
</html>
