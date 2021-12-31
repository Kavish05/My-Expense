<?php
session_start();

// initializing variables
$username = "";
$email    = "";
$errors = array(); 

include("dbconnect.php");

// REGISTER USER
if (isset($_POST['submit'])) {
  // receive all input values from the form
  $fname = mysqli_real_escape_string($conn, $_POST['fname']);
  $username = mysqli_real_escape_string($conn, $_POST['username']);
  $email = mysqli_real_escape_string($conn, $_POST['email']);
  $password_1 = mysqli_real_escape_string($conn, $_POST['password_1']);

  $user_check_query = "SELECT * FROM users WHERE username='$username' OR email='$email' LIMIT 1";
  $results = mysqli_query($conn, $user_check_query);
      if (mysqli_num_rows($results) == 1) {
        header('location: signup.html');
      }else {
        $password = md5($password_1);//encrypt the password before saving in the database

      $query = "INSERT INTO users ( fullname, username, email, password) 
          VALUES('$fname', '$username', '$email', '$password')";


      mysqli_query($conn, $query);

      //echo "Hello!";
      
      $_SESSION['username'] = $username;
     header('location: ../homepage.php');
    }
    }

    // LOGIN USER
if (isset($_POST['login_user'])) {
  $username = mysqli_real_escape_string($conn, $_POST['username']);
  $password = mysqli_real_escape_string($conn, $_POST['password']);

  if (empty($username)) {
    array_push($errors, "Username is required");
  }
  if (empty($password)) {
    array_push($errors, "Password is required");
  }

  if (count($errors) == 0) {
    $password = md5($password);
    $query = "SELECT * FROM users WHERE username='$username' AND password='$password'";
    $results = mysqli_query($conn, $query);
	
    if (mysqli_num_rows($results) == 1) {
      $_SESSION['username'] = $username;
      header('location: ../homepage.php');
    }else {
      array_push($errors, "Wrong username/password combination");
    }
  }
}

?>
