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
					
			    <div class="clear"></div> 
			</div>
			
			<div class="clear"></div> 
		 </div>	
		<div class="menu"> 	
			<div class="top-nav">
				<ul>
					<li><a href="index.php">Home</a></li>
					<li><a href="about.php">About</a></li> |
					<li><a href="menu.php">Menu</a></li> |
					<li class="active"><a href="services.php">Services</a></li> |
					<li><a href="contact.php">Contact</a></li>
				</ul>
			</div>
		</div>		
		<div class="banner">
		</div>
   </div>
<div class="main">
	  <div class="section group">
			<div class="main">
	  <div class="section group">
					 <div class="cont2 span_2_of_services services_desc">
					 
				       <h2>Reservation:</h2>
					   <center>
		    			   <div class="w3-container w3-lobster">
						
						</div>
	                    <div class="divider-1 wow fadeInUp"><span></span></div>
						<br/>
						
						<form method = "GET" action = "<?Php echo $_SERVER['PHP_SELF'];?>">
	                   First Name:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="fname" pattern="[a-zA-Z]*$" title="" required   /><br><br>
					  
					   Last Name:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="lname" pattern="[a-zA-Z]*$" title="" required   /><br><br>
					  
				       Contact Number:&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="number" pattern="[0-9]{11}$" title=""   /><br><br>
					   
					   Address:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="address" title=""    /><br><br>
					 
					   Reservation for:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<select name="reserve" pattern="[a-zA-Z]*$" title=""   >
						<option> Birthday</option>
						<option> Family Gathering </option>
						<option> Meeting </option>
						<option> Barkada  </option>

						
						</select></br><br>
				
				
					
					Date:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="date" name="date" title=""   /><br><br>
					
					Time:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="time" name="time" title=""   /><br><br>
				
					
					
				
				
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="submit" name="submit" onClick="return confirm('Are you sure?')" value="Reserve">&nbsp;&nbsp;&nbsp;&nbsp;
				
				</center>
				</form>
				<?php
		
		$connect = mysqli_connect("localhost", "root", "", "stay");
		if ($connect->connect_error) 
		{
		die("Connection failed: " . $connect->connect_error);
		} 
		
		?>
		
		<?php
		if (isset($_GET['submit'])){
					
		$state = $connect->prepare("INSERT INTO reservation VALUES (?, ?, ?, ?, ?, ?, ?)");
	
		$state->bind_param("sssssss", $fname, $lname, $number ,$address, $reserve, $date, $time);
		
		
		
			$fname = $_GET['fname'];
			$lname = $_GET['lname'];
			$number = $_GET['number'];
			$address= $_GET['address'];
			$reserve = $_GET['reserve'];
			$date = $_GET['date'];
			$time = $_GET['time'];
			
		if ($state->execute()){
			echo '<script language="javascript">;';
			echo 'alert("Reserve Successful!")';
			echo '</script>';
			echo '<script>window.location="services.php"</script>';
			
			}
			else{
			echo "Error" .$connection->error;
			}
			
		$state->close();
		$connection->close();
			
			
			
			}
		
		?>
		
		   		<div class="clear"></div> 		
	          </div>
		   		
				
				
		     <div class="clear"> </div>
			</div>
	</div>
		   		
				<div class="clear"></div> 		
			</div>
		     <div class="clear"> </div>
			</div>
	</div>
<div class="footer-bottom">
 	<div class="wrap">
 		<div class="copy">
			
		</div>
 	</div>
 </div>
</body>
</html>

    	
    	
            