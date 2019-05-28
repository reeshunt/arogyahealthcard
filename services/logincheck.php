<?php

@$email = $_POST['email'];
@$password = $_POST['password'];



$servername = "127.0.0.1";
//copy the above line anbd paste bleowwhere to paste here
$user = "root";
//again

$pass = "";

$dbname = "test";


// Create connection
$conn = new mysqli($servername, $user, $pass, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT user_id FROM tbl_m_user where mail='".$email."' and password='".$password."'";
$result = $conn->query($sql);

if (@$result->num_rows > 0) {
	    while($row = $result->fetch_assoc()) {
echo json_encode(array("msg"=>"success","user_id"=>$row['user_id']));
$sessionId = $row['user_id'];
}
session_start();
$_SESSION['user_id'] = $sessionId;
//header("Location: services/dashboard.php");
    ////////////// output data of each row
    //while($row = $result->fetch_assoc()) {
       // echo "username: " . $row["name"]."";
    //}
} else {
    echo json_encode(array("msg"=>"invalid credentials"));
}
$conn->close();

?>