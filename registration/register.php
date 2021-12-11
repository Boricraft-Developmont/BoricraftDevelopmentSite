<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
	<title>Registration</title>
	<link rel="stylesheet" href="style.css">
	<script src="https://cdn.jsdelivr.net/npm/particles.js@2.0.0/particles.min.js"></script>
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
 	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
    integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
 	</script>
 	<script src="https://unpkg.com/typewriter-effect@latest/dist/core.js"></script>
 	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
    integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous">
	</script>
 	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js"
    integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous">
 	</script>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">

 	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.0/font/bootstrap-icons.css">


</head>
<body>

	<div id="particles-js"></div>
	
	<div class="header" >
		<h2>Register</h2>
	</div>

		
	<form id="regform" method="post" action="register.php">
		<?php include('errors.php'); ?>
		<div class="form-input">
		<label>Username</label>
		<input type="text" name="username" value="<?php echo $username; ?>">
		</div>
		<div class="form-input">
		<label>Email</label>
		<input type="email" name="email" value="<?php echo $email; ?>">
		</div>
		<div class="form-input">
		<label>Password</label>
		<input type="password" name="password_1">
		</div>
		<div class="form-input">
		<label>Confirm password</label>
		<input type="password" name="password_2">
		</div>
		<div class="form-input">
		<button type="submit" class="btn" name="reg_user">Register</button>
		</div>
		<p>
			Already a member? <a href="login.php">Sign in</a>
		</p>
	</form>

  <script src="https://cdn.jsdelivr.net/npm/particles.js@2.0.0/particles.min.js"></script>
  <script>
	particlesJS.load('particles-js', 'particles.json', function() {
	  console.log('callback - particles.js config loaded');
	});
  </script>
</body>
</html>
