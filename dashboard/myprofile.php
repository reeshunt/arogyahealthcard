<script src="../assets/jquery.js" ></script>
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

<meta name="viewport" content="width=device-width, initial-scale=1">

<!--/*<div class='menuparent' style="position: fixed;z-index: 99;width: 100%;top: 0px;">-->
  <div class="nav">
    <div class="subnav1">
    <div class="nav-header"> 
      <div class="nav-title" style="float:left;">
        <a href="index.php"><img class="logoimg" src="../img/medical-logo-png-5.png" ></a>
      </div>
       <a class="companytitle" href="../index.php">Arogya Health Card</a>
         <br>
     <span class="companysubtitle">Making HealthCare Affordable ...</span>  
    </div>
    <div class="nav-btn">
      <label for="nav-check">
        <span></span>
        <span></span>
        <span></span>
      </label>
    </div>
  </div>
  
    <div class="nav-links" style="margin-top: -80px;font-size: 23px;width: 28%">
      <a href="../index.php" style="color:white;height: 60px">Home</a>
      <!-- <a href="../login.php" style="color:white">Login</a> -->
      <a href="../services.php" style="color:white">Services</a>
      <a href="../contactus.php" style="color:white">Contact Us</a>
    

    </div>
  </div>
</div>




<?php

session_start();
if($_SESSION["user_id"]>0){
  //session valid here
  //getting details of user by his userid
$servername = "127.0.0.1";
$user = "arogyahe_admin";
$pass = "sql2008@";
$dbname = "arogyahe_databook";

$conn = new mysqli($servername, $user, $pass, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT name,patient_id,mail,address,mobile,date_of_registration,valid_till FROM tbl_m_user where user_id=".$_SESSION['user_id'];
$result = $conn->query($sql);

if (@$result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        
    ?>

<link link="link" href="https://fonts.googleapis.com/css?family=Titillium+Web" rel="stylesheet"/>


<div class="container ccard" style="height: 45%;">
  <div class="svg-background"></div>
  <div class="svg-background2"></div>
  <div class="circle"></div>
  <img class="profile-img" src='../client_data/image_uploads/<?php echo $row['patient_id'] ?>'>
  <div class="text-container">
    <p class="title-text"><?php echo $row["name"]."</br>"; echo "User ID :".$row['patient_id']; ?></p>
<!--     <p class="info-text">Software Developer</p>
 -->    
    <p class="desc-text">
      <!--Email : <?php echo $row["mail"]; ?> <br/>-->
      Mobile : <?php echo $row["mobile"]; ?> <br/>
      Registration Date: <?php echo date("d-m-Y", strtotime($row["date_of_registration"]));     

      ?> <br/>
      Valid Till : <?php 
      if($row["valid_till"] >0){
      echo date("d-m-Y", strtotime($row["valid_till"]));     
      }
      else{
          echo $row["valid_till"];
      }
      ?> <br/>
       Address : <?php echo $row["address"]; ?> <br/>
      
      
    </p>
  </div>
  <form method="post">
        <button name="logoutBtn" style="float:right;margin: 5px 5px 1px 1px" class="btn btn-danger">Logout</button>
      </form>
</div>



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

<style>
/* profile tab start here    */

.container {
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  background-color: #ECEFF1;
  width: 500px;
  height: 250px;
  border-radius: 10px;
  overflow: hidden;
}

.menu-icon {
  position: absolute;
  right: 0;
  width: 53px;
  height: 53px;
  filter: invert(40%) sepia(57%) saturate(2228%) hue-rotate(189deg) brightness(96%) contrast(87%);
}

.svg-background {
  width: 100%;
  height: 100%;
  position: absolute;
  top: 0;
  left: 0;
  background-color: #1E88E5;
  -webkit-clip-path: polygon(0 0, 14% 0, 48% 100%, 0% 100%);
  clip-path: polygon(0 0, 14% 0, 48% 100%, 0% 100%);
}

.svg-background2 {
  width: 100%;
  height: 100%;
  position: absolute;
  top: 0;
  left: 20px;
  background-color: rgba(0,0,0,0.12);
  z-index: -9;
  -webkit-clip-path: polygon(0 0, 14% 0, 48% 100%, 0% 100%);
  clip-path: polygon(0 0, 14% 0, 48% 100%, 0% 100%);
}

.profile-img {
  position: absolute;
  width: 150px;
  height: 150px;
  margin-top: 55px;
  margin-left: 25px;
  border-radius: 50%;
}

.circle {
  position: absolute;
  width: 162px;
  height: 161px;
  left: 0;
  top: 0;
  background-color: #ECEFF1;
  border-radius: 50%;
  margin-top: 50.5px;
  margin-left: 35px;
}

.text-container {
  position: absolute;
  right: 0;
  margin-right: 40px;
  margin-top: 45px;
  max-width: 230px;
  text-align: center;
}

.title-text {
  color: #263238;
  font-size: 28px;
  font-weight: 600;
  margin-top: 5px;
}

.info-text {
  margin-top: 10px;
  font-siize: 18px;
}

.desc-text {
  font-size: 14px;
  margin-top: 10px;
}

/* profile tab ends here    */

/*animate the whole page as animate in 

  -webkit-animation: intro 1s ease-in-out 1s forwards;
          animation: intro 1s ease-in-out 1s forwards;
  opacity: 0;
  -webkit-transform: translateY(0);
          transform: translateY(0);



   */
.human:before{
  display: none;
}
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
  width: 150px;
  height: 150px;
  margin-left: -20px;
  border: 2px solid #fff;
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
@media only screen and (max-width: 900px) {
    .companytitle{
     float: right;
    margin-top: -83px;
    font-size: 30px;
    margin-right: 5px;
    }  
    .companysubtitle{
      margin: -45px -9px 0px 128px
    }
    .btncontainer{
          margin-left: 7%;
    }
    .card2-ph{
      width: 340px !important;
    margin-left: -35px !important
    }
    .margintop4p{
          margin-left: 66px;
    }
    .card{
          margin-left: -49px;
          margin-top:10px;
    }
    .mediacard{
          margin-left: -46px !important;
    }
    .p56left{
    margin-left: -51px !important;

    }
    .margtop{
      margin-top: 40px !important;
    }
    .testimonialHeading{
          margin-left: 26% !important;
          margin-top: 70px !important;

    }
    .per27{
    margin-left: 27% !important;

    }
    .carousel-indicators{
          position: inherit;
    }
    .slide{
          margin-bottom: 20px;

    }
    .cpright{
    float: left !important;
        margin-left: 76px;

    }
    .footbar{
      width:92%;
    }
    .tnc{
          margin-left: 34px;
    }
    .subnav1{
          margin-left: -10px;
    }
    .mobilemenu{
      display: block;
    }
    .cartopphone{
      margin-top: 200px !important;
    }
    .subnav1{
      margin-top: -15px;
    }
    .container{
        width:358px;
    }
    .text-container{
        text-align:right;
        margin-right:2px;
    }
    .profile-img{
        margin-left:-10px;
    }
    .circle{
        margin-left:0px;
    }
   

}
@media only screen and (min-width: 500px) {
     .mobilemenu{
      display: none;
    }

  }

</style>