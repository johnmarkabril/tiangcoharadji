<?php 
	include('connection.php');
	$name = $_POST['name'];
	$email = $_POST['email'];	
	$subject = $_POST['subject'];
	$message = $_POST['message'];
	
	
if (preg_match("/^[a-zA-Z ]*$/",$name) == 0)
		{
			if (preg_match('/^([\w-]+(?:\.[\w-]+)*)@((?:[\w-]+\.)*\w[\w-]{0,66})\.([a-z]{2,6}(?:\.[a-z]{2})?)$/',$email))
			{
				
	mysql_query("INSERT INTO message (name, email, subject, message) VALUES ('$name','$email','$subject','$message')");
	
			}else
			{
				echo '<script>alert("ERROR: name")</script>';
				echo '<script>window.location="contact.php"</script>';
				
			}
		}else
				{
			echo '<script>alert("ERROR: email")</script>';
			echo '<script>window.location="contact.php"</script>';
				}
	?>