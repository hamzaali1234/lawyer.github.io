<?php
session_start();
require("../includes/connection.inc.php");
$title = "Lawyers Website | Clients | Register";
$role = "Client";
require("includes/header.inc.php");
if(isset($_POST["register"])){
	$username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
	$query=mysqli_query($conn,"select * from user where email='".$email."' and status='1'");
	while($row=mysqli_fetch_array($query)){
		$usernameDB = $row["username"];
		$emailDB = $row["email"];
		$passwordDB = $row["password"];
	}
	if($usernameDB == $username || $usernameDB == $username && $emailDB == $email || $usernameDB == $username && $emailDB == $email && $passwordDB == $password){
?>
<script type="text/javascript">
    alert("Client Account already Exist");
</script>
<?php
	} else {
		mysqli_query($conn,"insert into user (username,email,password,role,status) values ('$username', '$email', '$password','$role','1')");
?>
<script type="text/javascript">
    alert("A Client account has been created Successfully!!!");
</script>
<?php
		header("Location: login.php");
		die;
	}
}
?>
<script type="text/javascript">
    // Defining a function to display error message
    function printError(elemId, hintMsg) {
        document.getElementById(elemId).innerHTML = hintMsg;
    }
    function formValidation() {
        var username = document.getElementById("username").value;
        var email = document.getElementById("email").value;
        var password = document.getElementById("password").value;
        var confirm_password = document.getElementById("confirm_password").value;
        
        // Defining error variables with a default value
        var usernameErr = emailErr = passwordErr = confirm_passwordErr = true;


        // Start Validate Username
        if(username == "") {
			printError("usernameErr", "Please! Enter Your Username");
        } else {
            var regex = /^[a-zA-Z\s]+$/;                
            if(regex.test(username) === false){
                printError("usernameErr", "Please! Enter Only Text...");
            } else {
                printError("usernameErr", "");
                usernameErr = false;
            }
        }
		// End Validate Username

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

        if((usernameErr || emailErr || passwordErr || confirm_passwordErr) == true){
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
						Clients Register
					</span>

                    <div class="wrap-input100 validate-input" style="margin-top:20px !important;margin-bottom:0px !important;" data-validate = "Username is required">
						<input class="input100" type="text" name="username" id="username" placeholder="Username">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-user" aria-hidden="true" style="color: #b89b5e;"></i>
						</span>
					</div>
					<span id="usernameErr" class="error"></span>

					<div class="wrap-input100 validate-input" style="margin-top:20px !important;margin-bottom:0px !important;" data-validate = "Valid email is required: ex@abc.xyz">
						<input class="input100" type="email" name="email" id="email" placeholder="Email Address">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-envelope" aria-hidden="true" style="color: #b89b5e;"></i>
						</span>
					</div>
					<span id="emailErr" class="error"></span>

					<div class="wrap-input100 validate-input" style="margin-top:20px !important;margin-bottom:0px !important;" data-validate = "Password is required">
						<input class="input100" type="password" name="password" id="password" placeholder="Password">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-lock" aria-hidden="true" style="color: #b89b5e;" ></i>
						</span>
                    </div>
					<span id="passwordErr" class="error"></span>
                    
                    <div class="wrap-input100 validate-input" style="margin-top:20px !important;margin-bottom:0px !important;" data-validate = "Confirm Password is required">
						<input class="input100" type="password" name="confirm_password" id="confirm_password" placeholder="Confirm Password">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-lock" aria-hidden="true" style="color: #b89b5e;"></i>
						</span>
					</div>
					<span id="confirm_passwordErr" class="error"></span>
					
					<div class="container-login100-form-btn" style="margin-top:10px !important;">
                        <input type="submit" value="Register" name="register" class="login100-form-btn" style="background-color:#b89b5e ;">
					</div>

					<div class="text-center p-t-12">
						<span class="txt1">
							Forgot
						</span>
						<a class="txt2" href="forgot.php">
							 Password?
						</a>
					</div>

					<div class="text-center p-t-12">
						<span class="txt1">
							Go To
						</span>
						<a class="txt2" href="../index.php">
							Home Page
						</a>
					</div>

					<div class="text-center mt-5">
						<a class="txt2" href="login.php">
							Login to Clients Account
							<i class="fa fa-long-arrow-right m-l-5" aria-hidden="true"></i>
						</a>
					</div>
				</form>
			</div>
		</div>
	</div>
<?php
require("includes/footer.inc.php");
?>