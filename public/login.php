<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
  <title>RBKTask</title>
  <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
  <div class="body-content">
  <div class="header">
  	<h2>Login</h2>
  </div>

  <form method="post" action="login.php">
  	<?php include('errors.php'); ?>
  	<div class="input-group">
  		<input placeholder="User Name" type="text" name="username" >
  	</div>
  	<div class="input-group">
  		<input placeholder="Password" type="password" name="password">
  	</div>
  	<div class="input-group">
  		<button type="submit" class="btn btn-block btn-primary" name="login_user">Login</button>
  	</div>
    <br />
  	<p>
  		Not yet a member? <a href="signup.php"><span class="wordText">Sign Up</span></a>
  	</p>
  </form>
</div>
</body>
</html>
