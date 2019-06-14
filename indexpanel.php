
<?php
$servername = "localhost";
$username = "id9573124_admin";
$password = "sql2008@";

// Create connection
$conn = mysqli_connect($servername, $username, $password);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";
?>