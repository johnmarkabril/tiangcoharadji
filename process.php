<?php
	session_start();
	if ( isset($_POST['Submit']) ) {

		$username = $_POST['username'];
		$password = $_POST['password'];

		include "connection.php";
		$result = mysql_query("SELECT * FROM login");
		if ( mysql_num_rows($result) >= 1 ) {
			while($row = mysql_fetch_array($result)){
				if ($row['username'] == $username && $row['password'] == $password ){
						echo  "Login success!!! Welcome".$row['username'];
						$_SESSION["session_data"] = $row;

						header('location: show.php');
						print "asdf";
				}
			}
		} else {
			echo ('Wrong Username or Password');
			header('Location: login.php');

		}
		
	} else {
		header('login.php');
	}
?>