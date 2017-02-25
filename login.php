<!--A Design by W3layouts
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<html>
<head>
<title>Staycee's Pasta Cake Tea House</title>
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href='http://fonts.googleapis.com/css?family=Merriweather+Sans' rel='stylesheet' type='text/css'>
<!--slider-->
<link rel="stylesheet" href="css/flexslider.css" type="text/css" media="all" />
<script src="js/modernizr.js"></script>
<!-- jQuery -->
 <script src="js/jquery.min.js"></script>
  <script>window.jQuery || document.write('<script src="js/libs/jquery-1.7.min.js">\x3C/script>')</script>
  <!-- FlexSlider -->
  <script defer src="js/jquery.flexslider.js"></script>
  <script type="text/javascript">
    $(function(){
      SyntaxHighlighter.all();
    });
    $(window).load(function(){
      $('.flexslider').flexslider({
        animation: "slide",
        start: function(slider){
          $('body').removeClass('loading');
        }
      });
    });
  </script>
</head>
<body>
<div class="header-box"></div>
<div class="wrap"> 
	<div class="total">
		<div class="header">
			<div class="header-bot">
				<div class="logo">
					<a href="index.php"><img src="images/logo.jpg" alt=""/></a>
				</div>
				<ul class="follow_icon">
					<li><a href="https://www.facebook.com/pages/Staycees-Cakes-Pasta-Tea-House/1523879171188617?hc_ref=SEARCH"><img src="images/fb1.png" alt=""></a></li>
					
				</ul>
			    <div class="clear"></div> 
			</div>
			
			<div class="clear"></div> 
		 </div>	
		<div class="menu"> 	
			<div class="top-nav">
				<ul>
					<li ><a href="index.php">Home</a></li>
					<li><a href="about.php">About</a></li> |
					<li><a href="menu.php">Menu</a></li> |
					<li><a href="services.php">Services</a></li> |
					<li><a href="contact.php">Contact</a></li>
					
				</ul>
			</div>
		</div>		
		<?php
	
	if ( empty($_SESSION["session_data"]) ) {
?>
		
		<html lang="en-US">

			
			<body>
				<div class="lg-container">
					<h1>Welcome</h1>
					<form action="process.php" id="lg-form" name="lg-form" method="post">
						
						<div>
							<label for="username">Username:</label>
							<input type="text" name="username" id="username" placeholder="username"/>
						</div>
						
						<div>
							<label for="password">Password:</label>
							<input type="password" name="password" id="password" placeholder="password" />
						</div>
						
						<div>				
							<button type="submit" name="Submit"  id="login">Login</button><br>
						</div>
						<div>
						
						<div id="lg-form">	
							<a href="signup.php" class="btn btn-link" >Sign Up</a>
							
						</div>
						
					</form>
					<div id="message"></div>
				</div>
			</body>
</html>
<?php
	} else {
?>
		<script>window.location="login.php"</script>
<?php
	}
?>	
   </div>

<div class="footer-bottom">
 	<div class="wrap">
 		<div class="copy">
			
		</div>
 	</div>
 </div>
</body>
</html>

    	
    	
            