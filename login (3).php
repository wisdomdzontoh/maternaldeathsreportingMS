<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
// database credentials
$servername = "sql109.epizy.com";
$username = "epiz_33722902";
$password = "DgRYDMrBI3RPg";
$dbname = "epiz_33722902_maternal_deaths";

// create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// initialize error array
$errors = array();

// get the user input from a login form
$username = $_POST['username'];
$password = $_POST['password'];

// validate and sanitize the user input
$username = filter_var($username, FILTER_SANITIZE_STRING);
$password = filter_var($password, FILTER_SANITIZE_STRING);

// validate input
if (empty($username)) {
  array_push($errors, "Username is required");
}
if (empty($password)) {
  array_push($errors, "Password is required");
}

// retrieve the user from the database using prepared statements
if (count($errors) == 0) {
  $query = "SELECT * FROM registration WHERE username = ?";
  $stmt = $conn->prepare($query);
  $stmt->bind_param("s", $username);
  $stmt->execute();
  $result = $stmt->get_result();

  // check if the user was retrieved successfully
  if (mysqli_num_rows($result) == 1) {
    // verify password
    $row = mysqli_fetch_assoc($result);
    $hashed_password = $row['password'];
    if (password_verify($password, $hashed_password)) {
      // start session and redirect to another page
      session_start();
      $_SESSION['username'] = $username;
      $_SESSION['success'] = "You are now logged in";
      header('location: maternalform.php');
      exit();
    } else {
      array_push($errors, "Wrong username/password combination");
    }
   } else {
    array_push($errors, "Wrong username");
  }
}

// output errors
if (count($errors) > 0) {
  foreach ($errors as $error) {
    echo $error . "<br>";
  }
}

?>
