<?php

@$email = $_POST['email'];
@$password = $_POST['password'];



$servername = "localhost";
//copy the above line anbd paste bleowwhere to paste here
$user = "arogyahe_admin";
//again

$pass = "sql2008@";

$dbname = "arogyahe_databook";


// Create connection
$conn = new mysqli($servername, $user, $pass, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT user_id FROM tbl_m_user where patient_id='".$email."' and password='".$password."'";

$result = $conn->query($sql);

if (@$result->num_rows > 0) {
	    while($row = $result->fetch_assoc()) {
session_start();
$sessionId = $row['user_id'];
$_SESSION['user_id'] = $sessionId;

echo json_encode(array("msg"=>"success","user_id"=>$row['user_id']));

}
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