<?php include 'header.php'; ?><!------ Include the above in your HEAD tag ---------->

<div class="wrapper fadeInDown">
  <div id="formContent">
    <!-- Tabs Titles -->

    <!-- Icon -->
    <div class="fadeIn first">
      <img src="img/medical-logo-png-5.png" id="icon" alt="User Icon" />
      <h1 class="h1">Login</h1>
    </div>

    <!-- Login Form -->
      <input type="text" id="email" class="fadeIn second" name="login" placeholder="UserId">
      <input type="password" id="password" class="fadeIn third" name="login" placeholder="Password">
      <input type="submit" id="loginBtn" class="fadeIn fourth" value="Log In">

    <!-- Remind Passowrd -->
    <!-- <div id="formFooter">
      <a class="a underlineHover" href="#">Go to the Site</a>
    </div> -->

  </div>
</div>

<?php include 'footer.php'; ?>
<!--


 
 <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta content="IE=edge" http-equiv="X-UA-Compatible">
    <meta name="x-apple-disable-message-reformatting">
    <meta name="viewport" content="width=device-width, initial-scale=0.86, maximum-scale=3.0, minimum-scale=0.86">

</head>
	<div class="parent">
		<div class="app">

			<div class="bg"></div>

			<form>
				<header>
					<img src="https://42f2671d685f51e10fc6-b9fcecea3e50b3b59bdc28dead054ebc.ssl.cf5.rackcdn.com/illustrations/reading_0re1.svg"">
				</header>

				<div class="inputs">
					<input id="email" type="text" name="" placeholder="username or email">
					<input id="password" type="password" name="" placeholder="passwor">

					<p class="light"><a href="#">Forgot password?</a></p>
				</div>

			</form>

			<footer>
				<button id="loginBtn">Login</button>
				<p style="text-align:center;">Don't have an account? <a href="register.php">Sign Up</a></p>
	 		</footer>
	</div>
-->
	<input type="text" style="display:none;" name="user_id" id="user_id"> 
<script>
	$('#loginBtn').on("click",function(){
		$.ajax({
			url:'services/logincheck.php',
			method:'POST',
			data:{
				email:$('#email').val(),
				password:$('#password').val()
			},
			success:function(data){
				var data = JSON.parse(data);
				if(data.msg=="success"){
					var userId = $('#user_id').val(data.user_id);
					/////////storing hidden user_id in input field
					window.location.href="dashboard/myprofile.php";

					 
					
				}
				else{
					alert(data.msg);
				}
			},
			error:function(data){
				console.log(data)
			}
		})
	})
</script>

<style>
	
/* BASIC */

body {
  font-family: "Poppins", sans-serif;
  height: 100vh;
}

.a {
  color: #92badd;
  display:inline-block;
  text-decoration: none;
  font-weight: 400;
}

.h2 {
  text-align: center;
  font-size: 16px;
  font-weight: 600;
  text-transform: uppercase;
  display:inline-block;
  margin: 40px 8px 10px 8px; 
  color: #cccccc;
}



/* STRUCTURE */

.wrapper {
  display: flex;
  align-items: center;
  flex-direction: column; 
  /*justify-content: center;*/
  width: 100%;
  min-height: 100%;
  padding: 20px;
}

#formContent {
  -webkit-border-radius: 10px 10px 10px 10px;
  border-radius: 10px 10px 10px 10px;
  background: #fff;
  padding: 30px;
  width: 90%;
  max-width: 450px;
  position: relative;
  padding: 0px;
  -webkit-box-shadow: 0 30px 60px 0 rgba(0,0,0,0.3);
  box-shadow: 0 30px 60px 0 rgba(0,0,0,0.3);
  text-align: center;
}

#formFooter {
  background-color: #f6f6f6;
  border-top: 1px solid #dce8f1;
  padding: 25px;
  text-align: center;
  -webkit-border-radius: 0 0 10px 10px;
  border-radius: 0 0 10px 10px;
}



/* TABS */

.h2.inactive {
  color: #cccccc;
}

.h2.active {
  color: #0d0d0d;
  border-bottom: 2px solid #5fbae9;
}



/* FORM TYPOGRAPHY*/

input[type=button], input[type=submit], input[type=reset]  {
  background-color: #56baed;
  border: none;
  color: white;
  padding: 15px 80px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  text-transform: uppercase;
  font-size: 13px;
  -webkit-box-shadow: 0 10px 30px 0 rgba(95,186,233,0.4);
  box-shadow: 0 10px 30px 0 rgba(95,186,233,0.4);
  -webkit-border-radius: 5px 5px 5px 5px;
  border-radius: 5px 5px 5px 5px;
  margin: 5px 20px 40px 20px;
  -webkit-transition: all 0.3s ease-in-out;
  -moz-transition: all 0.3s ease-in-out;
  -ms-transition: all 0.3s ease-in-out;
  -o-transition: all 0.3s ease-in-out;
  transition: all 0.3s ease-in-out;
}

