
<?php
session_start();

// If user is already logged in, redirect them to welcome page
if (isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true) {
    header("location: welcome.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>

	<link rel="stylesheet" 
          href=
"https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css" />
    <link rel="stylesheet" 
          href=
"https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity=
"sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" 
        crossorigin="anonymous">
    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: sans-serif;
            overflow: hidden;
            height: 100vh; /* Full viewport height */
            display: flex; /* Use flexbox */
            justify-content: center; /* Center horizontally */
            align-items: center; /* Center vertically */
            position: relative; /* For positioning video */
        }

        /* Video styles */
        video {
            position: absolute; /* Position behind other content */
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            object-fit: cover; /* Cover the entire screen */
            z-index: -1; /* Behind other content */
        }

        .loginBox {
            width: 90%; /* Responsive width */
            max-width: 400px; /* Max width for larger screens */
            min-height: 200px;
            background: rgba(0, 0, 0, 0.8); /* Semi-transparent background */
            border-radius: 10px;
            padding: 40px;
            box-sizing: border-box;
            z-index: 1; /* In front of the video */
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.5); /* Optional shadow for better visibility */
        }

        .user {
            margin: 0 auto;
            display: block;
            margin-bottom: 20px;
        }

        h3 {
            margin: 0;
            padding: 0 0 20px;
            color: #59238F;
            text-align: center;
        }

        .loginBox input {
            width: 100%;
            margin-bottom: 20px;
        }

        .loginBox input[type="text"],
		.loginBox input[type="email"],
        .loginBox input[type="password"] {
            border: none;
            border-bottom: 2px solid #262626;
            outline: none;
            height: 40px;
            color: #fff;
            background: transparent;
            font-size: 16px;
            padding-left: 20px;
            box-sizing: border-box;
        }

        .loginBox input[type="text"]:hover,
		.loginBox input[type="email"]:hover,
        .loginBox input[type="password"]:hover {
            color: #42F3FA;
            border: 1px solid #42F3FA;
            box-shadow: 0 0 5px rgba(0, 255, 0, .3), 0 0 10px rgba(0, 255, 0, .2), 0 0 15px rgba(0, 255, 0, .1), 0 2px 0 black;
        }

        .loginBox input[type="text"]:focus,
		.loginBox input[type="email"]:focus,
        .loginBox input[type="password"]:focus {
            border-bottom: 2px solid #42F3FA;
        }

        .inputBox {
            position: relative;
        }

        .inputBox span {
            position: absolute;
            top: 10px;
            color: #262626;
        }

        .loginBox input[type="submit"] {
            border: none;
            outline: none;
            height: 40px;
            font-size: 16px;
            background: #59238F;
            color: #fff;
            border-radius: 20px;
            cursor: pointer;
        }

        .loginBox a {
            color: #b94646;
            font-size: 14px;
            font-weight: bold;
            text-decoration: none;
            text-align: center;
            display: block;
        }

        a:hover {
            color: #00ffff;
        }

        p {
            color: #0000ff;
        }

        /* Show Password label style */
        .show-password {
            color: #fff; /* Set text color to white for visibility */
            font-size: 14px;
            margin: 10px 0;
            display: flex; /* Align checkbox and label in a row */
            align-items: center; /* Center vertically */
        }

        .show-password input {
            margin-right: 5px; /* Space between checkbox and text */
        }
		form i{
			margin-left: -30px;
		}
    </style>
    <script>
        function togglePassword() {
            const passwordField = document.getElementById('pass');
            const showPasswordCheckbox = document.getElementById('show-password');
            passwordField.type = showPasswordCheckbox.checked ? 'text' : 'password';
        }
    </script>
</head>
<body>
 
    <!-- Video background -->
    <video autoplay muted loop>
        <source src="../assets/back.mp4" type="video/mp4"> <!-- Replace with your video file -->
        Your browser does not support HTML5 video.
    </video>

    <div class="loginBox">
        <img class="user" src="https://i.ibb.co/yVGxFPR/2.png" height="100px" width="100px">
        <h3>Sign in here</h3>
        <form action="../backend/login-process.php" method="post">
            <div class="inputBox">
                <input id="Email" type="email" name="Email" placeholder="Email" required>
				<div>
					<input id="pass" type="password" name="Password" placeholder="Password" required>
					<i class="bi bi-eye-slash" id='eye-icon' style="color:white" onclick="togglePassword()"></i>
				</div>
            </div>
            
            <input type="submit" name="" value="Login">
        </form>
        <a href="#">Forget Password<br> </a>
        <div class="text-center">
            <a href="signup.php" style="font-size: large;margin-top: 5px;">Sign-Up</a>
        </div>
    </div>
	<script>
	function togglePassword() {
		const passwordField = document.getElementById('pass');
		const eyeIcon = document.getElementById('eye-icon');
		if (passwordField.type === 'password') {
			passwordField.type = 'text';
			eyeIcon.classList.remove('bi-eye-slash');
			eyeIcon.classList.add('bi-eye');
		} else {
			passwordField.type = 'password';
			eyeIcon.classList.remove('bi-eye');
			eyeIcon.classList.add('bi-eye-slash');
		}
	}
	</script>
</body>
</html>
