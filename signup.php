<!DOCTYPE HTML>
<html lang="en-US">

<body>
	<div class="lg-container">
		<h1>Sign-Up</h1>
		<form action="signupprocess.php" id="lg-form" name="lg-form" method="post">
			<div>
				<label for="username">Username:</label>
				<input type="text" name="username" id="username" placeholder="Username" required />
			</div>
			<br/>
			<div>
				<label for="password">Password:</label>
				<input type="password" name="password" id="password" placeholder="Password" required />
			</div>
			<br/>
			<div>
				<label for="fname">First Name:</label>
				<input type="text" name="fname" id="fname" placeholder="First Name" required />
			</div>
			<br/>
			<div>
				<label for="lname">Last Name:</label>
				<input type="text" name="lname" id="lname" placeholder="Last Name" required />
			</div>
			<br/>
			<div>
				<label for="email">Email:</label>
				<input type="text" name="email" id="email" placeholder="Email" required />
			</div>
			<br/>
			<div>
				<label for="address">Address:</label>
				<input type="text" name="address" id="address" placeholder="Address" required />
			</div>
			<br/>
			<div>	
				<center>
				<button type=" submit" onClick="return confirm('Are you sure?')"  name="Submit"  id="login">Login</button>
				
			</div>
			<div>
		
		</form>
				</center>
		
		
</body>
</html>