input[type=button]:hover, input[type=submit]:hover, input[type=reset]:hover  {
  background-color: #39ace7;
}

input[type=button]:active, input[type=submit]:active, input[type=reset]:active  {
  -moz-transform: scale(0.95);
  -webkit-transform: scale(0.95);
  -o-transform: scale(0.95);
  -ms-transform: scale(0.95);
  transform: scale(0.95);
}

input[type=text] , input[type=password]  {
  background-color: #f6f6f6;
  border: none;
  color: #0d0d0d;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 5px;
  width: 85%;
  border: 2px solid #f6f6f6;
  -webkit-transition: all 0.5s ease-in-out;
  -moz-transition: all 0.5s ease-in-out;
  -ms-transition: all 0.5s ease-in-out;
  -o-transition: all 0.5s ease-in-out;
  transition: all 0.5s ease-in-out;
  -webkit-border-radius: 5px 5px 5px 5px;
  border-radius: 5px 5px 5px 5px;
}

input[type=text]:focus,input[type=password]:focus {
  background-color: #fff;
  border-bottom: 2px solid #5fbae9;
}

input[type=text]:placeholder ,input[type=password]:placeholder  {
  color: #cccccc;
}



/* ANIMATIONS */

/* Simple CSS3 Fade-in-down Animation */
.fadeInDown {
  -webkit-animation-name: fadeInDown;
  animation-name: fadeInDown;
  -webkit-animation-duration: 1s;
  animation-duration: 1s;
  -webkit-animation-fill-mode: both;
  animation-fill-mode: both;
}

@-webkit-keyframes fadeInDown {
  0% {
    opacity: 0;
    -webkit-transform: translate3d(0, -100%, 0);
    transform: translate3d(0, -100%, 0);
  }
  100% {
    opacity: 1;
    -webkit-transform: none;
    transform: none;
  }
}

@keyframes fadeInDown {
  0% {
    opacity: 0;
    -webkit-transform: translate3d(0, -100%, 0);
    transform: translate3d(0, -100%, 0);
  }
  100% {
    opacity: 1;
    -webkit-transform: none;
    transform: none;
  }
}

/* Simple CSS3 Fade-in Animation */
@-webkit-keyframes fadeIn { from { opacity:0; } to { opacity:1; } }
@-moz-keyframes fadeIn { from { opacity:0; } to { opacity:1; } }
@keyframes fadeIn { from { opacity:0; } to { opacity:1; } }

.fadeIn {
  opacity:0;
  -webkit-animation:fadeIn ease-in 1;
  -moz-animation:fadeIn ease-in 1;
  animation:fadeIn ease-in 1;

  -webkit-animation-fill-mode:forwards;
  -moz-animation-fill-mode:forwards;
  animation-fill-mode:forwards;

  -webkit-animation-duration:1s;
  -moz-animation-duration:1s;
  animation-duration:1s;
}

.fadeIn.first {
  -webkit-animation-delay: 0.4s;
  -moz-animation-delay: 0.4s;
  animation-delay: 0.4s;
}

.fadeIn.second {
  -webkit-animation-delay: 0.6s;
  -moz-animation-delay: 0.6s;
  animation-delay: 0.6s;
}

.fadeIn.third {
  -webkit-animation-delay: 0.8s;
  -moz-animation-delay: 0.8s;
  animation-delay: 0.8s;
}

.fadeIn.fourth {
  -webkit-animation-delay: 1s;
  -moz-animation-delay: 1s;
  animation-delay: 1s;
}

/* Simple CSS3 Fade-in Animation */
.underlineHover:after {
  display: block;
  left: 0;
  bottom: -10px;
  width: 0;
  height: 2px;
  background-color: #56baed;
  content: "";
  transition: width 0.2s;
}

.underlineHover:hover {
  color: #0d0d0d;
}

.underlineHover:hover:after{
  width: 100%;
}

.h1{
    color:#60a0ff;
}

/* OTHERS */

*:focus {
    outline: none;
} 

#icon {
  width:30%;
}

body{
  overflow: hidden;
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
    .fadeInDown{
          margin-top: 125px;
    }
    body{
  overflow: unset;
}

    

}


@media only screen and (min-width: 500px) {
     .mobilemenu{
      display: none;
    }

  }






</style>







 