<?php include 'header.php'; ?>
<body>
    <div class="cp-spinner-block displaynone">
        <!--Spinner Round Element-->
        <div class="cp-spinner cp-round"></div>
        <!--//Spinner Round Element-->
        <!--//Syntax-->
    </div>


            <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
            <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
            <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>



    <!-- The boilerform namespace -->
    <div class="boilerform well col-lg-6 col-lg-offset-3" style="margin-top:100px;  margin-bottom:150px; background: linear-gradient(to right, #4898187a, #4898187a);color:white;">

        <h1 class="o-heading" style="text-align: center; width: 100%;">ENTER YOUR DETAILS</h1>
        <form method="POST" class="c-signup" enctype="multipart/form-data">
            <div id="emaildiv" class="c-signup__field c-signup__field--fill ">
                <label class="c-label">Name</label>
                <input name="username" type="text" name="name" id="name" class="c-input-field black" />
            </div>
            <div id="addressdiv" class="c-signup__field c-signup__field--fill ">
                <label for="text" class="c-label">Address</label>
                <input name="address" type="text" id="address" class="c-input-field black" />
            </div>

            <div class="c-signup__field ">
                <label for="text" class="c-label">Town/City</label>
                <input name="town" type="text" maxlength="25"  id="town" class="c-input-field black" />
            </div>

            <div class="c-signup__field ">
                <label class="c-label">Village</label>
                <input name="village" type="text" maxlength=25  id="village" class="c-input-field black" />
            </div>

            <div class="c-signup__field ">
                <label for="password" class="c-label">P.O.</label>
                <input name="po" type="text" maxlength="25" id="po" class="c-input-field black" />
            </div>

            <div class="c-signup__field ">
                <label for="password" class="c-label">P.S.</label>
                <input name="ps" type="text" maxlength="25" id="ps" class="c-input-field black" />
            </div>

            <div class="c-signup__field ">
                <label for="password" class="c-label">Pincode</label>
                <input name="pincode" type="text" maxlength="25" id="pincode" class="c-input-field black" />
            </div>

            <div class="c-signup__field ">
                <label for="password" class="c-label">State</label>
                <input name="state" type="text" maxlength="25"  id="state" class="c-input-field black" />
            </div>

            <div class="c-signup__field ">
                <label for="password" class="c-label">Country</label>
                <input name="country" type="text" maxlength="10"  id="country" class="c-input-field black" />
            </div>

            <div id="genderdiv" class="c-signup__field" style="padding: 12% 10% 0% 11% !important;">
                <div class="c-select-field">
                    <select name="gender" id="gender" class="c-select-field__menu black">
                        <option selected disabled>Please select your gender</option>
                        <option value="Male">Male</option>
                        <option value="Female">Female</option>
                        <option value="Others">Others</option>

                    </select>

                </div>
            </div>
            <div id="emaildiv" class="c-signup__field c-signup__field--fill ">
                <label for="email" class="c-label">Email address</label>
                <input name="email" type="text"  id="email" class="c-input-field black" />
            </div>

            <div class="c-signup__field ">
                <label for="password" class="c-label">Date of Birth</label>
                <input type="date" maxlength="25" name="date" id="dob" class="c-input-field black" />
            </div>

            <div class="c-signup__field ">
                <label for="password" class="c-label">Blood Group</label>
                <input name="bloodgroup" type="text" maxlength="25"  id="bloodgroup" class="c-input-field black" />
            </div>

            <div class="c-signup__field">
                <label for="password" class="c-label"> Choose your Password</label>
                <input name="password" type="password" name="password" id="password" class="c-input-field black" placeholder=" Enter your password .." />
            </div>

            <div class="c-signup__field">
                <label for="password" class="c-label">Confirm Password</label>
                <input name="confirmpassword" type="password"  id="cpassword" class="c-input-field black" placeholder=" Re-Type your password .." />
            </div>

            <div class="c-signup__field ">
                <label for="password" class="c-label">Mobile Number</label>
                <input name="mobileno" id="mobileno" type="text" maxlength="10"  class="c-input-field black" />
            </div>
            <div class="c-signup__field ">
                <label for="password" class="c-label">Referrer's name</label>
                <input name="refferer" id="refferer" type="text" maxlength="30"  class="c-input-field black" />
            </div>

            <div class="c-signup__field ">
                <label for="password" class="c-label">Date of Registration</label>
                <input name="registerdate" id="registerdate" type="date" maxlength="25"  class="c-input-field black" />
            </div>

            <div class="c-signup__field ">
                <label for="password" class="c-label" style="padding-left: 20px; ">Upload Photo</label>
                <input id="uploadfile" name="userfile" style="padding-left: 20px; padding-top: 4px;" type="file" name="password" id="password" class="c-input-field black" />
            </div>

            <div class="c-signup__button black ">
                <button class="c-button black btn btn-primary" id="submitBtn" name="registerBtn" >Register
                </button>
            </div>
        </form>
    </div>

<style type="text/css">

	.o-heading {
  display: block;
  width: 100%;
  font-size: 2rem;
  line-height: 1.2;
  font-weight: 400;
  border-bottom: 1px solid #ccc;
  padding: 0 0 5px 0;
  margin: 40px auto 20px auto;
  max-width: 500px;
}

.c-signup {
  min-width: 300px;
  max-width: 500px;
  margin: 30px auto;
  display: grid;
  grid-template-columns: repeat(2, 1fr);
  grid-gap: 20px;
}
.c-signup__field > input[type] {
  width: 100%;

}
.c-signup__field--fill {
  grid-column: span 2;
}
.c-signup__button {
  grid-column: span 2;
  text-align: right;
}


</style>


</body>
<?php include 'footer.php';
      include 'process.php';
 ?>