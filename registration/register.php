<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
	<title>Registration</title>
	<link rel="stylesheet" href="style.css">
	<script src="https://cdn.jsdelivr.net/npm/particles.js@2.0.0/particles.min.js"></script>


</head>
<body>
<div id="particles-js">
  	<div class="header">
  		<h2>Register</h2>
  	</div>

	
  	<form id="regform" method="post" action="register.php">
  		<?php include('errors.php'); ?>
  		<div class="input-group">
  		  <label>Username</label>
  		  <input type="text" name="username" value="<?php echo $username; ?>">
  		</div>
  		<div class="input-group">
  		  <label>Email</label>
  		  <input type="email" name="email" value="<?php echo $email; ?>">
  		</div>
  		<div class="input-group">
  		  <label>Password</label>
  		  <input type="password" name="password_1">
  		</div>
  		<div class="input-group">
  		  <label>Confirm password</label>
  		  <input type="password" name="password_2">
  		</div>
  		<div class="input-group">
  		  <button type="submit" class="btn" name="reg_user">Register</button>
  		</div>
  		<p>
  			Already a member? <a href="login.php">Sign in</a>
  		</p>
  	</form>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/particles.js@2.0.0/particles.min.js"></script>
  <script>
	particlesJS.load('particles-js', 'particles.json', function() {
	  console.log('callback - particles.js config loaded');
	});
  </script>
</body>
</html>
