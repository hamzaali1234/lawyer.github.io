<?php
session_start();
include("includes/connection.php");
$title = "Lawyers Website - Admin Create New Password";
$role = "Admin";
require("includes/header.inc.php");
if(isset($_POST["forgot"])){
    $password = $_POST['password'];
	mysqli_query($conn,"update user set password='".$password."' where email='".$_SESSION['email']."'");
?>
<script type="text/javascript">
	alert("New Password has been created Successfully!!!");
</script>
<?php
	header("Location: login.php");
}
?>
<script type="text/javascript">
    // Defining a function to display error message
    function printError(elemId, hintMsg) {
        document.getElementById(elemId).innerHTML = hintMsg;
    }
    function formValidation() {
        var password = document.getElementById("password").value;
        var confirm_password = document.getElementById("confirm_password").value;
        
        // Defining error variables with a default value
        var passwordErr = confirm_passwordErr = true;

		
        // Start Validate Password
        if(password == "") {
            printError("passwordErr", "Please! Enter Your Password");
        } else {
            var regex = /^(?=.*[0-9])(?=.*[a-z])(?=.*[A-Z])([a-zA-Z0-9]{8,})$/;                
            if(regex.test(password) === false){
                printError("passwordErr", "Please! Enter Your Password which contain at least one Lowercase letter, one Uppercase letter, one Digit, and Minimum 8 Chracters");
            } else {
                printError("passwordErr", "");
                passwordErr = false;
            }
        }
		// End Validate Password
		
        // Start Validate Confirm Password
        if(confirm_password == "") {
            printError("confirm_passwordErr", "Please! Enter Your Confirm Password");
        } else {
            var regex = /^(?=.*[0-9])(?=.*[a-z])(?=.*[A-Z])([a-zA-Z0-9]{8,})$/;                
            if(regex.test(confirm_password) === false){
                printError("confirm_passwordErr", "Please! Enter Your Confirm Password which contain at least one Lowercase letter, one Uppercase letter, one Digit, and Minimum 8 Chracters");
            } else {
				if(confirm_password != password){
					printError("confirm_passwordErr", "Confirm Password does not match");
				} else {
					printError("confirm_passwordErr", "");
					confirm_passwordErr = false;
				}
            }
        }
        // End Validate Confirm Password

        if((passwordErr || confirm_passwordErr) == true){
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
						Create New Password
					</span>

					<div class="wrap-input100 validate-input" style="margin-top:20px !important;margin-bottom:0px !important;" data-validate="Password is required">
						<input class="input100" type="password" name="password" id="password" placeholder="New Password">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-lock" aria-hidden="true"></i>
						</span>
					</div>
					<span id="passwordErr" class="error"></span>

					<div class="wrap-input100 validate-input" style="margin-top:20px !important;margin-bottom:0px !important;" data-validate="Confirm Password is required">
						<input class="input100" type="password" name="confirm_password" id="confirm_password" placeholder="Confirm Password">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-lock" aria-hidden="true"></i>
						</span>
					</div>
					<span id="confirm_passwordErr" class="error"></span>
					
					<div class="container-login100-form-btn" style="margin-top:10px !important;">
                        <input type="submit" value="Reset Password" name="forgot" class="login100-form-btn">
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