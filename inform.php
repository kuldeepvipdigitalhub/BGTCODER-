<?php
// Create a connection
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "bgtcoders";

$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM user WHERE email= 'kuldeepharinkhede512@gmail.com' ";
$result = mysqli_query($conn,$sql);

// Check if any rows were returned
if (mysqli_num_rows($result)> 0) {
  // Loop through the rows and output the data
  while($row = mysqli_fetch_assoc($result)) {
    $fullname=$row["fullname"];
    $email=$row["email"];
    echo "<h1>{$fullname}'s profile<h1>";
    echo "<p>Name: {$fullname}</p>";
    echo "<p>Email:{$email}</p>";
  }
}
 else {
  echo "No results found.";
}

// Close the connection
$conn->close();
?>
