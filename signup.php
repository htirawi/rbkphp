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
      <h2>Registeration</h2>
    </div>

    <form method="post" action="signup.php">
      <?php include('errors.php'); ?>
      <div class="input-group">
        <input placeholder="User Name" type="text" name="username" value="<?php echo $username; ?>">
      </div>
      <div class="input-group">
        <input placeholder="Email" type="email" name="email" value="<?php echo $email; ?>">
      </div>
      <div class="input-group">
        <input placeholder="Password" type="password" name="password_1">
      </div>
      <div class="input-group">
        <input placeholder="Confirm Password" type="password" name="password_2">
      </div>
      <div class="input-group">
        <button type="submit" class="btn btn-block btn-primary" name="reg_user">Sign Up</button>
      </div>
      <br />
      <p>
        Already registered? <a href="login.php"><span class="wordText">Sign In</span></a>
      </p>
    </form>
  </div>
</body>
</html>
