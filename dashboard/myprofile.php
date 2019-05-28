<script src="assets/jquery.js" ></script>
<link rel="stylesheet" type="text/css" href="../assets/datatable.min.css">
<script type="text/javascript" charset="utf8" src="../assets/datatable.min.js"></script>
<link rel="stylesheet" href="../assets/bootstrap.min.css">
<script src="../assets/bootstrap.min.js"></script>
<link rel="stylesheet" type="text/css" href="../assets/style.css">
<script src="../assets/customjs.js"></script>


<script
  src="https://code.jquery.com/jquery-3.4.1.js"
  integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU="
  crossorigin="anonymous"></script>


<?php

session_start();
if($_SESSION["user_id"]>0){
  //session valid here
  //getting details of user by his userid
$servername = "127.0.0.1";
$user = "root";
$pass = "";
$dbname = "test";

$conn = new mysqli($servername, $user, $pass, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT name,patient_id,mail,address,mobile,date_of_registration FROM tbl_m_user where user_id=".$_SESSION['user_id'];
$result = $conn->query($sql);

if (@$result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        
    ?>

<link link="link" href="https://fonts.googleapis.com/css?family=Titillium+Web" rel="stylesheet"/>
<div class="entire">
  <div class="in-entire">
    <div class="left-cov">
      <div class="profile">
        <!--<div class="human"></div>-->
        <img height='140px' src='../client_data/image_uploads/<?php echo $row['mail'] ?>'>
      </div>
      <div class="basic"><span><?php echo $row["name"]."</br>"; echo "Patient ID :".$row['patient_id']; ?></span>
      <!--  <span class="ball"></span> -->
      </div>
    </div>
    <div class="right-cov">
      <div class="detail">
        <h3 class="h3">My Profile</h3>
      </div>
      <div class="full-detail">
        <h4 class="h4">Email</h4>
        <p class="p"> <a class="a"><?php echo $row["mail"]; ?></a></p>

        <h4 class="h4">Address</h4>
        <p class="p"> <a class="a"><?php echo $row["address"]; ?></a></p>

        <h4 class="h4">Mobile</h4>
        <p class="p"> <a class="a"><?php echo $row["mobile"]; ?></a></p>

        <h4 class="h4">Date of Registration</h4>
        <p class="p"> <a class="a"><?php echo $row["date_of_registration"]; ?></a></p>

      </div>
    </div>
  </div>
</div>
<form method="post">
<button name="logoutBtn" style="float:right;margin: 5px 5px 1px 1px" class="btn btn-danger">Logout</button>
</form>
<?php 
}
} 
else {
//nullify the data boxes
}
$conn->close();


}
else{
  header("Location:../login.php");
  }



include '../footer.php';

//////for logout session out
if(isset($_POST['logoutBtn'])){
session_destroy();
header("Location:../index.php");
}

 ?>
}

<style>
/*animate the whole page as animate in 

  -webkit-animation: intro 1s ease-in-out 1s forwards;
          animation: intro 1s ease-in-out 1s forwards;
  opacity: 0;
  -webkit-transform: translateY(0);
          transform: translateY(0);



   */
.footbar{
  background-color: #000000d1;
    width: 98%;
    border-radius: 6px;
    position: fixed;
    bottom: 0px;
    }
.c_year{
      padding-left: 20px;
}
.c_year > a{
  color:white;
    text-decoration: none;

}
@-webkit-keyframes intro {
  0% {
    opacity: 0;
    -webkit-transform: translateY(-10px);
            transform: translateY(-10px);
  }
  100% {
    opacity: 1;
    -webkit-transform: translateY(0);
            transform: translateY(0);
  }
}

@keyframes intro {
  0% {
    opacity: 0;
    -webkit-transform: translateY(-10px);
            transform: translateY(-10px);
  }
  100% {
    opacity: 1;
    -webkit-transform: translateY(0);
            transform: translateY(0);
  }
}
.entire {
  width: 700px;
  height: 500px;
  position: absolute;
  display: flex;
  top: 0;
  bottom: 0;
  right: 0;
  left: 0;
  margin: auto;
  background: #eee;
  box-shadow: 0 0px 34px -2px black;
}

.in-entire {
  width: 100%;
  height: 100%;
  display: flex;
  flex-wrap: wrap;
}

.left-cov, .right-cov {
  height: 100%;
}

.left-cov {
  width: 35%;
  background: #3bd881;
}

.right-cov {
  width: 65%;
  background: #fff;
  overflow: auto;
}

@media (max-width: 700px) {
  .entire {
    width: auto;
    height: auto;
  }

  .left-cov, .right-cov {
    width: 100%;
  }
}
.profile {
  margin: 100px auto 50px auto;
  width: 100px;
  padding: 10px;
}

.human {
  width: 50px;
  height: 50px;
  margin: 0 auto;
  border: 9px solid #fff;
  border-radius: 50%;
  position: relative;
}
.human:before {
  content: '';
  width: 108px;
  height: 100px;
  position: absolute;
  border: 3px solid #fff;
  border-width: 9px 0 0 0;
  right: -55%;
  bottom: -112px;
  border-radius: 50%;
}

.basic {
  text-align: center;
  font-size: 26px;
  color: #fff;
}
.basic span {
  display: block;
  text-align: center;
  font-size: 22px;
}

.detail {
  padding: 1px;
}

.full-detail {
  padding: 20px 30px;
  overflow: auto;
}

.h3 {
  text-align: center;
  position: relative;
  padding: 1px;
}
.h3:before {
  content: '';
  position: absolute;
  left: 0;
  right: 0;
  margin: 0 auto;
  bottom: -10px;
  width: 30px;
  height: 3px;
  background: #3bd881;
}

.h4 {
  position: relative;
  padding: 1px;
}
.h4:before {
  content: '';
  position: absolute;
  left: 0;
  bottom: 0;
  width: 10px;
  height: 2px;
  background: #3bd881;
}

.p .a {
  text-decoration: none;
  color: #000;
  font-size: 16px;
}
.p .a:hover {
  color: #888;
}

.ball {
  display: block;
  width: 10px;
  height: 10px;
  background: #fff;
  border-radius: 50%;
  margin: 0 auto;
  opacity: 1;
  -webkit-animation: jump 1s infinite alternate;
          animation: jump 1s infinite alternate;
}

@-webkit-keyframes jump {
  0% {
    -webkit-transform: translatex(-10px);
            transform: translatex(-10px);
  }
  50% {
    -webkit-transform: translatex(10px);
            transform: translatex(10px);
  }
}

@keyframes jump {
  0% {
    -webkit-transform: translatex(-10px);
            transform: translatex(-10px);
  }
  50% {
    -webkit-transform: translatex(10px);
            transform: translatex(10px);
  }
}
<style>