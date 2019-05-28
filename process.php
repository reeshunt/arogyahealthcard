<?php
@$servername = "127.0.0.1";
@$username = "root";
@$passw = "";
@$dbname = "test";

$conn = new mysqli(@$servername, @$username, @$passw, @$dbname); 

$sqlQuery = "SELECT counter FROM tbl_r_counter";
$result = $conn->query($sqlQuery);

if (@$result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
//    var_dump($row["counter"]);

        //set the counter in input field
        $counter =$row["counter"];
    }
}

if(isset($_POST['registerBtn'])){

@$name = $_POST['username'];
@$address = $_POST['address'];
@$town = $_POST['town'];
@$village = $_POST['village'];
@$po = $_POST['po'];
@$ps = $_POST['ps'];
@$pincode = $_POST['pincode'];
@$state = $_POST['state'];
@$country = $_POST['country'];
@$email = $_POST['email'];
@$dob = $_POST['dob'];
@$bloodgroup = $_POST['bloodgroup'];
@$password = $_POST['password'];
@$cpassword = $_POST['cpassword'];
@$mobile = $_POST['mobileno'];
@$refferer = $_POST['refferer'];
@$gender = $_POST['gender'];
@$registerdate = $_POST['registerdate'];

@$uploaddir = 'client_data/image_uploads/';
@$_FILES['userfile']['name']=$email.".jpg";
@$filename = @$_FILES['userfile']['name'];
@$uploadfile = @$uploaddir . basename($filename);

if (move_uploaded_file($_FILES['userfile']['tmp_name'], @$uploadfile)) {

} else {
    //echo "Possible file upload attack!\n";
}


//regex for password
@$uppercase = preg_match('@[A-Z]@', @$password);
@$lowercase = preg_match('@[a-z]@', @$password);
@$number    = preg_match('@[0-9]@', @$password);
// //password validation 
 if(trim(strtolower(@$password))!= trim(strtolower(@$cpassword))){
 	//echo json_encode(array("error"=>"Password doesn't Match"));
 	echo "<script>alert('Password doesn't Match')</script>";
 }
 elseif(!@$uppercase ) {
 	//echo json_encode(array("error"=>"Password Must Contain UpperCase"));
 	 	echo "<script>alert('Password Must Contain UpperCase')</script>";
 	return false;
}
elseif(!@$lowercase ){
 	//echo json_encode(array("error"=>"Password Must Contain LowerCase"));
 	 	 	echo "<script>alert('Password Must Contain LowerCase')</script>";
 	return false;

}
elseif(!@$number){
 	//echo json_encode(array("error"=>"Password Must Contain a number"));
 	 	 	echo "<script>alert('Password Must Contain a number')</script>";
 	return false;
}
elseif(strlen(@$password) < 8){
 	//echo json_encode(array("error"=>"Password Must be atleast 8 characters"));
		echo "<script>alert('Password Must be atleast 8 characters')</script>";
 	return false;
}
// /////////////////////////
// //Email validation
 @$emailRegex = '/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/'; 

 if (preg_match(@$emailRegex, @$email)) {

 }
 else{
 	//echo json_encode(array("error"=>"Invalid Email Format"));
 	echo "<script>alert('Invalid Email Format')</script>";
 	return false;
 }


$conn = new mysqli(@$servername, @$username, @$passw, @$dbname);
if (@$conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
 	return false;
} 

@$sql = "INSERT INTO `tbl_m_user`( `patient_id`,`password`, `name`, `address`, `town_city`, `village`, `po`, `ps`, `pincode`, `state`, `country`, `gender`, `mail`, `dob`, `bg`, `mobile`, `referrer`, `date_of_registration`, `is_active`) VALUES 
('".$counter."','".$password."','".$name."','".$address."','".$town."','".$village."','".$po."','".$ps."','".$pincode."','".$state."', '".$country."','".$gender."','".$email."','".$dob."','".$bloodgroup."','".$mobile."', '".$refferer."','".$registerdate."',1)";
@$sql2 = "update tbl_r_counter set counter = counter+1;";

 if (@$conn->query(@$sql) === TRUE) {
		@$conn->query(@$sql2);
 	//update tbl_r_counter

echo "<script>window.location.href='services/thankyou.php';</script>";
} 
 else {
 	echo "Error: " . $sql . "<br>" . $conn->error; 
 }
@$conn->close();

}

?>