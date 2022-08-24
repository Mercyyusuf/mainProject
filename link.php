<?php
// creating a database using mysql prepared statment.
$servername = "localhost";
$username = "nobleemmy";
$password = "@emmy2929";
$dbname = "kingmaker";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";


// // Create database
// $sql = "CREATE DATABASE kingmaker";
// if (mysqli_query($conn, $sql)) {
//   echo "Database created successfully";
// } else {
//   echo "Error creating database: " . mysqli_error($conn);
// }

// sql to create table
$sql = "CREATE TABLE king (
   id INT(10) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
   arrival VARCHAR(30) NOT NULL,
   departure VARCHAR(30) NOT NULL,
   first_name VARCHAR(30) NOT NULL,
   last_name VARCHAR(30) NOT NULL,
   email VARCHAR(50),
   phone VARCHAR(75),
   adults VARCHAR(6),
   children VARCHAR(6),
   room_pref VARCHAR(6),
   reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
   )";
  
  if (mysqli_query($conn, $sql)) {
    echo "Table kingmaker created successfully";
  } else {
    echo "Error creating table: " . mysqli_error($conn);
  }
  mysqli_close($conn);
  

?>
