<?php
session_start();

$username = "";
$email    = "";
$errors = array();

// connect to the database
$db = mysqli_connect('localhost', 'root', 'admin', 'rbktask');

// $db = mysqli_connect('us-cdbr-iron-east-04.cleardb.net', 'b4013bc98f6778', '025f4fda', 'heroku_816716d2ed3356f');



// //Get Heroku ClearDB connection information
// $cleardb_url      = parse_url(getenv("CLEARDB_DATABASE_URL"));
// $cleardb_server   = $cleardb_url["us-cdbr-iron-east-04.cleardb.net"];
// $cleardb_username = $cleardb_url["b4013bc98f6778"];
// $cleardb_password = $cleardb_url["025f4fda"];
// $cleardb_db       = substr($cleardb_url["heroku_816716d2ed3356f"],1);
//
// $active_group = 'default';
// $query_builder = TRUE;
//
// $db['default'] = array(
//     'dsn'   => '',
//     'hostname' => $cleardb_server,
//     'username' => $cleardb_username,
//     'password' => $cleardb_password,
//     'database' => $cleardb_db,
//     'dbdriver' => 'mysqli',
//     'dbprefix' => '',
//     'pconnect' => FALSE,
//     'db_debug' => (ENVIRONMENT !== 'production'),
//     'cache_on' => FALSE,
//     'cachedir' => '',
//     'char_set' => 'utf8',
//     'dbcollat' => 'utf8_general_ci',
//     'swap_pre' => '',
//     'encrypt' => FALSE,
//     'compress' => FALSE,
//     'stricton' => FALSE,
//     'failover' => array(),
//     'save_queries' => TRUE
// );ask');

// REGISTER USER
if (isset($_POST['reg_user'])) {
  // receive input values from the form
  $username = mysqli_real_escape_string($db, $_POST['username']);
  $email = mysqli_real_escape_string($db, $_POST['email']);
  $password_1 = mysqli_real_escape_string($db, $_POST['password_1']);
  $password_2 = mysqli_real_escape_string($db, $_POST['password_2']);

  // form validation
  if (empty($username)) { array_push($errors, "Username is required"); }
  if (empty($email)) { array_push($errors, "Email is required"); }
  if (empty($password_1)) { array_push($errors, "Password is required"); }
  if ($password_1 != $password_2) {
	array_push($errors, "Passwords are not match");
  }

  // check database to make sure user does not already exist
  $user_check_query = "SELECT * FROM users WHERE username='$username' OR email='$email' LIMIT 1";
  $result = mysqli_query($db, $user_check_query);
  $user = mysqli_fetch_assoc($result);

  if ($user) { // if user exists
    if ($user['username'] === $username) {
      array_push($errors, "Username already exists");
    }

    if ($user['email'] === $email) {
      array_push($errors, "Email already exists");
    }
  }

  // register user if there are no errors in form
  if (count($errors) == 0) {
  	$password = md5($password_1);//encrypt the password

  	$query = "INSERT INTO users (username, email, password)
  			  VALUES('$username', '$email', '$password')";
  	mysqli_query($db, $query);
  	$_SESSION['username'] = $username;
  	$_SESSION['success'] = "You are logged in";
  	header('location: main.php');
  }
}

// LOGIN
if (isset($_POST['login_user'])) {
  $username = mysqli_real_escape_string($db, $_POST['username']);
  $password = mysqli_real_escape_string($db, $_POST['password']);

  if (empty($username)) {
  	array_push($errors, "Username is required");
  }
  if (empty($password)) {
  	array_push($errors, "Password is required");
  }

  if (count($errors) == 0) {
  	$password = md5($password);
  	$query = "SELECT * FROM users WHERE username='$username' AND password='$password'";
  	$results = mysqli_query($db, $query);
  	if (mysqli_num_rows($results) == 1) {
  	  $_SESSION['username'] = $username;
  	  $_SESSION['success'] = "You are logged in";
  	  header('location: main.php');
  	}else {
  		array_push($errors, "Incorrect username/password");
  	}
  }
}

?>
