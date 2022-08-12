<?php
session_start();

// initializing variables
$name = "";
$email    = "";
$phoneno = "";
$feedback ="";
$errors = array(); 

// connect to the database
$db = mysqli_connect('localhost', 'root', '', 'feedbackdb');

// REGISTER USER
if (isset($_POST['reg_user'])) {
  echo "Hiii";  // receive all input values from the form
  $name = mysqli_real_escape_string($db, $_POST['name']);
  $email = mysqli_real_escape_string($db, $_POST['email']);
  $phoneno = mysqli_real_escape_string($db, $_POST['phoneno']);
  $feedback = mysqli_real_escape_string($db, $_POST['feedback']);

  // form validation: ensure that the form is correctly filled ...
  // by adding (array_push()) corresponding error unto $errors array
  if (empty($name)) { array_push($errors, "Username is required"); }
  if (empty($email)) { array_push($errors, "Email is required"); }
  if (empty($phoneno)) { array_push($errors, "phoneno is required"); }
  if (empty($feedback)) { array_push($errors, "feedback is required"); }
  

  // first check the database to make sure 
  // a user does not already exist with the same username and/or email
  $user_check_query = "SELECT * FROM feedback WHERE name='$name' OR email='$email' LIMIT 1";
  $result = mysqli_query($db, $user_check_query);
  $feedbackdb = mysqli_fetch_assoc($result);
  
//   if ($feedbackdb) { // if user exists
//     if ($feedbackdb['username'] === $username) {
//       array_push($errors, "Username already exists");
//     }

//     if ($feedbackdb['email'] === $email) {
//       array_push($errors, "email already exists");
//     }
//   }

  // Finally, register user if there are no errors in the form
  if (count($errors) == 0) {
  	$password = md5($password_1);//encrypt the password before saving in the database

  	$query = "INSERT INTO feedback(name, email, password) 
  			  VALUES('$name', '$email', '$password')";
  	mysqli_query($db, $query);
  	$_SESSION['name'] = $name;
  	$_SESSION['success'] = "You are now logged in";
  	header('location: index.php');
  }
}

// LOGIN USER
if (isset($_POST['login_user'])) {
  $name = mysqli_real_escape_string($db, $_POST['name']);
  $password = mysqli_real_escape_string($db, $_POST['password']);

  if (empty($name)) {
  	array_push($errors, "name is required");
  }
  if (empty($password)) {
  	array_push($errors, "Password is required");
  }

  if (count($errors) == 0) {
  	$password = md5($password);
  	$query = "SELECT * FROM users WHERE name='$name' AND password='$password'";
  	$results = mysqli_query($db, $query);
  	if (mysqli_num_rows($results) == 1) {
  	  $_SESSION['name'] = $name;
  	  $_SESSION['success'] = "You are now logged in";
  	  header('location: index.php');
  	}else {
  		array_push($errors, "Wrong name/password combination");
  	}
  }
}

?>