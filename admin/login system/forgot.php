<?php
session_start();
include("includes/connection.php");
$title = "Lawyers Website - Admin Forgot Password";
$role = "Admin";
require("includes/header.inc.php");
if(isset($_POST["forgot"])){
    $email = $_POST['email'];
	$query= mysqli_query($conn,"select * from user where email='".$email."' and role='".$role."'");
	if(mysqli_num_rows($query)>0){
		$_SESSION['email']=$_POST["email"];
		header("Location: reset-password.php");
	}else{
?>
<script type="text/javascript">
	alert("Your Email Address does not Exists!!!");
</script>
<?php
	}
}
?>
<script type="text/javascript">
    // Defining a function to display error message
    function printError(elemId, hintMsg) {
        document.getElementById(elemId).innerHTML = hintMsg;
    }
    function formValidation() {
        var email = document.getElementById("email").value;
        
        // Defining error variables with a default value
        var emailErr = true;


        // Start Validate Email Address
        if(email == "") {
			printError("emailErr", "Please! Enter Your Email Address");
        } else {
            var regex = /^(([^<>()[\]\\.,;:\s@"]+(\.[^<>()[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;                
            if(regex.test(email) === false){
                printError("emailErr", "Please! Enter a valid Email Address");
            } else {
                printError("emailErr", "");
                emailErr = false;
            }
        }
		// End Validate Email Address

        if((emailErr) == true){
            return false;
        }else{
            return true;
        }
    }
</script>
<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<div class="login100-pic js-tilt" data-tilt>
					<img src="images/logo-color.jpeg" alt="IMG">
				</div>

				<form class="login100-form validate-form" action="" method="POST" onsubmit="return formValidation()">
					<span class="login100-form-title">
						Forgot Password
					</span>

					<div class="wrap-input100 validate-input" style="margin-top:20px !important;margin-bottom:0px !important;" data-validate="Valid email is required: ex@abc.xyz">
						<input class="input100" type="text" name="email" id="email" placeholder="Email Address">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-envelope" aria-hidden="true" style="color:#b89b5e ;"></i>
						</span>
					</div>
					<span id="emailErr" class="error"></span>
					
					<div class="container-login100-form-btn" style="margin-top:10px !important;">
                        <input type="submit" value="Forgot" name="forgot" class="login100-form-btn" style="background-color:#b89b5e ;color:white;">
					</div>

					<div class="text-center p-t-12">
						<a class="txt2" href="login.php">
                            Login to Admin Account
						</a>
					</div>


					<div class="text-center mt-5">
						<a class="txt2" href="../../index.php">
							Go To Home Page
							<i class="fa fa-long-arrow-right m-l-5" aria-hidden="true"></i>
						</a>
					</div>

					<!-- <div class="text-center mt-5">
						<a class="txt2" href="register.php">
							Create your Account
							<i class="fa fa-long-arrow-right m-l-5" aria-hidden="true"></i>
						</a>
					</div> -->

				</form>
			</div>
		</div>
	</div>
<?php
require("includes/footer.inc.php");
?>