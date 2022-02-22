<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
  <title>Registration system PHP and MySQL</title>
  <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

  <div class="header">

  	<h2>Register</h2>
  </div>
	
  <form method="post" action="register.php">
  <?php include('errors.php'); ?>
  	<div class="input-group">
  	  <label>Username</label>
  	  <input type="text" name="username" value="<?php if(isset($email))  echo $username; ?>">
  	</div>
  	<div class="input-group">
  	  <label>Email</label>
  	  <input type="email" name="email" value="<?php if(isset($email)) echo $email; ?>">
  	</div>
	<div class="input-group">
	  <label>number</label>
	  <input type="text" name="number" value="<?php if(isset($number)) echo $number; ?>">
	</div>
	<div class="input-group">
	  <label> category VENDOR OR CUSTOMER</label>
	  <input type="text" name="category" value="<?php if(isset($category)) echo $category; ?>">
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
</body>
</html>