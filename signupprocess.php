<?php
include 'login.php';

$connect = mysqli_connect("localhost", "root", "", "stay");

$username  = $_POST["username"];
$password = $_POST["password"];
$fname  = $_POST["fname"];
$lname  = $_POST["lname"];
$email  = $_POST["email"];
$address  = $_POST["address"]; 	

$usernameCheck = preg_match('/^[a-zA-Z ]*$/', $username);
// $password = preg_match('/	^(?=.*\d)(?=.*[A-Za-z])[0-9A-Za-z!@#$%]{8,12}$/', $password);
$emailCheck = preg_match('/^([a-z0-9]+([_\.\-]{1}[a-z0-9]+)*){1}([@]){1}([a-z0-9]+([_\-]{1}[a-z0-9]+)*)+(([\.]{1}[a-z]{2,6}){0,3}){1}$/i', $email);
//$addressCheck = preg_match('//^[a-zA-Z ][0-9A-Za-z!@#$%]  {8,12}*$/', $address);


			 // verifying if username already exists
			//echo  $username . " -- ";
			//echo  $password. " -- ";
			//echo  $fname. " -- ";
			//echo  $lname. " -- ";
			//echo  $email. " -- ";	
			//echo  $address. " -- ";
			
			if ( $usernameCheck ){
				if ( $emailCheck ){
						$check="SELECT * FROM login WHERE username='$username'";
						$result =  mysqli_query($connect, $check);
						if(mysqli_num_rows($result) > 0) {
							echo '<script>alert("Username already exists. Please use try another.")</script>'; 
						}else{
						// save the data to the database
							$sql = "INSERT INTO login VALUES('$username', '$password','$fname','$lname','$email','$address','user')";

							if (mysqli_query($connect, $sql)) {
							   echo '<script>alert("You have been successfully registered. Please sign in to get started")</script>'; 
							   echo '<script>window.location="login.php"</script>';
							} else {
								echo "Error: " . $sql . "<br>" . mysqli_error($connect);
							}

							mysqli_close($connect);	
						}
				} else {
					echo '<script>alert("Error: Invalid Email")</script>'; 
					echo '<script>window.location="signup.php"</script>';
				}
			} else {
				echo '<script>alert("Error: Invalid Username")</script>'; 
				echo '<script>window.location="signup.php"</script>';
			}
			
			
		
	?>