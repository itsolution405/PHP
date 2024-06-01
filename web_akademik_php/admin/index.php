<?php
	session_start();	
	if(isset($_SESSION['salah']))
	{
		echo '<script>alert("Username atau Password yang dimasukan salah")</script>'; 
	}	
	// destroy the session
	session_destroy();
?>

<!DOCTYPE html>
	<head>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Login Form</title>			
		
		<link rel="stylesheet" href="../assets/style/login.css">
	</head>
	<body>						
		<div class="login-container">
			<div class="admin-icon">
				<img src="../assets/image/admin2.png" id="icon" alt="User Icon"/>
			</div>
			<div class="admin-login-form">
				<form name="login" method="post" action="admin_validate.php">
					<div>							
						<input type="text" name="username" placeholder="Username" required>
					</div>
					<div>							
						<input type="password" name="password" placeholder="Password" required>
					</div>						
					<div>
				 		<input type="submit" name="submit" value="LOGIN">
				   </div>
				</form>
			</div>
		</div>			
	</body>
</html>