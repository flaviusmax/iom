<?php
$servername = "localhost";
$username = "flavi";
$password = "zzxxzz";
$dbname = "iomundo";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

// insereaza  into  
$sql = "INSERT INTO users (utilizator, first_name, last_name, email, password)
VALUES ('ushu', 'Flavius', 'gg	34', 'fff@example.com', '1234456')";

if (mysqli_query($conn, $sql)) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>