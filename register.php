<?php
$username = $_POST['username'];
$password = $_POST['password'];
$confirmPassword = $_POST['confirmPass'];
$Fullname = $_POST['Fullname'];
$nameoffacility = $_POST['nameoffacility'];
$cadre = $_POST['cadre'];

// database credentials
$servername = "sql109.epizy.com";
$dbusername = "epiz_33722902";
$dbpassword = "DgRYDMrBI3RPg";
$dbname = "epiz_33722902_maternal_deaths";

// create connection
$conn = new mysqli($servername, $dbusername, $dbpassword, $dbname);

// check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// generate a unique hash for the user's password
$password = password_hash($password, PASSWORD_DEFAULT);

// insert the new user into the database
$query = "INSERT INTO registration (username, password, confirmPass, Fullname, nameoffacility, cadre) VALUES (?, ?, ?, ?, ?, ?)";
$stmt = $conn->prepare($query);
$stmt->bind_param("ssssss", $username, $password, $confirmPassword, $Fullname, $nameoffacility, $cadre);
$stmt->execute();

// check if the user was successfully inserted
if ($stmt->affected_rows > 0) {
  // redirect the user to the desired page using the header function
  header("Location: index.html");
  exit();
} else {
  // display an error message
  echo "Error: " . $stmt->error;
}

// close the database connection
$stmt->close();
$conn->close();
?>
