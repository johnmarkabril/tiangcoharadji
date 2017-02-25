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
					<li><a href="contact.php">Contact</a></li>|
					<li><a href="logout.php">Log-Out</a></li>
					
				</ul>
			</div>
		</div>		
		<table border="1">
								<?php
									$connect = mysqli_connect("localhost", "root", "", "stay");
									if ($connect->connect_error) {
										die("Connection failed: " . $connect->connect_error);
									} 
									$query = "SELECT * from Reservation";
									$data = $connect -> query($query);
									if ($data -> num_rows > 0){
								?>
										
								<tr>
									<th><center> First Name </th>
									<th><center> Last Name </th>
									<th><center> Contact Number </th>
									<th><center> Address </th>
									<th><center> Reserve </th>
									<th><center> Date </th>
									<th><center> Time </th>
									
								</tr>
							
								<tbody class="list">
									<?php
										while($row = $data->fetch_assoc()){
									?>
											<tr>
												<td class="fname"><?php echo $row['fname']; ?></td>
												<td class="lname"><?php echo $row['lname']; ?></td>
												<td class=""><?php echo $row['number']; ?></td>
												<td class=""><?php echo $row['address']; ?></td>
												<td class=""><?php echo $row['reserve']; ?></td>
												<td class=""><?php echo $row['date']; ?></td>
												<td class=""><?php echo $row['time']; ?></td>
												
											</tr>
											
											
									<?php
										}
										
									}
									$connect->close();
									?>
									
		
	
		
								</tbody>
							</table>
   </div>


</body>
</html>

    	
    	
            